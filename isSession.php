<?php
    session_start();
    // $userID = 0;
    if(isset($_SESSION['userId'])){
      $user_login = TRUE;
      // $userID = $_SESSION['userid'];
    }else{
      $user_login = FALSE;
      // $_SESSION['userId'] = 0;
    }
?>
