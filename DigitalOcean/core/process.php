<?php
session_start();
require_once 'Validate.php';
$path_support='../infoJsonData/support';
$path_sale='../infoJsonData/sales';
$value=end($_REQUEST);
// Check case difference REQUEST : {key: val}ajax||$_POST with  'private $Suorce' (valitdate)
$val= is_string($value)? new Validate($_REQUEST):new Validate(end($_REQUEST));
customRulesEveryForm($val,$value, is_string($value)?$path_support:$path_sale);


//Method process
function customRulesEveryForm($object,$val_Submit,$path)
{
     if(is_string($val_Submit)&&strtolower($val_Submit)=='sign in')
     {
         $object->addRules(['name'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['email'=>['type'=>'email']])
             ->addRules(['subject'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['descripton'=>['type'=>'string','max'=>500,'min'=>0]]);
         $object->Run();
         if(empty($_REQUEST['reason']))
         {
             $object->setError('reason','This value is required.');
         }
         //save info to data json
         $checkSucc= SaveJsonFile($path,count($object->getError()));
         $checkSucc ?  $_SESSION['alert_modal']='show':$_SESSION['modal']=null;
         //error
         $_SESSION['frm_error']=$object->getError();
         header('location:../index.php');
     }else
     {
         $object->addRules(['firstname'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['lastname'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['email'=>['type'=>'email']])
             ->addRules(['phone'=>['type'=>'int']])
             ->addRules(['company'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['role'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['seniority'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['usecase'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['spend'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['migration'=>['type'=>'string','max'=>100,'min'=>0]])
             ->addRules(['discription'=>['type'=>'string','max'=>100,'min'=>0]]);
        $object->Run();

         //save info to data json
         $checkSucc= SaveJsonFile($path,count($object->getError()));
         if($checkSucc==false)
         {
             echo json_encode($object->getError());
         }else{

             echo true;
         }
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




