<?php
	
	
	class logincontroller extends Controller
	{		
		public function index($data=[])
		{
			$this->view('login/login',$data);
		}

		public function login()
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password = md5($password);
			$teacher = $this->model("Teacher");

			$result = $teacher->auth($email,$password);

			if($result != NULL)
			{
				$_SESSION['userName'] = $result['email'];
				$_SESSION['name'] = $result['f_name'] + $result['l_name'];
				$_SESSION['position'] = $result['position'];
				$_SESSION['id'] = $result['t_id'];
				$_SESSION['login'] = 1;

				$userType = $result['position'];
				echo $userType;
				header("Location: http://localhost/primary_school_management_system/public/".$userType); 
			}
			else
			{
				$Parents = $this->model("Parents");

				$result = $Parents->auth($email,$password);	
				//print_r($result);
				if($result != NULL)
				{
					//print_r($result);
					$_SESSION['userName'] = $result['email'];
				$_SESSION['name'] = $result['f_name'] + $result['l_name'];
				$_SESSION['position'] = $result['position'];
				$_SESSION['id'] = $result['id'];
				$_SESSION['login'] = 1;

				$userType = "parent";
				echo $userType;
				header("Location: http://localhost/primary_school_management_system/public/".$userType); 
				}
				else
				{

					$data = "This email or password is not match";
	  			header("Location: http://localhost/primary_school_management_system/public/".$data);
	  			}
			}

		}


		public function logout()
		{
			if(isset($_SESSION['login']))
			{
				session_destroy();
				header("Location: http://localhost/primary_school_management_system/public/"); 
           		exit();
			}
			else
			{
				header("Location: http://localhost/primary_school_management_system/public/login/login_first"); 
           		exit();
			}
		}
	}

	



?>