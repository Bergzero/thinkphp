<?php
	namespace app\api\controller;
	use think\Config;
	class Index
	{
		public function index($type = 'json')
		{
			if(!in_array($type, ['json','xml']))
			{
				$type = 'json';
			}
			$res = [
				'code' => 200,
				'result' => [
					'list' => [1,2,3,4,5,60]
				]
			];
			Config::set('default_return_type','json');
			return $res;
		}
		
	}
?>