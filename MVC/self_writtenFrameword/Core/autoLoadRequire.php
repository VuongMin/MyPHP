<?php

class autoLoadRequire
{
    public function __construct()
    {
        //Failing!
        //this: is class name currently in router homecontroller@index when every times init.
        spl_autoload_register([$this,'autoLoad']);
    }

    private  function autoLoad($class)  //default params is class
     {
         $root=Startup::getConfig()['rootPath'];
     $tmp=explode('\\',$class);
       $className= end($tmp);
       $nameSpace= str_replace($className,'',$class);
       $filePath= $root.'\\'.$nameSpace.$className.'.php';
       if(file_exists($filePath))
       {
           require_once $filePath;
       }

     }
}