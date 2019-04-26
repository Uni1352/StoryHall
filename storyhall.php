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
        <h1><a href="./index.php">Mobile Story Hall for Blockchain</a></h1>
        <nav>
            <ul class="menu">
                <li class="menu__item"><a href="./about.php">關於區塊鏈</a></li>
                <li class="menu__item"><a href="./history.php">歷史回顧</a></li>
                <li class="menu__item"><a href="./storyhall.php">行動故事館</a></li>
                <li class="menu__item"><a href="./resource.php">學習資源</a></li>
                <!-- <li class="menu__item"><a href="./download.php">下載專區</a></li> -->
                <?php
                if(isset($_SESSION['valid_user'])) {
                    echo "<script type='text/javascript'>";
                    echo "$('nav menu__item').eq(2).show();";
                    echo "</script>";
                ?>  
                <li class="menu__item"><a href="./member.php">會員專區</a></li>
                <?php    
                }
                else
                {
                    echo "<script type='text/javascript'>";
                    echo "$('nav menu__item').eq(2).hide();";
                    echo "</script>";
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
            <div class="container__item">
            <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
            <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">區塊鏈</h3>
        </div>
        <div class="container__item">
            <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
            <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">智能合約</h3>
        </div>
        <div class="container__item">
            <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
            <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">比特幣與挖礦</h3>
        </div>
        <div class="container__item">
            <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
            <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">選舉</h3>
        </div>
        <div class="container__item">
            <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
            <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">醫療</h3>
        </div>
        <div class="container__item">
            <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
            <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">國際貿易</h3>
        </div>
        <div class="container__item">
            <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
            <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">保險</h3>
        </div>
        <div class="container__item">
            <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
            <h3 class="container__subtitle" style="color: rgb(70, 49, 206)">生產履歷</h3>
        </div>
    </div>
    <?php    
    }
    else
    {
    ?>
        echo '<br><br><br><br><br><br><p>不讓你看</p>
    <?php    
    }
    ?>
</body>

</html>