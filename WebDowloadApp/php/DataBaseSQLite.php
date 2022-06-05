<?php 
    class sqliteDataBase{
        public $db;

        function __construct() {
            $this->db = new SQLite3('../data/userAccount.db');
        }

        public function getUser($userEmail){
            $res = $this->db->query("SELECT * FROM Account WHERE mail = '{$userEmail}' ");
            $row = $res->fetchArray();
            if(!$res) {
                print_r($mysqli->error);
            }else{
                return $row;
            }
        }

        public function addUser($mail, $userName, $pass, $admin, $premeum = "FALSE"){
            $res = $this->db->exec("INSERT INTO Account (mail, name, pass, admin, premeum) VALUES ('{$mail}', '{$userName}', '{$pass}', '{$admin}', {$premeum})");
            return true;
        }
    }
?>