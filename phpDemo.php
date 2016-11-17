<?php
header("Content-Type:text/html;Charset=UTF-8");

$x = 3;
$y = 7;

function addition()
{
	$sum = $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	return $sum;
}
echo addition();
