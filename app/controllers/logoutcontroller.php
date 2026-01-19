<?php
class logout{
    public function logout(){
        session_destroy();
        header("Location: /login");
    }
}