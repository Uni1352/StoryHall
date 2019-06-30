<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewh3ort" content="width=device-width, initial-scale=1.0">
    <meta htth3-equiv="X-UA-Comh3atible" content="ie=edge">
    <title>行動故事館</title>
    <link rel="stylesheet" href="./stylesheets/css/normalize.css">
    <link rel="stylesheet" href="./stylesheets/css/style.css">
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <!-- TODO: header & navbar -->
    <header>
        <h1><a href="./index.php" title="回首頁">Mobile Story Hall for Blockchain</a></h1>
        <nav>
            <ul class="menu">
                <li class="menu__item"><a href="./about.php">關於區塊鏈</a></li>
                <?php
                if(isset($_SESSION['valid_user'])) {   
                ?> 
                <li class="menu__item"><a href="./storyhall.php">行動故事館</a></li>
                <?php    
                }                   
                ?>
                <li class="menu__item"><a href="./history.php">歷史回顧</a></li>
                <li class="menu__item"><a href="./resource.php">學習資源</a></li>
                <!-- <li class="menu__item"><a href="./download.php">下載專區</a></li> -->
                <?php
                if(isset($_SESSION['valid_user'])) {
                   
                ?>  
                <li class="menu__item"><a href="./member.php">會員專區</a></li>
                <?php    
                }
                else
                {
                    
                ?>
                <li class="menu__item"><a href="./login.php">登入</a></li>
                <?php    
                }
                ?>
            </ul>
        </nav>
    </header>
    <!-- TODO: container -->
    <?php
    if(isset($_SESSION['valid_user'])) {
    ?>    
    <div class="container">
        <div id="story">
            <a href="./story01.php">
                <div class="container__item">
                    <div class="container__image"><img src="./images/storyhall/mining.png" alt=""></div>
                    <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">比特幣與挖礦</h3>
                </div>
            </a>
            <a href="./story02.php">
                <div class="container__item">
                    <div class="container__image"><img src="./images/storyhall/pay.png" alt=""></div>
                    <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">支付</h3>
                </div>
            </a>
            <a href="./story03.php">
                <div class="container__item">
                    <div class="container__image"><img src="./images/storyhall/chart.png" alt=""></div>
                    <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">證券</h3>
                </div>
            </a>
            <a href="./story04.php">
                <div class="container__item">
                    <div class="container__image"><img src="./images/storyhall/vote.png" alt=""></div>
                    <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">選舉</h3>
                </div>
            </a>
            <a href="./story05.php">
                <div class="container__item">
                    <div class="container__image"><img src="./images/storyhall/hospital.png" alt=""></div>
                    <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">醫療</h3>
                </div>
            </a>
            <a href="./story06.php">
                <div class="container__item">
                    <div class="container__image"><img src="./images/storyhall/world.png" alt=""></div>
                    <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">國際貿易</h3>
                </div>
            </a>
            <a href="./story07.php">
                <div class="container__item">
                    <div class="container__image"><img src="./images/storyhall/insurance.png" alt=""></div>
                    <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">保險</h3>
                </div>
            </a>
            <a href="./story08.php">
                <div class="container__item">
                    <div class="container__image"><img src="./images/storyhall/document.png" alt=""></div>
                    <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">生產履歷</h3>
                </div>
            </a>
        </div>      
    </div>
    <?php    
    }
    else
    {
        $url = "./login.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";    
    }
    ?>
</body>

</html>