<?php

    //It makes the conexion to Data base.
    class DB {
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;
        private $port;

        public function __construct()
        {
            $this->host = '127.0.0.1';
            $this->db = 'compras';
            $this->user = 'naxus1';
            $this->password = '231101Lina.';
            $this->port = 8889;
        }

        public function connect()
        {
            try
            {
                $connection = "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db;
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_EMULATE_PREPARES => FALSE];
                $pdo = new PDO($connection, $this->user, $this->password, $options);
            } 
            catch (PDOException $e)
            {
                print_r("Error en la conexión" . $e->getMessage());
            }
        }

    }
?>