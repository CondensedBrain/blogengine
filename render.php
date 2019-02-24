<?php
//Settings
$site_name = "Condensed Brain";
date_default_timezone_set('America/New_York');



foreach (glob("posts/*.php") as $filename)
{
ob_start();
require $filename;

require "template.php";
  $content = ob_get_contents();
  // Worry about permalink/filename/directories later
  // Will be like /post-slug/index.html
 file_put_contents( "./output/" . $filename . "-rendered.html", $content);


  ob_end_clean();
}
?>
