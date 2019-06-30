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
        <h2 class="container__title">保險</h2>
        <!-- <video src="./media/BitcoinAndMining.mp4" controls></video> -->
        <div class="container__item">
            <h3 class="container__subtitle">小明的理賠之路</h3>
            <p class="container__content">
                小明是一般上班族，公司派他七月的時候到上海出差拜訪重要客戶，出國前小明擔心中途會發生什麼意料之外的事加上適逢颱風季節，會因延誤到時程而産生額外的支出，所以除了刷機票送的保險之外，也加保旅遊不便險。
            </p>
            <p class="container__content">
                果不其然，班機因颱風延誤了，小明先去處理了行程延誤造成的住宿和交通的問題，接著回報給公司因班機延誤需向客戶更改拜訪時間。小明因擔心失去重要客戶，下了飛機後甚至沒時間去櫃台請領相關證明，急忙就先到客戶那裡拜訪。
            </p>
            <p class="container__content">
                等出差忙完回國後，想到出國前好險有加保旅遊不便險，所以向保險公司申請理賠。不過因所申請所附的證明文件不完整，保險公司表示無法受理理賠，這下慘了，出差先代墊因班機延誤産生的額外支出，小明所受到的損失無處可賠。
            </p>
            <p class="container__content">
                以上述案例來說，旅遊不便險條文繁雜，旅客通常需自行向航空公司取據，再向保險公司舉證班機延誤，由於部份保戶在保險當下並不會仔細查看相關規定或資料收集不完整，導致保險公司無法受理理賠，保戶權益也受到損失。
            </p>
            <p class="container__content">基於以上的原因，試想運用區塊鏈技術可以如何減少人工審查時間，增加理賠速度？</p>
            <p class="container__content">
                區塊鏈的智能合約技術帶給保險業帶來很多的好處。智能合約是指在區塊鏈上當一定條件被滿足時，可以自動執行的合約。因為區塊鏈技術的出現，使智能合約從工作原理變成現實，保證了智能合約在儲存、讀取和執行過程中透明可追蹤以及不可篡改性，提高了智能合約的可信性。智能合約可以支援自動化索賠，它是一種透明且可靠的支付機制，並且可以用來執行特定於合約的規則。因此，賠償階段需要的人力物力被大大節約。
            </p>
        </div>
        <div class="container__item">
            <h3 class="container__subtitle">保險區塊鏈的實務應用於電信業者所開發 Smart Contracts 保險區塊鏈服務為例說明</h3>
            <p class="container__content">
                一般大眾（要保人）透過線上申請向保險公司投保旅遊不便險，保險公司將要保人投保資料傳送至中華電信提供的服務平台並存入區塊鏈中。其服務會定時排程向第三方飛航資訊來源取回航班實際起降資料且存入區塊鏈，並主動檢查是否符合理賠的條件。一旦智能合約判定保單符合理賠的情形，將自動發送簡訊給保戶，起飛延誤超出４小時的保戶甚至於未上飛機就已先收到理賠簡訊。<br>
                此服務創新特色為：<br>
                1. 多元通路，行動投保零距離<br>
                2. 可自動審查投保資格，提升投保速率<br>
                3. 保戶免申請，免舉證<br>
                4. 智能合約自動判定是否符合理賠，減少人工審查時間，增加理賠速度<br>
                5. 智能合約一旦符合理賠時，主動通知保險公司及要保人
            </p>
        </div>
        <div style="margin: 0 auto">
            <a href="./test.php"><input type="button" value="開始測驗" id="test"></a>
        </div>
    </div>
</body>

</html>