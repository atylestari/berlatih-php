<?php

function papan_catur($angka) {
// tulis kode di sini
	for($i = 0; $i < $angka; $i++) {
		for($j = 0; $j <($angka*2)-1; $j++) {
			if($j%2 == 1 && $i%2 == 1) {
				echo " #&nbsp";
			}
			elseif ($j%2 == 0 && $j%2 == 0) {
				echo "  #&nbsp";
			}
			else {
				echo "&nbsp";
			}
		}
		echo "<br>";
	}
}

// TEST CASES
echo papan_catur(4)."<br> <br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)."<br><br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/