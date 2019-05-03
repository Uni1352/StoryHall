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
    <!-- header -->
    <header style="background-color: #caf7ff">
        <h1><a href="./index.php" title="回首頁">Mobile Story Hall for Blockchain</a></h1>
    </header>
    <!-- TODO: container -->
    <div class="container" id="index">
        <div class="container__item">
            <div class="container__item--round" id="about">
                <a href="./about.php">
                    <div>
                        <div class="container__image">
                            <img src="./images/index/about.png" alt="blockchain" style="width: 23vh">
                        </div>
                        <p class="container__imageInfo">關於區塊鏈</p>
                    </div>
                </a>
            </div>
            <div class="container__item--round" id="history">
                <a href="./history.php">
                    <div>
                        <div class="container__image">
                            <img src="./images/index/history.png" alt="history" style="width: 17vh">
                        </div>
                        <p class="container__imageInfo">歷史回顧</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="container__item">
            <div class="container__item--round" id="storyhall">
                <a href="./storyhall.php">
                    <div>
                        <div class="container__image">
                            <img src="./images/index/storyhall.png" alt="storyhall">
                        </div>
                        <p class="container__imageInfo">行動故事館</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="container__item">
            <div class="container__item--round" id="resource">
                <a href="./resource.php">
                    <div>
                        <div class="container__image">
                            <img src="./images/index/resource.png" alt="learning" style="width: 35vh">
                        </div>
                        <p class="container__imageInfo">學習資源</p>
                    </div>
                </a>
            </div>
            <div class="container__item--round" id="member">
                <a href="./member.php">
                    <div>
                        <div class="container__image">
                            <img src="./images/index/member.png" alt="" style="width: 20vh">
                        </div>
                        <p class="container__imageInfo">會員專區</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script src="./stylesheets/js/authentication.js"></script>
</body>

</html>