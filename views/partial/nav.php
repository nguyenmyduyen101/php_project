<?php
session_start();
$loggedin = false;
$userId = 0;

// Kết nối cơ sở dữ liệu (hãy đảm bảo bạn đã thực hiện kết nối trước khi sử dụng)
// $conn = mysqli_connect("localhost", "username", "password", "database");

?>

<style>
    .navbar {
        background-color: #E31837 !important;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="<?= URL_ROOT . URL_SUBFOLDER ?>/assert/images/logo/logo.png" alt="Logo" width="50" height="50">
    <a class="navbar-brand" href="index.php"><strong>MANITO</strong></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    Top Categories
                </a>
                
                <!-- wwhile  -->

            </li>
        </ul>

        <form method="get" class="form-inline my-2 my-lg-0 mx-3">
            <input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Search" required>
            <button class="btn btn-outline-success my-2 my-sm-0 text-white border-white" type="submit">Search</button>
        </form>

        <a href="viewCart.php" class="btn btn-secondary mx-2" title="MyCart">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
        </a>

        <div class="nav-buttons">
            <button type="button" class="btn btn-success mx-2" style="background-color: #fff !important; color: #000 !important;" data-toggle="modal" data-target="#loginModal">Login</button>
            <button type="button" class="btn btn-success mx-2" style="background-color: #fff !important; color: #000 !important;" data-toggle="modal" data-target="#signupModal">SignUp</button>
        </div>
    </div>
</nav>



