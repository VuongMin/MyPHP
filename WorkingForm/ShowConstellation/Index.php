<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constellation</title>
</head>
<body>
<form style="border: 1px solid; text-align: center" action="" name="" method="get">
    <h3>Which Constellation are you ?</h3>
    Month of birth:<input  type="text" name="txtMonth"  required><br><br>
    Day of birth :<input TYPE="number" name="txtDay" required>
    <br>
    <input TYPE="submit" value="Comfirm" name="btnSubmit">

    <div class="Result">
        <?php
            if(isset($_REQUEST['btnSubmit']))
            {
                $day=$_REQUEST['txtDay'];
                $month=$_REQUEST['txtMonth'];
                if(is_numeric($day)&&is_numeric($month))
                {
                    // show result
                     if($day>1&&$month<2 )
                     {
                         echo "<img src='Images/bachduong.jpg'>". "Cung bach duong";
                     }else if($day>1&&$month<4&&$month<2 )
                     {
                         echo "<img src='Images/cugiai.jpg'>". "Cung cu giai";
                     }else if($day>1&&$month<7&&$month<5 )
                     {
                         echo "<img src='Images/kimnguu.jpg'>". "Cung Kim nguu";
                     }else if($day>1&&$month<12&&$month<6 )
                     {
                         echo "<img src='Images/songtu.jpg'>". "Cung song tu";
                     }

                }
                else
                {
                    echo "<script>window.alert('Please!check again!')</script>";
                }
            }
        ?>
    </div>

</form>
</body>
</html>