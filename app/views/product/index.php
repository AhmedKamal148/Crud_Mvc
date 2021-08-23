<?php
include(VIEWS . 'inc/header.php');
?>
<?php
if (isset($success)) : ?>
<h3 class="alert alert-success text-center"><?php echo $success ?> </h3>
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">

            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($products as $product) : ?>
                    <tr>
                        <td>
                            <?php echo $product['id'] ?>
                        </td>
                        <td>
                            <?php echo $product['name'] ?>
                        </td>
                        <td>
                            <?php echo $product['price'] ?>
                        </td>
                        <td>
                            <?php echo $product['description'] ?>
                        </td>
                        <td>
                            <?php echo $product['qty'] ?>
                        </td>
                        <td>
                            <a href="<?php url('product/edit/' . $product['id']) ?>"
                                class="btn btn-info text-white">Edit</a>
                        </td>
                        <td>
                            <a href="<?php url('product/delete/' . $product['id']) ?>" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>


                </tbody>
            </table>
        </div>
    </div>




</div>



<?php
include(VIEWS . 'inc/footer.php');
?>