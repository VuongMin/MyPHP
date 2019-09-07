<?php
// Database of menu
$Data= array(
    array('id'=>1,'name'=>'Home','parentsId'=>0),
    array('id'=>2,'name'=>'About','parentsId'=>0),
    array('id'=>3,'name'=>'News','parentsId'=>0),
    array('id'=>4,'name'=>'Products','parentsId'=>0),
    array('id'=>5,'name'=>'Contact','parentsId'=>0),
    array('id'=>6,'name'=>'Tin trong nuoc','parentsId'=>3),
    array('id'=>7,'name'=>'Tin nuoc ngoai','parentsId'=>3),
    array('id'=>8,'name'=>'CNTT','parentsId'=>6),
    array('id'=>9,'name'=>'Lap trinh','parentsId'=>6),
    array('id'=>10,'name'=>'IT','parentsId'=>7),
    array('id'=>11,'name'=>'Programmer','parentsId'=>7),
    array('id'=>12,'name'=>'Software','parentsId'=>4),
    array('id'=>13,'name'=>'Mobile','parentsId'=>4),
    array('id'=>14,'name'=>'Anti virus','parentsId'=>12),
    array('id'=>15,'name'=>'Nokia','parentsId'=>13),
    array('id'=>16,'name'=>'Samsung','parentsId'=>13),
    array('id'=>17,'name'=>'S1','parentsId'=>16),
    array('id'=>18,'name'=>'S1.1','parentsId'=>17),
);

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery eosMenu Plugin Demo</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }
    </style>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="./eosMenu/eosMenu.css" />
</head>

<body>
<div class="eos-menu" id="menu">

    <div class="eos-menu-content">
        <ul class="menu-multi">
            <?php
             $countData=count($Data);
            foreach ($Data as $key =>$value)
            {
                if($value['parentsId']==0)
                {
                    echo "<li class=\"eos-group-title\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ".$value['name']." <i class=\"fa fa-angle-right fa-lg eos-pull-right\" aria-hidden=\"true\"></i></li>";
                    $xhtml="<ul class=\"eos-group-content\">";
                    for ($i=$key+1;$i<$countData; $i++)
                    {
                        if($value['id']==$Data[$i]['parentsId'])
                        {
                            $xhtml.=" 
                                    <li class=\"eos-item\">
                                        <a href=\"#\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ".$Data[$i]['name']."</a>
                                    </li>";
                        }
                    }
                    echo $xhtml."</ul>";
                }
            }
            ?>

        </ul>
    </div>
</div>

<div style="line-height:26px;padding:15px;margin:20px auto;font-size:14px;color:#333; text-align:center">
    <h1>jQuery eosMenu Plugin Demo</h1>
    <div class="jquery-script-ads" style="margin-top:30px" align="center"><script type="text/javascript"><!--
            google_ad_client = "ca-pub-2783044520727903";
            /* jQuery_demo */
            google_ad_slot = "2780937993";
            google_ad_width = 728;
            google_ad_height = 90;
            //-->
        </script>
        <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script></div>
</div>

<script src="http://code.jquery.com/jquery-3.1.0.slim.min.js"></script>
<script src="./eosMenu/eosMenu.js" type="text/javascript" charset="utf-8"></script>
<script>
    $("#menu").eosMenu();
</script>
</body>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</html>