<?php
 $conn= mysqli_connect('localhost','root','','projectmanagement') or die('Connect Fails!');
 $data= array(
                array('Name'=>'victim','Address'=>'EEU','Place'=>'hospital','sex'=>true),
                array('ID'=>'4','Name'=>'victim','Address'=>'EEU','Place'=>'hospital'),
                array('Name'=>'victim','Place'=>'hospital','sex'=>false)
 );
 function FortmatInsert($arr)
 {
     if(!empty($arr))
     {
         $Result=array();
         $cols='';
         $vals='';
         foreach ($arr as $key =>$value)
         {
             $cols.=$key.',';
             $vals.="'".$value."',";
         }
         $Result['cols']= substr($cols,0,strlen($cols)-1);
         $Result['vals']=substr($vals,0,strlen($vals)-1);
         return $Result;
     }

 }


 foreach ($data as $val)
 {
     $x= FortmatInsert($val);
     $sql= 'INSERT INTO architect ('.$x['cols'].')VALUES('.$x['vals'].')';
     $result= mysqli_query($conn,$sql);
 }
//Insert 1 row
     /*$sql= 'INSERT INTO architect ('.$x['cols'].')VALUES('.$x['vals'].')';
    $result= mysqli_query($conn,$sql);*/
//number row excuted.
 echo mysqli_affected_rows($conn);
 mysqli_close($conn);