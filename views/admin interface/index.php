<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bootstrap Example</title>
  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Bên trái (ảnh) -->
    <div class="col-md-6 mt-4 mb-4">
      <img src="../../image/rose.jpg" class="img-fluid w-100" alt="Sample Image">
    </div>

    <!-- Bên phải (form) -->
    <div class="col-md-4 mt-4 mb-6 mt-md-8">
      <form class="card border border-dark p-4">
        <div class="form-group">
          <label for="fullName">Full Name:</label>
          <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <div class="text-center mx-auto">
          <button type="submit" class="btn btn-danger">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Link to Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
