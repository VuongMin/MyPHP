<?php

 /*get extension of file name
   check size of file
  **/
 require "Check.php";
 $data=$_FILES['fileToUpload'];
 if(!empty($data['name']))
 {
    $x=new Check($data);
     $x->UploadFile();
 }