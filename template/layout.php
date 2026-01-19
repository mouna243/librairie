<?php
class router
{
    public function __construct()
    {
        $page = $_SERVER['REQUEST_URI'];

        $views = ['/about', '/booklo', '/libary', '/home' , '/profil' ,'/crud' ,'/emprints'];
        $auth = ['/signin', '/login' , '/loginadmin' , '/logout' ,'/singadmin' ];
        if ($page === "/") {
              require_once __DIR__ . "/../views/home.php";
        } else if (in_array($page, $views)){
            require_once __DIR__ . "/../views$page.php";
            
        } elseif (in_array($page, $auth)){
            require_once __DIR__ . "/../auth$page.php";

        } else {
            require_once __DIR__ . "/../views/error.php";
        }

    }
}

$router = new router();