<?php

class Database
{
        private $conn;

        public function __construct()
        {
                $env = parse_ini_file(__DIR__ . "/../config/.env");
                $host = $env["DB_HOST"];
                $pw = $env["DB_PW"];
                $name = $env["DB_NAME"];
                $user = $env["DB_ROOT"];

                try {
                        $this->conn = new PDO("mysql:host=$host;dbname=$name", $user, $pw, );
                        // hadi pour l'affichage des erreur a une maniere plus detailler et priciser
                        $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                      
                } catch (PDOException $e) {
                        $erreur = $e->getMessage();
                        echo $erreur;
                }
        }

        public function getconn()
        {
                return $this->conn;
        }
}


