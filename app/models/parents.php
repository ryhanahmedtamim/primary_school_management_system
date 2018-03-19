<?php
	
	class Parents extends Model
	{
		
		public function auth($email,$password)
		{
			$querySting = "SELECT * FROM `parent` WHERE `email`= '$email' AND `password` = '$password' ";
			$result = $this->singleDataQuery($querySting);

			return $result;
		}

		public function addParent($parentsName,$phoneNumber,$address,$city,$email,$passward)
		{
			$querySting = "INSERT INTO `parent` (`id`, `name`, `email`, `password`, `st_or_vil`, `city`, `phone`) VALUES (NULL, '$parentsName', '$email', '$passward', '$address', '$city', '$phoneNumber')";

			$result = $this->booleanQuery($querySting);

			return $result;
		}

		public function findByemail($email)
		{
			$querySting = "SELECT * FROM `parent` WHERE `email` = '$email'";
			$result = $this->singleDataQuery($querySting);

			return $result;
		}
		
	}


?>