<?php 
	require 'db.php';
 	$sqltran = mysqli_query($con, "SELECT titel, raw, inleiding, genre FROM verhaaltjes ORDER BY id DESC LIMIT 1") or die(mysqli_error($con));
	$arrVal = array();
 	$i=1;
 	while ($rowList = mysqli_fetch_array($sqltran)) {
 	    
 	    $rawdata = base64_decode($rowList['raw']);
 	    $rawdata_print = str_replace("|", "</p><p>", $rawdata);
 	    
 	    $inl_raw = $rowList['inleiding'];
 	    $inl_print = base64_decode($inl_raw);
 	    
		$x = array(
		    'titel'=> $rowList['titel'],
			'inleiding'=> $inl_print ,
			'raw'=> $rawdata_print,
			'genre'=> $rowList['genre'],
    		);		
		array_push($arrVal, $x);	
		$i++;			
 	}
 	echo  json_encode($arrVal);		
 	mysqli_close($con);
?>   
 
