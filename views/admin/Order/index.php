<style>

* {
  box-sizing: border-box;
  margin: 1;
  padding: 0;
}

/* Remove list styles (bullets/numbers) */
ul,
ol {
  list-style: none;
}

/* Remove default margin and padding for certain elements */
body,
h1,
h2,
h3,
h4,
h5,
h6,
p,
figure,
blockquote,
dl,
dd {
  margin: 0;
  padding: 0;
}

/* Set base font size and line height */
body {
  margin-bottom: 40px;
  font-size: 16px;
  line-height: 1.5;
}

/* Set default link styles */
a {
  text-decoration: none;
  color: inherit;
}

html {
  font-size: 14px;
}

@media (min-width: 768px) {
  html {
    font-size: 16px;
  }
}

.btn:focus,
.btn:active:focus,
.btn-link.nav-link:focus,
.form-control:focus,
.form-check-input:focus {
  box-shadow: 0 0 0 0.1rem white, 0 0 0 0.25rem #258cfb;
}
html {
  position: relative;
  min-height: 100%;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <div class="card shadow border-0 mt-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white py-2">Order LIST</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="row pb-3">
            <div class="col-6">
            </div>
            <div class="col-6 text-end">
                <a href=<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Order/Create"?> class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>  Create new Order
                </a>
            </div>
        </div>
        <table id="tblData" class="table table-bordered table-striped">
             <thead> 
                <th>Stt</th> 
                <th>User Name</th> 
                <th>Email</th> 
                <th>Adress</th> 
                <th>Product name</th> 
                <th>Amount</th> 
                <th>Order status</th> 
                <th>Payment mode</th> 
                <th>Created at</th> 
                <th>Update at</th> 
                <th></th> 
            </thead> 
            <tbody> 
                <?php $i = 1; foreach($orders as $order): ?> 
                          <tr>
                            <td><?= $i++;?></td> 
                            <td><?= $order["user"]["user_name"]?></td> 
                            <td><?= $order["user"]["email"]?></td> 
                            <td><?= $order["order"]["address"]?></td> 
                            <td><?= $order["product"]["product_name"]?></td> 
                            <td><?= $order["order"]["amount"]?></td> 
                            <td><?= $order["order"]["order_status"]?></td> 
                            <td><?= $order["order"]["payment_mode"]?></td> 
                            <td><?= (new DateTime($order['order']["create_at"])) -> format('Y-m-d H:i:s')?> </td> 
                            <td><?= (new DateTime($order['order']["update_at"])) -> format('Y-m-d H:i:s')?> </td> 
                            <td> 
                                <div class="w-75 btn-group" role="group"> 
                                    <a href=<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Order/Update?id=".$order["order"]["id"]?> class="btn btn-primary mx-2"style="background-color: #28a745; border-color: #28a745; color: #fff;"> 
                                         <i class="bi bi-pencil-square"></i> Edit 
                                    </a> 
                                    <a href=<?= URL_ROOT . URL_SUBFOLDER ."/Admin/Order/Delete?id=".$order["order"]["id"] ?> class="btn btn-danger mx-2"> 
                                        <i class="bi bi-trash-fill"></i> Delete 
                                    </a> 
                                </div> 
                            </td>
                         </tr> 
                <?php endforeach; ?>
             </tbody>
         </table>
       
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>