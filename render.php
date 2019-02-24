<?php

$site_name = "Condensed Brain";


foreach (glob("posts/*.php") as $filename)
{
require $filename;

require "template.php";
}
?>
