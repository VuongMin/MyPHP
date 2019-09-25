<?php
require_once dirname(__FILE__,3) . "\DataCommon\ACDatabase.php";

class NewsModel extends  ACDatabase
{
    private  $db=null;
    public  function NewsModel()
    {
        $this->db= new ACDatabase();
    }

    public  function  getNews($id_type,$start=0,$much=10)
    {
        $sql='SELECT * 
            FROM tintuc 
            WHERE tintuc.idLoaiTin='.$id_type.'
             LIMIT '.$start.','.$much;


        return $this->db->Execute($sql);
    }
    public  function  getDetail($id)
    {
        $sql='SELECT * FROM tintuc WHERE  tintuc.id='.$id;
        return $this->db->Execute($sql);
    }
    public  function  getComment($id)
    {
        $sql='SELECT * FROM comment WHERE  comment.idTinTuc='.$id;
        return $this->db->Execute($sql);
    }
    public  function  getrelateto($id)
    {
        $sql='SELECT * FROM tintuc WHERE  tintuc.idLoaiTin='.$id.' LIMIT 0,10 ';
        return $this->db->Execute($sql);
    }
    public  function  gethighlight($id)
    {
        $sql='SELECT * FROM tintuc WHERE  tintuc.idLoaiTin= '.$id.' AND tintuc.NoiBat > 0'.' LIMIT 0,4';
        return $this->db->Execute($sql);
    }

}



