<?php  
	
	$db = mysqli_connect ( "localhost", "root", "", "library_app" );

	if ( $db )
	{
		echo "Database Connection Successfully";
	}
	else
	{
		echo "Database Connection Failed";
	}

?>