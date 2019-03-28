<?php
	use think\Env;
	return [
		'app_status' => Env::get('app_status','office'),
		//'auto_bind_module'       => true
		'url_route_must'         => false,
		'url_route_on'           => true
	];
?>