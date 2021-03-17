<?php
$nama = array ("Girado","Reiko","Sebastian","Owen","Michael","Adri","Jonathan","Kurumi","Perona", "Fujiko","Kuki","Killua","Elgo","Ahmad","Jhin"
		,"BlitzCrank","Darius","Yorushika","Kayle","Cain","Habel","Griffin","George","MasterYi","Amumu","Sylvana","Akali","Bob","MissFortune","Anivia");
$nim = array (2020104934,2020104935,2020104936,2020104937,2020104938,2020104939,2020104940,2020104941,2020104942,2020104943,2020104944,2020104945,2020104946,2020104947,2020104948
		,2020104949,2020104950,2020104951,2020104952,2020104953,2020104954,2020104955,2020104956,2020104957,2020104958,2020104959,2020104960,2020104961,2020104962,2020104963);
$ipk = array(3.20,3.10,3.18,3.12,2.88,3.00,3.03,3.05,3.05,3.21,3.20,3.10,3.18,3.12,2.88,3.00,3.03,3.05,3.05,3.21,3.20,3.10,3.18,3.12,2.88,3.00,3.03,3.05,3.05,3.21);

$rambut = array("lurus","lurus","lurus","lurus","lurus","lurus","lurus","lurus","keriting","keriting","lurus","lurus","keriting","lurus","lurus"
		,"keriting","lurus","lurus","lurus","lurus","lurus","lurus","lurus","keriting","keriting","lurus","lurus","keriting","lurus","lurus");
$warnaRambut = array("hitam","hitam","hitam","orange","hitam","abu - abu","hitam","hitam","hitam","hitam","hitam","merah","hitam","hitam","hitam"
		,"hitam","hitam","hitam","hitam","coklat","hitam","hitam","kuning","hitam","hitam","hitam","hitam","coklat","hitam","hitam");
$beratBadan = array(50,50,50,50,50,50,50,50,40,50,50,50,50,50,50,60,50,50,50,50,70,50,50,50,50,50,50,50,50,50);

$tinggiBadan = array(160,160,160,160,170,160,160,180,160,160,160,160,160,150,160,160,160,160,160,160,160,160,160,160,160,160,160,160,160,160);

$kondisi = array("tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti"
		,"tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti"
		,"tidak cuti","tidak cuti","tidak cuti","tidak cuti","cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti","tidak cuti");

$kelas = array("D4-A","D4-B","D4-C","D4-A","D4-B","D4-C","D4-A","D4-B","D4-C","D4-A","D4-B","D4-C","D4-A","D4-B","D4-C"
		, "D4-A","D4-B","D4-C","D4-A","D4-B","D4-C","D4-A","D4-B","D4-C","D4-A","D4-B","D4-C","D4-A","D4-B","D4-C");
$dosenPA = array("Desy IntanPermatasari", " Yulius Denny Prabowo","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari"
		,"Desy IntanPermatasari","Desy IntanPermatasari","Yulius Denny Prabowo","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari"
		, "Yulius Denny Prabowo","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Yulius Denny Prabowo","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari","Desy IntanPermatasari");
$nilaiMatkul = array("A","A","A","B","A","A","A","A","A","A",
		"A","A","B","A","A","A","B","A","C","A",
		"A","A","A","A","B","A","A","A","A","A");
$keaktifanHMJ = array("aktif","aktif","aktif","aktif","aktif","aktif","aktif","aktif","aktif","aktif"
		,"aktif","aktif","aktif","tidak aktif","aktif","aktif","aktif","aktif","aktif","aktif"
		,"aktif","aktif","tidak aktif","aktif","aktif","aktif","tidak aktif","aktif","aktif","aktif");


$listnama = array();
$listnim = array();
$listkelas = array();

function masukkanNama($namasiswa,$nimsiswa,&$arraynama,&$arraynim)
{
	array_push($arraynama,$namasiswa);
	array_push($arraynim, $nimsiswa);
}

function masukkanNamaKelas($namasiswa,$kelassiswa,&$arraynama,&$arraykelas)
{
	array_push($arraynama,$namasiswa);
	array_push($arraykelas, $kelassiswa);
}


function GetKelas($nrp)
{
	return $kelas($nrp);
}

function GetNamaMahasiswa($nrp)
{
	return $nama($nrp);
}

for ($u = 0;$u < 30; $u++)
{
	//echo $listnama[$u] ." " . $listnim[$u] ." <br>";
	//echo $nama[$u] ." " . $nim[$u] ." <br>";
	if ($ipk[$u] > 3.00 && $ipk[$u] < 3.25 && $rambut[$u] == "lurus" && $warnaRambut[$u] == "hitam" && $beratBadan[$u] == 50 && $tinggiBadan[$u] == 160 && $kondisi[$u] == "tidak cuti")
	{
		if ($kelas[$u] == "D4-A" || $kelas[$u] == "D4-B" ) 
		{
			if ($dosenPA[$u] == "Desy IntanPermatasari" && $keaktifanHMJ[$u] == "aktif")
			{
			masukkanNamaKelas($nama[$u],$kelas[$u],$listnama,$listkelas);	
			}
		}
	}
	
};



sort ($listnama);


$length = count($listnama);

for ($p = 0;$p < $length; $p++)
{
	echo $listnama[$p] ." adalah mahasiswa kelas " . $listkelas[$p] ." yang aktif di HMJ<br>";
};
?>
<html>
<body>
<br>

</body>
</html>
