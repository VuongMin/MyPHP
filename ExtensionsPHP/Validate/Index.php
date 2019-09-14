<?php
      $Suocre=array("name"=>"victim",
                    "age"=> 29,
                    "url"=>"https://translate.google.com.vn/?hl=en#view=home&op=translate&sl=en&tl=vi&text=thumb",
                    "mail"=>"vuongm910@gmail.com"
                   );
      require_once "Validate.php";
      $x=new Validate($Suocre);
     $x->addRules(array("name"=>array("type"=>'string','max'=>500,'min'=>0)))
        ->addRules(array("url"=>array( "type"=>'url')))
        ->addRules(array("email"=>array("type"=>'email')))
         ->addElement('age',29,'int');


     $x->Run();


