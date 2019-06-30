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
                <li class="menu__item"><a href="./storyhall.php">行動故事館</a></li>
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
        <!-- <video src="./media/BitcoinAndMining.mp4" controls></video> -->
        <div class="container__item">
            <h3 class="container__subtitle">區塊鍊投票</h3>
            <p class="container__content">睿家身處的國家離總統大選的日子愈來愈近了，而如果這次中選會設計投票的動線不佳，可能導致投票當天，民眾一等就是一整個下午。因此，社會上開始有人在討論區塊練應用在整個投票流程是否可行。好奇的睿家決定一探究竟，整理了區塊鍊應用在投票的情境上，到底會有哪些部分可能產生影響。</p>
            <p>優點：</p>
            <ol class="container__list">
                <li class="container__listitem">每一個節點都是平等的</li>
                <li class="container__listitem">紀錄是可追溯的</li>
                <li class="container__listitem">節省選舉人事成本和時間資源</li>
            </ol>
            <p>缺點：</p>
            <ol class="container__list">
                <li class="container__listitem">不安全</li>
            </ol>
            <p>過程：</p>
            <ol class="container__list">
                <li class="container__listitem">每一個節點都是平等的</li>
                <li class="container__listitem">紀錄是可追溯的</li>
                <li class="container__listitem">節省選舉人事成本和時間資源</li>
            </ol>
        </div>
        <div style="margin: 0 auto">
            <a href="./test.php"><input type="button" value="開始測驗" id="test"></a>
        </div>
    </div>
</body>

</html>