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

  <div class="container">
    <div class="card shadow border-0 mt-4">
      <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
          <div class="col-12 text-center">

            <h2 class="text-white py-2"> PRODUCT</h2>
          </div>
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">product_categorie_id</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $product) : ?>
            <tr>
              <td><?= $product['id'] ?></td>
              <td><?= $product["product_name"] ?></td>
              <td><?= $product["product_price"] ?></td>
              <?php foreach ($categories as $category) : ?>
                <?php
                if ($product["product_categorie_id"] == $category["id"]) {
                  echo '<td>' . $category["categorie_name"] . '</td>';
                } ?>
              <?php endforeach; ?>
              <td><?= (new DateTime($product["create_at"]))->format('Y-m-d H:i:s') ?> </td>
              <td><?= (new DateTime($product["update_at"]))->format('Y-m-d H:i:s') ?> </td>
              <td>
                <div class="w-75 btn-group" role="group">
                  <a href=<?= URL_ROOT . URL_SUBFOLDER . "/Admin/Product/Insert" ?> class="btn btn-primary mx-2" style="background-color: #28a745; border-color: #28a745; color: #fff;">
                    <i class="bi bi-pencil-square"></i> Add
                  </a>
                  <a href=<?= URL_ROOT . URL_SUBFOLDER . "/Admin/Product/Update?id=" . $product["id"] ?> class="btn btn-primary mx-2" style="background-color: #28a745; border-color: #28a745; color: #fff;">
                    <i class="bi bi-pencil-square"></i> Edit
                  </a>
                  <a href=<?= URL_ROOT . URL_SUBFOLDER . "/Admin/Product/Delete?id=" . $product["id"] ?> class="btn btn-danger mx-2">
                    <i class="bi bi-trash-fill"></i> Delete
                  </a>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</body>
</html>