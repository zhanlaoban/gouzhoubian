<?php
	require_once(dirname(__FILE__).'/../include/common.inc.php');
	require_once(DEDEINC.'/request.class.php'); 
	require_once(DEDEINC.'/memberlogin.class.php'); 

	$cfg_ml=new MemberLogin();


	$c=Request('c','index');
	$a=Request('a','index');
	
	
	RunApp($c,$a);


