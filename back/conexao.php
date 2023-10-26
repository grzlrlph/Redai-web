<?php
    class db{
        private $host = 'localhost';

        private $usuario = 'root';

        private $senha = '210206gr';

        private $database = 'redaidb';

        public function conecta_mysql(){
            $con = mysqli_connect($this->host, $this->usuario, 
            $this->senha ,$this->database);
    
            return $con;
    
        }
        
    }
