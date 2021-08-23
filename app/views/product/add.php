<?php


include(VIEWS . 'inc/header.php');
?>
<h1 class="text-center">Add New Product</h1>
<div class="container mt-3">
    <?php
    if (isset($success)) : ?>
    <h3 class="alert alert-success text-center"><?php echo $success ?> </h3>
    <?php endif; ?>
    <form method="POST" action="<?php url('product/store'); ?>" class="bg-light text-center">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" name="name" class="form-control w-50 m-auto" id="exampleInputName"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Price</label>
            <input type="number" min="0" name="price" class="form-control w-50 m-auto" id="exampleInputPrice">
        </div>

        <div class="mb-3">
            <textarea name="description" id="exampleInputDescription " cols="50" rows="15"
                placeholder="Description"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleInputQuantity" class="form-label">Quantity</label>
            <input type="number" min="0" name="qty" class="form-control w-50 m-auto" id="exampleInputQuantity">
        </div>


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>



</div>



<?php

include(VIEWS . 'inc/footer.php');
?>