<?php
//echo __FILE__; //return paht current of localhost php.
$caseTime= 3600;
$pathCase="DataCaseched/" . pathinfo(__FILE__,PATHINFO_FILENAME).'.html';
//check time out of html
if(file_exists($pathCase)&&$caseTime>time()-filectime($pathCase))
{
       include  $pathCase;
}else
{
    //create case html
    //init astract memory
    ob_start();
    for ($i=0;$i<1000;$i++)
    {echo $i ."<br/>";}

    //post in file html and auto create file
    file_put_contents($pathCase,ob_get_contents());
    ob_flush();
}
