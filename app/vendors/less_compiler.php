<?php 
include('lessphp/lessc.inc.php');										// INIT THE LESS.js COMPILER

$less = new lessc;														// instantiate the compiler class
$less->compileFile("less/main.less", "css/main.css");					// compile main.less to main.css
?>