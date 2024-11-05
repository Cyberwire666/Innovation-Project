<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>

<style>
    footer {
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
            <h1>Admin Panel</h1>
            <a href="index.html">back</a>
        </div>
    </header>

    <div class="container">
        <h2>Welcome, Administrator!</h2>
        <div class="options">
            <a href="add_product.php">Add Product</a>
            <a href="remove_product.php">Remove Product</a>
            <a href="manage_orders.php">Manage Orders</a>
            <!-- Add more admin options as needed -->
        </div>
    </div>
</body>

<footer>
    <div class="footer-container">
    <p>&copy; 2024 Yehia - Sara - Ranim . All rights reserved.</p>
        <ul class="footer-links">
            
            <li><a href="about.php">About Us</a></li>
            
        </ul>
    </div>
</footer>
</html>

