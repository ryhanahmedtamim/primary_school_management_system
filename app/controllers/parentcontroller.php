<?php
	
	/**
	* 
	*/
	class Parentcontroller extends Controller
	{
		
		public function index($data=[])
		{
			$this->view("parents/home",$data);
		}
	}

?>