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
    <div class="container" style="justify-content: center">
        <div class="member">
            <div class="member__register">
                <h2 class="container__title">註冊</h2>
                <form method="POST" action="register.php">
                    <input type="text" name="userName" id="" placeholder="Username">
                    <input type="email" name="userEmail" id="" placeholder="E-mail">
                    <input type="password" name="userPassword" id="" placeholder="Password">
                    <input type="text" name="study" id="study" placeholder="Study">
                    <input type="text" name="work" id="" placeholder="Work">
                    <span style="font-size: 0.9em">已經有帳戶了？&nbsp;&nbsp;<a href="./login.php">登入</a></span>
                    <input type="submit" value="註冊">
                </form>
            </div>
        </div>
    </div>


<?php
 $servername = "localhost";
 $username = "username";
 $password = "password";
 $dbname = "myDB";
 
 // Create connection
 $conn = new mysqli('127.0.0.1', 'jane', 'wasay', 'StoryHall');

 if (isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPassword']) && isset($_POST['study'])&& isset($_POST['work']))
{
  // if the user has just tried to log in
  $userid = $_POST['userName'];
  $userEmail = $_POST['userEmail'];
  $userPassword = $_POST['userPassword'];
  $study = $_POST['study'];
  $work = $_POST['work'];
}

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
 $sql = "INSERT INTO UserProfile (email, password, name, sex, age, job, education)
 VALUES ('$userEmail', '$userPassword', '$userid', '$userid', 17, '$work', '$study')";
 
 if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();






// if ($dbconn->connect_error) die($conn->connect_error);

// if (isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPassword']) && isset($_POST['study'])&& isset($_POST['work']))
// {
//   // if the user has just tried to log in
//   $userid = $_POST['userName'];
//   $userEmail = $_POST['userEmail'];
//   $userPassword = $_POST['userPassword'];
//   $study = $_POST['study'];
//   $work = $_POST['work'];
// }
// $query = "INSERT INTO UserProfile VALUES ('$userEmail', '$userPassword', '$userid', '$userid', '$userid', '$work', '$study')";
// $result = $db_conn->query($query);
?>

</body>

</html>