<?php


class Product extends DB
{
    private $table = "products";
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
        $this->getAllProducts();
    }
    public function getAllProducts()
    {
        return $this->conn->get($this->table);
    }

    public function insertProduct($data)
    {
        return  $this->conn->insert($this->table, $data);
    }


    public function deleteProduct($id)
    {
        $db = $this->conn->where('id', $id[0]);
        return $db->delete($this->table);
    }

    public function editProduct($id)
    {
        $db = $this->conn->where('id', $id[0]);
        return $db->getOne($this->table);
    }

    public function updateProduct($id, $data)
    {
        $db = $this->conn->where('id', $id[0]);
        return $db->update($this->table, $data);
    }
}