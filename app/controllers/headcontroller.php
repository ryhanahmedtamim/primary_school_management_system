<?php

	
	class Headcontroller extends Controller
	{
		
		public function index($data = [])
		{

			$id = $_SESSION['id'];
			$Teach = $this->model("Teach");
			$result = $Teach->myClass($id);
			
			$this->view("headteacher/home",$data,$result);


		}

		public function add_student()
		{
			$this->view("headteacher/add_student");
		}

		public function registerStudent()
		{
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$s_id = $_POST['s_id'];

			$class = $_POST['class'];
			$dateOfBirth = $_POST['dateOfBirth'];


			//parents
			$parentsName = $_POST['parentsName'];
			$email = $_POST['email'];
			$phoneNumber = $_POST['phoneNumber'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$password = $_POST['password'];

			$password = md5($password);

			$Parents = $this->model("Parents");

			$result = $Parents->addParent($parentsName,$phoneNumber,$address,$city,$email,$password);

				if($result == true)
				{
					$Student = $this->model("Student");

					$pid = $Parents->findByemail($email);
					$pid = $pid['id'];
					$result = $Student->addStuent($firstName,$lastName,$s_id,$class,$dateOfBirth,$pid);
					if($result == true)
					{
						header("Location: http://localhost/primary_school_management_system/public/head/true");
					}					

				}
		}

		public function add_teacher()
		{
			$this->view("headteacher/add_teacher");
		}

		public function registerTeacher()
		{
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$t_id = $_POST['t_id'];
			$position = $_POST['position'];
			$email = $_POST['email'];
			$phoneNumber = $_POST['phoneNumber'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$password = $_POST['password'];

			$password = md5($password);

			$Teacher = $this->model("Teacher");

			$result = $Teacher->addTeacher($t_id,$firstName,$lastName,$phoneNumber,$position,$address,$city,$email,$password);

				if($result == true)
				{
					header("Location: http://localhost/primary_school_management_system/public/head/true2");
								

				}
		}

		public function allClasses()
		{
			$Teach = $this->model("Teach");
			$result = $Teach->allClass();
			$this->view("headteacher/allclass",$result);
		}

		public function all_teacher()
		{
			$Teach = $this->model("Teach");
			$result = $Teach->allteacher();
			$this->view("headteacher/allteacher",$result);
		}
	}

?>