<?php

function connect(){
	$params=array(
				'host'=>'localhost',
				'dbname'=>'Guest',
				'user' => 'root',
				'pass' => '',
			);
	$dbh=new PDO('mysql:host='.$params['host'].'; dbname='.$params['dbname'].'; charset=utf8',$params['user'],$params['pass']);
	return $dbh;
}

