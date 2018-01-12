<?php 

require '../db.php';

$titel = mysqli_real_escape_string($con, $_POST["titel"]);
$genre = mysqli_real_escape_string($con, $_POST["genre"]);
$inl =  mysqli_real_escape_string($con, $_POST["inl"]);
$pt1 = mysqli_real_escape_string($con, $_POST["pt1"]);
$p1 = mysqli_real_escape_string($con, $_POST["p1"]);
$pt2 = mysqli_real_escape_string($con, $_POST["pt2"]);
$p2 = mysqli_real_escape_string($con, $_POST["p2"]);
$pt3 = mysqli_real_escape_string($con, $_POST["pt3"]);
$p3 = mysqli_real_escape_string($con, $_POST["p3"]);
$pt4 = mysqli_real_escape_string($con, $_POST["pt4"]);
$p4 = mysqli_real_escape_string($con, $_POST["p4"]);

if (strlen($pt1)>0)
{
    $raw .= $pt1 . "|" . $p1;
}
else
{
    $raw .= "|" . $p1;
}
    
if (strlen($pt2)>0)
{
    $raw .= "|" . $pt2 . "|" . $p2;
}
else
{
    $raw .= "||" . $p2;
}

if (strlen($pt3)>0)
{
    $raw .= "|" . $pt3 . "|" . $p3;
}
else
{
    $raw .= "||" . $p3;
}

if (strlen($pt4)>0)
{
    $raw .= "|" . $pt4 . "|" . $p4;
}
else
{
   $raw .= "||" . $p4; 
}




//I will save the email address and date and content of the message in a table
$sqltran = mysqli_query($con, "INSERT INTO verhaaltjes (datum, titel, inleiding, raw, genre) VALUES(NOW()," ."'". $titel ."','". base64_encode($inl). "','". base64_encode($raw) . "','" . $genre ."')") or die(mysqli_error($con));


$sqltran = mysqli_query($con, "SELECT id FROM verhaaltjes") or die(mysqli_error($con));
$arrVal = array();
$i=1;

while ($rowList = mysqli_fetch_array($sqltran)) {
    if($rowList['id'] > $i)
    {
        $i=$rowList['id'];
    }
 }
var_dump($i);


$update_sql = "UPDATE verhaaltjes SET link='<input type=\"button\" class=\"btn btn-success btn-xs\" value=\"Laad Verhaal\" onclick=\"valveMe(".$i.")\">' WHERE id=". $i .";";
var_dump($update_sql);
$sqltran = mysqli_query($con, $update_sql) or die(mysqli_error($con));
mysqli_close($con);
?>

<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/bike.ico" type="image/x-icon" />
    <title>LVK Admin area</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
</head>

<body>
    <br>
    <br>
    <a href="http://lettervandekapstok.be" class="btn btn-success" role="button" aria-disabled="true">Look at ad valvas</a>
    <br>
    <br>
</body>
</html> 
