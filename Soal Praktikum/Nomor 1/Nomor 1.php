<?php


if( isset($_GET["bilangan"]))
{
	$x = $_GET["bilangan"];
	if ($x < 50)
	{
		if ($x % 2 == 0)
		{
			if ($x % 6 == 0)
			{
				//echo "bilangan ". $x. " Tidak Valid" ;
 				//exit();
			} else if ($x % 8 == 0 )
			{
				//echo "bilangan ". $x. " Tidak Valid";
 				//exit();
			} else{
				echo "bilangan ". $x. " Genap" ;
 				exit();
			}
		} else
		{
			if ($x % 3 == 0 )
			{
				//echo "bilangan ". $x. " Ganjil";
	 			//exit();
			} else if ($x % 7 == 0 ){
				//echo "bilangan ". $x. " Tidak Valid";
 				//exit();
			} else{
				echo "bilangan ". $x. " Ganjil";
 				exit();
			}
			 
		
		}
 
	} else{
 	//echo "Bilangan ". $x. " Tidak Valid";
 	//exit();
	}
} 


?>

<html>
<body>
 <form action="<?php $_PHP_SELF ?>" method="GET">
 Bilangan : <input type="text" name="bilangan" />
<input type="submit" />

 </form>
</body>
</html>
