<?php
include(VIEWS . 'inc/header.php');
?>
<div class="container  ">
    <div class="row">
        <div class="col-md-8 m-auto text-center">
            <div class=" bg-light alert alert-danger text-center m-auto">
                Data Deleted Success
            </div>

            <a class="btn btn-primary btn-lg" href="<?php url('product'); ?>" role="button">Show All Products</a>
        </div>
    </div>
</div>


<?php
include(VIEWS . 'inc/footer.php');
?>