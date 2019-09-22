<?php
require_once dirname(__FILE__,2) . "\Models\NewsController.php";

class NewsController
{
    public function NewsController(){}
    public  function  index($id)
    {
        $model=new NewsModel();
        return $model->getNews($id);
    }

}