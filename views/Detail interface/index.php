<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href=<?= URL_ROOT . URL_SUBFOLDER . "/views/footer_interface/index.css" ?> rel="stylesheet">
    <link href=<?= URL_ROOT . URL_SUBFOLDER . "/assets/css/style.css" ?> rel="stylesheet">
    <style>
        .product {
            display: flex;
            align-items: center;
            padding-left: 10px;
        }
        .product-content {
            padding-left: 40px;
        }
        .container .product{
            height: 500px;
        }
    </style>
</head>

<body>
    <?php include 'views/partial/nav.php'; ?>
    <div class="container">
        <div class="product">
            <div>
                <form action=<?= "/" . URL_SUBFOLDER . "/addToCart" ?> method="post">
                    <img src=<?= URL_ROOT . URL_SUBFOLDER . $itemProduct['image'] ?> alt="Product Image">
            </div>
            <div class="product-content">
                <h2><?php echo $itemProduct['product_name'] ?></h2>
                <input type="hidden" name="namepd" value="Double Cheese Margherita">

                <p style="color: #E31837;">Price: <span><?php echo $itemProduct['product_price'] ?></span></p>
                <input type="hidden" name="price" value="Rs.199/-">

                <input type="hidden" name="id" value="1">
                <p>The ever-popular Margherita - loaded with extra cheesse... oodies of it</p>

                <input type="hidden" name="detail" value="ever-popular">
                <p>View</p>
                <p style="margin-left: 30px;">All Pizza</p>
                <p style="margin-left: 30px;">All Category</p>
            </div>
            </form>
        </div>
    </div>
    <?php include 'views/footer_interface/index.php'; ?>
</body>
</html>