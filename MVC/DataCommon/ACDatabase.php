<?php
class ACDatabase
{
     private  $conn;
     private $sql;
     public  function ACDatabase()
     {
         $this->conn=mysqli_connect('localhost','root','','news')
             or die('Connect Fails.' . mysqli_error($this->conn));
            mysqli_set_charset($this->conn,"utf8");
     }
     public  function  Execute($query,$multi=false)
     {
        if(!empty($query))
        {
            $data=array();
            if($multi==false)
            {
                $this->sql= mysqli_query($this->conn,$query);
                if($this->sql->num_rows >0)
                {
                    while ($row=mysqli_fetch_assoc($this->sql))
                    {
                        $data[]=$row;
                    }
                }
                return  $data;
            }else
            {
                $this->sql=mysqli_multi_query($this->conn, $query);
                if($this->sql->num_rows >0)
                {
                    while ($row=mysqli_fetch_assoc($this->sql))
                    {
                        $data[]=$row;
                    }
                }
                return $data;
            }

        }
        return false;
     }

    /**
     * @param mixed $sql
     */
    public function setSql($sql)
    {
        $this->sql = $sql;
    }
     public  function __destruct()
     {
         // TODO: Implement __destruct() method.
         if($this->conn!=null)
         {
             mysqli_close($this->conn);
         }

     }
}