<?php
    include_once 'db.php';

    // It makes validations that user exist
    // and get from dat base data about user.

    class User extends DB {

        private $nombre;
        private $apellido;
        private $username;

        //This function validated if a user exist into
        public function userExists($username)
        {
            $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
            $query->execute(['user' => $username]);
    
            if($query->rowCount()){
                return true;
            }else{
                return false;
            }
        }

    }


?>