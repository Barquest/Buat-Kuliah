<html>
<head>
<title>Soal Nomor 7</title>
</head>
<body>

<?php

$txt ="Institut Teknologi dan Bisnis Kalbis";
$pattern1 = "/Institut/i";
$pattern2 = "/Teknologi/i";
$pattern3 = "/dan/i";
$pattern4 = "/Bisnis/i";
$pattern5 = "/Kalbis/i";

if (preg_match($pattern1,$txt))
{
	echo "Institut<br>";
}
if (preg_match($pattern2,$txt))
{
	echo "Teknologi<br>";
}

if (preg_match($pattern3,$txt))
{
	echo "dan<br>";
}

if (preg_match($pattern4,$txt))
{
	echo "Bisnis<br>";
}

if (preg_match($pattern5,$txt))
{
	echo "Kalbis<br>";
}


?>



</body>
</html>