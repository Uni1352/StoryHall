<?php
session_start();

$old_user = $_SESSION['valid_user'];
unset($_SESSION['valid_user']);
session_destroy();

if (!empty($old_user))
  {
    $url = "./index.php";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>"; 
  }
?>