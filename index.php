<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sara Catering</title>
<link rel="icon" href="badge.png">
<link rel="stylesheet" href="styles.css">


<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f5f5f5;
}

/* Navbar */

nav{
    width:100%;
    padding:20px 8%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:absolute;
    top:0;
    left:0;
    z-index:100;
}

.logo1{
    color:white;
    font-size:32px;
    font-weight:bold;
}

nav ul{
    display:flex;
    list-style:none;
}

nav ul li{
    margin-left:30px;
}

nav ul li a{
    text-decoration:none;
    color:white;
    font-size:18px;
    transition:0.3s;
}

nav ul li a:hover{
    color:#f39c12;
}

/* Hero Section */

.hero{
    width:100%;
    height:100vh;
    background:
    linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
    url('resources/background.avif');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
    padding:20px;
}

.hero-content h1{
    font-size:65px;
    margin-bottom:20px;
}

.hero-content p{
    font-size:22px;
    margin-bottom:30px;
}

.btn{
    display:inline-block;
    padding:15px 35px;
    background:#f39c12;
    color:white;
    text-decoration:none;
    border-radius:10px;
    font-size:18px;
    transition:0.3s;
}

.btn:hover{
    background:#d68910;
}

/* About Section */

.about{
    padding:80px 8%;
    display:flex;
    flex-wrap:wrap;
    gap:40px;
    align-items:center;
    background:white;
}

.about img{
    width:100%;
    max-width:500px;
    border-radius:20px;
}

.about-text{
    flex:1;
}

.about-text h2{
    font-size:45px;
    margin-bottom:20px;
    color:#333;
}

.about-text p{
    font-size:18px;
    color:#666;
    line-height:1.8;
}

/* Services */

.services{
    padding:80px 8%;
    text-align:center;
}

.services h2{
    font-size:45px;
    margin-bottom:50px;
    color:#333;
}

.service-boxes{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:30px;
}

.box{
    background:white;
    padding:40px 25px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}

.box:hover{
    transform:translateY(-10px);
}

.box h3{
    margin-bottom:15px;
    color:#f39c12;
}

.box p{
    color:#666;
    line-height:1.6;
}

/* Footer */

footer{
    background:#111;
    color:white;
    text-align:center;
    padding:25px;
}

@media(max-width:768px){

    .hero-content h1{
        font-size:40px;
    }

    nav{
        flex-direction:column;
    }

    nav ul{
        margin-top:15px;
    }

}

</style>
</head>

<body>

<!-- Navbar -->

<nav>

    <div class="logo1">Sara Catering</div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact</a></li>
    </ul>

</nav>

<!-- Hero -->

<section class="hero">

    <div class="hero-content">

        <h1>Delicious Food For Every Event</h1>

        <p>
            Weddings, Parties, Birthdays & Corporate Events
        </p>

        <a href="menu.php" class="btn">Order Now</a>

    </div>

</section>

<!-- About -->

<section class="about">

    <img src="resources/back2.avif">

    <div class="about-text">

        <h2>About Us</h2>

        <p>
            Sara Catering provides delicious and high-quality food
            services for weddings, parties, office events, and family
            gatherings. We focus on fresh ingredients, beautiful food
            presentation, and customer satisfaction.
        </p>

    </div>

</section>

<!-- Services -->

<section class="services">

    <h2>Our Services</h2>

    <div class="service-boxes">

        <div class="box">
            <h3>Wedding Catering</h3>

            <p>
                Elegant food packages for your special wedding day.
            </p>
        </div>

        <div class="box">
            <h3>Birthday Parties</h3>

            <p>
                Fun and tasty menus for birthday celebrations.
            </p>
        </div>

        <div class="box">
            <h3>Corporate Events</h3>

            <p>
                Professional catering solutions for office functions.
            </p>
        </div>

    </div>

</section>

<!-- Footer -->

<footer>

    © 2026 Sara Catering | All Rights Reserved

</footer>
<script src="script.js"></script>
<script src="bootstrap.js"></script>
<script src="bootstrap.bundle.js"></script>
</body>
</html>