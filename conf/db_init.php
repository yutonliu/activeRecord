<?php

require_once dirname(__FILE__)."/PrivateConfig.php";
require_once dirname(__FILE__) . '/../helper/ActiveRecord.php';
// initialize ActiveRecord
// change the connection settings to whatever is appropriate for your mysql server 


ActiveRecord\Config::initialize(function($cfg)
{
	$configs = PrivateConfig::DB_CONFIG;
	$username = $configs['username'];
	$pass = $configs['password'];
	$hosts = $configs['hosts'];
	$port = $configs['port'];
	$dbname = $configs['dbname'];

	$MysqlConfigs = "mysql://$username:$pass@$hosts:$port/$dbname";

    $cfg->set_model_directory('../models');
    $cfg->set_connections(array('development' => $MysqlConfigs));
});



