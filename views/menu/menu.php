<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title id="title">Category</title>
</head>

<body>
  <div class="container my-3" id="cont">
    <div class="col-lg-4 text-center bg-light my-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;color:#E31837;">
      <h2 class="text-center"><span id="catTitle"><?= $category['categorie_name'] ?></span></h2>
    </div>
    <div class="row">
      <?php foreach ($products as $product) : ?>
        <div class="col-xs-3 col-sm-3 col-md-3">
          <div class="card" style="width: 18rem;">
          <img src=<?= URL_ROOT . URL_SUBFOLDER . $product['image'] ?> class="card-img-top" alt="image for this pizza" width="249px" height="270px">
            <div class="card-body">
              <h5 class="card-title"><?= $product["product_name"] ?></h5>
              <h6 style="color: #ff0000">Rs. <?= $product["product_price"] ?>/-</h6>
              <p class="card-text">Pepper Barbecue Chicken I Che...</p>
              <div class="row justify-content-center">
                <form action=<?= "/" . URL_SUBFOLDER . "/addToCart" ?> method="post">
                  <input type="hidden" name="product_id" value="<?= $product["id"] ?>">
                  <input type="hidden" name="cart_id" value="<?= $cart ? $cart["id"] : '' ?>">
                  <button class="btn btn-primary mx-2" type="submit">Add to Cart</button>
                </form>
                <a href="<?= "/" . URL_SUBFOLDER . "/Product/detail?itemId=" . $product["id"] ?>" class="mx-2"><button class="btn btn-primary">Quick View</button></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>

</html>