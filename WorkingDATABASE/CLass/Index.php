<?php
require_once "ACDatabase.php";

$conn= new ACDatabase('localhost','root','','howkteam');
 $conn->_connect();
 $conn->_Insert('chude','','"HT1",N\'Hệ thống\'');