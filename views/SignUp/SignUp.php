<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/mvc/views/css/style.css">
    <link rel="stylesheet" href="./SignUp.css">
</head>
<body>
<form action="/php_project/controllers/SignUp/SignUp_controller.php" method="POST" class="form_signup">
    <div class="row ">
        <div class="registration-form col-11 ">
            <h1>SignUp</h1>
        </div>
        <div class="cancel_button col-1">
            <button>X</button>
        </div>
    </div>


    <div >
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>


        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br>


        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br>


        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>


        <label for="phone">Phone No:</label>
        <input type="tel" id="phone" name="phone" required><br>


        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>


        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br>


        <input type="submit" value="Submit" >
</div>


    <p>Already have an account? <a href="login.html">Login here</a></p>
</body>
</html>