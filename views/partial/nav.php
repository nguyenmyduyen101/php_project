<?php
session_start();
$loggedin = false;
$userId = 0;
?>

<style>
  .navbar {
    background-color: #E31837 !important;
  }
  .li {
    list-style-type: none;
  }
  .form-login {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1000;
  }
  .model-container {
    width: 400px;
    background-color: #fff;
    border-radius: 10px;
    margin: 70px auto;
    height: 400px;
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

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" onclick="show_list_categories()">Top Categories</a>
        <div class="dropdown-menu" id="list_categories">
          <a class="dropdown-item" href="#>">VEG PIZZA</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">NON-VEG PIZZA</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">PIZZA MANIA</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">SIDES ORDERS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">BEVERAGES</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">CHOICE OF CRUSTS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">BURGER PIZZA</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">CHOICE OF TOPPINGS</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link">Your Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">About Us</a>
      </li>
    </ul>

    <form method="get" class="form-inline my-2 my-lg-0 mx-3">
      <input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Search" required>
      <button class="btn btn-outline-success my-2 my-sm-0 text-white border-white" type="submit">Search</button>
    </form>

    <a href="viewCart.php" class="btn btn-secondary mx-2" title="MyCart">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </svg>
    </a>

    <div class="nav-buttons">
      <button onclick="show_login_form()" type="button" class="btn btn-success mx-2" style="background-color: #fff !important; color: #000 !important;" data-toggle="modal" data-target="#loginModal">Login</button>
      <button type="button" class="btn btn-success mx-2" style="background-color: #fff !important; color: #000 !important;" data-toggle="modal" data-target="#signupModal">SignUp</button>
    </div>
  </div>
</nav>
<?php

if (isset($_SESSION['error'])) {
  $error = $_SESSION['error'];

  unset($_SESSION['error']);
} else {
  $error = '';
} ?>

<div class="form-login" style="z-index: 999;">
  <div class="model-container">
    <div class="modal-body">
      <h3 class="text-center mb-4" style="background-color: #E31837; color: white; padding: 10px;">Login Here</h3>
      <form action="<?= URL_ROOT . URL_SUBFOLDER . '/Account/Login' ?>" method="post">
        <div class="text-left my-2">
          <b><label for="username">Username</label></b>
          <input class="form-control" id="loginusername" name="username" placeholder="Enter Your Username" type="text" required>
        </div>
        <div class="text-left my-2">
          <b><label for="password">Password</label></b>
          <input class="form-control" id="loginpassword" name="password" placeholder="Enter Your Password" type="password" required data-toggle="password">
        </div>
        <?php if (!empty($error)) : ?>
          <div style="color: red;"><?php echo $error; ?></div>
        <?php endif; ?>
        <div class="text-center my-4">
          <button type="submit" class="btn btn-success" style="background-color: #E31837; margin-top: 20px;">Submit</button>
        </div>
      </form>
      <p class="mb-0 mt-1 text-center">Don't have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Sign up now</a>.</p>
    </div>
  </div>
</div>

<script>
  function show_list_categories() {
    const list_categories = document.getElementById("list_categories");
    list_categories.classList.toggle("d-block");
  }
  const form_login = document.querySelector(".form-login");
  form_login.classList.add("d-none")

  function show_login_form() {
    form_login.classList.remove("d-none");
    console.log(form_login);

  }
</script>