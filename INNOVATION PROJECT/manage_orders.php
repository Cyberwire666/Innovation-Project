<?php
require 'config.php';

// Fetch orders from the tb_buy table
$sql = "SELECT * FROM tb_buy";
$result = mysqli_query($conn, $sql);

// Check if any orders exist
if (mysqli_num_rows($result) > 0) {
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $orders = [];
}

// Process remove order functionality
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    
    // Delete the order from the database
    $delete_sql = "DELETE FROM tb_buy WHERE id = $order_id";
    if (mysqli_query($conn, $delete_sql)) {
        header("Location: manage_orders.php"); // Redirect to refresh the page after deletion
        exit();
    } else {
        echo "Error deleting order: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
    <link rel="stylesheet" href="manage_orders.css"> <!-- Link to your admin panel CSS file -->
</head>

<style>footer {
    background-color: #0f3460; /* Same as header */
    color: #ffffff; /* White text for contrast */
    padding: 20px 0;
    text-align: center;
}

.footer-container {
    max-width: 800px;
    margin: auto;
}

.footer-links {
    list-style: none; /* Remove bullets */
    padding: 0;
}

.footer-links li {
    display: inline;
    margin: 0 15px;
}

.footer-links a {
    color: #e94560; /* Bright pink for links */
    text-decoration: none;
}

.footer-links a:hover {
    color: #f9a94d; /* Gold hover color */
}
</style>
<body>
    <header>
        <div class="header">
            <h1>Manage Orders</h1>
            <a href="admin.php">back</a>
        </div>
    </header>

    <div class="container">
        <table>
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Purchase Date</th>
                <th>Action</th>
            </tr>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?php echo $order['id']; ?></td>
                <td><?php echo $order['user_id']; ?></td>
                <td><?php echo $order['perfume_id']; ?></td>
                <td><?php echo $order['quantity']; ?></td>
                <td><?php echo $order['purchase_date']; ?></td>
                <td>
                    <a href="manage_orders.php?id=<?php echo $order['id']; ?>" onclick="return confirm('Are you sure you want to remove this order?')">Remove</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <footer>
        
        <div class="footer-container">
           
            <p>&copy;<?php echo date("Y , d M Y H:i:s"); ?> Yehia - Sara - Ranim . All rights reserved.</p>
        <ul class="footer-links">
            
            <li><a href="about.php">About Us</a></li>
            
        </ul>
    </div>
</footer>
</body>
</html>
