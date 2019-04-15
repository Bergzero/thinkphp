<?php
	namespace app\index\model;

	use think\Model;
	use traits\model\SoftDelete;

	class User extends Model
	{
		use SoftDelete;

		protected $autoWriteTimestamp = true;

		protected $createTime = false;

		protected $updateTime = 'time_update';

		protected $deleteTime = 'time_delete';
		
	}
?>