<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../controllers/usercontroller.php";
class reader extends users
{


    public function reader()
    {

       
        $database = new Database();
        $conn = $database->getconn();
        $sql = "SELECT firstname,lastname,email FROM users WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'id' => $_SESSION['user_id']
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->setFirstname($row['firstname']);
        $this->setLastname($row['lastname']);
        $this->setEmail($row['email']);
    }
}