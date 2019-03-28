<?php
	namespace app\index\controller;
	
	//use app\common\controller\Index as commonIndex;
	use \think\Config;
	use think\Env;
	class Index
	{
		/*public function __construct()
		{
			config('before','beforeaction');
		}*/
		public function index()
		{
			//获取配置
			//$con = \think\Config::get();
			//$con = config();
			//$res = Config::get('app_namespace');
			//$res = config('app_namespace');
			//$res = Config::set('username','aa');
			//config('username','aa');
			//config('username','aa','index');
			
			//$res = Config::has('username');
			//$res = config('?username');
			//dump($res);
			//获取环境变量
			//$res = Env::get('gmail','default');
			//$res = Env::get('database.username');
			//$res = Env::get('database_username');
			dump(config());
		}
		/*public function common()
		{
			$common = new commonIndex();
			
			$common->index();
		}*/

		public function info($id)
		{
			//localhost/index/index/info/5
			//localhost/new/5
			echo url('index/index/info',['id'=>10])."<br>";
			echo $id;
		}
	}
