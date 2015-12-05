<?php

class emp extends Control{

	public function ac_listemp(){
		$arr=$this->Model('memp')->listemp();
		$GLOBALS["emps"]=$arr;
		$this->SetTemplate("manageEmp.htm");
		$this->Display();
	}

	public function ac_delemp(){
		$id=Request('id');
		//echo 'id='.$id;
		//exit;
		
		if($this->Model('memp')->delemp($id)){
			ShowMsg('恭喜你，删除成功了！',"?c=emp&a=listemp",0,3000);
		}else{
			ShowMsg('对不起，删除失败',-1);
		}
	}
}

