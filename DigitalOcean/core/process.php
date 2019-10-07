<?php
require_once 'Validate.php';
$val= new Validate($_REQUEST);
$val->addRules(['name'=>['type'=>'string','max'=>100,'min'=>0]])
    ->addRules(['email'=>['type'=>'email']])
    ->addRules(['subject'=>['type'=>'string','max'=>100,'min'=>0]])
    ->addRules(['descripton'=>['type'=>'string','max'=>500,'min'=>0]]);

$val->Run();
session_start();
$_SESSION['frm_error']=$val->getError();
//save info to data json
if(count($val->getError())==0)
{
    $path='../infoJsonData/input';
    if(file_exists($path))
    {
        $fp = @fopen($path, "a+");
        if ($fp) {
            //so that it is formatted like:[{"name":"Victim","email":"vuongm910@gmail.com","subject":"subject","descripton":"can i help you","submit":"Sign in"}]
            $data[] = $_REQUEST;
            $inp = file_get_contents($path);
            if($inp!=null)
            {
                $tempArray = json_decode($inp);
                array_push($tempArray, $_REQUEST);//format [{},{},{}]
                $jsonData = json_encode($tempArray);
                file_put_contents($path, $jsonData);
            }else
            {
                file_put_contents($path, json_encode($data));
            }
            //close file
            fclose($fp);
        }
    }
}
header('location:../index.php');



