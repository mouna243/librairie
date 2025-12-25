<?php

class Database
{

    public function __construct(){

        $env = parse_ini_file(__DIR__ . "/../config/.env");
        $host = $env["DB_HOST"];
        $pw = $env["DB_PW"];
        $name = $env["DB_NAME"];
        $user = $env["DB_ROOT"];

        $conn = new PDO($host, $user, $pw, $name);

        if ($conn) {
            echo " ";
        } else {

        }

    }

}

$test = new Database();