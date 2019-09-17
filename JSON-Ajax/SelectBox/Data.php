<?php
$data= array(
            array('id'=>1 ,'cityID'=>1,'name'=>'Cái răng' ),
            array('id'=>2 ,'cityID'=>1,'name'=>'Sóc trăng' ),
            array('id'=>3 ,'cityID'=>2,'name'=>'Bình thạnh' ),
            array('id'=>4 ,'cityID'=>2,'name'=>'Quận 1' ),
            array('id'=>5 ,'cityID'=>2,'name'=>'Phú nhuận' ),
            array('id'=>6 ,'cityID'=>3,'name'=>'Thăng Long' ),
            array('id'=>7 ,'cityID'=>3,'name'=>'Đông đô' ),
            array('id'=>8 ,'cityID'=>3,'name'=>'Đông quan' ),

);

if(!empty($_REQUEST['id']))
{
    $res= array();
    foreach ($data as $key =>$val)
    {
        if($_REQUEST['id']==$val['cityID'])
        {
            $res[]=$val;
        }
    }
   // $res['statue']=true;

    echo  json_encode($res);
}
