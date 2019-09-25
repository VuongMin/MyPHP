<?php
namespace ProjectNews\Controllers;
require_once dirname(__FILE__,2) . "\Models\NewsModel.php";
class NewsController
{
    public function NewsController(){}
    public  function  index($id)
    {
        $model=new \NewsModel();
        return $model->getNews($id);
    }
    public  function  detail($id)
    {
        $model=new \NewsModel();
        return $model->getDetail($id);
    }
    public  function  comment($id)
    {
        $model=new \NewsModel();
        return $model->getComment($id);
    }
    public  function relateto($id)
    {
        $model=new \NewsModel();
        return $model->getrelateto($id);
    }
    public  function highlight($id)
    {
        $model=new \NewsModel();
        return $model->gethighlight($id);
    }
}