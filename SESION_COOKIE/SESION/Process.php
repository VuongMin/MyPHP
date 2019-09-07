<?php
session_start();
$session_user= $_SESSION['User']=$_POST;
if($session_user!=null)
{
    $xhtml='<!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Title</title>
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    </head>
                    <body>
                 <div style="border: 1px solid">
                  <b>Wellcom :</b>'.$session_user["email"].' 
                  <p> <a  href="logout.php">Logout</a> </p>
                 </div>    
                 
                    </body>
                </html>';
    echo  $xhtml;
}
?>

