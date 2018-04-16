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

		public function class($class)
		{
			$Student = $this->model("Student");
			$result = $Student->getAlldetails($class);
			//print_r($result);
			$this->view("headteacher/class",$result);
		}

		public function studentDetails($sId)
		{
			$Student = $this->model("Student");
			$result = $Student->getStudentDetails($sId);
			//print_r($result);

			$this->view("headteacher/student_status",$result);
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

		public function absent_student()
		{
			$this->view("headteacher/abstuent");
		}

		public function absentStudents()
		{
			$class = $_POST['class'];
			$date1 = $_POST['date1'];
			$date2 = $_POST['date2'];
			$Student = $this->model("Student");
			$result = $Student->getabsentStudents($class,$date1,$date2);
			//print_r($result);
			$this->view("headteacher/absentStudents",$result);
		}

		public function update($id)
		{
			$Teacher = $this->model("Teacher");
			$result = $Teacher->getAllTeacher();
			//print_r($result);
			$this->view("headteacher/updateClass",$result,$id);
		}

		public function updateClass()
		{
			$t_id = $_POST['t_id'];
			$sub_id = $_POST['sub_id'];
			$Teach = $this->model("Teach");
			$result = $Teach->updateClass($t_id,$sub_id);
			if($result == true)
			{
				header("Location: http://localhost/primary_school_management_system/public/head/allClasses");
			}
		}


		public function result()
		{
			$this->view("headteacher/result",$result);
		}

		public function getResult()
		{
			$class = $_POST['class'];
			$Student = $this->model("Student");
			$result = $Student->getStuedtResults($class);
			//print_r($result);
			$this->view("headteacher/classresult",$result);
		}
	}

?>