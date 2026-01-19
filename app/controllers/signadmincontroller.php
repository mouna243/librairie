<?php
require_once __DIR__ . "/../controllers/usercontroller.php";
class signeadmin extends users
{
    public function signeup()
    {

        require_once __DIR__ . "/../../config/database.php";

        $db = new Database();
        $pdo = $db->getconn();

                 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              
                $this->setFirstname($_POST['firstname']);
                $this->setLastname($_POST['lastname']);
                $this->setEmail($_POST['email']);
                $pw = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $this->setPassword($pw);
                $firstname = $this->getFirstname();
                $lastname = $this->getLastname();
                $email = $this->getEmail();
                $password = $this->getPassword();
        
                $sql = "INSERT INTO admin (firstname,lastname,email,password) VALUES (:firstname,:lastname,:email,:password)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email,
                    'password' => $password
                ]);


                header("Location: /loginadmin");
        }
    }
}