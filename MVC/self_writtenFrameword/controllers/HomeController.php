<?php
namespace self_writtenFrameword\Controllers;

class HomeController
{
       public  function  index()
       {
          echo "<h1> This is page Home</h1>";
       }
       public  function  News($id)
       {
           echo "<h1> This is page New. id =  $id</h1>";
       }
}