<?php
	$string="hello";

	$matches=array();

	preg_match('/hel.?/', $string,$matches);

	print_r($matches);
?>