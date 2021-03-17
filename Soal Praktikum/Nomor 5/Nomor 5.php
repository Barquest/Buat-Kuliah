



<html>
<head>
<title>Soal Nomor 5</title>
</head>
<body>

<?php
if ( isset($_POST['angkayangpertama']) && isset($_POST['angkayangkedua']))
{
$angka1 = $_POST['angkayangpertama'];
$angka2 = $_POST['angkayangkedua'];

    $selected = $_POST['Operasi'];
	if ($selected == "Pengurangan")
	{
  	echo 'Kamu memilih : Pengurangan <br>' ;
	Pengurangan($angka1,$angka2);
	$thehasil = $angka1 - $angka2;
	$txtnya = "Hasil Pengurangan \n\n$angka1 - $angka2 = $thehasil\n";
	Tulis($txtnya);
		
	} else if ($selected == "Penjumlahan")
	{
  	echo 'Kamu memilih : Penjumlahan<br>' ;
	Penjumlahan($angka1,$angka2);
	$thehasil = $angka1 +$angka2;
	$txtnya = "Hasil Penjumlahan \n\n$angka1 + $angka2 = $thehasil\n";
	Tulis($txtnya);
	} 
    else {
        echo 'Pilih Dulu Operasi Matematika yang mau anda masukkan.';
  }


}

    
  
?>



<?php


function Penjumlahan($angkapertama,$angkakedua)
{
	$hasil = $angkapertama + $angkakedua;
	echo "$angkapertama " . "+ " . $angkakedua . " adalah : $hasil" ;
}
function Pengurangan($angkapertama,$angkakedua)
{
	$hasil = $angkapertama - $angkakedua;
	echo "$angkapertama " . "- " . $angkakedua . " adalah : $hasil" ;
}
function Tulis($text)
{
$filename = "tes.txt";
$file = fopen( $filename, "w" );
if( $file == false )
{
echo ( "Error in opening new file" );
exit();
}
fwrite( $file, "$text\n" );
fclose( $file );

}

?>


	 <form action="<?php $_PHP_SELF ?>" method="POST">
 <select name="Operasi">
    
        <option value="Penjumlahan">Penjumlahan</option>
        <option value="Pengurangan">Pengurangan</option>

    </select>
<br>
 		Angka 1 : <input type="text" name="angkayangpertama" />
<br>
		 Angka 2 : <input type="text" name="angkayangkedua" />
<input type="submit" />

</form>


</body>
</html>