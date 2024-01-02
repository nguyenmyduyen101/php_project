<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/mvc/views/css/style.css">
    <link rel="stylesheet" href="./SignUp.css">
</head>
<body>

<form action="/php_project/controllers/SignUp/SignUp_controller.php" method="POST" class="form_signup">
    <div class="row">
        <div class="registration-form col-11">
            <h1>SignUp</h1>
        </div>
        <div class="cancel_button col-1">
            <button>X</button>
        </div>
    </div>

    <div>
        <input type="text" id="username" name="username" placeholder="Username" required><br>

        <input type="text" id="firstName" name="firstName" placeholder="First Name" required><br>

        <input type="text" id="lastName" name="lastName" placeholder="Last Name" required><br>

        <input type="email" id="email" name="email" placeholder="Email" required><br>

        <input type="tel" id="phone" name="phone" placeholder="Phone No" required><br>

        <input type="password" id="password" name="password" placeholder="Password" required><br>

        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required><br>

        <input type="submit" value="Submit">
    </div>

    <p>Already have an account? <a href="login.html">Login here</a></p>
</form>

</body>
</html>
