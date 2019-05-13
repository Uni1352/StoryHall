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
    <div class="container">
        <form action="./result.php" style="width: 100%">
            <ol>
                <li class="container__item">
                    <h2 class="container__title">1. 區塊鏈(Blockchain)技術之所以可以被廣泛的應用到金融、製造與零售服務等產業， 與區塊鏈技術的四大構成要素有關，下列何者不屬於此四大構成要素？ </h2>
                    <label for="ques01A">
                        <input type="radio" name="ques01" id="ques01A"> 安全的固定流量
                    </label>
                    <label for="ques01B">
                        <input type="radio" name="ques01" id="ques01B"> 自動化的智慧合約系統
                    </label>
                    <label for="ques01C">
                        <input type="radio" name="ques01" id="ques01C"> 保護交易者的隱私性
                    </label>
                    <label for="ques01D">
                        <input type="radio" name="ques01" id="ques01D"> 打造交易共識
                    </label>
                </li>
                <li class="container__item">
                    <h2 class="container__title">2. 對於基於區塊鏈的加密貨幣 Cryptocurrency 資產的擁有者來說，最重要是保護好自己的？</h2>
                    <label for="ques02A">
                        <input type="radio" name="ques02" id="ques02A"> 公開金鑰
                    </label>
                    <label for="ques02B">
                        <input type="radio" name="ques02" id="ques02B"> 私密金鑰
                    </label>
                    <label for="ques02C">
                        <input type="radio" name="ques02" id="ques02C"> 帳號密碼
                    </label>
                    <label for="ques02D">
                        <input type="radio" name="ques02" id="ques02D"> 數位簽章
                    </label>
                </li>
                <li class="container__item">
                    <h2 class="container__title">3. 比特幣在區塊鏈中記錄（Record）的是？</h2>
                    <label for="ques03A">
                        <input type="radio" name="ques03" id="ques03A"> 帳戶資訊
                    </label>
                    <label for="ques03B">
                        <input type="radio" name="ques03" id="ques03B"> 帳戶餘額
                    </label>
                    <label for="ques03C">
                        <input type="radio" name="ques03" id="ques03C"> 交易記錄
                    </label>
                    <label for="ques03D">
                        <input type="radio" name="ques03" id="ques03D"> 備註說明
                    </label>
                </li>
                <li class="container__item">
                    <h2 class="container__title">4. 下列何者不是區塊鏈特性？</h2>
                    <label for="ques04A">
                        <input type="radio" name="ques04" id="ques04A"> 資料不可篡改
                    </label>
                    <label for="ques04B">
                        <input type="radio" name="ques04" id="ques04B"> 利用複雜的公鑰與私鑰機制，可以驗證資料有效性
                    </label>
                    <label for="ques04C">
                        <input type="radio" name="ques04" id="ques04C"> 比特幣的核心
                    </label>
                    <label for="ques04D">
                        <input type="radio" name="ques04" id="ques04D"> 只能運用於銀行與支付業務之金流交易
                    </label>
                </li>
                <li class="container__item">
                    <h2 class="container__title">5. 以下哪個不屬於區塊鏈公有鏈的特性？</h2>
                    <label for="ques05A">
                        <input type="radio" name="ques05" id="ques05A">匿名性
                    </label>
                    <label for="ques05B">
                        <input type="radio" name="ques05" id="ques05B">不可篡改
                    </label>
                    <label for="ques05C">
                        <input type="radio" name="ques05" id="ques05C">自治性
                    </label>
                    <label for="ques05D">
                        <input type="radio" name="ques05" id="ques05D">需許可
                    </label>
                </li>
                <li class="container__item">
                    <h2 class="container__title">6. 在區塊鏈中要做到不可否認的身分驗證，收款方用自己的私鑰加密於亂碼化(Hashing)後的交易內容產生數位簽章，付款方收到資料後，以下列哪一種方式就可驗證交易的正確性？</h2>
                    <label for="ques06A">
                        <input type="radio" name="ques06" id="ques06A"> 付款方私鑰
                    </label>
                    <label for="ques06B">
                        <input type="radio" name="ques06" id="ques06B"> 付款方公鑰
                    </label>
                    <label for="ques06C">
                        <input type="radio" name="ques06" id="ques06C"> 收款方公鑰
                    </label>
                    <label for="ques06D">
                        <input type="radio" name="ques06" id="ques06D"> 收款方私鑰
                    </label>
                </li>
                <li class="container__item">
                    <h2 class="container__title">7. BTC的總發行量是多少</h2>
                    <label for="ques07A">
                        <input type="radio" name="ques07" id="ques07A"> 2100萬
                    </label>
                    <label for="ques07B">
                        <input type="radio" name="ques07" id="ques07B"> 2億
                    </label>
                    <label for="ques07C">
                        <input type="radio" name="ques07" id="ques07C"> 1億
                    </label>
                    <label for="ques07D">
                        <input type="radio" name="ques07" id="ques07D"> 1000萬
                    </label>
                </li>
                <li class="container__item">
                    <h2 class="container__title">8. 比特幣中最小的數量單位是？</h2>
                    <label for="ques08A">
                        <input type="radio" name="ques08" id="ques08A"> CBTC
                    </label>
                    <label for="ques08B">
                        <input type="radio" name="ques08" id="ques08B"> MCTC
                    </label>
                    <label for="ques08C">
                        <input type="radio" name="ques08" id="ques08C"> Satoshi
                    </label>
                    <label for="ques08D">
                        <input type="radio" name="ques08" id="ques08D"> mBTC
                    </label>
                </li>
                <li class="container__item">
                    <h2 class="container__title">9. 區塊鏈與比特幣的關係是？</h2>
                    <label for="ques09A">
                        <input type="radio" name="ques09" id="ques09A"> 區塊鏈基於比特幣
                    </label>
                    <label for="ques09B">
                        <input type="radio" name="ques09" id="ques09B"> 沒有關係
                    </label>
                    <label for="ques09C">
                        <input type="radio" name="ques09" id="ques09C"> 並列關係
                    </label>
                    <label for="ques09D">
                        <input type="radio" name="ques09" id="ques09D"> 比特幣基於區塊鏈
                    </label>
                </li>
                <li class="container__item">
                    <h2 class="container__title">10. 區塊鏈的技術是藉由下列哪一項與網路通訊科技共享帳簿資料處理的電腦技術，保護交易帳戶的安全與隱私達成共享帳簿的互聯網? </h2>
                    <label for="ques10A">
                        <input type="radio" name="ques10" id="ques10A"> 密碼學
                    </label>
                    <label for="ques10B">
                        <input type="radio" name="ques10" id="ques10B"> 智慧合約
                    </label>
                    <label for="ques10C">
                        <input type="radio" name="ques10" id="ques10C"> 區塊
                    </label>
                    <label for="ques10D">
                        <input type="radio" name="ques10" id="ques10D"> 共識演算法
                    </label>
                </li>
            </ol>
            <div style="margin: 0 auto">
                <a href="./storyhall.php"><input type="button" value="回上一頁" id="back"></a>
                <input type="submit" value="確認送出" id="sendAnswer">
            </div>
        </form>
    </div>
</body>

</html>