<?php
    require 'dbInfo.php';
    include 'isSession.php';

     unset($_SESSION["userId"]);
     unset($_SESSION["userName"]);
     $user_login = false;

    echo "<script>history.back();</script>";
?>
