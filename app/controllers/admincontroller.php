<?php

require_once __DIR__ . "/../controllers/usercontroller.php";
class admin extends users
{
    public function admin()
    {
        require_once __DIR__ . "/../../config/database.php";
        $database = new Database();
        $pdo = $database->getconn();
        $sql = "SELECT firstname ,lastname ,email FROM admin WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id' => $_SESSION['user_id']
        ]);
        $arr = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->setFirstname($arr['firstname']);
        $this->setLastname($arr['lastname']);
        $this->setEmail($arr['email']);
  

    }
}

?>