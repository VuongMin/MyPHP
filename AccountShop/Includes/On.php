 <!--Kết Nối Cơ sở dữ Liệu NEf-->
<?php  $conn= new mysqli('localhost','root','','shopnicklol') or die("Connect Fails"); 
mysqli_query($conn,'SET NAMES UTF8');
?>

<!--Phần Giao diện Nè-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="../jquery.js"></script>
  <title>Document</title>
</head>
<body>
  <div id="container" >
    <div id="menungang">
         <ul id="boxmenu" >
  <img id="logo" src="../video-image/logo.png">
  <li  style="margin-left: 70px; "><a href="Main.php">trang chủ</a></li>
   <li ><a href=""><i>uy tín shop </i></a></li>
    <li><a href="#">hd mua ac</a></li>
    <li ><a href="#">hd bảo mật</a></li>
  <?php
if(isset($_COOKIE['username'])&&isset($_COOKIE['password'])) 
{
  echo "<span style='color:white;float:right;'>Chào:".$_COOKIE['username']."  |  <a style='color:red;font-style:italic;' href='sign.php'>Quay Lại Đăng Nhập</a></span><a style='color:red;' href='../index.php'>  Thoát</a>";
}
 ?>               
                 </ul>
    <!--====================================Cookie ----------------------------------------------->
  </div>
  <!---->
  

  <!-- Mục Tên nè-->
  <h2> Trang Thông Tin Tổng Hợp Về Shop Account Lol</h2>

  <!--Khung  giữa-->
  <div id="group"  >
  <div class ="khunggiua">