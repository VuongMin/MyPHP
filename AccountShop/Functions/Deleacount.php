<?php 
 $conn= new mysqli('localhost','root','','shopnicklol') or die("Connect Fails"); 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query="DELETE FROM acount WHERE MAAC='$id'";
	mysqli_query($conn,$query) or die("Delete Fails!". mysqli_error($conn));
	header("location:Account.php");
}

 ?>