<?php
	include "DB.php";
	class Resume
	{
		public static function checkName($name){
			if(strlen($name)>3){
				return true;
			}else{
				return false;
			}
		}
		public static function makeQuerry($name,$text){
			$dbh=connect();
			$dbh->exec("INSERT INTO User(name,password) values ('".$name."','".$text."')");
		}
		public static function checkLogin($name,$password){
			$dbh=connect();
			$sql_check="SELECT * FROM User WHERE name='".$name."' AND password='".$password."'";
			$result=$dbh->query($sql_check);
			$row=$result->fetch(PDO::FETCH_ASSOC);
			$logData;
			if($row){
				$logData['id']=$row[id];
				$logData['status']=$row[status];
				return $logData;
			}	
			else{
				return $logData['id']=-1;
			}
		}

	}
?>