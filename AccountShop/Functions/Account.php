 <?php
     include "../Includes/On.php";
   ?>
 <p>Nội dung</p>
<!--  Thiết kế bảng-->
<table width="100%" style="text-align: left;">
    <th>Mã</th>
  <th>#ID</th>
  <th>Rank</th>
  <th>Khung Xếp Hạng</th>
   <th>Tướng Sở Hữu</th>


<!--xử lí show-->
<?php
 $arr=array();
 $arrid=array();
 $query="SELECT * FROM acount";
 $result=mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0)
 {
  $index=0;
  while ( $r=mysqli_fetch_assoc($result)) {
    # code...
        echo "<tr style='text-align:left;'>";
        $id=$r['MAAC'];
        $arr[$index++]=$id;
        echo "<td>" .$r['MAAC']." </td>";
        echo "<td>".$r['ID']."</td>";
        echo "<td>".$r['RANK']."</td>";
        echo "<td>".$r['KHUNG']."</td>";
           echo "<td>".$r['SOTUONG']."</td>";
        echo "<td><a href='Deleacount.php?id=$id'>Xóa</a>|<a href='Updateacount.php?id=$id'>Sửa</a></td>"; 
        echo "</tr>";
  }
 }
 // kiem tra dieu kien id bang phu
 $arrid=array();
 $code="SELECT TV.ID FROM thanhvien AS TV";
 $ketqua=mysqli_query($conn,$code); 
 if(mysqli_num_rows($ketqua)>0)
 {
   $i=0;
     while ( $r=mysqli_fetch_assoc($ketqua))
     {
        $arrid[$i++]=$r['ID'];
     }
 } 
 ?>
 </table>
 <!--Thêm Mới Dữ liêu-->
 <form action="#" method="post" style="margin:10px;">
  <table>
    <tr>
     <td style="color: blue;text-align: center;"> Mã Account</td>
    
     <td style="color: blue;text-align: center;"> #ID</td>
    
     <td style="color: blue;text-align: center;">Rank </td>
    
     <td style="color: blue;text-align: center;">Khung </td> 
       <td style="color: blue;text-align: center;">Số Tướng </td> 
    </tr>
     <br>
     <tr>
       <td><input type="text" name="ma" size="2" maxlength="5" required></td>
        <td><input type="text" name="id" size="10" maxlength="3" style="margin-left:5px"required></td>
         <td><input type="text" name="rank" size="10" maxlength="10" style="margin-left:5px"></td>
          <td><input type="text" name="khung" size="10" maxlength="10" style="margin-left:5px"required></td>
           <td><input type="text" name="sotuong" size="10" maxlength="20" style="margin-left:5px"required></td>
           
           
         <input type="submit" value="Comfirm" name="add" style="float: right;margin-top:21px;   " />
            
     </tr>
  </table>
    
 </form>


<!--================================Xử lí Thêm php==================-->
  <?php
  if(isset($_POST['add']))
  {
    $check=true;

    foreach ($arr as $i) 
    {
      # code...
      if($i==$_POST['ma'])
      {
        echo "<p style='color:green;'>Mã account đã tồn tại .vui lòng kiểm tra lại!</p>";
        $check=false;
        break;
      }
    }
     $count=0;
     foreach ($arrid as $i) 
     {
       # code...
      if($i==$_POST['id'])
      {
        $count++;
      }
     }
     if($count ==0)
     {
       echo "Mã ID của bạn Không hợp lệ .vui lòng Kiểm tra Bảng Khách Hàng! ";
       $check=false;
     }
     if($check==true)
     {
        if(!is_numeric($_POST['sotuong']))
     {
      echo "<p style='color:red;font-style:italic;'> SỐ tướng sở hữu không hợp lệ.vui lòng kiểm tra lại!</p>";
     }
     else
     {
      $ma=$_POST['ma'];
     $id=$_POST['id'];
     $rank=$_POST['rank'];
     $khung=$_POST['khung'];
      $sotuong=$_POST['sotuong'];
     $query="INSERT INTO acount
          VALUES ('$ma','$id','$rank','$khung',$sotuong)";
          mysqli_query($conn,$query) or die("Insert Data Fails!". mysqli_error($conn));
          header("location:Account.php");
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
