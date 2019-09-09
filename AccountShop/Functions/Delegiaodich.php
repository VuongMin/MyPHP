<?php 
 $conn= new mysqli('localhost','root','','shopnicklol') or die("Connect Fails"); 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query="DELETE FROM giaodich WHERE MAGD='$id'";
	mysqli_query($conn,$query) or die("Delete Fails!". mysqli_error($conn));
	header("location:giaodich.php");
}

 ?>