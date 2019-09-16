
<?php
 $conn= mysqli_connect('localhost','root','','howkteam') or die('connect fails'. mysqli_error($conn));
mysqli_set_charset($conn, 'UTF8');
 //query
  $sql= "SELECT * FROM giaovien";
  $result=mysqli_query($conn,$sql);
  if( mysqli_num_rows($result)>0)
  {

        //get item
        while ($row = mysqli_fetch_assoc($result)) //mysqli_fetch_assoc() return 1 array
        {
            echo "<ul class='tablerecord'>";
            echo "<li>".$row['MAGV']." </li>";
            echo "<li>".$row['HOTEN']." </li>";
            echo "</ul>";
        }
         //delete memory astract
         mysqli_free_result($result);
  }

 echo 'success!';
 mysqli_close($conn);