<?php
	class Student extends Model
	{
		
		
		public function	addStuent($firstName,$lastName,$s_id,$class,$dateOfBirth,$pid)
		{
			$querySring = "INSERT INTO `students` (`s_id`, `parent_id`, `f_name`, `l_name`, `date_of_birth`, `class`) VALUES ('$s_id', '$pid', '$firstName', '$lastName', '$dateOfBirth', '$class')";
			$result = $this->booleanQuery($querySring);
			return $result;
		}

		public function getAlldetails($class)
		{

			$querySring = "SELECT * FROM students, parent WHERE students.class = '$class' and students.parent_id = parent.id Order BY students.s_id";			
			$result = $this->dataQuery($querySring);
			return $result;
		}

		public function getStudentDetails($sId)
		{
			$querySring = "SELECT * FROM (SELECT * FROM subject NATURAL JOIN study) as sub NATURAL JOIN term,students WHERE students.s_id ='$sId'  AND students.s_id = sub.s_id order by term_id";
			$result = $this->dataQuery($querySring);
			return $result;
		}

		public function getabsentStudents($class,$date1,$date2)
		{
			$querySring = "SELECT * FROM (SELECT s_id FROM attend 
			WHERE attend.date BETWEEN '$date1' and '$date2' AND attend.status = 0) as a , (Select * FROM students as s , parent as p WHERE s.class = '$class' and s.parent_id = p.id) as s1	WHERE s1.s_id = a.s_id";
			$result = $this->dataQuery($querySring);
			return $result;
		}

		public function getStuedt($pid)
		{
			$querySring = "SELECT * FROM students WHERE parent_id = '$pid'";
			$result = $this->dataQuery($querySring);
			return $result;
		}

		public function getStuedtResults($class)
		{
			$querySring = "SELECT * FROM (SELECT s_id , sum(marks) as to_marks FROM term to_marks group by s_id) as all_term,students WHERE  students.s_id = all_term.s_id AND students.class = '$class' order by to_marks DESC";
			$result = $this->dataQuery($querySring);
			return $result;
		}
		
	}
?>