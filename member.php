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
    <?php
    if(isset($_SESSION['valid_user'])) {
    ?>  
    <!-- TODO: container -->
    <div class="container">
        <!-- TODO: 頁籤 -->
        <div class="container__item" id="sidebar">
            <ul class="menu menu--col" id="tabs">
                <!-- <div class="menu__item"><a href="#">概況</a></div> -->
                <li class="menu__item"><a href="#testRecord">測驗紀錄</a></li>
                <li class="menu__item"><a href="#dataModify">基本資料修改</a></li>
                <li class="menu__item"><a href="#passwordChange">密碼變更</a></li>
                <li class="menu__item"><a href="#logOut">登出</a></li>
                <!-- <div class="menu__item"><a href="#">常見問題</a></div> -->
            </ul>
        </div>
        <div class="container__item" id="testRecord">
            <h2 class="container__title">測驗紀錄</h2>
            <form action="#">
                <div>
                    搜尋條件&nbsp;&nbsp;
                    <select name="condition" id="condition">
                        <option disabled selected></option>
                        <option value="date">日期</option>
                        <option value="course">課程</option>
                        <option value="score">成績</option>
                    </select>
                    <select name="condition2" id="condition2">
                    </select>&nbsp;&nbsp;
                    <input type="submit" name="search" id="search" value="搜尋">
                </div>
            </form>
            <!-- TODO: 順序、表格設計 -->
            <table>
                <thead>
                    <tr>
                        <th>日期</th>
                        <th>課程</th>
                        <th>成績</th>
                        <th>錯題詳情</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="container__item" id="dataModify">
            <h2 class="container__title">基本資料修改</h2>
            <form action="#">
                <label for="userName">名稱</label>
                <input type="text" name="userName" id="userName">
                <label for="userEmail">Email</label>
                <input type="email" name="userEmail" id="userEmail">
                <label for="userBirth">生日</label>
                <input type="date" name="userBirth" id="">                   
                <p style="font-size: 1.25em">性別</p>
                <span>
                    <label for="male">
                        <input type="radio" name="userSex" id="male">&nbsp;男
                    </label>
                    &nbsp;&nbsp;&nbsp;
                    <label for="female">
                        <input type="radio" name="userSex" id="female">&nbsp;女
                    </label>
                </span>
                <label for="education">學歷</label>
                <input type="text" name="study" id="education">
                <label for="career">職業</label>
                <input type="text" name="work" id="career">
                <input type="submit" name="modify" id="submit-btn" value="修改">
            </form>
        </div>
        <div class="container__item" id="passwordChange">
            <h2 class=" container__title">密碼變更</h2>
            <form action="#">
                <label for="oldPassword">Old Password</label>
                <input type="password" name="userPassword" id="oldPassword">
                <label for="newPassword">New Password</label>
                <input type="password" name="userPassword" id="newPassword">
                <label for="newPasswordVerify">New Password Verify</label>
                <input type="password" name="userPassword" id="newPasswordVerify">
                <input type="submit" name="modify" id="submit-btn2" value="修改">
            </form>
        </div>
        <div class="container__item" id="logOut">
            <h2 class=" container__title">登出</h2>
            <form action="#">
                <p>確定要登出？</p>
                <a href="logout.php"><input type="button" name="modify" id="submit-btn3" value="確定"></a>
            </form>
        </div>
    </div>
    <script src="./stylesheets/js/tabs.js"></script>
    <script src="./stylesheets/js/search.js"></script>
    <?php    
    }
    else
    {
        $url = "./login.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";    
    }
    ?>
</body>

</html>