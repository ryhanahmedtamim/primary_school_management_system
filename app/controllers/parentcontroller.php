<?php
	
	/**
	* 
	*/
	class Parentcontroller extends Controller
	{
		
		public function index($data=[])
		{	
			$Student = $this->model("Student");
			//echo $_SESSION['id'];
			$result = $Student->getStuedt($_SESSION['id']);
			//print_r($result);
			$this->view("parents/home",$result);
		}

		public function studentDetails($sId)
		{
			$Student = $this->model("Student");
			$result = $Student->getStudentDetails($sId);
			$this->view("parents/student_status",$result);
		}

		public function result()
		{
			$this->view("parents/result",$result);
		}

		public function getResult()
		{
			$class = $_POST['class'];
			$Student = $this->model("Student");
			$result = $Student->getStuedtResults($class);
			//print_r($result);
			$this->view("parents/classresult",$result);
		}
	}

?>