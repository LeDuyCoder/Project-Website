<?php
    $userName = $_GET['username'];
    $userMail = $_GET['usermail'];
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>GreenBird</title>
<!-- Meta tag Keywords -->
<link rel="icon" href="../images/logotext.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="../css/main.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/main.js"></script>
</head>
<body>
    <div class="warpper">
        <div class="header">
            <div id="toggle">
                <i class="fas fa-bars"></i>
            </div>

            <div class="submenu">
                <nav>
                    <ul id="menu_list">
                        <li><a href="../php/main.php?username=<?php echo $userName?>&usermail=<?php echo $userMail?>">Trang Chủ</a></li>
                        <li><a href="../php/app.php?username=<?php echo $userName?>&usermail=<?php echo $userMail?>">Ứng Dụng</a></li>
                        <li><a href="../php/document.php?username=<?php echo $userName?>&usermail=<?php echo $userMail?>">Tài Liệu Học</a></li>
                    </ul>
                    
                <nav>
            </div>

            <img src="../images/logotext.png" width="200px" class="img_logo" />
            <center>
                <div class="tb" style="width: 80%">
                    <p class="accoutName"><span style="font-weight: bold">Xin Chào: </span><?php echo $userName ?></p>
                </div>
            </center>
        </div>
    </div>

    <div id="bodyTb">
        </div>
        <center>
            <div class="tb">
                <h3> Chào mừng <span style="color: #6c5ce7"><?php echo $userName ?></span> đến với web của <span style="color: #ff7675"> GreenBird </span> </h3>
                
                <p class="content">
                Mọi thắt mắt có thể liên hệ với admin giải đáp
                </br>
                Khi gặp lỗi ứng dụng hoặc website có thể click vô mục mess ở dưới để liên hệ với ad
                </p>
            </div>

            <div class="tb">
                <h3> Thông Tin Cập Nhật Các Ứng Dụng </h3>
                
                <p class="content">
                <b>Learn Vocabulary:</b> chưa có bản cập nhật mới
                </br>
                <b>App Read News 24H:</b> Mới vừa ra mắt 5/4/2022
                </p>
            </div>
        </center>
    </div>

    <script>window.MBID="lYUPpaAbF";</script><script defer src="https://menu.metu.vn/static/js/sdk.js?container=body"></script>
</body>
</html>