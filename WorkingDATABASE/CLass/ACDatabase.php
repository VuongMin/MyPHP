<?php


class ACDatabase
{
    protected  $Host;
    protected  $User;
    protected  $Password;
    protected  $Namedatabase;
    public  $Table;
    private  $conn=null;
    public  function  ACDatabase($host,$user,$pass,$namedatabase)
    {
     $this->Host=$host;
     $this->User=$user;
     $this->Password=$pass;
     $this->Namedatabase=$namedatabase;
    }
    public  function _connect()
    {
        $this->conn= mysqli_connect($this->Host,$this->User,$this->Password,$this->Namedatabase) or die('Connect Fails!');
        return true;
    }
    public  function _Insert($table,$strCols,$strVal)
    {
        $sql= 'INSERT INTO '.$table.' ('.$strCols.')VALUES('.$strVal.')';
          mysqli_query($this->conn,$sql);
          $relsutRow=mysqli_affected_rows($this->conn);
          if($relsutRow<1)
          {
              echo mysqli_error($this->conn);
              return false;
          }
          return true;
    }

    /**
     * @return mixed
     */
    public function getTable()
    {
        return $this->Table;
    }

    /**
     * @param mixed $Table
     */
    public function setTable($Table)
    {
        $this->Table = $Table;
    }
    public  function __destruct()
    {
        if($this->conn!=null)
        {
            mysqli_close($this->conn);
        }
        // TODO: Implement __destruct() method.

    }
}