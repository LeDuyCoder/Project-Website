<?php 
    require("../php/DataBaseSQLite.php");
    $dbSQLite = new sqliteDataBase();

    $data = $dbSQLite->getUser("duyga544@gmail.com");
    echo $data["name"];
?>