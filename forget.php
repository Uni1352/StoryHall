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
        <h1><a href="./index.html">Mobile Story Hall for Blockchain</a></h1>
        <nav>
            <ul class="menu">
                <li class="menu__item"><a href="./about.html">關於區塊鏈</a></li>
                <li class="menu__item"><a href="./history.html">歷史回顧</a></li>
                <li class="menu__item"><a href="./storyhall.php">行動故事館</a></li>
                <li class="menu__item"><a href="./resource.html">學習資源</a></li>
                <!-- <li class="menu__item"><a href="./download.html">下載專區</a></li> -->
                <li class="menu__item"><a href="./login.php">登入</a></li>
            </ul>
        </nav>
    </header>
    <!-- TODO: container -->
    <div class="container" style="justify-content: center">
        <div class="member">
            <div class="member__login">
                <h2 class="container__title">忘記密碼</h2>
                <form>
                    <p>請輸入您的信箱</p>
                    <input type="email" name="userEmail" id="" placeholder="E-mail">
                    <input type="submit" value="確認">
                </form>
            </div>
        </div>
    </div>
</body>

</html>