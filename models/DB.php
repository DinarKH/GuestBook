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

function connect2(){
	$params=array(
				'host'=>'http://dev1.msoft.su',
				'dbname'=>'Guest',
				'user' => 'learningtest3',
				'pass' => 'm6sCwXLi',
			);
	$dbh=new PDO('mysql:host='.$params['host'].'; dbname='.$params['dbname'].'; charset=utf8',$params['user'],$params['pass']);
	return $dbh;
}
