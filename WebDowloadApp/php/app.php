<?php 
    require 'DataJson.php';
    $userName = $_GET['username'];
    $userMail = $_GET['usermail'];
    $datajson = new Datajson("../data/data.json");
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
<link rel="stylesheet" href="../css/main.css" type="text/css" media="all" />
<link rel="stylesheet" href="../css/app.css" type="text/css" media="all" />

<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                </nav>
            </div>

            <img src="../images/logotext.png" width="200px" class="img_logo" />
        </div>

        <center>
            <div class="tb" style="width: 80%">
                <span class="accoutName"><span style="font-weight: bold">Xin Chào: </span><?php echo $userName ?></span>
            </div>
        </center>
        
    </div>
        
    <div class = "app_normal">
        <?php foreach ($datajson->getData() as $app): ?>
            <div class="tag_apps">
                <div class="imgs">
                    <center><img id="image" src=<?php echo $app["img"] ?> width=<?php echo $app["width"] ?> height=<?php echo $app["height"] ?>></center>
                </div>
                <div class="title">
                    <span><span style="font-weight: bold">Ứng dụng:</span> <span style="color: #d63031"><?php echo $app["title"] ?></span></span>
                </div>
                <div class="discription">
                    <span><?php echo $app["discription"] ?></span>
                </div>
                <a class="btn btn-success" href=<?php echo $app["link"] ?>>Dowload</a>
            </div>
            <?php endforeach;; ?>    
    </div>

    <script>window.MBID="lYUPpaAbF";</script><script defer src="https://menu.metu.vn/static/js/sdk.js?container=body"></script>
</body>
</html>