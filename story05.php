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
        <h2 class="container__title">醫療</h2>
        <!-- <video src="./media/BitcoinAndMining.mp4" controls></video> -->
        <div class="container__item">
            <h3 class="container__subtitle">換醫院看病的困擾</h3>
            <p class="container__content">
                病人小宇在A醫院治療後，由於某些原因需要轉到B醫院治療。以往病歷大多是用紙本呈現並且建立資料庫儲存管理系統，在這樣的病歷系統下，小宇到B醫院時不僅要重新填寫病歷，還需要重新檢查身體狀況，因而浪費掉了許多時間。如今病歷有了不同的呈現與儲存管理的方式，透過區塊鏈技術，利用分散式、不可篡改等特點，病歷系統不僅保證了病歷存儲的安全性，也提高了就診的效率。有了這樣的系統，小宇的病歷資料能更具有保障，並且在醫生有需要更新病歷的時候，更迅速更安全。
            </p>
            <p class="container__content">
                在區塊鏈加持下的病歷系統，讓現在的小宇到不同醫院就診更方便了。小宇可以避免不必要的重複診療，節省了不少就醫時間和與醫療費用。小宇原先就診的醫院也可以很容易地互通病歷給新就診的醫院，而醫生也可以迅速地調閱小宇的病歷資訊。除了以上所列區塊鏈技術帶給醫病之間的好處外，更保障了病歷資料的安全性與不可竄改性。區塊鏈中的智能合約有著強大的應用能力，得以源源不斷地推出更多的服務，例如:
                病歷管理系統。建立病歷系統者只要在智能合約中寫下管理病歷資料的函式，而使用者(例如:
                醫療單位與醫生)僅需透過系統上傳病歷至區塊鏈。在區塊鏈上的所有資料當被存取或更改時，其紀錄都會被鏈上所有節點儲存下來，因此可以防止病歷被任意竄改，提高了病歷資訊的安全性。小宇的病歷資訊因而得到更好的保障，病歷上的資訊也更加的完整，不必再為調閱不到病歷而付出不必要的時間成本。
            </p>
        </div>
        <div style="margin: 0 auto">
            <a href="./test.php"><input type="button" value="開始測驗" id="test"></a>
        </div>
    </div>
</body>

</html>