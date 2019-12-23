<?php 
return array(
	'admin/specialty/delete/([A-Za-z0-9-]+)' => 'adminSpecialty/delete/$1',
	'admin/specialty/([A-Za-z0-9-]+)' => 'adminSpecialty/view/$1',
	'admin/add/specialty' => 'adminSpecialty/add',
	'admin/specialties' => 'adminSpecialty/get',
	'products' => 'adminProducts/get',
	'createOrder/([A-Za-z0-9-]+)' => 'adminOrders/add/$1',
	'orders' => 'adminOrders/get',

	'main' => 'main/index',
	'login' => 'user/login',
	'admin' => 'admin/panel',
	'logout' => 'user/logout',
	'registration' => 'user/add',

);
?>