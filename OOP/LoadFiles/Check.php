<?php


 class Check
{
  private $FileName;
  private $tmp_name;
  private $Error;
  private $Size;

    public function Check($array){
        $this->FileName=$array['name'];
        $this->tmp_name=$array['tmp_name'];
        $this->Size=$array['size'];

    }
    /**
     * @param mixed $Size
     */
    public function setSize($Size)
    {
        $this->Size = $Size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param mixed $tmp_name
     */
    public function setTmpName($tmp_name)
    {
        $this->tmp_name = $tmp_name;
    }
    /**
     * @return mixed
     */
    public function getTmpName()
    {
        return $this->tmp_name;
    }
  /**
     * @return mixed
     */public function getFileName()
    {
        return $this->FileName;
    }/**
     * @param mixed $FileName
     */public function setFileName($FileName)
    {
        $this->FileName = $FileName;
    }
    public   function  InvalExtension()
    {
         $ext=strtolower(pathinfo($this->getFileName(), PATHINFO_EXTENSION )) ;
        if($ext=="jpg"||$ext=="png"||$ext=="zip")
        {
            return true;
        }
        $this->Error[]="Extension of this file is invalid.";
     return false;
    }
    public  function   InvalSize()
    {
        $size=$this->getSize();
        if($size<1000||$size>1000000)
        {
            $this->Error[]="Size of this file is invalid.";
            return false;
        }
        return true;
    }
    public function  UploadFile()
  {
    if($this->InvalSize()&&$this->InvalExtension())
    {
        @move_uploaded_file($this->getTmpName(),"Images/" . $this->getFileName());

        echo "<script>window.alert('successfully!')</script>";
    }else
    {

          echo "<pre>";
                      echo print_r($this->Error);
            echo "</pre>";
    }
 }
}
