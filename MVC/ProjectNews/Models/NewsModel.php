<?php
require_once dirname(__FILE__,3) . "\DataCommon\ACDatabase.php";
class NewsModel extends  ACDatabase
{
   private  $db=null;
   public  function NewsModel()
   {
       $db=new  ACDatabase();
   }
   public  function  getNews($id_type)
   {
       $sql='SELECT * 
            FROM tintuc 
            WHERE tintuc.idLoaiTin='.$id_type.' ';
       return $this->db->Execute($sql);
   }
}