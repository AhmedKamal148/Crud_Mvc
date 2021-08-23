<?php


include(VIEWS . 'inc/header.php');
?>
<h1 class="text-center">Edit Product</h1>
<div class="container mt-3">
    <?php if (isset($success)) : ?>
    <h1 class="alert alert-success text-center">Data Updated Successfuly</h1>
    <?php endif ?>
    <form method="POST" action="<?php url("product/update/" . $row['id']); ?>" class="bg-light text-center">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control w-50 m-auto"
                id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Price</label>
            <input type="number" min="0" name="price" value="<?php echo $row['price']; ?>"
                class="form-control w-50 m-auto" id="exampleInputPrice">
        </div>

        <div class="mb-3">
            <textarea name="description" value="<?php echo $row['description']; ?>" id="exampleInputDescription "
                cols="50" rows="15" placeholder="Description"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleInputQuantity" class="form-label">Quantity</label>
            <input type="number" min="0" name="qty" value="<?php echo $row['qty']; ?>" class="form-control w-50 m-auto"
                id="exampleInputQuantity">
        </div>


        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
        <a class="btn btn-info" href="<?php url('product') ?>">Show All</a>

    </form>



</div>



<?php

include(VIEWS . 'inc/footer.php');
?>