<?php

class autoLoadRequire
{
    public function __construct($classname)
    {
        //Failing!
        //this: is class name currently in router homecontroller@index when every times init.
        spl_autoload_register([$this,'autoLoad']);
    }

    private  function autoLoad($class)  //default params is class
     {
          echo  $class;

     }
}