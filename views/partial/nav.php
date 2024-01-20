<?php
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

  .form-login,
  .form-register {
    position: absolute;
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
  }

  .form-login .model-container {
    height: 400px;
  }

  .form-register .model-container {
    height: 700px;
    margin: 50px auto;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="<?= URL_ROOT . URL_SUBFOLDER ?>/assets/images/logo/logo.png" alt="Logo" width="50" height="50">
  <a class="navbar-brand" href="index.php"><strong>MANITO</strong></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" onclick="show_list_categories()">Top Categories</a>
        <?php
        $hostname = "localhost";
        $database = "test_data_project";
        $username = "root";
        $password = "";
        $dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";

        try {
          $connection = new PDO($dsn, $username, $password);
          $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
          die("Connection failed: " . $e->getMessage());
        }
        $sql = "SELECT * FROM categories";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="dropdown-menu" id="list_categories">
          <?php foreach ($result as $cate) : ?>
            <a class="dropdown-item" href=<?= URL_ROOT . URL_SUBFOLDER . '/Products?category_id=' . $cate["id"] ?>><?= $cate["categorie_name"] ?></a>
            <div class="dropdown-divider"></div>
          <?php endforeach ?>

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

    <a href=<?= URL_ROOT . URL_SUBFOLDER . "/Carts" ?> class="btn btn-secondary mx-2" title="MyCart">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </svg>
    </a>

    <div class="nav-buttons">
      <button onclick="show_login_form()" type="button" class="btn btn-success mx-2" style="background-color: #fff !important; color: #000 !important;" data-toggle="modal" data-target="#loginModal">Login</button>
      <button onclick="show_register_form()" type="button" class="btn btn-success mx-2" style="background-color: #fff !important; color: #000 !important;" data-toggle="modal" data-target="#signupModal">SignUp</button>
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
          <b><label for="loginusername">Username</label></b>
          <input class="form-control" id="loginusername" name="username" placeholder="Enter Your Username" type="text" required>
        </div>
        <div class="text-left my-2">
          <b><label for="loginpassword">Password</label></b>
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

<div class="form-register" style="z-index: 999;">
  <div class="model-container">
    <div class="modal-body">
      <h3 class="text-center mb-4" style="background-color: #E31837; color: white; padding: 10px;">Register</h3>
      <form action="<?= URL_ROOT . URL_SUBFOLDER . '/Account/SignUp' ?>" method="post">
        <div>

          <div class="text-left my-2">
            <b><label for="username">Username</label></b>
            <input type="text" id="username" name="username" class="form-control" placeholder="Enter Your Username" required>
          </div>

          <div class="text-left my-2">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter Your First Name" required>
          </div>

          <div class="text-left my-2">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Your Last Name" required>
          </div>

          <div class="text-left my-2">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email" required>
          </div>

          <div class="text-left my-2">
            <label for="phone">Phone No:</label>
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone" required>
          </div>

          <div class="text-left my-2">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Your Password" required>
          </div>

          <div class="text-left my-2">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Enter Confirm Password" required>
          </div>


          <div class="text-center my-4">
            <input type="submit" value="Submit" class="btn btn-success" style="background-color: #E31837;">
          </div>
        </div>
      </form>
      <p>Already have an account? <a href="login.html">Login here</a></p>
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
  const form_register = document.querySelector(".form-register");
  form_register.classList.add("d-none")

  function show_login_form() {
    form_login.classList.remove("d-none");
  }

  function show_register_form() {
    form_register.classList.remove("d-none");
  }
</script>