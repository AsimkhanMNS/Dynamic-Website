<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Website </title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="" type="image/x-icon">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- CUSTOM CSS -->
    <?php
    include('style.php')
    ?>
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- NAVBAR SECTION START -->
    <nav class="navbar navbar-expand-lg  ">
        <a class="navbar-brand" href="#">
            <img src="onlinelogomaker-103020-2204-0653-500.jpg" width="200" height="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-navicon" style="color:lightred;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item me-4 ">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link " href="login.php">Login</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="sign.php">Sign up</a>
                </li>
                <li class="nav-item me-4">
                    <button class=" btn btn-outline-danger  " id="btn"><a class="nav-link " href="register.php">Register</a></button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- NAVBAR SECTION START -->
    <!-- IMAGE SECTION START -->
    <div class="container mt-3 " id="ims">
        <img src="Contact us-bro.png" alt="" width="30%" class="ims">
        <h2>Contact Us</h2>
    </div>
    </div>
    <!-- IMAGE SECTION END -->
    <!-- CONTACT START -->
    <div class="container">
        <div class="form-control  mt-2 mb-3">
            <form action="" method="post">
                <label class="floating">Name</label>
                <div class="form-floating mb-3 mt-3">
                    <input type="name" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">username</label>
                </div>
                <label class="floating">Email</label>
                <div class="form-floating mb-3 mt-3">
                    <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">@gmail.com</label>
                </div>
                <label class="floating">Message</label>
                <div class="form-floating mt-3 mb-3">
                    <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Leave a comment here</label>
                </div>
                <button class="btn btn-outline-danger" type="sumbit" name="sumbit" id="button-addon1">sumbit</button>
            </form>
        </div>

    </div>
    <!-- CONTACT END -->
    <!-- FOOTER START -->
    <div class="footer">
        <div class="row">
            <div class="col-md-4 col-sm-12 mt-2 mb-4" id="f">
                <h5>Follow as</h5>
                <a href="">
                    <li class="fa fa-whatsapp"></li>
                </a>
                <a href="">
                    <li class="fa fa-facebook"></li>
                </a>
                <a href="">
                    <li class="fa fa-instagram"></li>
                </a>
                <a href="">
                    <li class="fa fa-github"></li>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 mt-2 mb-4 " id="c">
                <h5>Contact Me</h5>
                <div class="p">
                    <li class="fa fa-phone">&nbsp;+91 1234567890</li>
                </div>
                <div class="e"><i class="fa fa-envelope-open-o">&nbsp;abcd123@gmail.com</i></div>
            </div>
            <div class="col-md-4 col-sm-12 mt-2  mb-2" id="a">
                <h5>Address</h5>
                <div class="p">abcdefg,</div>
                <div class="p">abcdefg,</div>
                <div class="p">abcdefg,</div>
                <div class="p">abcdefg-123 456.</div>
            </div>
        </div>
        <hr>
        <div class="ft">
            <footer>
                <span>&copy;Copyright | <a href="">MNStech</a></span>
            </footer>
        </div>
    </div>
    <!-- FOOTER END -->
    <!-- JS -->
    <script src="jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="bootstrap.min.js "></script>
</body>

</html>

<?php

$con = mysqli_connect('localhost', 'root', '', 'loginwebsite');

error_reporting(0);

if (isset($_POST['sumbit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}


$insertquery = "INSERT INTO `contact`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";


$query = mysqli_query($con, $insertquery);






?>