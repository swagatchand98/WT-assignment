<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo "Please login first!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header style="border-bottom: 4px solid black;">
    <h1>E-commerce</h1>
    <h3>Welcome <?php echo $_SESSION['user']; ?> 👋</h3>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header><hr>

<section id="home" style="text-align:center;">
    <h2>Welcome to E-commerce</h2>
</section><hr>

<section id="products">
    <h2>Our Products</h2>

    <div class="product-container">

    <article>
        <img src="smartphone.jpg">
        <h3>Smart Phone</h3>
        <p>₹1,49,999</p>
    </article>

    <article>
        <img src="smartwatch.jpg">
        <h3>Smart Watch</h3>
        <p>₹3,999</p>
    </article>

    <article>
        <img src="laptop.jpg">
        <h3>Laptop</h3>
        <p>₹1,53,999</p>
    </article>

    </div>
</section><hr>


<section id="about">
    <h2>About Us</h2>
    <p style="text-align: center;">
        Name: swagat saswat chand<br>
        USN: 24BTRCT131<br>
        Address: Electronic city phase 1 neeladri nagar 2nd cross
    </p>
    <p style="text-align: center;">
        i am currently a pophomore student in jain university doing btech i have 1.5 yeah of experience in full stack developement, with skills Frontend: React, Next.js, React Native, TypeScript, JavaScript, Tailwind CSS, Framer Motion, Three.js
    </p>
    <p style="text-align: center;">
        Backend: Node.js, Express.js, Go (Golang), Python (FastAPI), WebSocket, Redis<br>
        Databases: MongoDB, Firestore, DynamoDB, PostgreSQL, Prisma<br>
        Cloud &amp; DevOps: AWS (S3, EC2, Lambda, API Gateway, Cognito), Docker, Firebase<br>
        Tools: Git, Linux, VS Code, Stripe, Razorpay
    </p>
</section>
<hr>

<section id="contact">
    <h2>Contact Us</h2>
    <form>
        Name: <input type="text"><br><br>
        Email: <input type="email"><br><br>
        Message: <textarea></textarea><br><br>
        <button>Submit</button>
    </form>
</section><hr>

<footer>
    Contact: sahilkhedkar11@gmail.com
</footer>

<?php
// COOKIE DISPLAY
if (isset($_COOKIE['user'])) {
    echo "<p style='text-align:center;'>Cookie User: " . $_COOKIE['user'] . "</p>";
}
?>

</body>
</html>