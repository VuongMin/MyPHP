<?php
function SizeValid($size)
{
    return ($size>=(1*1024)&&$size<=(5*1024*1024))?true:false;
}
function ExtensionsValid($name)
{
    $extension=strtolower( (pathinfo($name))["extension"]);
    return ($extension=="jpg"||$extension=="png")?true:false;
}