<?php
require "plugin/ThumbLib.inc.php";
$filename="Images/img.jpg";
$thumd= PhpThumbFactory::create($filename);

//resize
$thumd->resize(300,300);
$thumd->show();
$thumd->save("SaveImg/Edit.png");