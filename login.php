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
    <!-- LOGIN SECTION START -->
    <div class="container mt-3 " id="ims">
        <img src="Login-rafiki.png" alt="" width="30%" class="ims">
        <h2>Login</h2>
    </div>
    </div>
    <!-- LOGIN SECTION END -->
    <div class="container">
        <div class="form-control  mt-2 mb-3">
            <form name="f1" action="" method="POST" onsubmit="return validation()">
                <label class="floating">Email</label>
                <div class="form-floating mb-3 mt-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="email">
                    <label for="floatingPassword">@gmail.com</label>
                </div>
                <label class="floating">Password</label>
                <div class="form-floating mb-3 mt-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="email">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-outline-danger" type="sumbit" name="sumbit" id="value" value="login">LOGIN</button>
            </form>
        </div>
    </div>
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
    <script src="script.php"></script>
</body>

</html>




<?php


$con = mysqli_connect('localhost', 'root', '', 'loginwebsite');

error_reporting(0);

$username = $_POST['email'];
$password = $_POST['password'];
 
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM `login` WHERE `email` = '$username' AND `password` = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

?>