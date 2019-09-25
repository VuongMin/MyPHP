<?php
namespace ProjectNews\Controllers;
require_once dirname(__FILE__,2) . "\Models\HomeModel.php";
//Pick up event from ajax function call ..$_GET
if(isset($_REQUEST))
{
    if(isset($_REQUEST['action']))
    {
        switch ($_REQUEST['action'])
        {
            case 'menu':
            {
                $call=new HomeController();
                $call->multilevel_Menu();
                break;
            }
        }
    }elseif (isset($_REQUEST['key']))
    {
        $model=new \HomeModel();
        echo json_encode($model->LoadSearch($_REQUEST['key']));
    }
}


class HomeController
{

   public  function __construct ()
   {

   }

    public  function  index()
    {

    }
    public  function  slide()
     {
        $model = new  \HomeModel();
       $res=  $model->getSlide();
        return array($res);
     }
     public  function  LoadNews()
     {
         $model=new \HomeModel();
         return $model->getNews();
     }
     //use ajax to load data
    public  function multilevel_Menu()
    {
        $model=new  \HomeModel();
        echo json_encode($model->getMenu());//return 1 object json.
    }

    /**
     * @param mixed $keyload
     */
}