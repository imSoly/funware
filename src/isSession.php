<?php
    session_start();
    if(isset($_SESSION['userId'])){
      $user_login = TRUE;
    }else{
      $user_login = FALSE;
    }
?>
