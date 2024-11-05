<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <title>HOLOMEM</title>
    <style>


* {
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

body {
    background: #1a1a2e; /* Dark navy blue */
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

body::after {
    content: '';
    width: 100%;
    height: 100%;
    background: linear-gradient(to top right, #16213e, #0f3460); /* Darker blue gradient */
    position: absolute;
    z-index: -1;
    clip-path: circle(0% at right 70%);
}

.container {
    width: 85%;
    height: 80%;
    background: #0f3460; /* Main container color */
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    z-index: 1;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80%;
    margin: auto;
    padding: 20px 0;
}

nav .logo {
    color: #e94560; /* Bright pink for the logo */
    text-decoration: none;
    font-size: 32px;
    text-transform: uppercase;
    letter-spacing: 9px;
    font-weight: 700;
}

nav ul li {
    display: inline-block;
    margin: 0 6px;
}

nav ul li a {
    color: #e94560; /* Bright pink for links */
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
}

nav ul li a:hover {
    color: #f9a94d; /* Gold for hover effect */
}

.content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
    width: 80%;
    margin: auto;
}

.content .text {
    color: #ffffff; /* White text for contrast */
    width: 100%;
}

.content .text h2 {
    font-size: 30px;
    text-transform: uppercase;
    font-weight: 700;
}

.content .text p {
    font-size: 15px;
    line-height: 20px;
    margin: 20px;
    letter-spacing: 1px;
}

.content .img {
    width: 40%;
}

.content .img img {
    width: 400px;
    height: auto;
    background-color: #444; /* Placeholder background color */
    display: block;
}

@media (min-width: 950px) and (max-width: 1150px) {
    .content .img img {
        width: 330px;
    }
}

@media (max-width: 950px) {
    .content, nav {
        flex-direction: column;
        justify-content: center;
    }
    .content .img, .content .text {
        width: 80%;
    }
    body::after {
        clip-path: circle(50% at bottom);
    }
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
</head>

<body>
    <div class="container">
        <nav>
            <a href="#" class="logo">HOLOMEM</a>
            <ul>
                <li><a href="index.html">Back</a></li>
                <li><a href="login_men.php">Shop Now</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="text">
                <h2>Welcome to HoloMem, <br> Where Memories Come Alive.</h2>
                <p>
                    At HoloMem, we bridge the gap between past and present with our revolutionary tech glasses, designed to keep cherished memories closer than ever before. With cutting-edge holographic technology, HoloMem allows you to experience vivid, life-like holograms of loved ones who’ve passed on. Our product line, featuring HoloMem One, HoloMem Pro, and HoloMem Ultra, offers varying levels of immersion and detail, crafted to meet your unique connection needs. Step into a new realm where innovation and memory converge, allowing you to keep those who matter most always in view.
                </p>
                <h1><nav><ul><li><a href="login_men.php">Shop Now</a></li></ul></nav></h1>

            </div>
            
        </div>
        
    </div>
    
    <footer>
    <div class="footer-container">
    <p>&copy; 2024 Yehia - Sara - Ranim . All rights reserved.</p>
        <ul class="footer-links">
            
            <li><a href="about.php">About Us</a></li>
            
        </ul>
    </div>
</footer>
</body>
</html>
