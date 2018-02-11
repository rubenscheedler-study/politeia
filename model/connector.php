<?php
    class Connector {
        private $host_db = 'localhost';
        private $name_db = 'politeia';
        private $user_db = 'root';
        private $pass_db = '';
        
        public function getConnection() {
            return new PDO("mysql:host=". $this->host_db . "; dbname=".$this->name_db, $this->user_db, $this->pass_db);
        }
    }
?>