<?php
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];

  $db_conn = new mysqli('127.0.0.1', 'jane', 'wasay', 'login');

  if (mysqli_connect_errno()) {
    echo 'Connection to database failed:'.mysqli_connect_error();
    exit();
  }
  
  $query = "select * from authorized_users where 
            name='".$userid."' and 
            password='".$password."'";

  $result = $db_conn->query($query);
  if ($result->num_rows)
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $userid;
  }
  $db_conn->close();
}
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
        <h1><a href="./index.html">Mobile Story Hall for Blockchain</a></h1>
        <nav>
            <ul class="menu">
                <li class="menu__item"><a href="./about.html">關於區塊鏈</a></li>
                <li class="menu__item"><a href="./history.html">歷史回顧</a></li>
                <li class="menu__item"><a href="#">行動故事館</a></li>
                <li class="menu__item"><a href="./resource.html">學習資源</a></li>
                <!-- <li class="menu__item"><a href="./download.html">下載專區</a></li> -->
                <li class="menu__item"><a href="./login.html">登入</a></li>
            </ul>
        </nav>
    </header>

<?php
  if (isset($_SESSION['valid_user']))
  {
    echo '<br><br><br><br><br><br>';
    echo '<p>You are logged in as: '.$_SESSION['valid_user'].' <br />';
  }
  else
  {
    if (isset($userid))
    {
      // if they've tried and failed to log in
      echo '<p>Could not log you in.</p>';
    }
    else
    {
      // they have not tried to log in yet or have logged out
      echo '<p>You are not logged in.</p>';
    }

    //<!-- TODO: container -->
    echo '<div class="container" style="justify-content: center">';
    echo '    <div class="member">';
    echo '        <div class="member__login">';
    echo '            <h2 class="container__title">登入</h2>';
    echo '            <form action="login.php" method="post">';
    echo '                <input type="email" name="userid" id="userid" placeholder="E-mail">';
    echo '                <input type="password" name="password" id="password" placeholder="Password">';
    echo '                <div style="display:flex;justify-content: space-between; font-size: 0.9em">';
    echo '                   <span>還沒有帳戶？&nbsp;&nbsp;<a href="./register.php">註冊</a></span>';
                       //<!-- TODO: 忘記密碼 -->
    echo '                    <!-- <span><a href="./forget.html">忘記密碼</a></span> -->';
    echo '                </div>';
    echo '                <input type="submit" value="登入">';
    echo '            </form>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
  }
?>
    

</body>

</html>
