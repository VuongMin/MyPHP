
  <?php
  //conect
 $conn= new mysqli('localhost','root','','shopnicklol') or die("Connect Fails"); 
mysqli_query($conn,'SET NAMES UTF8');

 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="./css/index.css">
<script>
$(document).ready(function(){
    $("#ut").click(function(){
        $("#boxshow").load("./HTML/uytinshop.html");
    });
});
$(document).ready(function(){
    $("#nap").click(function(){
        $("#boxshow").load("./HTML/napthe.html");
    });
});
$(document).ready(function(){
    $("#muaac").click(function(){
        $("#boxshow").load("./HTML/hdmuaac.html");
    });
});
$(document).ready(function(){
    $("#bm").click(function(){
        $("#boxshow").load("./HTML/hdbaomat.html");
    });
});$(document).ready(function(){
    $("#dangki").click(function(){
        $("#boxshow").load("./HTML/dangki.html");
    });
});


//===================================php =======================================
//Dưới 100Tươg
$(document).ready(function(){
    $("#below100").click(function(){
        $("#boxshow").load("Functions/Timtheotuong.php");
    });
});
//trên 100 tướng
$(document).ready(function(){
    $("#on100").click(function(){
        $("#boxshow").load("Functions/Fulltuong.php");
    });
});
//rank dong

$(document).ready(function(){
    $("#rdong").click(function(){
        $("#boxshow").load("Functions/rankdong.php");
    });
});
$(document).ready(function(){
    $("#rankkc").click(function(){
        $("#boxshow").load("Functions/Timtheorankdong.php");
    });
});
//khung
$(document).ready(function(){
    $("#kbac").click(function(){
        $("#boxshow").load("Functions/khungbac.php");
    });
}); 
$(document).ready(function(){
    $("#kvang").click(function(){
        $("#boxshow").load("Functions/khungvang.php");
    });
}); 
$(document).ready(function(){
    $("#khungkc").click(function(){
        $("#boxshow").load("Functions/Timtheokhungkc.php");
    });
});
//giá
$(document).ready(function(){
    $("#giaduoi").click(function(){
        $("#boxshow").load("Functions/Giaduoi.php");
    });
});
$(document).ready(function(){
    $("#giatren").click(function(){
        $("#boxshow").load("Functions/Giatren.php");
    });
});


</script>
</head>
<body>
<div id="container">
  
  
  
  
       <div id="menungang">     
         <ul id="boxmenu" >
  <img id="logo" src="video-image/logo.png">
  <li ><a href="index.php">trang chủ</a></li>
   <li id="nap"><a href="#">nạp thẻ </a></li>
   <li id="ut"><a href="#"><i>uy tín shop </i></a></li>
    <li id="muaac"><a href="#">hd mua ac</a></li>
    <li id="bm"><a href="#">hd bảo mật</a></li>
	<li><a href="Functions/sign.php">Đăng Nhập</a></li>
           
           
                 </ul>
         
       </div>
  
       <div id="banner">
         <div id="imbox">
           <script>
  var i = 0;
  var images = [];
  var time = 2000;

  // Image list
  images[0] = './video-image/im1.jpg';
  images[1] = './video-image/im2.jpg';
  images[2] = './video-image/im3.jpg';
  images[3] = './video-image/im4.png';

  // Change image
  function changeImage(){

    document.slide.src = images[i];

    if(i <images.length - 1){
      i++;
      
    } else {
      i = 0;
    }
    setTimeout("changeImage()", time);
  }

  window.onload = changeImage;
</script>

<img name="slide" width="750" height="311">

           </div>
           
         <img id="chu" src="video-image/chu.png">
         <img id="zed"src="video-image/zed.png">
         <img id="logo" src="video-image/logotk.png">
        <img id="mid"src="video-image/mid.png">
         <p id="textbaner">SHOPACUYTIN.COM</p>
         
         
       </div>
     

