<div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="d-flex justify-content-center align-items-center bg-info text-white p-2 ml-auto mt-4">
                <span class="Iterm">ITERM</span>
                <span class="quantitys">QUANTITY</span>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

    <div class="container">
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="index.js"></script>