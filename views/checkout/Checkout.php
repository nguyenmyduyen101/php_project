<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    <link rel="stylesheet" type="text/css" href="Checkout.css">
</head>
<body>
    <div class="container">
        <h1>Payment Information</h1>
        <form>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            
            <label for="phone">Phone No.:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="zipcode">Zip Code:</label>
            <input type="text" id="zipcode" name="zipcode" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="button" class="cancel-button">Cancel</button>
            <button type="submit" class="order-button">Order</button>
        </form>
    </div>
</body>
</html>