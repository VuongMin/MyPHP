<?php
require_once dirname(__FILE__,2) . "\Models\HomeModel.php";
//Pick up event from ajax function call ..$_GET
if(isset($_REQUEST['action']))
{
      switch ($_REQUEST['action'])
      {
          case 'menu':
          {
              $call= new  HomeController();
              $call->multilevel_Menu();
          }
      }
}
class HomeController
{

   public  function HomeController(){}


    public  function  index(){}
    public  function  slide()
     {
        $model = new  HomeModel();
       $res=  $model->getSlide();
        return array($res);
     }
     //use ajax to load data
    public  function multilevel_Menu()
    {
        $model=new  HomeModel();
        echo json_encode($model->getMenu()) ;//return 1 object json.
    }
}