<?php
  //conect
 $conn= new mysqli('localhost','root','','shopnicklol') or die("Connect Fails"); 
mysqli_query($conn,'SET NAMES UTF8');

 ?>
  <?php
 $query="SELECT TV.ID,AC.RANK,AC.KHUNG,AC.SOTUONG,GD.GIA
  FROM thanhvien AS TV,acount AS AC,giaodich AS GD
   WHERE GD.ID=TV.ID AND TV.ID=AC.ID AND AC.RANK='Đồng' ";
 $result=mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0)
 {
   $i=1;
  while ( $r=mysqli_fetch_assoc($result)) {
    # code...
       
         
        echo "<div id='boxkhung'>" ;
        echo "<P class='sa-lpcode'> ACC #".$r['ID']." - Khung :".$r['KHUNG'];
        echo " <img src='./video-image/tk$i.jpg' width='230px' height='160px' > ";
        echo "<div>";
        echo "<div class='boxtext'>";
        echo "Tướng : ".$r['SOTUONG']."<br>";
        echo "Rank : ".$r['RANK']."<br>";
        echo "</div>";
         echo " <div class='boxnode'>";
         echo " <p class='gia'> ".$r['GIA']." <sup>đ</sup></p> ";
         echo " <p class='buy'>Mua Ngay</p> ";
         echo "</div>";
          echo "</div>";
        echo "</div>"; 
        $i++;
  }
 } 
 ?>