<?php 
	include_once('dbhandle.inc');

	$x = 4;
	$y = 6;
	$z = $x + $y;

	$query = $connection->prepare("SELECT * FROM users");
    $query->execute();
    $result = $query->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotels.ng Internship</title>
	<style type="text/css">
		body{margin:30px;};
	</style>
</head>
<body>

<?php  
	
	
	echo "4 + 6 = ". $z ."<br /><br />";

	
	echo "Welcome ". $result['firstname']. " " . $result['lastname'];

?>


</body>
</html>