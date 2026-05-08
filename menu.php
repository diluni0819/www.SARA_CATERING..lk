<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Catering Menu</title>
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
    font-size:28px;
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
    height:60vh;
    background:url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1600&auto=format&fit=crop') center/cover;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
}

.hero-content{
    background:rgba(0,0,0,0.5);
    padding:40px;
    border-radius:15px;
}

.hero h1{
    font-size:50px;
    margin-bottom:15px;
}

.hero p{
    font-size:20px;
}

/* Menu Section */

.menu{
    padding:60px 8%;
}

.section-title{
    text-align:center;
    margin-bottom:50px;
    font-size:40px;
    color:#333;
}

.menu-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:30px;
}

.card{
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card-content{
    padding:20px;
}

.card-content h3{
    margin-bottom:10px;
    color:#333;
}

.card-content p{
    color:#777;
    margin-bottom:15px;
}

.price{
    font-size:22px;
    color:#e67e22;
    font-weight:bold;
    margin-bottom:15px;
}

.order-btn{
    display:inline-block;
    padding:12px 20px;
    background:#e67e22;
    color:white;
    text-decoration:none;
    border-radius:8px;
    transition:0.3s;
}

.order-btn:hover{
    background:#ca6b17;
}

/* Footer */

footer{
    background:#1f1f1f;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:50px;
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
        <h1>Delicious Catering Menus</h1>
        <p>Fresh Food For Every Occasion</p>
    </div>
</section>

<!-- Menu Section -->

<section class="menu">

    <h2 class="section-title">Our Popular Menus</h2>

    <div class="menu-grid">

        <!-- Card 1 -->

        <div class="card">
            <img src="resources/menu2.jpeg">

            <div class="card-content">
                <h3>Rice & Curry Package o1</h3>

                <p>Chicken Rice & Curry Menu</p>
                    <li>White Rice / Red Rice</li>
                     <li>Chicken Curry</li>
                     <li>Dhal Curry</li>
                      <li>Potato Curry</li>
                       <li>Beetroot Curry</li>
                       <li>Gotukola Sambol</li>
                        <li>Papadam</li>
                        <li>Seeni Sambol</li>
                   <li>Fish Cutlet</li>
                    <li>Dessert (Watalappan / Fruit Salad)</li> <br>
                

                <div class="price">Rs. 250 to Rs.800</div>

                <a href="login.php" class="order-btn">Order Now</a>
            </div>
        </div>

        <!-- Card 2 -->

        <div class="card">
            <img src="resources/menu1.jpeg">

            <div class="card-content">
                <h3>Rice & Curry Package o2</h3>

                <p>Fish Rice & Curry Menu</p>
                <li>White Rice / Red Rice</li>
                     <li>Steamed Rice</li>
                     <li>Ambul Thiyal</li>
                      <li>Potato Curry</li>
                       <li>Parippu (Dhal Curry)</li>
                       <li>Pumpkin Curry</li>
                        <li>Papadam</li>
                        <li>Coconut Sambol</li>
                   <li>Fish Cutlet</li>
                    <li>Banana</li> <br>
                

                <div class="price">Rs. 200 to Rs.800</div>

                <a href="login.php" class="order-btn">Order Now</a>
            </div>
        </div>

        <!-- Card 3 -->

        <div class="card">
            <img src="resources/menu6.jpeg">

            <div class="card-content">
                <h3>Rice & Curry Package o3</h3>

                <p>Vegetarian Rice & Curry Menu</p>

                <li>White Rice / Red Rice</li>
                  
                     <li>Dhal Curry</li>
                      <li>Potato Curry</li>
                       <li>Parippu (Dhal Curry)</li>
                       <li>Kohila Curry</li>
                        <li>Papadam</li>
                        <li>Coconut Sambol</li>
                   <li>Bean Curry</li>
                    <li>Banana</li> <br>

                <div class="price">Rs. 200</div>

                <a href="login.php" class="order-btn">Order Now</a>
            </div>
        </div>

        <!-- Card 4 -->

        <div class="card">
            <img src="resources/menu4.jpeg">

            <div class="card-content">
                <h3>Party Buffet</h3>

                <p>Complete buffet package for parties and weddings.</p> <br>

                <li>White Rice / Red Rice</li>
                <li>Basmathi Rice</li>
                  <li>Chicken Curry</li>
                  <li>Devilled Chicken</li>
                  <li>Potato Tempered</li>
                     <li>Brinjal Moju</li>
                      <li>Potato Curry</li>
                       <li>Parippu (Dhal Curry)</li>
                       <li>Salad</li>
                        <li>Papadam</li>
                        <li>Chutney</li>
                   <li>Bean Curry</li>
                    <li>Ice Cream / Watalappan</li> <br>

                <div class="price">Rs.1000 to Rs.3000</div>

                <a href="login.php" class="order-btn">Order Now</a>
            </div>
        </div>

    </div>

</section>

<!-- Footer -->

<footer>
    © 2026 Sara Catering | All Rights Reserved
</footer>

</body>
</html>