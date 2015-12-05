<?php
class pinglun extends Control{
	public function ac_listpl(){
		$aid=Request('aid');
		
		require_once(DEDEINC.'/arc.archives.class.php');
		$ainfos=new Archives($aid);
		$ainfos->ParAddTable();

		//未完成的分页
		/*require_once(DEDEINC.'/datalistcp.class.php');

		$GLOBALS['ainfos']=$ainfos;
		$dlist=new DataListCP();
		$dlist->pageSize=10;
		$sql="select a.uname,a.face,b.* from dede_member a left join pinglun b on a.mid=b.userid where b.videoid=$aid";
		$tpfile="templates/default/pinglun.html";
		$dlist->SetTemplate($tpfile);
		$dlist->SetSource($sql);
		$dlist->Display();*/

		$res=$this->Model('mpinglun')->listpl($aid);

		$GLOBALS['pls']=$res;


		$this->SetTemplate('pinglun.html');

		$this->Display();

	}

	public function ac_addpl(){
		$aid=Request('movieid');
		$content=Request('content');
		$title=Request('title');
		
		//echo $aid."---".$content."---".$title;
		//exit;
		global $cfg_ml;
		$userid=$cfg_ml->M_ID;
		
		if($this->Model('mpinglun')->addpl($userid,$content,$title,$aid)){
			ShowMsg("评论添加成功","?c=pinglun&a=listpl&aid=$aid",0,3000);
		}else{
			ShowMsg("评论添加失败","?c=pinglun&a=listpl&aid=$aid",0,3000);
		}

	}


}
