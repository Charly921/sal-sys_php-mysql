<div class="container p-4">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <output id="imageUser">
                            <img src="<?php echo URL.RS ?>images/default.png" alt="" class="imageUser" />
                        </output>
                    </div>
                    <div class="card-body">
                        <div class="caption text-center">
                            <label for="files" class="btn btn-primary">Cargar foto</label>
                            <input type="file" id="files" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>