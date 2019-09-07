
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title
</head>
<body>
<?php
 $total=0;
 foreach ($_GET as $key=>$value)
 {
     if(is_numeric($value))
     {
         $total+=$value;
     }
 }
 $compare=file("Result");
 array_shift($compare);
 foreach ($compare as $key=>$val)
 {
      $arrRe=explode('|',$val);
      if($total<=$arrRe[1])
      {
          echo "<p>Point:$total </p>";
          echo $arrRe[2];
          break;
      }
 }



?>

</body>
</html>