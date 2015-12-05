<?php
class comment extends Control{
	public function ac_abc(){
		$arr=$this->Model('mcomment')->mycomment();
		
		$GLOBALS["info"]=$arr;
		
		$this->SetTemplate("test.htm");
		
		$this->Display();
		//echo "ok";
		//exit;
		//$dtp = new DedeTemplate();
		//$dtp->LoadTemplate(dirname(__FILE__).'/../templates/default/test.htm');
		//$dtp->Display();

	}
}

