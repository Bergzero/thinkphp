<?php
	namespace app\index\controller;
	
	//use app\common\controller\Index as commonIndex;
	use think\Config;
	use think\Env;
	use think\Request;
	use think\Controller;
	use think\View;
	use think\Db;
	use app\index\model\User;
	class Index extends Controller
	{
		/*public function __construct()
		{
			config('before','beforeaction');
		}*/
		public function index(Request $request)
		{
			//$res = User::create([
			// 			'password' => 'imooc',
			// 			'name' => 'aaaa',
			// 		]
			// 	);
			//$res = User::destroy(2);
			//$res = User::get(2);
			//$res = User::withTrashed(true)->find(2);
			// $res = User::onlyTrashed()->select();

			// foreach ($res as $val) {
			// 	dump($val->getData());
			// }
			$user = User::get(2);
			$res = $user->delete(true);

			dump($res);



			//echo $res->sex;
			
		}
		/*public function common() 
		{
			$common = new commonIndex();
			
			$common->index();
		}*/

		/*public function info($id)
		{
			//localhost/index/index/info/5
			//localhost/new/5
			echo url('index/index/info',['id'=>10])."<br>";
			echo $id;
		}*/
	}