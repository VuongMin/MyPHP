<?php
namespace  self_writtenFrameword\Core;

class Router
{
       private $Routers=[];
        public  function Router(){}
        private  function  getRequsetURL()
        {
           $url= isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'/'; // '/' will have config.
            $url=str_replace(\Startup::getConfig()['basePath'],'',$url);
            $url=$url ==='/' ||empty($url) ?'/':$url;
            return $url;
        }
        private  function  getRequestMethod()
        {
           return isset($_SERVER['REQUEST_METHOD'])? $_SERVER['REQUEST_METHOD'] :'GET'; //Default method GET
        }
        public  function  mapping()
        {
            $sparams=[];
            $checkActionResult=false;
            $RequestURL=$this->getRequsetURL();
            $RequestMethod=$this->getRequestMethod();
            foreach ($this->Routers as $val)
            {
               list($method,$url,$action)=$val;
               if($url=='*')
               {
                  if(is_callable($action))
                  {
                      $action();
                  }
                   return;
               }
                if(strpos($method ,$RequestMethod )===false)
                {
                  continue;
                }
                else
                {
                    if(strcmp(strtolower($url),strtolower($RequestURL))===0)
                    {
                       if(is_callable($action))
                       {
                           $action();
                           return;
                       }
                       $checkActionResult=true;
                    }else if(strpos($url,'{')&&strpos($url,'}'))
                    {
                        $r_URl=explode('/',$url);
                        $r_RequesURL =explode('/',$RequestURL);

                        if(count($r_URl)==count($r_RequesURL))
                        {
                          //check format {id}/{}...
                            foreach ($r_URl  as $key=>$val)
                            {
                                if(preg_match('/^{\w+}$/',$val))
                                {
                                   $sparams[]=$r_RequesURL[$key];//because 2 array have length same.
                                }
                            }
                            if(is_callable($action))
                            {
                               call_user_func_array($action,$sparams);
                                return;
                            }
                            $checkActionResult=true;
                        }
                       //die();
                    }
                    if ($checkActionResult==true && is_string($action)) // 'controller@actionresult'
                    {
                        //$name_Controller == class name
                        $name_Controller= explode('@',$action)[0];
                        $name_actionresult=explode('@',$action)[1];
                        if(count(explode('@',$action))==2)
                        {
                            //if have namespace is have to path that + $name_controller
                            if(class_exists('self_writtenFrameword\\Controllers\\'.$name_Controller))
                            {
                                $x='self_writtenFrameword\\Controllers\\' .$name_Controller;
                               $this_controller=new $x;
                              if(method_exists($this_controller,$name_actionresult))
                              {
                                 /* //có 2 chức năng :
                                  +thực thi hàm và truyền vào một mảng tham số.
                                  +thực thi trong một class -> actionmethod và nhận mảng tham số. */
                                call_user_func_array([$this_controller,$name_actionresult],$sparams);
                                return;

                              }
                            }
                        }

                    }

                }

            }

        }
        //add router
          private  function addRouter($_method,$_url,$_action)
          {
              $this->Routers[]=[$_method,$_url,$_action];

          }
        //register action for url
        public function get($url,$action)
        {
          $this->addRouter('GET',$url,$action);
        }
        public function post($url,$action)
        {
            $this->addRouter('POST',$url,$action);
        }
        public function any($url,$action)
        {
            $this->addRouter('GET|POST',$url,$action);
        }
        public  function  run()
        {
          $this->mapping();

        }

}