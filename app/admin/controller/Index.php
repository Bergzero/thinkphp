<?php
	namespace app\admin\controller;
	
	//use app\common\controller\Index as commonIndex;
	class Index
	{
		public function index()
		{
			dump(config());
		}
		/*
		public function common()
		{
			echo "haixing";
			
			$common = new commonIndex();
			
			return $common->index();
		}*/
		
	}
?>

