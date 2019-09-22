<?php
require_once "Router.php";
require_once dirname(__FILE__,2).'\Controllers\HomeController.php';

class Startup
{
    private  $Router;
    public  function  Startup()
    {
       $this->Router=new Router();
       //Đăng kí và Cần làm gì với url hiện có!
         $this->Router->get('/','HomeController@index');
        //direct handling with function amonouse!
        $this->Router->get('/news/{catergory}/{id}',function ( $catergory,$id)
        {
            echo 'This is news page!{' .$id."}";
            echo '-'.$catergory;
        });
        //not found 404 ::
        $this->Router->any('*',function ()
        {
            echo "Not found 404.";
        });
    }
    public  function run()
    {
        $this->Router->run();
    }

}