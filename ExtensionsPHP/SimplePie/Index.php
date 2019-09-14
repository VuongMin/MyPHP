<?php
require_once "Libraly/autoloader.php";

$feed = new SimplePie();


$feed->set_feed_url('https://vnexpress.net/rss/tam-su.rss');
// Put it in the casePut it in the case to speed up execution
$feed->enable_cache(true);
$feed->set_cache_duration(3600);
$feed->set_cache_location("Caseche/");
$feed->init();
//Process
foreach ($feed->get_items() as $item)
{
      echo $item->get_title() ." - ". $item->get_description() . "<br/>";

}