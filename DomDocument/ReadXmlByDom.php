<?php
//Read file xml by DOM
$xml=new DOMDocument();
$xml->load("xml/xpath.xml") or die("Error when load xml.");
//get value
$tagbook=$xml->getElementsByTagName("book");
$indexItem=$tagbook->item(1);
$author= $indexItem->getElementsByTagName("author");
  echo "<pre>";
              echo print_r($indexItem->attributes->item(0));
    echo "</pre><hr>";
    echo "Tag Parent:" . $indexItem->parentNode->tagName;
    echo "<br>author :" . $author->item(0)->nodeValue ;
    echo "<br>attr of book curent :" . $indexItem->attributes->item(0)->value;