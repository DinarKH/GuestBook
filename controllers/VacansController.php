<?php
	include_once ROOT.'/models/Vacans.php';
	class VacansController
	{

		public function actionList($parametrs){
			session_start();
			$vacansList=array();
			if($parametrs[0]){
				$vacansList=Vacans::getVacansList($parametrs[0]);
			}
			require_once(ROOT.'/view/vacans/index.php');
			
			if(isset($_POST['send_message'])){
				$name_message= $_POST['name_message'];
				$text_message= $_POST['text_message'];
				unset($_POST['name_message']);
				unset($_POST['text_message']);
				$errors=false;
				/*if(!Resume::checkName($name)){
					$errors[]="Имя должно быть больше трёх символов";
				}*/
				if($errors==false){
					Vacans::makeQuerry($name_message,$text_message);
					$errors[]="Запрос отпрален";
				}
			}		
			if(isset($_POST['delete_button'])){
				$delete_button=$_POST['delete_button'];
				Vacans::deleteButton($delete_button);
			}
			if(isset($_POST['edit_button'])){
				$name_message= $_POST['name_message'];
				$text_message= $_POST['text_message'];
				unset($_POST['name_message']);
				unset($_POST['text_message']);

				$edit_button=$_POST['edit_button'];
				Vacans::editButton($edit_button,$name_message,$text_message);
			}
		}
	}
?>