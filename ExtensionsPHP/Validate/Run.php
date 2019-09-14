<?php
require_once "Validate.php";
$x=new Validate($_POST);

$x->addRules(array("name"=>array("type"=>'string','max'=>500,'min'=>0)))
    ->addRules(array("url"=>array( "type"=>'url')))
    ->addRules(array("email"=>array("type"=>'email')))
    ->addElement('age','int');

$x->Run();
if(isset($_POST['submit']))
{
    echo "<pre>";
        print_r($x->getError());
    echo "</pre>";
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<form action="" method="post">

    <h1>Sign Up</h1>

    <fieldset>
        <legend><span class="number">1</span>Your basic info</legend>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="mail">Email:</label>
        <input type="text" id="" name="email">



        <label>Age:</label>
        <input type="text" id="age" name="age">

        <label>URL:</label>
        <input type="text" id="url" name="url">
    </fieldset>


    <button name="submit" type="submit">Sign Up</button>
</form>

</body>
</html>
