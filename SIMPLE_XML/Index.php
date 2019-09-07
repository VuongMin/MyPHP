<?php
//convert to xml
header("content-type:text/xml");
$shop=array(
              array("id"=>11,
                  array(
              "author"=>"Lender Toma",
              "name" =>"Victim in my house",
              "page"=>400,
              "weight"=>array(5.3,"gram"),
              "price"=>array("real"=>35.0,"saleoff"=>32.0),
              "shipping"=>array("US"=>1.2,"EN"=>2.0,"VN"=>1.0)
              )
      ),
    array("id"=>22,
        array(
            "author"=>"Kara tun",
            "name" =>" house",
            "page"=>300,
            "weight"=>array(2.3,"gram"),
            "price"=>array("real"=>32.0,"saleoff"=>32.0),
            "shipping"=>array("US"=>1.2,"EN"=>2.04,"VN"=>1.02)
        )
    ),
    array("id"=>22,
        array(
            "author"=>"Kim hero",
            "name" =>" house in pool",
            "page"=>700,
            "weight"=>array(1.3,"gram"),
            "price"=>array("real"=>30.0,"saleoff"=>30.0),
            "shipping"=>array("US"=>1.2,"EN"=>1.04,"VN"=>0.02)
        )
    )

);


$xml='<?xml version="1.0" encoding="utf-8" ?> ';
$xml.='<shop>';
foreach ($shop as $value)
{
      $xml.='<book id=" '.$value['id'].'">
        <author>'.$value[0]['author'].'</author>
        <name>'.$value[0]['name'].'</name>
        <page >'.$value[0]['page'].'</page>
        <weight units="'.$value[0]['weight'][1].'">'.$value[0]['weight'][0].'</weight>
        <price>
            <real>'.$value[0]['price']['real'].'</real>
            <saleoff>'.$value[0]['price']['saleoff'].'</saleoff>
        </price>
        <shiping>
            <US>'.$value[0]['shipping']['US'].'</US>
            <EU>'.$value[0]['shipping']['EN'].'</EU>
            <VN>'.$value[0]['shipping']['VN'].'</VN>
        </shiping>
    </book>';

}
$xml.="</shop>";
echo $xml;