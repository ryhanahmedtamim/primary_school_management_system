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

		public function addTeacher($t_id,$firstName,$lastName,$phoneNumber,$position,$address,$city,$email,$password)
		{
			$querySring = "INSERT INTO `teacher` (`t_id`, `f_name`, `l_name`, `email`, `password`, `phone`,`st_or_vill`,`city`,`position`) VALUES ('$t_id', '$firstName', '$lastName', '$email', '$password', '$phoneNumber','$address','$city','$position')";
			$result = $this->booleanQuery($querySring);
			return $result;
		}
	}
?>