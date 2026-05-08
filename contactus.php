<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
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
    color:white;
    text-decoration:none;
    transition:0.3s;
}

nav ul li a:hover{
    color:#f39c12;
}

/* Hero Section */

.hero{
    height:45vh;

    background:
    linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
    url('resources/back3.avif');

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
}

/* Contact Section */

.contact-section{
    padding:80px 8%;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
}

/* Contact Info */

.contact-info{
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.contact-info h2{
    margin-bottom:25px;
    color:#333;
}

.contact-info p{
    margin-bottom:18px;
    color:#666;
    line-height:1.8;
}

/* Form */

.contact-form{
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.contact-form h2{
    margin-bottom:25px;
    color:#333;
}

.contact-form input,
.contact-form textarea{
    width:100%;
    padding:15px;
    margin-bottom:20px;
    border:1px solid #ccc;
    border-radius:10px;
    font-size:16px;
}

.contact-form textarea{
    height:150px;
    resize:none;
}

.contact-form button{
    background:#f39c12;
    color:white;
    border:none;
    padding:15px 35px;
    border-radius:10px;
    cursor:pointer;
    font-size:17px;
    transition:0.3s;
}

.contact-form button:hover{
    background:#d68910;
}

/* Map Section */

.map{
    padding:0 8% 80px;
}

.map iframe{
    width:100%;
    height:400px;
    border:none;
    border-radius:20px;
}

/* Footer */

footer{
    background:#111;
    color:white;
    text-align:center;
    padding:25px;
}

/* Responsive */

@media(max-width:768px){

    nav{
        flex-direction:column;
    }

    nav ul{
        margin-top:15px;
    }

    .hero h1{
        font-size:40px;
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
        <li><a href="aboutus.php">About</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="contactus.php">Contact</a></li>
    </ul>

</nav>

<!-- Hero -->

<section class="hero">

    <div>
        <h1>Contact Us</h1>
    </div>

</section>

<!-- Contact Section -->

<section class="contact-section">

    <!-- Contact Info -->

    <div class="contact-info">

        <h2>Get In Touch</h2>

        <p>
            We are ready to provide delicious catering services
            for weddings, birthdays, office events, and parties.
        </p>

        <p><strong>Phone:</strong> +94 74 22 18 615</p>

        <p><strong>Email:</strong> saracatering@gmail.com</p>

        <p><strong>Address:</strong> No:21/1/C Beligaswaththa Nalla Devuldeniya, Sri Lanka</p>

    </div>

    <!-- Contact Form -->

    <div class="contact-form">

        <h2>Send Message</h2>

        <form>

            <input type="text" placeholder="Your Name" required>

            <input type="email" placeholder="Your Email" required>

            <input type="text" placeholder="Subject">

            <textarea placeholder="Your Message"></textarea>

            <button type="submit">Send Message</button>

        </form>

    </div>

</section>


<footer>

    © 2026 Sara Catering | All Rights Reserved

</footer>

</body>
</html>