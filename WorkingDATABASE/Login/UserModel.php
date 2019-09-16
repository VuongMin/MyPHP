<?php

if(!empty($_POST['email'])&&!empty($_POST['pass']))
{

    $conn= mysqli_connect('localhost','root','','projectmanagement')
    or die('connect Fails!' . mysqli_error($conn));
    $sql='SELECT user.username,user.password FROM user ';
    $sql.='WHERE username=\''.$_POST["email"].'\' AND user.password=\''.md5($_POST["pass"]).'\' ';
   $result=mysqli_query($conn,$sql);
   if($result->num_rows!=0)
   {
        session_start();
        $_SESSION['user']= array('email'=>$_POST['email'] ,'pass'=>$_POST['pass']);

   }else
   {
       session_destroy();
   }
   header('location:index.php');




}
