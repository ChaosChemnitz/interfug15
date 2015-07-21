<?php
header("Expires: ".gmdate("D, d M Y H:i:s", time() + 180) ." GMT"); // Date in the past
header('Content-type: text/css');

$colors = Array(
Array("name"=>"red","rgb"=>"#e30613"),
Array("name"=>"green","rgb"=>"#3aaa35"),
Array("name"=>"blue","rgb"=>"#009fe3")
);
/*
 * 
.yellow{
color:#ffde00;
}
 * 
 */
 $color=$colors[rand(0, 2)];
 include "raw.css";
?>
