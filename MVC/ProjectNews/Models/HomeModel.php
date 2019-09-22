<?php
  require_once dirname(__FILE__,3) . "\DataCommon\ACDatabase.php";

    class HomeModel extends  ACDatabase
    {
        private  $db=null;
        public  function HomeModel()
        {
          $this->db= new ACDatabase();
        }
        public  function getSlide()
        {

            $sql= "SELECT * FROM slide";
            $res= $this->db->Execute($sql);
            return $res;
        }
        public  function  getMenu()
        {
            $sql='SELECT theloai.*,GROUP_CONCAT(loaitin.id,\',\',loaitin.Ten,\',\',loaitin.TenKhongDau) as Typenews
                    FROM theloai JOIN loaitin
                    on theloai.id =loaitin.idTheLoai
                    GROUP BY theloai.id';
            return $this->db->Execute($sql);
        }
        public  function  getNews()
        {
            $sql='SELECT  theloai.id,theloai.Ten,theloai.TenKhongDau,GROUP_CONCAT(DISTINCT loaitin.id,\',\',loaitin.Ten,\',\',loaitin.TenKhongDau) as Typenews,tintuc.TieuDe,tintuc.TieuDeKhongDau,tintuc.NoiDung,tintuc.Hinh,tintuc.TomTat 
                FROM theloai JOIN loaitin on theloai.id =loaitin.idTheLoai
                JOIN tintuc ON loaitin.id=tintuc.idLoaiTin 
                GROUP BY theloai.id';
            return $this->db->Execute($sql);
        }
    }



