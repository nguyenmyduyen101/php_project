<!DOCTYPE html>
<html>
<head>
    <title>Order Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../views/Order_Iterm_interface/index.css">
    <style>
        .container {
            border: 3px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            height: 20%;
            width: 100%;
        }

        .container h2 {
            color: #E31837;
        }

        .info-item {
            margin-bottom: 5px;
        }

        .label {
            margin-right: 5px;
        }

        .checkout-button {
            display: flex;
            justify-content: center;
        }

        .checkout-button button {
            background-color: red;
            color: white;
        }
    </style>
</head>

<body>
    <form action="<?=URL_ROOT . URL_SUBFOLDER . "/Checkout"?>" method="post"> 
    <div class="container">
        <h2><i class="fas fa-map-marker-alt"></i> Địa chỉ nhận hàng</h2>
        <div class="customer-info">
        <input type="hidden" name="user_id" value="<?= $user["id"]?>">
        <input type="hidden" name="phone_no" value="<?= $user["phone"]?>">
            <p class="info-item"><span class="label">Tên khách hàng:</span> <?= $user["user_name"]?></p>
            <p class="info-item"><span class="label">Số điện thoại:</span> <?= $user["phone"]?></p>
            <p class="info-item"><span class="label">Địa chỉ:</span> </p>
            <input type="text" name = "address" value="99 To Hien Thanh Street, Da Nang City">
        </div>
    </div><br>
    <?php require_once APP_ROOT ."/views/Order_Iterm_interface/index.php" ?><br>
    <div class="checkout-button">
        <button style="background-color:#E31837; color: white;font-size: 20px; padding: 10px 20px;">CHECKOUT</button>
    </div>
    </form>
</body>

</html>
