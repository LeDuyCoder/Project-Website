<?php
	$login = $_POST['Name'];
	$pass = $_POST['Password'];

    require("../php/DataBaseSQLite.php");
    $dbSQLite = new sqliteDataBase();
    $row = $dbSQLite->getUser($login);
    if(!empty($row)){
        if($row['pass'] == $pass){
            header("Location: ../php/main.php?username={$row['name']}&usermail={$row['mail']}");
        }else{
            echo "
            <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
            <link href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css' rel='stylesheet'/>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js'></script>
            echo '<script type='text/javascript'>
                function BackLogin() {
                    window.location='../html/login.html';
                }

                setTimeout(BackLogin, 3000);
                toastr.error('Mật Khẩu Không Đúng', 'Đăng Nhập');
            </script>'
        ";
        }
    }else{
        echo "
            <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
            <link href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css' rel='stylesheet'/>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js'></script>
            echo '<script type='text/javascript'>
                function BackLogin() {
                    window.location='../html/login.html';
                }

                setTimeout(BackLogin, 3000);
                toastr.error('Email không tồn tại', 'Đăng Nhập');
            </script>'
        ";
    }

?>