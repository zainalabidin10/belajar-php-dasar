<?php
echo date('d-F-y');
echo"\n";
$sekarang = getdate();
echo "Sekarang tanggal :",$sekarang["mday"],"-",
$sekarang["month"],"-",$sekarang["year"];
?>