 <?php
     include "../Includes/On.php";
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
$arr=array();
 $query="SELECT * FROM thanhvien";
 $result=mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0)
 {
  $index=0;
  while ( $r=mysqli_fetch_assoc($result)) {
    # code...
     //Gan tung phan tu

        echo "<tr style='text-align:left;'>";
        $id=$r['ID'];
          $arr[$index++]=$id;
        echo "<td>" .$r['ID']." </td>";
        echo "<td>".$r['NAME']."</td>";
        echo "<td>".$r['NICKFACE']."</td>";
        echo "<td>".$r['DIENTHOAI']."</td>";
        echo "<td><a href='Delethanhvien.php?id=$id'>Xóa</a>|<a href='Updatethanhvien.php?id=$id'>Sửa</a></td>"; 
        echo "</tr>";
  }
  
 } 
 ?>
 </table>
 <!--Thêm Mới Dữ liêu-->
 <form action="#" method="post" style="margin:10px;">
  <table>
    <tr>
     <td style="color: blue;text-align: center;"> ID</td>
    
     <td style="color: blue;text-align: center;"> Name</td>
    
     <td style="color: blue;text-align: center;"> Facebook</td>
    
     <td style="color: blue;text-align: center;"> Liên hệ </td> 
    </tr>
     <br>
     <tr>
       <td><input type="text" name="ma" size="2" maxlength="3" required></td>
        <td><input type="text" name="ten" size="10" maxlength="20" style="margin-left:5px"required></td>
         <td><input type="text" name="facebook" size="10" maxlength="10" style="margin-left:5px"></td>
          <td><input type="text" name="dienthoai" size="10" maxlength="20" style="margin-left:5px"required></td>
           
         <input type="submit" value="Confirm" name="add" style="float: right;margin-top:21px;   " />
            
     </tr>
  </table>
    
 </form>


<!--================================Xử lí Thêm php==================-->
  <?php
  if(isset($_POST['add']))
  {
     $check=true;
    //kiem tra ton tai
    foreach ($arr as $i) 
    {
      # code...
      if($i==$_POST['ma'])
      {
        echo "<p style='color:red;font-style:italic;'> ID đã tồn tại.vui lòng kiểm tra lại! </p>";
        $check=false;
        break;
      }
    }
    if($check==true)
    {
         //Kiem tra so dt
    if(!is_numeric($_POST['dienthoai']))
    {
      echo "<p style='color:red;font-style:italic;'> Số điện Thoại không hợp lệ.Xin kiểm tra lại!</p>";
    } 
    else
    {
       $ma=$_POST['ma'];
     $ten=$_POST['ten'];
     $facebook=$_POST['facebook'];
     $dienthoai=$_POST['dienthoai'];
     $query="INSERT INTO thanhvien
          VALUES ('$ma','$ten','$facebook','$dienthoai')";
          mysqli_query($conn,$query) or die("Insert Data Fails!". mysqli_error($conn));
          header("location:Khachhang.php");
          
    }

    }
    
    
  } 
   ?>

 <!--Phần Giua và cuối nè------------->
        <?php
        include '../Includes/Right.php';
        include '../Includes/Below.php';
        mysqli_close($conn);
                 ?>
