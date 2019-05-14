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
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <!-- TODO: header & navbar -->
    <header>
        <h1><a href="./index.php" title="回首頁">Mobile Story Hall for Blockchain</a></h1>
        <nav>
            <ul class="menu">
                <li class="menu__item"><a href="./about.php">關於區塊鏈</a></li>
                <li class="menu__item"><a href="./history.php">歷史回顧</a></li>
                <li class="menu__item"><a href="./resource.php">學習資源</a></li>
                <!-- <li class="menu__item"><a href="./download.php">下載專區</a></li> -->
                <?php
                if(isset($_SESSION['valid_user'])) {
                   
                ?>  
                <li class="menu__item"><a href="./storyhall.php">行動故事館</a></li>
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
        <div class="container__item">
            <div>
                <h2 class="container__title">學習資源</h2><br>
                <p>提供目前線上有提供區塊鏈知識的媒體社群、電子報、論壇、電子書等相關外部網站連結。</p>
            </div>
        </div>
        <div class="container__item">
            <ol class="container__list" style="line-height: 2.5rem">
                <li class="container__listItem"><a href="https://www.blocktempo.com/" target="_blank">動區</a></li>
                <li class="container__listItem"><a href="https://blocktrend.today/" target="_blank">區塊勢，會說話的區塊鏈電子報</a></li>
                <li class="container__listItem"><a href="https://block0.org/" target="_blank">Block0，極簡區塊鏈</a></li>
                <li class="container__listItem"><a href="https://blockcast.it/" target="_blank">區塊客</a></li>
                <li class="container__listItem"><a href="https://blablablock.asia/" target="_blank">Bla Bla BLOCK 論壇</a>
                </li>
                <li class="container__listItem"><a href="http://www.blocktimes.tw/index/index.php"
                        target="_blank">blocktimes</a></li>
                <li class="container__listItem"><a href="https://www.facebook.com/groups/1635383210119188/"
                        target="_blank">Blockchain
                        的前世今生與未來Public Group | Facebook</a></li>
                <li class="container__listItem"><a href="https://fintech.csie.ntu.edu.tw/" target="_blank">臺大金融科技區塊鏈</a>
                </li>
                <li class="container__listItem"><a href="https://www.mokoversity.com/blockchain"
                        target="_blank">Mokoversity，Blockchain
                        一站式學習區塊鏈技術指南</a></li>
                <li class="container__listItem"><a href="https://poweichen.gitbook.io/blockchain-guide-zh/"
                        target="_blank">區塊鏈技術指南</a></li>
            </ol>
        </div>
    </div>
    <!-- <script src="./stylesheets/js/authentication.js"></script> -->
</body>

</html>