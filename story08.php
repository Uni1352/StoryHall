<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>行動故事館</title>
    <link rel="stylesheet" href="./stylesheets/css/normalize.css">
    <link rel="stylesheet" href="./stylesheets/css/style.css">
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
    <div class="container" style="flex-direction: column">
        <h2 class="container__title"></h2>
        <video src="./media/Traceability.mp4" controls></video>
        <div class="container__item">
            <h3 class="container__subtitle"></h3>
            <p class="container__content"></p>
            <p class="container__content"></p>
        </div>
        <div style="margin: 0 auto">
            <a href="./test.php"><input type="button" value="開始測驗" id="test"></a>
        </div>
    </div>
</body>

</html>