<?php
require_once "plugin/openid.php";
$open= new LightOpenID("localhost");

//Openid manipulation
if(!$open->mode)
{
       //OPen id of google
    $open->identity= "https://www.google.com/accounts/o8/id";
     //values ​​want to get
    $open->required=array('namePerson/friendly','contact/email','namePerson','pref/language');
    //create a path to have to a node button action to sign google
    echo '<button ><a href="'. $open->authUrl().'"> Sign in google</a></button>';
}else if($open->mode=="cancel"){
 echo "Fails";
}
else
{
       if($open->validate())
       {

       }
}