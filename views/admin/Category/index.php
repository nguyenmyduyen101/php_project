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
                <h2 class="text-white py-2">CATEGORY LIST</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="row pb-3">
            <div class="col-6">
            </div>
            <div class="col-6 text-end">
                <a href=<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Category/Create"?> class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>  Create new category
                </a>
            </div>
        </div>
        <table id="tblData" class="table table-bordered table-striped">
             <thead> 
                <th>Stt</th> 
                <th>Name</th> 
                <th>Created at</th> 
                <th>Update at</th> 
                <th></th> 
            </thead> 
            <tbody> 
                <?php $i = 1; foreach($categories as $category): ?> 
                        <tr>
                            <td><?= $i++;?></td> 
                            <td><?= $category["categorie_name"]?></td> 
                            <td><?= (new DateTime($category["create_at"])) -> format('Y-m-d H:i:s')?> </td> 
                            <td><?= (new DateTime($category["update_at"])) -> format('Y-m-d H:i:s')?> </td> 
                            <td> 
                                <div class="w-75 btn-group" role="group"> 
                                    <a href=<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Category/Update?id=".$category["id"]?> class="btn btn-primary mx-2"style="background-color: #28a745; border-color: #28a745; color: #fff;"> 
                                         <i class="bi bi-pencil-square"></i> Edit 
                                    </a> 
                                    <a href=<?= URL_ROOT . URL_SUBFOLDER ."/Admin/Category/Delete?id=".$category["id"] ?> class="btn btn-danger mx-2"> 
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