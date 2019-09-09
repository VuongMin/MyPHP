 <?php
 require "../Includes/On.php";
   ?>
 <p>Nội dung</p>
<!--  Thiết kế bảng-->
<table width="100%" style="text-align: left;">
    <th>Mã</th>
  <th>#ID</th>
  <th>Thời Gian Mua</th>
   <th> Giá</th>
      <th>Số Ac Mua</th>

<!--xử lí show-->
<?php
 $arr=array();

 $query="SELECT * FROM giaodich";
 $result=mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0)
 {
  $index=0;
  while ( $r=mysqli_fetch_assoc($result)) {
    # code...
        echo "<tr style='text-align:left;'>";
        $id=$r['MAGD'];
        $arr[$index++]=$id;
        echo "<td>" .$r['MAGD']." </td>";
         echo "<td>".$r['ID']."</td>";
         echo "<td>".$r['TIMEGD']."</td>";
          echo "<td>".$r['GIA']."</td>";
        echo "<td>".$r['SOAC']."</td>";
        echo "<td><a href='Delegiaodich.php?id=$id'>Xóa</a>|<a href='Updategiaodich.php?id=$id'>Sửa</a></td>"; 
        echo "</tr>";
  }
  //var_dump($arr);
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
     <td style="color: blue;text-align: center;"> Mã giao dịch</td>
          <td style="color: blue;text-align: center;">#ID </td> 
       <td style="color: blue;text-align: center;"> Thời gian </td>
        <td style="color: blue;text-align: center;">Giá </td>     
    
     <td style="color: blue;text-align: center;"> Số Lượng</td>
    </tr>
     <br>
     <tr>
       <td><input type="text" name="ma" size="2" maxlength="5" required></td>
       <td><input type="text" name="id" size="10" maxlength="5" style="margin-left:5px"required></td>
        <td><input type="text" name="thoigian" size="10" maxlength="10" style="margin-left:5px"></td>
            <td><input type="text" name="gia" size="10" maxlength="20" style="margin-left:5px"required></td> 
        <td><input type="text" name="soluong" size="10" maxlength="20" style="margin-left:5px"required></td>

         <input type="submit" value="Confirm" name="add" style="float: right;margin-top:21px;   " />
            
     </tr>
  </table>
    
 </form>


<!--================================Xử lí Thêm php==================-->
  <?php
  if(isset($_POST['add']))
  {
    $check=true;
    //kiem tra rang buoc
    foreach ($arr as $i) 
    {
      # code...
      if($i==$_POST['ma'])
      {
        echo "<p>Mã Giao dịch đã tồn tại.vui lòng kiểm tra lại!</p>";
        $check=false;//chu y den lenh break keo ko chay dc lenh nay
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
           if(!is_numeric($_POST['gia']))
    {
      echo "<p style='color:red;font-style:italic;'> Giá Không hợp lệ.vui lòng kiểm tra lại!";
    }
    else if(!is_numeric($_POST['soluong']))
    {
      echo "<p style='color:red;font-style:italic;'> Số Account Không hợp lệ.vui lòng kiểm tra lại!";
    }
    else
    {
       $ma=$_POST['ma'];    
     $soluong=$_POST['soluong'];
     $thoigian=$_POST['thoigian'];
     $id=$_POST['id'];
       $gia=$_POST['gia'];
     $query="INSERT INTO giaodich
          VALUES ('$ma','$id','$thoigian','$gia','$soluong')";
          mysqli_query($conn,$query) or die("Insert Data Fails!". mysqli_error($conn));
          header("location:Giaodich.php");
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
