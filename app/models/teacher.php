<?php
	/**
	* 
	*/
	class Teacher extends Model
	{
		
		public function auth($email,$password)
		{
			$querySting = "SELECT * FROM `teacher` WHERE `email` = '$email' and `password` = '$password'";

			$result = $this->singleDataQuery($querySting);

			if($result == NULL)
			{
				return NULL;	
			}
			else 
			{
				return $result;
			}

		}
	}
?>