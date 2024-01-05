<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insert.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
.main{
    background-color: gainsboro;
    margin-top: 10px;
    max-width: 400px;

}
input{
    margin: 10px;
}
#form-upsert-product {
        width: 100%; /* Điều chỉnh độ rộng của form theo mong muốn của bạn */
        padding: 20px;
    }
</style>
</head>
<body>

<center>
<div class="card shadow border-0 mt-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
    <div class="row">
        <div class="col-12 text-center">
            
                <h2 class="text-white py-2">UPDATE PRODUCT</h2>
        </div>
    </div>
    </div>
        <div class="main" >
        <form id="form-upsert-product" class="col-12 tex-center"action=<?="/" . URL_SUBFOLDER . "/Admin/Product/update1" ?> method="post" class="row">
        <input type="hidden" value="<?php  echo $product["id"]?>" name="id">
            <label for="">Name:</label>
            <input type="text" value="<?php  echo $product["product_name"]?>" name="name"><br>
            <label for="">Price :</label>
            <input type="text" value="<?php echo $product["product_price"]?>" name="price"><br>
            <label for="category_id">Category:</label>
            <select name="category_id" id="">
            <?php $i = 1; foreach($categories as $category): ?> 
                <option value="<?php echo $category["id"]?>"><?= $category["categorie_name"] ?></option>
            <?php endforeach?>
            </select><br>
            <button type="submit" name="update" class = 'btn btn-danger m-2'>Update</button>

        </form>
    </div>
        </center>

    </body>    
</html>