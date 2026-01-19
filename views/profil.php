<?php 


if ($_SESSION['USER'] == 'READER'){
    require_once __DIR__ ."/../views/profilereader.php" ;
}else{
    require_once __DIR__ ."/../views/profileadmin.php" ;
}

   
