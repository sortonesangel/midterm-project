<?php
// Include the database connection configuration
include('assets/db/config.php'); // Make sure config.php path is correct

// Fetch orders with menu item information using LEFT JOIN
$sql = "
    SELECT 
        orders.order_id,
        orders.customer_name,
        orders.contact_number,
        orders.address,
        orders.additional_details,
        orders.menu_item_id,
        menu.item_name,        -- Name of the menu item
        menu.description,      -- Description of the menu item
        menu.price,            -- Price of the menu item
        menu.image_url         -- Image URL of the menu item
    FROM 
        orders
    LEFT JOIN 
        menu ON orders.menu_item_id = menu.id"; 

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Orders</title>
    <link rel="stylesheet" href="assets/css/landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div class="container">
        <h1>Orders Dashboard</h1>
        <a href="shop.php" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
        </a>
        <!-- Table to display orders -->
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Additional Details</th>
                    <th>Menu Item</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['order_id']; ?></td>
                            <td><?php echo $row['customer_name']; ?></td>
                            <td><?php echo $row['contact_number']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['additional_details']; ?></td>
                            <td><?php echo $row['item_name']; // Show menu item name ?></td>
                            <td><?php echo $row['description']; // Show menu item description ?></td>
                            <td><?php echo $row['price']; // Show menu item price ?></td>
                            <td><img src="<?php echo $row['image_url']; ?>" alt="Image of <?php echo $row['item_name']; ?>" width="100"></td>  <!-- Show image -->
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9">No orders found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>
