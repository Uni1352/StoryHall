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
        <h1><a href="./index.html">Mobile Story Hall for Blockchain</a></h1>
        <nav>
            <ul class="menu">
                <li class="menu__item"><a href="./about.html">關於區塊鏈</a></li>
                <li class="menu__item"><a href="./history.html">歷史回顧</a></li>
                <li class="menu__item"><a href="./storyhall.html">行動故事館</a></li>
                <li class="menu__item"><a href="./resource.html">學習資源</a></li>
                <!-- <li class="menu__item"><a href="./download.html">下載專區</a></li> -->
                <li class="menu__item"><a href="./login.php">登入</a></li>
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
                    <h3 class="container__title">比特幣與挖礦</h3>
                </div>
                <!-- <a href="./test.html"><button id="story03">開始測驗</button></a> -->
            </div>
            <!-- <div class="container__item">
                    <h3 class="container__title">比特幣與挖礦</h3>
                    <video width="100%" controls>
                        <source src="./media/BitcoinAndMining.mp4" type="video/mp4">
                        Your browser does not suh3h3ort the video tag.
                    </video>
                    <a href="./test.html"><button id="story03">開始測驗</button></a>
                </div> -->
            <!-- <div class="container__item">
                    <h3 class="container__title">區塊鏈</h3>
                    <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
                    <video width="100%" controls>
                        <source src="./media/1.mp4" type="video/mp4">
                        Your browser does not suh3h3ort the video tag.
                    </video>
                    <a href="./test.html"><button id="story01">開始測驗</button></a>
                </div>
                <div class="container__item">
                    <h3 class="container__title">智能合約</h3>
                    <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
                    <video width="100%" controls>
                        <source src="./media/1.mp4" type="video/mp4">
                        Your browser does not suh3h3ort the video tag.
                    </video>
                    <a href="./test.html"><button id="story02">開始測驗</button></a>
                </div>
                <div class="container__item">
                    <h3 class="container__title">選舉</h3>
                    <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
                    <video width="100%" controls>
                        <source src="./media/1.mp4" type="video/mp4">
                        Your browser does not suh3h3ort the video tag.
                    </video>
                    <a href="./test.html"><button id="story04">開始測驗</button></a>
                </div>
                <div class="container__item">
                    <h3 class="container__title">醫療</h3>
                    <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
                    <video width="100%" controls>
                        <source src="./media/1.mp4" type="video/mp4">
                        Your browser does not suh3h3ort the video tag.
                    </video>
                    <a href="./test.html"><button id="story05">開始測驗</button></a>
                </div>
                <div class="container__item">
                    <h3 class="container__title">國際貿易</h3>
                    <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
                    <video width="100%" controls>
                        <source src="./media/1.mp4" type="video/mp4">
                        Your browser does not suh3h3ort the video tag.
                    </video>
                    <a href="./test.html"><button id="story06">開始測驗</button></a>
                </div>
                <div class="container__item">
                    <h3 class="container__title">保險</h3>
                    <div class="container__image"><img src="./images/Artboard – 2.png" alt=""></div>
                    <video width="100%" controls>
                        <source src="./media/1.mp4" type="video/mp4">
                        Your browser does not suh3h3ort the video tag.
                    </video>
                    <a href="./test.html"><button id="story07">開始測驗</button></a>
                </div>
                <div class="container__item">
                    <h3 class="container__title">生產履歷</h3>
                    <video width="100%" controls>
                        <source src="./media/Traceability.mp4" type="video/mp4">
                        Your browser does not suh3h3ort the video tag.
                    </video>
                    <a href="./test.html"><button id="story08">開始測驗</button></a>
                </div> -->
        </div>
        </div>
    <?php    
    }
    else
    {
    ?>
        echo '<br><br><br><br><br><br><p>不讓你看</p>';
    <?php    
    }
    ?>
</body>

</html>