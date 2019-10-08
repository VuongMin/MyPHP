<?php
require_once 'Validate.php';
$val= new Validate($_REQUEST);
customRulesEveryForm($val,end($_REQUEST));
session_start();
$_SESSION['frm_error']=$val->getError();
//save info to data json
$path_support='../infoJsonData/input';
$checkSucc= SaveJsonFile($path_support,count($val->getError()));
$checkSucc ?  $_SESSION['alert_modal']='show':$_SESSION['modal']=null;

//Method process
function customRulesEveryForm($object,$val_Submit)
{
     if(strtolower($val_Submit)=='sign in')
     {
         $object->addRules(['name'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['email'=>['type'=>'email']])
             ->addRules(['subject'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['descripton'=>['type'=>'string','max'=>500,'min'=>0]]);
         $object->Run();
     }else
     {

     }
    if(empty($_REQUEST['reason']))
    {
        $object->setError('reason','This value is required.');
    }

}
function SaveJsonFile($path,$numError)
{
    if($numError==0)
    {
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
        return true;
    }
    return false;
}
header('location:../index.php');



