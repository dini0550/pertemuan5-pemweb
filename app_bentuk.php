app_bentuk.php

<?php
require_once 'lingkaran.php';

$lingkaran1 = new Lingkaran(8.4);
$lingkaran2 = new Lingkaran(10);
echo "Jari-jari lingkaran 1 = ".$lingkaran1->jari;
echo "Nilai PHI ". Lingkaran::PHI;
echo "<br>Luasnya ".$lingkaran1->grtLuas();
echo "<br>Kelilingnya ".$lingkaran1->getKeliling();
echo "<hr>";
$lingkaran1->cetak();
echo "<hr>";
$lingkaran2->cetak();

?>