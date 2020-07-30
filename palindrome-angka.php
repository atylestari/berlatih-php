<?php

function palindrome_angka($angka) {
  // tulis kode di sini
	$hasil = '';
	$strAngka = strval($angka);
	$balikan = '';

	for($i = strlen($strAngka) - 1; $i >= 0; $i--) {
		$balikan .= $strAngka[$i];
	}

	if($balikan == $strAngka) {
		$angka += 1;
	}

	while(true) {
		$strAngka = strval($angka);
		$balikan = '';
		for($i = strlen($strAngka) - 1; $i >= 0; $i--) {
			$balikan .= $strAngka[$i];
		}
		if($balikan == $strAngka) {
			global $hasil;
			$hasil = $strAngka . '<br>';
			return $result;
		}
		else {
			$angka += 1;
		}
	}
}

// TEST CASES
echo palindrome_angka(8) // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>