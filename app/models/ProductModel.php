<?php

/**
 *
 */
class ProductModel
{

  private $table = 'product';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getProduct()
  {
    $this->db->query('SELECT * FROM '.$this->table);
    return $this->db->resultSet();
  }

  public function getProductById($id)
  {
    $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function addDataItem($data)
  {
    $query = "INSERT INTO ".$this->table." VALUES ('',:product, :price, :photo)";

    $this->db->query($query);
    $this->db->bind('product', $data['name']);
    $this->db->bind('price', $data['price']);
    $this->db->bind('photo', $data['photo']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function deleteDataItem($id)
  {
    $query = "DELETE FROM ".$this->table." WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }
}


?>
