<?php
	class Student extends Model
	{
		
		
		public function	addStuent($firstName,$lastName,$s_id,$class,$dateOfBirth,$pid)
		{
			$querySring = "INSERT INTO `students` (`s_id`, `parent_id`, `f_name`, `l_name`, `date_of_birth`, `class`) VALUES ('$s_id', '$pid', '$firstName', '$lastName', '$dateOfBirth', '$class')";
			$result = $this->booleanQuery($querySring);
			return $result;
		}
		
	}
?>