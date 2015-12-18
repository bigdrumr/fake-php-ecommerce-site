<?php 

// INIT THE LESS.js COMPILER
include('lessphp/lessc.inc.php');

$less = new lessc;
$less->compileFile("public/less/main.less", "public/css/main.css");
$less->compileFile("admin/less/main.less", "admin/css/main.css");
?>