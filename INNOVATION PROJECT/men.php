<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}

// Fetch men's perfumes from the database
$sql = "SELECT * FROM tb_perfumes WHERE gender = 'Men'";
$result = mysqli_query($conn, $sql);
$perfumes = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="men.css">
    <link rel="stylesheet" href="footer.css">
</head>






<style>/* men.css */

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #1a1a2e; /* Dark navy blue */
}

header {
  background-color: #0f3460; /* Main header color */
  color: #fff;
  padding: 10px 0;
}

.header {
  text-align: center;
}

.header a {
  color: #e94560; /* Bright pink for links */
  text-decoration: none;
  margin-right: 20px;
}

.header a:hover {
  color: #f9a94d; /* Gold hover color */
}

.container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background-color: #0f3460; /* Main container color */
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #e94560; /* Bright pink for headings */
}

.perfume {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-top: 20px;
}

.perfume-item {
  width: calc(50% - 20px); /* Adjust as needed */
  padding: 10px;
  margin-bottom: 20px;
  background-color: #889ab6; /* Light blue for perfume items */
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.perfume-item img {
  width: 100%; /* Set width to fill container */
  height: 200px; /* Set fixed height */
  object-fit: cover; /* Maintain aspect ratio and cover container */
  border-radius: 5px;
}

.perfume-item h2 {
  margin-top: 10px;
  font-size: 18px;
  text-align: center;
  color: #0f3460; /* Main item heading color */
}

.perfume-item p {
  font-size: 14px;
  text-align: center;
}

.perfume-item form {
  margin-top: 10px;
}

.perfume-item input[type="submit"] {
  display: inline-block;
  width: auto;
  padding: 10px 20px;
  background-color: #e94560; /* Bright pink for button */
  color: white;
  text-align: center;
  text-decoration: none;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.perfume-item input[type="submit"]:hover {
  background-color: #f9a94d; /* Gold hover color */
  color: #0f3460; /* Main color for text on hover */
}

.name {
  color: #e94560; /* Bright pink for names */
  text-align: center;
}

#searchInput {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 15px;
  border: 3px solid #0f3460; /* Main border color */
  border-radius: 40px;
  box-sizing: border-box;
}

#searchInput:hover {
  background: #0f3460; /* Main color on hover */
  color: #fff;
  border: 3px solid #0f3460; /* Main border color */
}
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
          <a href="home.php">Home</a>
          <a href="logout_men.php">Logout</a>
        </div>
    </header>

    <div class="container">
        <h2 class="name">Hi <?php echo $row["name"];?></h2>
        <h1>Shop    </h1>
        
        <!-- Add search input field -->
        <input type="text" id="searchInput" placeholder="Search for perfumes...">
        
        <div class="perfume">
            <?php foreach ($perfumes as $perfume): ?>
            <div class="perfume-item" data-name="<?php echo strtolower($perfume['name']); ?>">
                <img src="<?php echo $perfume['image_path']; ?>" alt="<?php echo $perfume['name']; ?>">
                <h2><?php echo $perfume['name']; ?></h2>
                <p><?php echo $perfume['price']; ?>$</p>
                <form action="buy.php" method="POST">
                    <input type="hidden" name="perfume_id" value="<?php echo $perfume['id']; ?>">
                    <input type="submit" value="Buy Now">
                </form>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        // JavaScript for search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            var searchTerm = this.value.toLowerCase();
            var perfumeItems = document.querySelectorAll('.perfume-item');
            
            perfumeItems.forEach(function(item) {
                var perfumeName = item.getAttribute('data-name');
                if (perfumeName.indexOf(searchTerm) !== -1) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
</body>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<footer>
    <div class="footer-container">
    <p>&copy; 2024 Yehia - Sara - Ranim . All rights reserved.</p>
        <ul class="footer-links">
            
            <li><a href="about.php">About Us</a></li>
            
        </ul>
    </div>
</footer>



</html>
