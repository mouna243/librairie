<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<?php
   class Book
    {

        private int $id;
        private string $nom;
        private string $auteur;
        private string $date_publication;
        private bool $emp;
        private string $img;


        public function __construct(array $data)
        {
            $this->id = $data['id'];
            $this->nom = $data['nom'];
            $this->auteur = $data['auteur'];
            $this->date_publication = $data['date_publication'];
            $this->emp = $data['emp'];
            $this->img = $data['img'];
        }
        public function isAvailabel()
        {
            return $this->emp ;
        }

        public function getid(){
               return $this->id ;
        }
        public function getnom(){
            return $this->nom;
        }
        public function getauteur(){
             return $this->auteur;
        }
        public function getdatepub(){
            return $this->date_publication;
        }
        public function getemp(){
              return $this->emp;
        }
        public function getimg(){
            return $this->img;
        }
    }