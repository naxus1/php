<?php
    include_once 'db.php';

    // It makes validations that user exist
    // and get from dat base data about user.

    class User extends DB {

        private $firstname;
        private $lastname;
        private $username;

        //This function validated if a user exist inside the DB.
        public function userExists($user)
        {
            $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
            $query->execute(['user' => $user]);
    
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
                $this->firstname = $currentUser['firstname'];
                $this->lastname = $currentUser['lastname'];
                $this->username = $currentUser['username'];
            }
        }

        //This function return the firstname,lastname and username from a user from data base .
        public function getData()
        {
            $datosUser = array();
            array_push($datosUser, $this->firstname, $this->lastname, $this->username);
            return $datosUser;
        }

        //This function returns the courses from a user whose grade is greater to 90.
        public function GetUserCourses($username)
        {
            $finalNote = 90;
            $query = $this->connect()->prepare('SELECT * FROM curses WHERE username= :user AND note >= :finalnote');
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute(['user' => $username, 'finalnote' => $finalNote]);
            return $query;
        }

        public function capitalWords($mytext)
        {
            $text = strtolower($mytext);
            $text = ucwords($text);
            return $text;
        }

    }
?>
