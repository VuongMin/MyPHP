<?php



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
    public function setError( $key,$Error)
    {
        $this->Error[$key]=$Error;
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
    public  function  checkString($name,$max,$min,$nameVal)
    {
        $length=strlen($name);
        if($length==0)
        {
            $this->setError($nameVal,'This value is required');
            return false;
        }
        if(!is_string($name))
        {
            $this->setError($nameVal,'is not string !');
            return false;
        }else if ($length>$max)
        {
            $this->setError($nameVal,'is  string too long !');
            return false;
        }else if($length<$min)
        {
            $this->setError($nameVal,'is  string too short !');
            return false;
        }
        return true;
    }
    public  function  checkURL($name,$nameVal)
    {
        if(empty($name))
        {
            $this->setError($nameVal,'This value is required.');
          return false;
        } elseif (!filter_var($name, FILTER_VALIDATE_URL)) {
            $this->setError($nameVal,'URL is invalid!');
            return false;
        }
        return true;
    }
    public  function  checkEmail($name,$nameVal)
    {
        if(empty($name))
        {
            $this->setError($nameVal,'This value is required.');
            return false;
        } elseif (!filter_var($name, FILTER_VALIDATE_EMAIL)) {
            $this->setError($nameVal,'Email is invalid!');
            return false;
        }
        return true;
    }
    public  function  checkInt($name,$nameVal)
    {
        if(empty($name))
        {
            $this->setError($nameVal,'This value is required.');
            return false;
        } elseif(!is_numeric($name))
          {
              $this->setError($nameVal,'is not a number!');
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
                 $this->checkString($this->getSuorce()[$key],$val['max'],$val['min'],$key);
                 break;
              }
              case 'int':
              {
                $this->checkInt($this->getSuorce()[$key],$key);    break;
              }
              case 'url':
              {
                $this->checkURL($this->getSuorce()[$key],$key);    break;
              }
              case 'email':
                  {
                       $this->checkEmail($this->getSuorce()[$key],$key);    break;
                  }
          }
       }

    }

}