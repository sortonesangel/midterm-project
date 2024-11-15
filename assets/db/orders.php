<?php
// assets/db/orders.php

// Include the database connection configuration
include('config.php'); // Adjust the path to config.php based on your folder structure

// Check if the form is submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate form data
    $customerName = htmlspecialchars(trim($_POST['customerName']));
    $contactNumber = htmlspecialchars(trim($_POST['contactNumber']));
    $address = htmlspecialchars(trim($_POST['address']));
    $additionalDetails = isset($_POST['additionalDetails']) ? htmlspecialchars(trim($_POST['additionalDetails'])) : '';
    $menuItemId = isset($_POST['menu_item_id']) ? $_POST['menu_item_id'] : null;  // Get the menu item ID

    // Validate required fields
    if (empty($customerName) || empty($contactNumber) || empty($address) || !$menuItemId) {
        echo json_encode(['success' => false, 'message' => 'Please fill out all required fields.']);
        exit;
    }

    // Optional: Additional validation for phone number (e.g., check if it's numeric and length)
    if (!preg_match("/^[0-9]{11}$/", $contactNumber)) {
        echo json_encode(['success' => false, 'message' => 'Please enter a valid 11-digit contact number.']);
        exit;
    }

    // Prepare SQL query using prepared statements to prevent SQL injection
    $sql = "INSERT INTO orders (customer_name, contact_number, address, additional_details, menu_item_id) 
            VALUES (?, ?, ?, ?, ?)";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        echo json_encode(['success' => false, 'message' => 'Error preparing the SQL statement: ' . $conn->error]);
        exit;
    }

    // Bind the parameters to the SQL query
    $stmt->bind_param("sssss", $customerName, $contactNumber, $address, $additionalDetails, $menuItemId);

    // Execute the statement
    if ($stmt->execute()) {
        // Successfully inserted the order into the database
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for your order! We will contact you shortly.',
            'order_details' => [
                'customer_name' => $customerName,
                'contact_number' => $contactNumber,
                'address' => $address,
                'additional_details' => $additionalDetails,
                'menu_item_id' => $menuItemId
            ]
        ]);
    } else {
        // Error in inserting the order
        echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted via POST, show an error message
    echo json_encode(['success' => false, 'message' => 'Form not submitted properly.']);
}
