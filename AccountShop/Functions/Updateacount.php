 <?php
   include '../Includes/On.php';
  ?>
  <!--Phần Top Nè------------------------------------------------->

<!--===============================================================================================-->
 <p>Nội dung</p>
       

<form action="#" method="post" style="margin:20px; ">
	Rank: <input type="text" name="rank" value="<?php $_GET['id']?>" />
	Khung:<input type="text" name="khung" value="<?php $_GET['id']?>" />
	<input type="submit" name="update" value="Chấp Nhận">
</form>

<?php
if(isset($_POST['update']))
{
	$rank=$_POST['rank'];
	$khung=$_POST['khung'];
	
	$id=$_GET['id'];
	$query="UPDATE acount SET RANK='$rank' WHERE MAAC='$id' ";
    mysqli_query($conn,"UPDATE  acount SET KHUNG='$khung' WHERE MAAC='$id'");
	mysqli_query($conn,$query) or die("UPDATE Fails".mysqli_error($conn));
	header("location:Account.php");
} 
 ?>

<!--===============================================================================================-->

 <!--Phần Giua và cuối nè---------------------------------------------->

        <?php 
        include '../Includes/Right.php';
        include '../Includes/Below.php';
         ?>