<?php
session_start();
if($_SESSION==null)
{
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Process.php" method="post">
    Name: <input type="text" name="name" required><br>
    E-mail: <input type="text" name="email" required><br>
    <input type="submit" value="Login">
</form>

</body>
</html>';

}
else
{
    echo ' <div style="border: 1px solid">
                  <b>Wellcom :</b>'.$_SESSION["User"]["name"].' 
                 </div>              ';
}
?>


