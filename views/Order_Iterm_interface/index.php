<div>
    <div class="header1">
        <div>
            <h2>Order</h2>
            <h2>Iterm</h2>
        </div>
        <button onclick="handleClick()">X</button>
    </div>
    </hr>

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
        <?php foreach($carts as $cart):?>
        <div class="row">
            <div class="col-sm-5 d-flex">
                <img src="../../image/Pizza1.jpg" alt="Product Image" class="product-img">
                <div class="product-info">
                    <h2><?= $cart["product"]["product_name"]?></h2>
                    <p style="color: #E31837;">Rs.<?= $cart["product"]["product_price"]?>/-</p>
                </div>
            </div>
            <div class="col-sm-7 text-center mt-5">
                <input type="number" name="order[amount][]" class="quantity" value=<?= $cart["cart"]["item_quantity"]?> />
                <input hidden name="order[product_id][]     " value=<?= $cart["cart"]["product_id"]?> />
            </div>
        </div>
        <?php endforeach?>
        <input hidden name="user_id" value=<?=$user_id?>>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="index.js"></script>
