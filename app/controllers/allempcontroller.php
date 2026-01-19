<?php

require_once __DIR__ . "/../app/controllers/libarycontroller.php";



class allemp extends Book
{
    public function allemp()
    {

        require_once __DIR__ . "/../config/database.php";
        $data = new Database();
        $pdo = $data->getconn();
        $stmt = $pdo->query("SELECT * FROM emp INNER JOIN book ON emp.id_book = book.id ;");
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->set($rows);
    }
}
