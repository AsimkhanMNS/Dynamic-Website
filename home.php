<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Website</title>
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
    <nav class="navbar navbar-expand-lg    ">
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
                    <button class=" btn btn-outline-danger  " id="btn"><a class="nav-link " href="#">Register</a></button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- NAVBAR SECTION START -->
    <!-- ABOUT START -->
    <div class="container mt-1  ">
        <div class="ima">
            <h3>About</h3>
        </div>
        <div class="imq">
            <img src="Internet on the go-amico.png" alt="">
        </div>
        <div class="per">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae ullam animi temporibus delectus ea. Esse commodi expedita distinctio sapiente aliquid odio ex sint blanditiis libero ratione, illo molestias pariatur a. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, consectetur? Perferendis ipsa reprehenderit voluptate voluptas incidunt nisi voluptates aliquid, nihil, repellendus voluptatem facilis saepe dolorem ullam similique at recusandae eos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil vitae impedit doloremque eos facilis ex accusantium inventore repellendus minima neque deleniti dolorum, soluta, ad quasi voluptatem non laborum illum tenetur?</p>
        </div>
    </div>
    <!-- ABOUT START END -->
    <!-- PHOTOS START -->
    <div class="container mt-1  ">
        <div class="ima ">
            <h3>Video</h3>
        </div>
        <iframe width="100%" height="400" class="vde" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                <div class="p">abcdefh,</div>
                <div class="p">abcdefg-123 345.</div>
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