<?php	

        $server = 'localhost';
		$user = 'root';
		$pass = '';
		$bd = 'provaweb';
		
		$conn = new mysqli($server, $user, $pass, $bd);
					
		if($conn->connect_error){
			//
		}	
		
?>