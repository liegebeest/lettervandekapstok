<?php 
	require 'db.php';
 	$sqltran = mysqli_query($con, "SELECT naam, link, datum, genre FROM cobra") or die(mysqli_error($con));
	$arrVal = array();
 	$i=1;
 	while ($rowList = mysqli_fetch_array($sqltran)) {
 							 
		$x = array(
		    'link'=> $rowList['link'],
			'naam'=> $rowList['naam'],
			'datum'=> $rowList['datum'],
			'genre'=> $rowList['genre'],
    		);		
		array_push($arrVal, $x);	
		$i++;			
 	}
 	echo  json_encode($arrVal);		
 	mysqli_close($con);
?>   
 
