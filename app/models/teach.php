<?php class Teach extends Model
	{
		
		
		public function	allClass()
		{
			$querySring = "SELECT * 
			FROM subject NATURAL JOIN teach, teacher 
			WHERE teach.t_id = teacher.t_id 
			ORDER by sub_id";
			$result = $this->dataQuery($querySring);
			return $result;
		}

		public function allteacher()
		{
			$querySring = "SELECT * 
			FROM teacher NATURAL JOIN teach, subject 
			WHERE subject.sub_id = teach.sub_id 
			ORDER by t_id";
			$result = $this->dataQuery($querySring);
			return $result;	
		}

		public function myClass($id)
		{
			$querySring = "SELECT * FROM subject NATURAL JOIN teach, teacher WHERE teach.t_id = teacher.t_id AND teacher.t_id = '$id' ORDER by sub_id";
			$result = $this->dataQuery($querySring);
			return $result;
		}

		public function updateClass($t_id,$sub_id)
		{
			$querySring = "UPDATE teach SET t_id = '$t_id' WHERE sub_id = '$sub_id'";
			$result = $this->booleanQuery($querySring);
			return $result;
		}

		public function setmarks($s_id,$sub_id,$term_id,$year,$marks)
		{
			$querySring = "INSERT INTO `term` (`term_id`, `year`, `sub_id`, `s_id`, `marks`) VALUES ('$term_id', '$year', '$sub_id', '$s_id', '$marks')";
			$result = $this->booleanQuery($querySring);
			return $result;
		}
	}
?>