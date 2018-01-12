<?php 
	require 'db.php';
 	$sqltran = mysqli_query($con, "SELECT id, link, bron, datum, titel, inleiding, raw, genre FROM verhaaltjes") or die(mysqli_error($con));
	$arrVal = array();
 	$i=1;

 	while ($rowList = mysqli_fetch_array($sqltran)) {
		$x = array(
		    'link'=> $rowList['link'],
		    'id'=> $rowList['id'],
			'bron'=> $rowList['bron'],
			'datum'=> $rowList['datum'],
		    'titel'=> $rowList['titel'],
			'inleiding'=>  base64_decode($rowList['inleiding']),
			'raw'=> base64_decode($rowList['raw']),
			'genre'=> $rowList['genre'],
    		);		
		array_push($arrVal, $x);	
		$i++;			
 	}
 	echo  json_encode($arrVal);		
 	mysqli_close($con);
?>   
 
