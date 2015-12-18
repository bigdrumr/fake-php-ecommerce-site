<?php 

// INIT THE LESS.js COMPILER
include('vendors/lessphp/lessc.inc.php');

$less = new lessc;
$less->compileFile("less/main.less", "css/main.css");
?>