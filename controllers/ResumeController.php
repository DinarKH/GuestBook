<?php
	include_once (ROOT.'/models/Resume.php');
	class ResumeController
	{		

		public function actionShow(){
			session_start();
			$a=0;
			$name="";
			$password="";
			$resume="";
			$errors=false;
			$login;
			if(isset($_POST['registration'])){
				$name= $_POST['name'];
				$password= hash('sha256', $_POST['password']);
				unset($_POST['name']);
				unset($_POST['password']);
				$errors=false;
				if(!Resume::checkName($name)){
					$errors[]="Имя должно быть больше трёх символов";
				}
				if($errors==false){
					Resume::makeQuerry($name,$password);
					$errors[]="Запрос отпрален";
				}
			}		
			if(isset($_POST['login'])){
				$name= $_POST['name'];
				$password= hash('sha256', $_POST['password']);
				unset($_POST['name']);
				unset($_POST['password']);
				$login=Resume::checkLogin($name,$password);
				if($login!=-1){
					$_SESSION['id']=$login['id'];
					$_SESSION['status']=$login['status'];
					$_SESSION['name']=$name;
				}
				$errors[]="Запрос отпрален";
			}	
			if(isset($_POST['exit'])){			
				session_destroy();
			}			
			require_once(ROOT.'/view/resume/index.php');
		}
	}
?>