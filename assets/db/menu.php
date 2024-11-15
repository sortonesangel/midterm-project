<?php
// menu.php

include 'config.php';  // Including the database configuration

// Fetch menu items from the database
$sql = "SELECT id, item_name, description, price, image_url FROM menu";
$result = $conn->query($sql);

// Start the HTML section for the menu
echo '<section class="menu-section" id="menu">';
echo '<h2 class="section-title">Our Menu</h2>';
echo '<div class="section-content">';
echo '<ul class="menu-list">';

// Check if any menu items are returned from the database
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<li class="menu-item">';
        echo '<img src="' . $row['image_url'] . '" alt="' . $row['item_name'] . '" class="menu-image" />';
        echo '<div class="menu-details">';
        echo '<h3 class="name">' . $row['item_name'] . '</h3>';
        echo '<p class="text">' . $row['description'] . '</p>';
        echo '<button class="add-to-cart" 
                    data-item-id="' . $row['id'] . '" 
                    data-item-name="' . $row['item_name'] . '" 
                    data-item-price="' . $row['price'] . '">
                <i class="fa fa-shopping-cart"></i> ₱' . $row['price'] . ' Add to Cart
            </button>';
        echo '</div>';
        echo '</li>';
    }
} else {
    echo '<li>No menu items available</li>';
}

echo '</ul>';
echo '</div>';
echo '</section>';

// Close the database connection
$conn->close();
?>

<!-- Include JavaScript to handle the "Add to Cart" button -->
<script>
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        // Get the item ID from the button's data attributes
        const itemId = this.getAttribute('data-item-id');
        
        // Set the value of the hidden input field in the order form (make sure the order form exists)
        document.getElementById('menu_item_id').value = itemId;
        
        // Optionally, you can open the order form modal or proceed to checkout here
    });
});
</script>

<!-- Order Form Modal (Optional, if you're using a modal for the order form) -->
<div id="order-form-modal" style="display:none;">
    <form method="POST" action="order.php">
        <input type="hidden" name="menu_item_id" id="menu_item_id" value="">
        <label for="customerName">Full Name:</label>
        <input type="text" name="customerName" id="customerName" required>
        <label for="contactNumber">Contact Number:</label>
        <input type="text" name="contactNumber" id="contactNumber" required>
        <label for="address">Address:</label>
        <textarea name="address" id="address" required></textarea>
        <label for="additionalDetails">Additional Details:</label>
        <textarea name="additionalDetails" id="additionalDetails"></textarea>
        <button type="submit">Place Order</button>
    </form>
</div>
