<?php
    include "DB.php";
	class Vacans{
        public static function getVacansList($id){
			$dbh=connect();
			$sql = 'SELECT * FROM Comments';
			//$x_param=$configArray;
			$x_param=4;
			$sql_join="SELECT Comments.id,Comments.name,Comments.text,Comments.user_id FROM Comments  LEFT JOIN User  ON Comments.user_id=User.id limit ".($id-1)*$x_param.",".$x_param;
			$i=0;
			$result=$dbh->query($sql_join);
			while($row=$result->fetch()){
				$vacansList[$i]['id']=$row['id'];
				$vacansList[$i]['name']=$row['name'];
				$vacansList[$i]['text']=$row['text'];
				$vacansList[$i]['user_id']=$row['user_id'];
				$i++;
			}		
			return $vacansList;
		}

		public static function makeQuerry($name,$text){
			$dbh=connect();
			$user_id=-1;
			if(isset($_SESSION['id'])){
				if($_SESSION['id']!=-1){
					$user_id=$_SESSION['id'];
				}
			}
			$dbh->exec("INSERT INTO Comments(user_id,text,name) values (".$user_id.",'".$text."','".$name."')");
		}

		public static function deleteButton($id){
			$$dbh=connect();
			$sql="Delete FROM Comments where id=".$id;
			$dbh->exec($sql);
		}
		public static function editButton($id,$name,$text){
			$dbh=connect();
			$sql="UPDATE Comments SET name='".$name."',text='".$text."' where id=".$id;
			$dbh->exec($sql);
		}
	}
?>