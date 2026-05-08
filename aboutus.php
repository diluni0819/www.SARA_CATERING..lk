# Catering Website About Us Page Design

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Sara Catering</title>
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
    font-size:30px;
    font-weight:bold;
}

nav ul{
    display:flex;
    list-style:none;
}

nav ul li{
    margin-left:25px;
}

nav ul li a{
    text-decoration:none;
    color:white;
    transition:0.3s;
}

nav ul li a:hover{
    color:#f39c12;
}

/* Hero */

.hero{
    height:55vh;
    background:
    linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
    url("resources/background.avif");

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
}

.hero h1{
    font-size:60px;
    margin-bottom:15px;
}

.hero p{
    font-size:22px;
}

/* About Section */

.about{
    padding:80px 8%;
    display:flex;
    flex-wrap:wrap;
    gap:50px;
    align-items:center;
    background:white;
}

.about img{
    width:100%;
    max-width:500px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.about-text{
    flex:1;
}

.about-text h2{
    font-size:45px;
    color:#333;
    margin-bottom:25px;
}

.about-text p{
    font-size:18px;
    line-height:1.9;
    color:#666;
    margin-bottom:20px;
}

/* Features */

.features{
    padding:80px 8%;
    text-align:center;
}

.features h2{
    font-size:45px;
    margin-bottom:50px;
    color:#333;
}

.feature-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:30px;
}

.feature-box{
    background:white;
    padding:40px 25px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}

.feature-box:hover{
    transform:translateY(-10px);
}

.feature-box h3{
    color:#f39c12;
    margin-bottom:15px;
}

.feature-box p{
    color:#666;
    line-height:1.7;
}

/* Footer */

footer{
    background:#111;
    color:white;
    text-align:center;
    padding:25px;
    margin-top:40px;
}

/* Responsive */

@media(max-width:768px){

    .hero h1{
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

<!-- Hero Section -->

<section class="hero">

    <div>
        <h1>About Us</h1>
        <p>Delicious Food For Every Occasion</p>
    </div>

</section>

<!-- About Section -->

<section class="about">

    <img src="resources/back2.avif">

    <div class="about-text">

        <h2>Who We Are</h2>

        <p>
            Sara Catering is a trusted catering service dedicated to
            providing delicious food and professional event catering
            solutions for weddings, birthdays, office events, and family
            gatherings.
        </p>

        <p>
            Our experienced chefs prepare fresh Sri Lankan and modern
            dishes using high-quality ingredients to ensure unforgettable
            dining experiences for every customer.
        </p>

        <p>
            We focus on quality, hygiene, customer satisfaction, and
            beautiful food presentation to make your events special.
        </p>

    </div>

</section>

<!-- Features -->

<section class="features">

    <h2>Why Choose Us</h2>

    <div class="feature-grid">

        <div class="feature-box">
            <h3>Fresh Food</h3>
            <p>
                We prepare every meal using fresh and hygienic ingredients.
            </p>
        </div>

        <div class="feature-box">
            <h3>Professional Service</h3>
            <p>
                Friendly staff and quality service for all types of events.
            </p>
        </div>

        <div class="feature-box">
            <h3>Affordable Packages</h3>
            <p>
                Flexible catering packages suitable for every budget.
            </p>
        </div>

    </div>

</section>

<!-- Footer -->

<footer>

    © 2026 Sara Catering | All Rights Reserved

</footer>

</body>
</html>
```
