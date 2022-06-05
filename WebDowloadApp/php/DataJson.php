<?php
    class DataJson{
        private $links;

        public function __construct($link){
            $this->links = $link;
        }

        public function getAllUser(){
            return json_decode(file_get_contents($this->links), true);
        }
        
        public function getData(){
            $data = $this->getAllUser();
            return $data;
        }
    }
?>