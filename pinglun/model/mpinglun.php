<?php
class mpinglun extends Model{
	public function listpl($aid){
		$sql="select a.uname,a.face,b. * from dede_member a left join pinglun b on a.mid=b.userid where b.videoid=$aid";

		$this->dsql->SetQuery($sql);	
		$this->dsql->Execute();

		$res=array();
		while($row=$this->dsql->GetArray()){
			$res[]=$row;
		}

		
		return $res;
	}

	public function addpl($userid,$content,$title,$aid){
		
		$pltime=time();
		$sql="insert into pinglun(userid,title,content,pltime,videoid) values($userid,'$title','$content',$pltime,$aid)";

		return $this->dsql->ExecuteNoneQuery($sql);
	}
}
