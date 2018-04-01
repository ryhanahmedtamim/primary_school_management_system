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
	}
?>