<?php

require_once __DIR__ . "/../controllers/usercontroller.php";
class signeup extends users
{
  

    public function signeup()
    {
        require_once __DIR__ . "/../../config/database.php";

        $data = new Database();
        $pdo = $data->getconn();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['firstname']) || empty($_POST['lastname'])) {
                echo "remplir tout les champs";
            } else {
                $this->setFirstname($_POST['firstname']);
                $this->setLastname($_POST['lastname']);
                $this->setEmail($_POST['email']);
                $hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $this->setPassword($hache);

                $name = $this->getFirstname();
                $lastname = $this->getLastname();
                $email = $this->getEmail();
                $password = $this->getPassword();
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "email non valide";
                    return;
                }
                if (strlen($password) < 8) {
                    echo "mot de passe non valide";
                    return;
                }
                if (strlen($name) < 2) {
                    echo "nom non valide";
                    return;
                }
                if (strlen($lastname) < 2) {
                    echo "prenom non valide";
                    return;
                }
                $requet = "INSERT INTO users (email, password, firstname, lastname) VALUES (:email, :password, :firstname, :lastname)";
                $stmt = $pdo->prepare($requet);
                $stmt->execute([
                    'email' => $email,
                    'password' => $password,
                    'firstname' => $name,
                    'lastname' => $lastname
                ]);
                header("Location: /login");
            }
        }
    }
}