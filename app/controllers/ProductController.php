<?php


class ProductController
{

    public function index()
    {
        $db = new Product();
        $data['products'] = $db->getAllProducts();
        View::load('product/index', $data);
    }

    /** Add Method */

    public function add()
    {
        View::load('product/add');
    }

    /** Insert Method */
    public function Store()
    {

        $db = new Product();

        /**
         * 
         * Catch All Inputs By Post Method;
         */
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $qty = $_POST['qty'];

            /** 
             * $data => Is An Array TO Insert To Data_Base 
             * 
             * */
            $data = array(
                "name" =>           "$name",
                "price" =>          "$price",
                "description" =>    "$description",
                "qty" =>            "$qty",

            );

            if ($db->insertProduct($data) == true) {
                View::load("product/add", ['success' => "Data Created Successfully"]);
            } else {
                View::load("product/add", ["Faild" => "Data Faild Created"]);
            }
        }
    }




    public function delete($id)
    {
        //var_dump($id);
        $db = new Product();

        if ($db->deleteProduct($id)) {
            View::load("product/delete");
        }
    }


    public function edit($id)
    {
        $db = new Product();
        if ($db->editProduct($id)) {
            $data['row'] = $db->editProduct($id);
            View::load("product/edit", $data);
        }
    }

    public function update($id)
    {
        if (isset($_POST['edit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $qty = $_POST['qty'];

            $dataUpdated = array(
                "name" => $name,
                "price" => $price,
                "description" => $description,
                "qty" => $qty
            );

            $db = new Product;
            if ($db->updateProduct($id, $dataUpdated)) {
                View::load('product/edit', ["success" => "Data Updated Successfuly", 'row' => $db->editProduct($id)]);
            }
        }
    }
}