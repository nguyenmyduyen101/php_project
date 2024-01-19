<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .product {
            display: flex;
            align-items: center;
            padding-left: 10px;
        }

        .product-content {
            padding-left: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="product">
            <div>
                <form action=<?= "/" . URL_SUBFOLDER . "/addToCart" ?> method="post">
                    <img src="<?= URL_ROOT . URL_SUBFOLDER . "/assert/images/image_menu/card-1.jpg" ?>" alt="Product Image">
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

</body>

</html>