<div id="giaodich">
  <div id="text">giao dịch gần đây</div>
  <ol>
    
    <li><i>01</i>Thái vinh phúc<label>90.000<sup>đ</sup></label></li>
    <li><i>02</i>kha ngố<label>90.000<sup>đ</sup></label></li>
    <li><i>03</i>vĩ ba master<label>85.000<sup>đ</sup></label></li>
    <li><i>04</i>hồ sâm nhi<label>70.000<sup>đ</sup></label></li>
    <li><i>05</i>dã trí bình<label>70.000<sup>đ</sup></label></li>
    <li> <i>06</i>tiểu long nữ<label>65.000<sup>đ</sup></label></li>
     <li> <i>07</i> A ngu<label>60.000<sup>đ</sup></label></li>
     <li> <i>08</i> quang nguyễn<label>60.000<sup>đ</sup></label></li>
     <li> <i>09 </i>vuongmin <label>55.000<sup>đ</sup></label></li>
     <li> <i>10</i> kara san<label>50.000<sup>đ</sup></label></li>
   
     <li> <i>11</i> hoàng nguyễn<label>40.000<sup>đ</sup></label></li>
     <li> <i>12</i> nhật bảo<label>35.000<sup>đ</sup></label></li>
     <li> <i>13</i> nhi nhi<label>35.000<sup>đ</sup></label></li>
  
    <li> <i>15</i> min min<label>20.000<sup>đ</sup></label></li>

  </ol>
</div>




<div id="menu">
   <ul>
 <li><a href="#">tim theo rank</a>
     <ul class="sub">  
          <li id="rdong"><a href="#">đồng </a></li>
        <li id="rankkc"><a href="#">kim cương</a></li>
        <li><a href="#">thách đấu</a></li>
    </ul>  
  </li>
    <li><a href="#">tìm theo khung</a>
       <ul class="sub">  
          <li id="kbac"><a href="#"> khung bạc </a></li>
         <li id="kvang"><a href="#"> khungvàng</a></li>
        <li id="khungkc"><a href="#">khung  kim cương</a></li>
        <li><a href="#">khung cao thủ</a></li>
    </ul>  
    </li>
    

    <li><a href="#">tìm theo giá</a>
       <ul class="sub">  
         <li id="giaduoi"><a href="#"> < 300k </a></li>
        <li id="giatren"><a href="#">trên 300k</a></li>
    </ul>  
    </li>
    
    <li><a href="#">tìm theo trang phục</a>
       <ul class="sub">  
          <li><a href="#">huyết nguyệt</a></li>
          <li><a href="#">huyền thoại</a></li>
        <li><a href="#">siêu phầm</a></li>
        
    </ul>  
    </li>
    
    
    
    
    
    <li><a href="#">tìm theo số  tướng</a>
       <ul class="sub">  
         <li id="below100"><a href="#">dưới 100 tướng</a></li>
          <li id="on100"><a href="#">full tướng</a></li>

  </ul>
     </li>
	 </ul>
  
</div>
  
  <!--- Khung Vieu====================================================================--->
  
  
  
<div id="boxshow">
  <?php
 $query="SELECT TV.ID,AC.RANK,AC.KHUNG,AC.SOTUONG,GD.GIA
  FROM thanhvien AS TV,acount AS AC,giaodich AS GD
   WHERE GD.ID=TV.ID AND TV.ID=AC.ID   ";
 $result=mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0)
 {
   $i=1;
  while ( $r=mysqli_fetch_assoc($result)) {
    # code...
      $pathImage="video-image/tk" .$i.".jpg";
        echo "<div id='boxkhung'>" ;
        echo "<P class='sa-lpcode'> ACC #".$r['ID']." - Khung :".$r['KHUNG'];
        echo " <img src=$pathImage width='230px' height='160px' > ";
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
        if($i==6)
        {
          $i=1;
        }
  }
 } 
 ?>

</div>

<!--End================================================================================--->


<div id="footer">
  <h4>SHOP ACC LMHT Giá Rẻ - Uy Tín - Giao Dịch Tự Động.
</h4>
  <div id="text">
    hotline: 01683888205</br>
  
  thời gian làm việc :6h -21h
  các ngày trong tuần
  
</div>
  
  

</div>



</div>


</body>
</html>
