 <?php
   include '../Includes/On.php';
  ?>
  <!--Phần Top Nè------------------------------------------------->

<!--===============================================================================================-->
 <p>Nội dung</p>
       

<form action="#" method="post" style="margin:20px; ">
	Giá ^.^: <input type="text" name="gia" value="<?php $_GET['id']?>" />
	<input type="submit" name="update" value="Chấp Nhận">
</form>

<?php
if(isset($_POST['update']))
{
	$gia=$_POST['gia'];
	$id=$_GET['id'];
	$query="UPDATE giaodich SET GIA='$gia' WHERE MAGD='$id'";
	mysqli_query($conn,$query) or die("UPDATE Fails".mysqli_error($conn));
	header("location:Giaodich.php");
} 
 ?>

<!--===============================================================================================-->

 <!--Phần Giua và cuối nè---------------------------------------------->

        <?php 
        include '../Includes/Right.php';
        include '../Includes/Below.php';
         ?>