<?php

$uang =  1895250;

function hitung($uang){
	$ratusanribu = floor($uang/100000);
	$limapuluhribu = floor(($uang%100000)/50000);
	$duapuluhribu = floor(($uang%50000)/20000);
	$limaribu = floor(($uang - (($duapuluhribu*20000)+($limapuluhribu*50000)+($ratusanribu*100000)))/5000);
	$seratus = floor(($uang%5000)/100);
	$limapuluh = floor(($uang%100)/50);

	echo '100rb = ' .$ratusanribu. '<br>';
	echo '50rb =' .$limapuluhribu. '<br>';
	echo '20rb =' .$duapuluhribu. '<br>';
	echo '5rb =' .$limaribu. '<br>';
	echo '100=' .$seratus. '<br>';
	echo '50 =' .$limapuluh. '<br>';
	$jumlah = ($ratusanribu	* 100000)+($limapuluhribu*50000)+($duapuluhribu	 * 20000)+($limaribu*5000)+($seratus*100)+($limapuluh*50);

	echo 'jumlah =' .$jumlah;
}


echo hitung(1895250);

?>