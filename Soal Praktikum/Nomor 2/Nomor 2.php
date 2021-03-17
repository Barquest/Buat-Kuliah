<?php
//$_GET["nrp"] = NULL;
if (isset($_GET['nrp']))
{
$x = $_GET["nrp"];
if ($x == 2110141037)
{
	srand( microtime(true) * 1000000 );
	$num = rand( 1, 3 );
 	switch( $num )
	{
	 case 1: $image_file = "mobil1.jpg";
	 break;
	 case 2: $image_file = "mobil2.jpg";
	 break;
	 case 3: $image_file = "mobil3.jpg";
	 break;
	}
	 echo "<img src=$image_file />";
	exit();
} else if ($x == 2110141038)
{
	srand( microtime(true) * 1000000 );
	$num = rand( 1, 3 );
 	switch( $num )
	{
	 case 1: $image_file = "motor1.jpg";
	 break;
	 case 2: $image_file = "motor2.jpg";
	 break;
	 case 3: $image_file = "motor3.jpg";
	 break;
	}
	 echo "<img src=$image_file />";
	exit();
} else if ($x == 2110141039)
{
	srand( microtime(true) * 1000000 );
	$num = rand( 1, 3 );
 	switch( $num )
	{
	 case 1: $image_file = "phone1.jpg";
	 break;
	 case 2: $image_file = "phone2.jpg";
	 break;
	 case 3: $image_file = "phone3.jpg";
	 break;
	}
	 echo "<img src=$image_file />";
	exit();
} 
}
?>

<html>
<body>
 <form action="<?php $_PHP_SELF ?>" method="GET">
 input NRP: <input type="text" name="nrp" />
 <input type="submit" />
 </form>
</body>
</html>
