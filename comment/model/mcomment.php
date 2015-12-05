<?php

class mcomment extends Model{
	public function mycomment(){
		$sql="select * from dede_archives";
		$this->dsql->SetQuery($sql);
		$this->dsql->Execute();
		$arr=array();
		while($row=$this->dsql->GetArray()){
			$arr[]=$row;
		}
		//echo "<pre>";
		//var_dump($arr);
		//echo "</pre>";
		return $arr;
	}
}


