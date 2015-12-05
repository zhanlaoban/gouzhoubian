<?php
	require_once(dirname(__FILE__).'/../include/common.inc.php');
	require_once(DEDEINC.'/request.class.php'); 

	$c=Request('c','index');
	$a=Request('a','index');
	
	
	RunApp($c,$a);


