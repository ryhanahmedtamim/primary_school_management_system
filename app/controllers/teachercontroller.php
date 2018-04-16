<?php
/**
* 
*/
class Teachercontroller extends Controller
{
	
	public function index($data=[])
	{
		$id = $_SESSION['id'];
		$Teach = $this->model("Teach");
		$result = $Teach->myClass($id);
		$this->view("teacher/home",$data,$result);
	}

	public function add_student()
	{
		$this->view("teacher/add_student");
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
						header("Location: http://localhost/primary_school_management_system/public/teacher/true");
					}					

				}



		}

		public function allClasses()
		{
			$Teach = $this->model("Teach");
			$result = $Teach->allClass();
			$this->view("teacher/allclass",$result);
		}

		public function class($class)
		{
			$Student = $this->model("Student");
			$result = $Student->getAlldetails($class);
			$this->view("teacher/class",$result);
		}

		public function studentDetails($sId)
		{
			$Student = $this->model("Student");
			$result = $Student->getStudentDetails($sId);
			//print_r($result);
			$this->view("teacher/student_status",$result);
		}

		public function result()
		{
			$this->view("teacher/result",$result);
		}

		public function getResult()
		{
			$class = $_POST['class'];
			$Student = $this->model("Student");
			$result = $Student->getStuedtResults($class);
			//print_r($result);
			$this->view("teacher/classresult",$result);
		}
}

?>