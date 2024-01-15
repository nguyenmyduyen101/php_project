<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">
    <div class="product">
        <form action="addtocart.php" method="post" >
            <img src="p1.jpg" alt="Product Image">
            <input type="hidden" name="img" value="p1.jpg">
            <div class="product-content">
                <h2>Double Cheese Margherita</h2>
                <input type="hidden" name="namepd" value="Double Cheese Margherita">

                <p style="color: #E31837;">Price: <span>Rs.199/-</span></p>
                <input type="hidden" name="price" value="Rs.199/-">

                <input type="hidden" name="id" value="1">
                <p>The ever-popular Margherita - loaded with extra cheesse... oodies of it</p>
                <input type="hidden" name="detail" value="ever-popular">
                <input type="submit" name="addtocart" value="add to cart">
                <p>View</p>
                    <p style="margin-left: 30px;">All Pizza</p>
                    <p style="margin-left: 30px;">All Category</p>
            </div>
        </form>
    </div>
</div>

</body>
</html>