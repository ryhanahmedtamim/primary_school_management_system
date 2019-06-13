<?php
	
	
	class homecontroller extends Controller
	{
		
		public function index($data =[])
		{
			$this->view('home/index',$data);
		}
	}
?>