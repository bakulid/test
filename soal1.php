<?php
//jumlah kura kura awal 
$sulcatar = 9999;

//kali melahiran dalam 365 hari 
$melahirakan = round(365 / 90);

//loop melahirkan dan mati
for ($i=0; $i < $melahirakan; $i++) { 
    $mati = $sulcatar * 0.211;
    $sulcatar = $sulcatar - $mati;

    $sulcatar = $sulcatar * 2;
}

echo round($sulcatar);