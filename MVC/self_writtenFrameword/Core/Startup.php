<?php
require_once "Router.php";
require_once "autoLoadRequire.php";
//controllers require in autoLoad
use self_writtenFrameword\Core\Router;

//config
$_config= require_once dirname(__FILE__,2).'\config\root.php';
Startup::setConfig($_config);


class Startup
{

    private static  $config;
    private  $Router;
    public  function  Startup()
    {
         new autoLoadRequire();
       $this->Router=new Router();
       //Sign up and What to do with an existing url!
         $this->Router->get('Home/','HomeController@index');
        //direct handling with function amonouse!
        $this->Router->get('News/{id}','HomeController@News');
        //not found 404 ::
        $this->Router->any('*',function ()
        {
            echo "Not found 404.";
             die();
        });
    }
    public  function run()
    {
        $this->Router->run();
    }

    /**
     * @param mixed $config
     */
    public static function setConfig($config)
    {
        self::$config = $config;
    }

    /**
     * @return mixed
     */
    public static function getConfig()
    {
        return self::$config;
    }

}