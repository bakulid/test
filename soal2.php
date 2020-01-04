<?php

//merubah jarak total menjadi meter
$S = 64.5 * 1000;

// kecepatan dalammeter/detik 
$v1 = 3 ;
$v2 = 5 ;
$v3 = 2 ;

//merubah waktu tempuh dalam menit menjadi detik 
$t1 = 23 * 60; 
$t2 = 12 * 60;

//mencari sisa jarak 
$s1 = $v1 * $t1;
$s2 = $v2 * $t2;
$s3 = $S - ($s1 + $s2);

//mencari waktu tempuh sisa
$t3 = $s3 / $v3;

//mencari lama waktu tempuh total
$T = $t1 + $t2 + $t3;

//total lama waktu perjalanan dalam jam , menit dan detik
$jam =  floor($T / 3600);
$menit = ($T % 3600) / 60;
$detik = ($T % 3600) % 60;


echo "Ismail menempuh perjalanan selama $jam j $menit m $detik d.\n";



