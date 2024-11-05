<?php
require 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $gender = $_POST["gender"];

    // Upload image
    $image_path = 'uploads/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

    // Insert data into tb_perfumes table
    $sql = "INSERT INTO tb_perfumes (name, price, image_path, gender) VALUES ('$name', '$price', '$image_path', '$gender')";
    if (mysqli_query($conn, $sql)) {
        echo "New record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="add_product.css">
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
            <h1>Add Product</h1>
            <a href="admin.php">back</a>
        </div>
    </header>

    <div class="container">
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required><br><br>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required><br><br>
            
            <select id="gender" name="gender" hidden>
                <option value="Men"  selected>Men</option>    
            </select><br><br>
            <input type="submit" value="Add Product">
        </form>
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
