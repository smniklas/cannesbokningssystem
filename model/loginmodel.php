<?php
    class Loginmodel{
        private $session;
        private $database;
        public function __construct(Session $session, DataBase $database){
            $this->session = $session;
            $this->database = $database;
        }
        
        
    }
?>