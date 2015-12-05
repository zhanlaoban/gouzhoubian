<?php
class memp extends Model{
	public function listemp(){
		$sql="select * from emp1";
		$this->dsql->SetQuery($sql);
		$this->dsql->Execute();
		$arr=array();
		while($row=$this->dsql->GetArray()){
			$arr[]=$row;
		}
		echo "<pre>";
		var_dump($arr);
		echo "</pre>";
		return $arr;
	}


	public function delemp($id){
		$sql="delete from emp1 where id=$id";

		return $this->dsql->ExecuteNoneQuery($sql);
		
	}
}


