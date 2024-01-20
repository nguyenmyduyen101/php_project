<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Cart</title>
</head>

<body>
    <div class="container" id="cont">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-3">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-8">
                <div class="card wish-list mb-3">
                    <table class="table text-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Item Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cartItems as $item) : ?>
                                <form action="<?= "/" . URL_SUBFOLDER . "/Cart/updateCart" ?>" method="post">
                                    <tr>
                                        <td><?= $item['id'] ?></td>
                                        <td><?= $item['product_name'] ?></td>
                                        <td><?= $item['price'] ?></td>
                                        <td>
                                            <input type="hidden" name="cart_item_id" value="<?= $item['id'] ?>">
                                            <input type="number" name="quantity" value="<?= $item['quantity'] ?>" class="text-center" style="width:60px" min="1">
                                        </td>
                                        <td>
                                            <a href="<?= "/" . URL_SUBFOLDER . "/carts/Delete?itemId=" . $item['id'] ?>" class="btn btn-sm btn-outline-danger">Remove</a>
                                            <input type="hidden" name="cart_item_id" value="<?= $item['id'] ?>">
                                            <button name="updateItem" class="btn btn-sm btn-outline-danger" type="submit">Update</button>
                                        </td>
                                    </tr>
                                </form>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card wish-list mb-3">
                    <div class="pt-4 border bg-light rounded p-3">
                        <h5 class="mb-3 text-uppercase font-weight-bold text-center">Order summary</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 bg-light">Total Price<span><?= $total_price?></span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-light">Shipping<span>0.000</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3 bg-light">
                                <div>
                                    <strong>The total amount of</strong>
                                    <strong>
                                        <p class="mb-0">(including Tax & Charge)</p>
                                    </strong>
                                </div>
                                <span><strong><?= $total_price?></strong></span>   
                            </li>
                        </ul>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash On Delivery
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Online Payment
                            </label>
                        </div><br>
                        <a href="<?=URL_ROOT . URL_SUBFOLDER . "/order"?>" class="btn btn-primary btn-block" data-toggle="modal" data-target="#checkoutModal">go to checkout</a>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="pt-4">
                        <div class="collapse" id="collapseExample">
                            <div class="mt-3">
                                <div class="md-form md-outline mb-0">
                                    <input type="text" id="discount-code" class="form-control font-weight-light" placeholder="Enter discount code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
