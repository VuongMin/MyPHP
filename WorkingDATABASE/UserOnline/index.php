<?php
$conn= mysqli_connect('localhost','root','','projectmanagement') or die('connect fails'. mysqli_error($conn));
mysqli_set_charset($conn, 'UTF8');
//query
$sql= "SELECT ID FROM onlineuser";
 $sql.=' WHERE URL=\''.$_SERVER['PHP_SELF'].'\'';
$result=mysqli_query($conn,$sql);
echo "<pre>";
    print_r($result);
echo "</pre>";
if($result->num_rows!=0)
{
    //update time
    mysqli_query($conn,'UPDATE onlineuser SET time='.time().' WHERE ID=2');
}