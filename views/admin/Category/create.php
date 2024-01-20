<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style> 

    .card-header {
        border: none; /* Remove border */
        border-radius: 10px 10px 0 0; /* Adjust border radius */
    }

    .card {
        width: 100%;
        height: auto;
        border: 2px solid #ced4da;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #dc3545;
        border-color: #dc3545;
        color: #fff;
    }

    .btn-info {
        background-color: #28a745;
        border-color: #28a745;
        color: #fff;
    }

    .button-row {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 2rem;
    }
</style>

    
</style>
    <div class="card shadow border-0 mt-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
    <div class="row">
        <div class="col-12 text-center">
            
                <h2 class="text-white py-2">CREATE CATEGORY</h2>
        </div>
    </div>
    </div>
    <div class="card-body p-4">
        <form id="form-upsert-category"class="col-12" action=<?="/" . URL_SUBFOLDER . "/Admin/Category/CreatePost" ?> method="post" class="row">
            <div cl ass="border p-3">
               
                <div class="form-group form-floating py-2 col-12">
                    <label class="ms-2">Name</label>
                    <input class="form-control border-0 shadow"  name="name"/>
                    
                </div>

                <div class="row pt-2 ">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control">Create</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href=<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Category"?> class="btn btn-info btn-outline-primary border form-control">
                            Back to List
                        </a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>