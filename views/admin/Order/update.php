<style>
* {
  box-sizing: border-box;
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
.btn-primary  {
        background-color: #dc3545 !important;
        border-color: #dc3545!important;
        color: #fff;
    }

    .btn-info {
        background-color: #28a745 !important;
        border-color: #28a745 !important;
        color: #fff !important;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <div class="card shadow border-0 mt-4 col-12">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3 ">
    <div class="row ">
        <div class="col-12 text-center">
            
                <h2 class="text-white py-2">UPDATE Order</h2>
        </div>
    </div>
    </div>
    <div class="card-body p-4 ">
        <form id="form-upsert-category" class="col-12"action=<?="/" . URL_SUBFOLDER . "/Admin/Order/UpdatePost" ?> method="post" class="row">
            <div cl ass="border p-3 ">
               
                <div class="form-group form-floating py-2 col-12">
                  <label class="ms-2">address</label>
                  <input class="form-control border-0 shadow"  name="address" value="<?=$order["address"]?>"/>
                    
                </div>
                <div class="form-group form-floating py-2 col-12">
                  <label class="ms-2">Phone no</label>
                  <input class="form-control border-0 shadow"  name="phone_no" value="<?=$order["phone_no"]?>"/>
                    
                </div>
                <div class="form-group form-floating py-2 col-12">
                  <label class="ms-2">Amount</label>
                  <input class="form-control border-0 shadow"  name="amount" value="<?=$order["amount"]?>"/>
                    
                </div>
                <div class="form-group form-floating py-2 col-12">
                  <label class="ms-2">Payment mode</label>
                  <input class="form-control border-0 shadow"  name="payment_mode" value="<?=$order["payment_mode"]?>"/>
                    
                </div>
                <div class="form-group form-floating py-2 col-12">
                  <label class="ms-2">Order status</label>
                  <input class="form-control border-0 shadow"  name="order_status" value="<?=$order["order_status"]?>"/>
                    
                </div>
                <input hidden name="id" value="<?=$order["id"]?>">
                <input hidden name="create_at" value="<?=(new DateTime($order["create_at"])) ? htmlspecialchars((new DateTime($order["create_at"]))  -> format('Y-m-d H:i:s')) : null?>">
                <input hidden name="zip_code" value="<?=$order["zip_code"]?>">
                <input hidden name="user_id" value="<?=$order["user_id"]?>">
                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control">Update</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href=<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Order"?> class="btn btn-info btn-outline-primary border form-control">
                            Back to List
                        </a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
