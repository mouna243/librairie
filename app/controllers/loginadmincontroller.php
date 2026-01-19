<?php
require_once __DIR__ . "/../controllers/usercontroller.php";

class loginadmin extends users
{

    public function login()
    {

        require_once __DIR__ . "/../../config/database.php";
        $data = new Database();
        $pdo = $data->getconn();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (empty($_POST["email"]) || empty($_POST["password"])) {
                echo "<p id='flashmessage' class ='z-50 absolute top-1/4 bg-[#f5be8b] text-[#4e2601] border-[10px] rounded-[40px] p-[10px] text-[20px]'>Remplir tout les champs<i class='fa-regular fa-face-smile-beam'></i></p>";
                return;
            } else {
                $this->setEmail($_POST['email']);
                $email = $this->getEmail();
                $this->setPassword($_POST['password']);
                $password = $this->getPassword();

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p id='flashmessage' class ='z-50 absolute top-1/4 bg-[#f5be8b] text-[#4e2601] border-[10px] rounded-[40px] p-[10px] text-[20px]'>entrer un email sous forme de \"exemple@email.com\"<i class='fa-regular fa-face-smile-beam'></i></p>";
                    return;
                }
                //verification de l'email
                $requet = "SELECT id ,email, password FROM admin where email = :email ";
                $stmt = $pdo->prepare($requet);
                $stmt->execute([
                    'email' => $email
                ]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                var_dump($row);
                if ($row && password_verify($password, $row["password"])) {
                    $_SESSION["situ"] = true;
                    $_SESSION["USER"] = "ADMIN";
                    $_SESSION["user_id"] = $row['id'];
                    header("Location: home");
                    exit;
                } else {
                    echo "<p id='flashmessage' class ='z-50 absolute top-1/4 bg-[#f5be8b] text-[#4e2601] border-[10px] rounded-[40px] p-[10px] text-[20px]'>le email ou  bien le mot de pass est faut <i class='fa-regular fa-face-smile-beam'></i></p>";

                }
            }
        } else {
            echo "<script>console.log('utilise la methode post');</script>";
        }


    }
}