 <?php
   include '../Includes/On.php';
  ?>
  <!--Phần Top Nè------------------------------------------------->

<!--===============================================================================================-->
 <p>Nội dung</p>
       

<form action="#" method="post" style="margin:20px; ">
	Tên: <input type="text" name="ten" value="<?php $_GET['id']?>" />
	<input type="submit" name="update" value="Chấp Nhận">
</form>

<?php
if(isset($_POST['update']))
{
	$ten=$_POST['ten'];
	$id=$_GET['id'];
	$query="UPDATE thanhvien SET NAME='$ten' WHERE ID='$id'";
	mysqli_query($conn,$query) or die("UPDATE Fails".mysqli_error($conn));
	header("location:Khachhang.php");
} 
 ?>

<!--===============================================================================================-->

 <!--Phần Giua và cuối nè---------------------------------------------->

        <?php 
        include '../Includes/Right.php';
        include '../Includes/Below.php';
         ?>