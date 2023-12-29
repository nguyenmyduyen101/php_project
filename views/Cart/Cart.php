<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Cart</title>
</head>
<body>
<form action="/php_project/views/home/index.php" method="POST" class="form_signup">
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
                                <th scope="col">Total Price</th>
                                <th scope="col">
                                    <form action="../../controllers/Cart/Cart_controller.php" method="POST">
                                        <button name="removeAllItem" class="btn btn-sm btn-outline-danger">Remove All</button>
                                        <input type="hidden" name="userId" value="2">
                                    </form>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- ... (Các dòng sản phẩm giỏ hàng) ... -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card wish-list mb-3">
                    <div class="pt-4 border bg-light rounded p-3">
                        <h5 class="mb-3 text-uppercase font-weight-bold text-center">Order summary</h5>
                        <ul class="list-group list-group-flush">
                            <!-- ... (Hiển thị thông tin đơn hàng) ... -->
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
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#checkoutModal">go to checkout</button>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="pt-4">
                        <div class="collapse" id="collapseExample">
                            <div class="mt-3">
                                <div class="md-form md-outline mb-0">
                                    <input type="text" id="discount-code" class="form-control font-weight-light"
                                    placeholder="Enter discount code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
      
        if (isset($_POST['viewCart'])) {
            $userId = $_SESSION['userId']; 

            $stmt = $connection->prepare("SELECT * FROM viewCart WHERE userId = ?");
            $stmt->execute([$userId]);
            $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($cartItems as $cartItem) {
                echo "Pizza ID: " . $cartItem['pizzaId'] . "<br>";
                echo "Quantity: " . $cartItem['itemQuantity'] . "<br>";
                echo "Added Date: " . $cartItem['addedDate'] . "<br>";
                echo "<hr>";
            }
        }
    ?>

</form>

<!-- Nhúng mã JavaScript vào đây -->

</body>
</html>
