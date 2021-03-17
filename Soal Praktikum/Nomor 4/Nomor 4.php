<?php
if ( isset($_POST["tambah"]))
{
	tambahMahasiswa($_POST["tambah"]);
} else{

}

?>
<html>
<head>
<title>Soal Nomor 4</title>
</head>
<body>

<?php




function tambahMahasiswa($nim)
{
	system('cls');
   	$filename = "mahasiswa.txt";
	$file = fopen( $filename, "a" );
	if( $file == false )
	{
	echo ( "Error in opening new file" );
	exit();
	}
	
	fwrite( $file, "$nim\n" );
	fclose( $file );

	$filename = "mahasiswa.txt";
	$file = fopen( $filename, "r" );
	$filesize = filesize($filename);
	$filetext = fread($file,$filesize);
	fclose($file);
	echo "<pre>$filetext </pre>";
}
?>
 <form action="<?php $_PHP_SELF ?>" method="POST">
 Tambah : <input type="text" name="tambah" />
<input type="submit" />


</body>
</html>