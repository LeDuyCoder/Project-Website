<?php
    require("../php/DataBaseSQLite.php");

    $userName = $_POST["Username"];
    $userEmail = $_POST["email"];
    $userPass = $_POST["password"];
    $userRePass = $_POST["repassword"];

    $dbSQLite = new sqliteDataBase();
    $row = $dbSQLite->getUser($userEmail);
    if(empty($row)){
        if($userPass == $userRePass){
            if($dbSQLite->addUser($userEmail, $userName, $userPass, "FALSE", "FALSE") == true){
                echo "
                <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
                <link href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css' rel='stylesheet'/>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js'></script>
                echo '<script type='text/javascript'>
                    function BackLogin() {
                        window.location='../html/login.html';
                    }

                    setTimeout(BackLogin, 3000);
                    toastr.success('Đăng Kí Thành Công', 'Đăng Kí');
                </script>'
                ";
            };
        }else{
            echo "
            <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
            <link href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css' rel='stylesheet'/>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js'></script>
            echo '<script type='text/javascript'>
                function BackLogin() {
                    window.location='../html/register.html';
                }

                setTimeout(BackLogin, 3000);
                toastr.error('Nhập Lại Mật Khẩu Không Đúng', 'Đăng Kí');
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
                    window.location='../html/register.html';
                }

                setTimeout(BackLogin, 3000);
                toastr.error('Tài Khoản Đã Tồn Tại', 'Đăng Kí');
            </script>'
        ";
    }
?>