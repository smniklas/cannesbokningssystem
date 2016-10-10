<?php
    class Database{
        private $firebase;
        
        public function __construct($database){
            $this->firebase = $database;
        }
    }
?>