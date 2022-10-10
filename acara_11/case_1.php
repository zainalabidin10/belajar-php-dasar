<?php
interface Bird{
    public function makesound();
}
class perkutut implements Bird{
    public function makesound(){
        echo "kur kur";
    }
}
$burung = new Perkutut();
$burung -> makesound();
?>