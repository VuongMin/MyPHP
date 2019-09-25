<?php
//run first file Startup config ...
require_once '../../Core/Startup.php';
$run = new  Startup();
$run->run();
//=============================================================================
$root= dirname($_SERVER['REQUEST_URI']);
$rd=rand(0,10);

?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<p><a href="<?php echo $root?>/News/<?php echo $rd?>">->News</a> </p>
<script>
    $('p a').click(function () {
        $.ajax({
            url: "../system.php"
        }).done(function(data) {
            console.log(data);
        });

    });
</script>

</body>


