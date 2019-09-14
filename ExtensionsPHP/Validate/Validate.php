<?php


use function MongoDB\BSON\fromJSON;

class Validate
{
     private  $Error=array();
     private  $Suorce=array();
     private  $Rules=array();
    //method
    public  function Validate($object)
    {
        $this->Suorce=$object;
    }
    /**
     * @return array
     */
    public function getError(): array
    {
        return $this->Error;
    }

    /**
     * @param array $Error
     */
    public function setError($Error)
    {
        $this->Error[] = $Error;
    }

    /**
     * @return array
     */
    public function getSuorce(): array
    {
        return $this->Suorce;
    }

    /**
     * @param array $Suorce
     */
    public function setSuorce(array $Suorce)
    {
        $this->Suorce = $Suorce;
    }

    /**
     * @return array
     */
    public function getRules(): array
    {
        return $this->Rules;
    }

    /**
     * @param array $Rules
     */
    public function setRules(array $Rules)
    {
        $this->Rules = $Rules;
    }
    //Rules
    public function addRules($arrRules)
    {
         foreach ($arrRules as $name =>$value)
         {
              $this->Rules[$name]=$value;
         }
         return $this;//to continue -> addRules
    }
    //add every element
    public  function addElement($element,$type,$max=0,$min=0)
    {
        $this->Rules[$element]=array('type'=>$type,'max'=>$max,'min'=>$min);
        return $this;
    }
    //validate
    public  function  checkString($name,$max,$min)
    {
        $length=strlen($name);
        if($length==0)
        {
            $this->setError('is emty !');
            return false;
        }
        if(!is_string($name))
        {
            $this->setError('is not string !');
            return false;
        }else if ($length>$max)
        {
            $this->setError('is  string too long !');
            return false;
        }else if($length<$min)
        {
            $this->setError('is  string too short !');
            return false;
        }
        return true;
    }
    public  function  checkURL($name)
    {
        if (!filter_var($name, FILTER_VALIDATE_URL)) {
            $this->setError('URL is invalid!');
            return false;
        }
        return true;
    }
    public  function  checkEmail($name)
    {
        if (!filter_var($name, FILTER_VALIDATE_EMAIL)) {
            $this->setError('Email is invalid!');
            return false;
        }
        return true;
    }
    public  function  checkInt($name)
    {
          if(!is_numeric($name))
          {
              $this->setError('is not a number!');
              return false;
          }
          return true;
    }
    public  function   Run()
    {
       foreach ($this->getRules() as $key =>$val)
       {
          switch ($val['type'])
          {
              case 'string':
              {
                 $this->checkString($this->getSuorce()['name'],$val['max'],$val['min']);
                 break;
              }
              case 'int':
              {
                $this->checkInt($this->getSuorce()['age']);    break;
              }
              case 'url':
              {
                $this->checkURL($this->getSuorce()['url']);    break;
              }
              case 'email':
                  {
                       $this->checkEmail($this->getSuorce()['email']);    break;
                  }
          }
       }
    }

}