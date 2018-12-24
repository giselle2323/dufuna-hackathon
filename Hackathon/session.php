<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $user_id = $_SESSION['login_id'];
   $ses_sql = mysqli_query($link,"select * from admin where username = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
  
?>