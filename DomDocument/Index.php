<?php
$xml= new DOMDocument("1.0","utf-8");
//Init element in root
$book=$xml->createElement("Book");
$weight=$xml->createElement("Weight",300);
$WeightAttr=$xml->createAttribute("units");
$WeightAttr->value="gram";
$price=$xml->createElement("price");
//Add in node and attr
    $book->appendChild($xml->createElement("author","Miley"));
    $book->appendChild($xml->createElement("name","house of ghost!"));
    $book->appendChild($weight);
            $weight->appendChild($WeightAttr);
    $book->appendChild($price);
            $price->appendChild($xml->createElement("real",35.0));
            $price->appendChild($xml->createElement("saleoff",32.0));
$xml->appendChild($book);
//save and auto create file xml
$xml->formatOutput=true;
$xml->save("xml/data.xml") or die(" save file xml fails!");
