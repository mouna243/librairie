<?php

class Libary
{
    private  $id;
    private $nom;
    private $auteur;
    private  $date_emp;
    private  $date_retour;


    public function setnom($nom)
    {
        $this->nom = $nom;
        return $this;

    }
    public function setauteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }
    public function setdateemp($date_emp)
    {
        $this->date_emp = $date_emp;
        return $this;
    }
    public function setdateretour($date_retour)
    {
        $this->date_retour = $date_retour;
        return $this;
    }
    public function getid()
    {
        return $this->id;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function getauteur()
    {
        return $this->auteur;
    }

    public function getdateemp()
    {
        return $this->date_emp;
    }
    public function getdateretour()
    {
        return $this->date_retour;
    }
    public function labery()
    {
        require_once __DIR__ . "/../../config/database.php";


        $id_user = $_SESSION['user_id'];
      
        echo $id_user;

        $data = new Database();
        $pdo = $data->getconn();
        $stmt = $pdo->prepare("SELECT b.nom, b.auteur, e.date_emp, e.date_return FROM emp as e INNER JOIN book as b ON e.id_book = b.id WHERE e.id_user = :id");
        $stmt->execute([
            'id' => $id_user
        ]);

        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($rows);
        
        if ($rows) {
            
            $this->setnom($rows['b.nom']);
            $this->setauteur($rows[' b.auteur']);
            $this->setdateemp($rows['e.date_emp']);
            $this->setdateretour($rows['e.date_return']);
            
            }
            
        return $this;

    }

}



?>