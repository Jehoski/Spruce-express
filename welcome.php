<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
    $con = mysqli_connect('localhost', 'root', "", 'logistic');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./nestsis.css">
</head>
<body>
<section class="beit" style="background-color: green;">
    <div><form action="./welcome.php" method="post"">
        <section style="background-color: white;" class="tori">
            <!-- <h1><input type="text" name="" id="" style="border: white;"> </h1> -->
         </section></form>
         <div style="color: white;">
             <h1>WE Are Your Logistics Partner For <br> Seamless Delivery.</h1>
         <p>We rovide service for all your nationwide shipping need</p>
         </div>
    </div>
</section>
    <section style="margin-bottom: 60px;">
        <div class="flex4">
          <div class="flex5">
            <img src="../public/images/Layer2.png" alt="">
            <br>
            <p style="color: #00A651;"><b>MISSION</b></p>
            <br>
            <p>Revolutionize the pickup and delivery service industry by providing unparalleled convenience, reliability, and sustainability. their goods. </p>
          </div>
           <div  class="flex5">
            <img src="../public/images/frame-906.png" alt=""><p style="color: #00A651;"><b>VISION</b>
            </p>
            <br>
            <p>We envision a future where the act of  sending and receiving items is a frictionless and eco-conscious experience.</p>
            </div>
            <div class="flex5">
                <img src="../public/images/layer-2.png" alt=""><p style="color: #00A651;"><b>CORE VALUES</b></p>
                <br><p>Innovative | Responsible | Reliable</p>
            </div>
        </div>
 </section>
 <footer style="background-color: black;" class="last">
    <div>
        <img src="../public/images/vectorc.png" alt=""><br>
        At Spruce Xpress Logistics, we are more than <br> just a logistics company – we are your trusted <br> partner in delivering excellence. With a passion <br> for precision and a commitment to reliability, <br>we have been at the forefront of the logistics <br> industry, shaping the way goods move from <br>one place to another. <br>
        <img src="../public/images/social-media.png" alt="">
    </div>
    <div>
        <b>Quick Links</b><br>
        Home <br>
        About <br>
        Service <br>
        Contact Us
    </div>
    <div>
        <b>Service</b> <br>
        Truck <br>
        Airplane <br>
        Ship <br>
    </div>
    <div>
        <b>Contact Us</b><br>
        <img src="" alt="">Netisenes ICT <br>
        <img src="" alt="">+1-234-5675-57 <br>
        <img src="" alt=""> Info@netisensesict.com
    </div>
</footer>
</body>
</html>

<?php
}else {
    header("Location: ./signup.html");
    exit();
}

?>