 <?php
     require "../Includes/On.php";
   ?>
 <p>Nội dung</p>
<!--  Thiết kế bảng-->
<table width="100%" style="text-align: left;">
    <th>#ID </th>
  <th>Tên Khách Hàng</th>
  <th>Tên Facebook</th>
  <th> Điện Thoại</th>
   <th></th>


<!--xử lí show-->
<?php
 $query="SELECT * FROM thanhvien";
 $result=mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0)
 {
  while ( $r=mysqli_fetch_assoc($result)) {
    # code...
        echo "<tr style='text-align:left;'>";
        $id=$r['ID'];
        echo "<td>" .$r['ID']." </td>";
        echo "<td>".$r['NAME']."</td>";
        echo "<td>".$r['NICKFACE']."</td>";
        echo "<td>".$r['DIENTHOAI']."</td>";
        //echo "<td><a href='delecc.php?id=$id'>Xóa</a>|<a href='updatecc.php?id=$id'>Sửa</a></td>"; 
        echo "</tr>";
  }
 } 
 ?>
 </table>
 <!--Phần Giua và cuối nè------------->
        <?php 
        include '../Includes/Right.php';
        include '../Includes/Below.php';
                 ?>
