<?php
    include_once 'db.php';

    // It makes validations that user exist
    // and get from dat base data about user.

    class User extends DB {

        private $name;
        private $lastname;
        private $username;

        //This function validated if a user exist inside the DB.
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

        //This function get the firstname,lastname and username from a user from data base .
        public function setUser($user)
        {
            $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
            $query->execute(['user' => $user]);
    
            foreach ($query as $currentUser) {
                $this->name = $currentUser['firstname'];
                $this->lastname = $currentUser['lastname'];
                $this->username = $currentUser['username'];
            }
        }

        //This function return the firstname,lastname and username from a user from data base .
        public function getNombre()
        {
            return ($this->firstname ." " .  $this->lastname);
        }



    }


?>