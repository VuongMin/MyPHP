<?php
$Xml= simplexml_load_file("XML/xpath.xml") or die("path xml file not exist");
    echo "<pre>";
                echo print_r($Xml);
      echo "</pre><hr>";
//get item book follow index.
/*  echo "<pre>";
              echo print_r($Xml->book[2]);
    echo "</pre><hr>";
*/
foreach ($Xml->book as $value)
{
    echo "<pre>";
                echo print_r($value);
      echo "</pre>";
}

