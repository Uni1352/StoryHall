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
                <li class="menu__item"><a href="./history.php">歷史回顧</a></li>
                <li class="menu__item"><a href="./storyhall.php">行動故事館</a></li>
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
        <h2 class="container__title">比特幣與挖礦原理</h2>
        <video src="./media/BitcoinAndMining.mp4" controls></video>
        <div class="container__item">
            <h3 class="container__subtitle">一個故事看懂比特幣與挖礦的原理</h3>
            <p class="container__content">
                很久很久以前有一個小部落，人們自給自足，部落裡小白養雞，大圓種菜，突然有一天小白想吃蔬菜，於是他想了一個辦法，用自己的一隻雞要求換大圓的一籃菜，大圓同意了，於是部落裡開始流行以物換物的交易方式來滿足自己的需求。我們將這種貨幣叫做「實物貨幣」。
            </p>
            <p class="container__content">
                有一天，居民覺得這樣太不方便了，於是族長組織全體居民召開大會，討論如何解決這個問題。有人提議：我們可以將稀有的金屬，比如黃金，將黃金的重量關係編制成大家認可的價格對照表，之後交易就可以用黃金了。我們將這時的貨幣叫做「金屬貨幣」。
            </p>
            <p class="container__content">好景不長，金屬貨幣逐漸出現了弊端：附近金礦不多，再加上黃金磨損嚴重
                等一系列的問題，族長再次召集全體人員開會商討。有人提議：我們沒必要非要用真的黃金啊！找一張紙上面寫上「一克黃金」，交易的時候給這張紙不行嗎？族長覺得這個提議也不錯，於是補充規定：只有部落委員會寫的紙並且蓋章才能用作交易。此時便進入了「紙幣時代」。部落委員會就承擔了政府和中央銀行的角色。
            </p>
            <p class="container__content">
                過了一段時間，很多人開始抱怨自己家的紙幣太多，總有遺失的事情發生，族長的兒子小庫很聰明，他對所有族民說：「我來找人記帳，你們自願把紙幣放到我這裡，以後交易的時候和我說一聲，我直接在交易雙方的帳上進行增減，以後出門就可以不用帶紙幣啦！」居民很高興的同意了，於是中央系統虛擬貨幣誕生啦！也就相當於我們現在的銀行。
            </p>
            <p class="container__content">自己的錢卻由別人記帳，可能會發生風險，萬一會計人員亂改我的帳怎麼辦？這時候一個自稱叫做「中本聰」的人站了出來，他說自己設計了一套系統可以解決這個問題。
                首先，我們要將帳本進行改造：<br>
                第一、私有變公開：帳本從私有變為公開<br>
                第二、不記餘額，只記記錄：以後不再記錄餘額，只紀錄交易信息，要想知道餘額通過計算就知道了。<br>
                第三、取名「比特幣」：我們流通的幣種就叫做比特幣</p>
            <p class="container__content">此言一出，居民紛紛騷動起來，不記錄餘額倒是可以理解，但公開帳本無法接受啊！這樣誰都知道我有多少錢了啊！</p>
            <p class="container__content">中本聰說：「別慌，我們這樣來操作。」</p>
            <p class="container__content">
                為了隱私安全考慮，我們每個人都不用真實姓名交易，我給每個人隨機生成一個數，這個數介於０到２的256次方之間，出現的可能大概相當於宇宙中所有原子的數量，所以大家不用擔心重複的問題。我再用一種固定算法（Base58）把這個數變成字符串，這個字符串就叫做「私鑰」。你們自己一定保管好，私鑰是你擁有比特幣的唯一證明，也相當於你們的密碼。有了密碼就要有帳戶，在私鑰的基礎上再次通過算法算出一個公鑰，在公鑰的基礎上通過算法算出一個相對較短的字串，叫做「地址」。
            </p>
            <p class="container__content">
                如果你想收錢，只告訴別人的你的地址就行了。這時，公錀用於檢驗這個地址是不是你的，不過不用擔心，算法很安全。別人通過你的公鑰是推算不出來你的私鑰的！這樣就解決了交易安全和公開的問題。</p>
            <p class="container__content">
                為了解決通貨膨脹，中本聰接著說：「比特幣不能無限發行，我們使用一個機制來控制發行速度和數量，具體這樣操作，找一些人來負責整理帳本，大家同時進行，誰先完成我們就獎勵他50個比特幣，並且只通過這一種方式發行比幣特，也就是比特幣的唯一來源。但想獲得獎勵也沒那麼簡單，需要他們找到一串特定的數字，我們叫做哈希值。
            </p>
            <p class="container__content">
                具體的做法是將這一頁紙的版本號：version，上一頁的哈希值：prev_hash，自己的交易地址：merkle_root，時間戳記：TimeStamp，當前難度：difficulty，與一個隨機數nonce進行sha256函數運算，sha256函數可以將任意字串通過加密，得出一個64位的16進制數，只要參數稍作改動，結果就會面目全非。但只要參數相同，計算多少次結果都是一致的，而且運算過程不可逆！
            </p>
            <p class="container__content">
                大家可以通過改變nonce值來獲取sha256函數結果。nonce可以是0-2的32次方之間的數，如果結果小於我們給定的目標值TARGET，我們就算他成功了，最直接的判斷方法就是sha256函數得出的64位16進制數字的前若干位數均為0（目前需要前18位均為０才算成功），我們就獎勵他50個比特幣再加上你們轉帳的手續費。
            </p>
            <p class="container__content">
                這裡的每一頁紙就叫做一個區塊，整理帳本的過程我們叫做打包區塊，也就是俗稱的挖礦，每一頁連起來的帳本就叫做區塊鏈。為了控制發行數量，我們規定將每十分鐘內産生的交易記錄寫到一個區塊上，然後讓礦工們打包，最開始每打包一個區塊獎勵50比特幣，之後每經過21萬個區塊（約４年時間）獎勵就減半，直到2140年左右獎勵不足時，大約一共發放2,100萬比特幣，之後便不會再發放，那時礦工的獎勵來源將是每筆交易的手續費，由於獎勵的原因，部落裡很多人加入了整理帳本的隊伍，還有的人組隊參與，大家同時進行，誰先算出符合條件的nonce值意味著誰將獲得這筆獎勵。
            </p>
            <p class="container__content">
                某個礦工算出nonce之後，迅速將消息向全部落廣播，這時其他人開始校對他的答案是否正確，如果超過６個人確認，該頁帳本上的所有交易就生效啦！礦工們便會迅速開始計算下一頁紙的nonce值。</p>
            <p class="container__content">至此，關於比特幣的故事就講完了。</p>
        </div>
        <div style="margin: 0 auto">
            <a href="./test.php"><input type="button" value="開始測驗" id="test"></a>
        </div>
    </div>
</body>

</html>