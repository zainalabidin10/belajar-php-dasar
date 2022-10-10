<?php
class mobil{
    function nyalakanmobil(){
        echo"mobil sudah nyala";
    }
    function matikanmobil(){
        echo"mobil sudah dimatikan";
    }
    function jalankanmobil(){
        echo"mobil sudah jalan";
    }
}
class mobilBMW extends mobil{
    function nontonTV(){
        echo "TV dinyalakan <br/>";
        echo "TV ubah chanel <br/>";
        echo "TV menayangkan film <br/>";
    }
}
class aksi{
    function cetakmobil(){
        $mobil = new MobilBMW();
        echo $mobil-> nontonTV();
        echo $mobil-> nyalakanmobil();
        echo $mobil-> matikanmobil();
        echo $mobil-> jalankanmobil();
    }
}
$cetak = new aksi();
echo $cetak->cetakmobil();
?>