<?php
  
  class Model 
  {
  	  
  public  function singleDataQuery($querString)
   {
   
   	$connection = getDatabase("root","","primary_school");
   	
      $result = mysqli_query($connection,$querString);
		if (mysqli_num_rows($result)>0) 
			{
				while ($r = mysqli_fetch_assoc($result)) 
				{		
						$data = $r;
						
				}					
			}
			else
			{
				$data = NULL;
			}
      return $data;
	}
   
   public function dataQuery($querString)
   {
   	$connection = getDatabase("root","","primary_school");
      $result = mysqli_query($connection,$querString);
		if (mysqli_num_rows($result)>0) 
			{
				while ($r = mysqli_fetch_assoc($result)) 
				{		
						$data[] = $r;
				}					
			}
			else
			{
				$data[] = NULL;
				
			}
			mysqli_close($connection);
      return $data;
	}
	function booleanQuery($queryString)
	{
		$connection = getDatabase("root","","primary_school");
		if (mysqli_query($connection, $queryString)) 
		{
         return true;
        } 
        else 
        {
         return false;  
        }
        mysqli_close($connection);
	}
}
?>