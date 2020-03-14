<?php 

$tabungan = 2921690;
$bunga = 0.021;

$jmlbunga = $tabungan * $bunga;

for ($i=1; $i <= 12; $i++) { 
	$total = $tabungan += $jmlbunga;
	echo "menyimpan uang dibank selama $i bulan = $tabungan<br>";
	
}
echo "<br/>Jumlah menabung selama 12 bulan : $total";




 ?>