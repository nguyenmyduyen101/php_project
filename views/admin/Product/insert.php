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
        .main {
            background-color: gainsboro;
            margin-top: 10px;
            max-width: 400px;
        }

        input {
            margin: 10px;
        }
    </style>
</head>

<body>

    <center>
        <div class="card shadow border-0 mt-4">
            <div class="card-header bg-secondary bg-gradient ml-0 py-3">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-white py-2">CREATE PRODUCT</h2>
                    </div>
                </div>
            </div>
            <div class="main">
                <form id="form-upsert-product" class="col-12" action=<?= "/" . URL_SUBFOLDER . "/Admin/Product/insert1" ?> method="post" class="row">
                    <label for="">Name:</label>
                    <input type="text" name="name"><br>
                    <label for="">Price :</label>
                    <input type="text" name="price"><br>
                    <label for="category_id">Category:</label>
                    <select name="category_id" id="">
                        <?php $i = 1;
                        foreach ($categories as $category) : ?>
                            <option value="<?php echo $category["id"] ?>"><?= $category["categorie_name"] ?></option>
                        <?php endforeach ?>
                    </select><br>
                    <button type="submit" class='btn btn-danger m-2'>Insert</button>
                </form>
            </div>
    </center>

</body>

</html>