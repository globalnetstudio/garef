<?php
  class Connection {
    private $mysqli;
    private $server = "localhost";
    private $username = "webg8_x4585";
    private $password = "hQ1A+LcSGc{U";
    private $database = "webg8_garef";

    public function __construct() {
      $this->mysqli = new mysqli(
        $this->server,    // Host
        $this->username,  // Username
        $this->password,  // Password
        $this->database   // Database
      );

      if($this->mysqli->connect_errno) {
        die('<p style="color:red;">No se pudo realizar la conección: '.$this->mysqli->connect_error.'</p>');
      }
    }

    public function close()
    {
      $this->mysqli->close();
    }

    public function categories()
    {
      return $this->mysqli->query("SELECT * FROM categories");
    }

    public function category($id)
    {
      return $this->mysqli->query("SELECT * FROM categories WHERE id = ".$id." LIMIT 1");
    }

    public function createImage($image)
    {
      $sql  = "INSERT INTO images (name, category_id, path)";
      $sql .= " VALUES (";
      $sql .= "'".$image['name']."', ";
      $sql .= $image['category_id'].", ";
      $sql .= "'".$image['path']."')";

      return $this->mysqli->query($sql);
    } 

    public function images($category_id)
    {
      return $this->mysqli->query("SELECT * FROM images WHERE category_id = ".$category_id);
    }

    public function image($id)
    {
      $result = $this->mysqli->query("SELECT * FROM images WHERE id = " . $id . " LIMIT 1");
      return $result->fetch_assoc();
    }

    public function removeImage($id)
    {
      return $this->mysqli->query("DELETE FROM images WHERE id = " . $id);
    }
  }

?>