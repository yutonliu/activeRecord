<?php
require_once dirname(__FILE__) . '/../helper/ActiveRecord.php';
require_once dirname(__FILE__) . '/../conf/db_init.php';

// assumes a table named "books" with a pk named "id"
// see simple.sql
class UserModel extends ActiveRecord\Model { 
	// explicit table name since our table is not "books"
	static $table_name = 'user';

}

$user = new UserModel;

var_dump($user);