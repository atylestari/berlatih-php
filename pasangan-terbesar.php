<?php
function pasangan_terbesar($angka){
// kode di sini
	$pair = 0;
	$arr = str_split($angka);

	for($i = 0; $i < count($arr)-1; $i++) {
		if($i === 0) {
			$pair = $arr[$i] + $arr[$i + 1];
		}
		if($pair < $arr[$i] + $arr[$i + 1]) {
			$pair = $arr[$i] + $arr[$i + 1];
		}
		echo $pair;
		echo "<br>";
	}
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>