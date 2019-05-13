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
            <p class="container__content">您答對了<span id="count"></span>題，共<span id="totalScore"></span>分</p>
        </div>
        <ol>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques01A">
                    <input type="radio" name="ques01" id="ques01A">
                    <span></span>
                </label>
                <label for="ques01B">
                    <input type="radio" name="ques01" id="ques01B">
                    <span></span>
                </label>
                <label for="ques01C">
                    <input type="radio" name="ques01" id="ques01C">
                    <span></span>
                </label>
                <label for="ques01D">
                    <input type="radio" name="ques01" id="ques01D">
                    <span></span>
                </label>
            </li>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques02A">
                    <input type="radio" name="ques02" id="ques02A">
                    <span></span>
                </label>
                <label for="ques02B">
                    <input type="radio" name="ques02" id="ques02B">
                    <span></span>
                </label>
                <label for="ques02C">
                    <input type="radio" name="ques02" id="ques02C">
                    <span></span>
                </label>
                <label for="ques02D">
                    <input type="radio" name="ques02" id="ques02D">
                    <span></span>
                </label>
            </li>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques03A">
                    <input type="radio" name="ques03" id="ques03A">
                    <span></span>
                </label>
                <label for="ques03B">
                    <input type="radio" name="ques03" id="ques03B">
                    <span></span>
                </label>
                <label for="ques03C">
                    <input type="radio" name="ques03" id="ques03C">
                    <span></span>
                </label>
                <label for="ques03D">
                    <input type="radio" name="ques03" id="ques03D">
                    <span></span>
                </label>
            </li>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques04A">
                    <input type="radio" name="ques04" id="ques04A">
                    <span></span>
                </label>
                <label for="ques04B">
                    <input type="radio" name="ques04" id="ques04B">
                    <span></span>
                </label>
                <label for="ques04C">
                    <input type="radio" name="ques04" id="ques04C">
                    <span></span>
                </label>
                <label for="ques04D">
                    <input type="radio" name="ques04" id="ques04D">
                    <span></span>
                </label>
            </li>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques05A">
                    <input type="radio" name="ques05" id="ques05A">
                    <span></span>
                </label>
                <label for="ques05B">
                    <input type="radio" name="ques05" id="ques05B">
                    <span></span>
                </label>
                <label for="ques05C">
                    <input type="radio" name="ques05" id="ques05C">
                    <span></span>
                </label>
                <label for="ques05D">
                    <input type="radio" name="ques05" id="ques05D">
                    <span></span>
                </label>
            </li>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques06A">
                    <input type="radio" name="ques06" id="ques06A">
                    <span></span>
                </label>
                <label for="ques06B">
                    <input type="radio" name="ques06" id="ques06B">
                    <span></span>
                </label>
                <label for="ques06C">
                    <input type="radio" name="ques06" id="ques06C">
                    <span></span>
                </label>
                <label for="ques06D">
                    <input type="radio" name="ques06" id="ques06D">
                    <span></span>
                </label>
            </li>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques07A">
                    <input type="radio" name="ques07" id="ques07A">
                    <span></span>
                </label>
                <label for="ques07B">
                    <input type="radio" name="ques07" id="ques07B">
                    <span></span>
                </label>
                <label for="ques07C">
                    <input type="radio" name="ques07" id="ques07C">
                    <span></span>
                </label>
                <label for="ques07D">
                    <input type="radio" name="ques07" id="ques07D">
                    <span></span>
                </label>
            </li>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques08A">
                    <input type="radio" name="ques08" id="ques08A">
                    <span></span>
                </label>
                <label for="ques08B">
                    <input type="radio" name="ques08" id="ques08B">
                    <span></span>
                </label>
                <label for="ques08C">
                    <input type="radio" name="ques08" id="ques08C">
                    <span></span>
                </label>
                <label for="ques08D">
                    <input type="radio" name="ques08" id="ques08D">
                    <span></span>
                </label>
            </li>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques09A">
                    <input type="radio" name="ques09" id="ques09A">
                    <span></span>
                </label>
                <label for="ques09B">
                    <input type="radio" name="ques09" id="ques09B">
                    <span></span>
                </label>
                <label for="ques09C">
                    <input type="radio" name="ques09" id="ques09C">
                    <span></span>
                </label>
                <label for="ques09D">
                    <input type="radio" name="ques09" id="ques09D">
                    <span></span>
                </label>
            </li>
            <li class="container__item">
                <h2 class="container__title"></h2>
                <label for="ques10A">
                    <input type="radio" name="ques10" id="ques10A">
                    <span></span>
                </label>
                <label for="ques10B">
                    <input type="radio" name="ques10" id="ques10B">
                    <span></span>
                </label>
                <label for="ques10C">
                    <input type="radio" name="ques10" id="ques10C">
                    <span></span>
                </label>
                <label for="ques10D">
                    <input type="radio" name="ques10" id="ques10D">
                    <span></span>
                </label>
            </li>
        </ol>
        <div class="container__item" style="text-align: center;">
            <a href="./storyhall.php"><input type="button" value="回行動故事館" id="backToTop"></a>
        </div>
    </div>
</body>

</html>