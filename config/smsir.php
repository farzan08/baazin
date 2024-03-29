<?php

return [
	/* Important Settings */
	// ======================================================================
	// never remove 'web', just put your middleware like auth or admin (if you have) here. eg: ['web','auth']
	'middlewares' => ['web'],
	// you can change default route from sms-admin to anything you want
	'route' => 'dashboard/sms-admin',
	// SMS.ir Api Key
	'api-key' => env('SMSIR-API-KEY','73aef4759e53b5af5a2cf475'),
	// SMS.ir Secret Key
	'secret-key' => env('SMSIR-SECRET-KEY','F1272541932f#'),
	// Your sms.ir line number
	'line-number' => env('SMSIR-LINE-NUMBER','50002015796108'),
	// ======================================================================
	// set true if you want log to the database
	'db-log' => true,
	// if you don't want to include admin panel routes set this to false
	'panel-routes' => true,
	/* Admin Panel Title */
	'title' => 'مدیریت پیامک ها',
	// How many log you want to show in sms-admin panel ?
	'in-page' => '15'
];