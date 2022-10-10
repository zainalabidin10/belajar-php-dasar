<?php

interface BangunDatar{
    public function hitungluas();
  }
  class Persegi implements BangunDatar{
    private $sisi = 4;
 
    public function __construct($sisi){
      $this->sisi = $sisi; }
    public function hitungLuas(){
      return pow($this->sisi,2);}
  }
   class Segitiga implements BangunDatar{
    private $alas;
    private $tinggi;
 
    public function __construct($alas,$tinggi){
      $this->alas = $alas;
      $this->tinggi = $tinggi; }
    public function hitungLuas(){
      return (0.5 * $this->alas * $this->tinggi);
    }
  }
  class Lingkaran implements BangunDatar{
    private $jarijari = 7;
 
    public function __construct($jarijari){
      $this->jarijari = $jarijari;}
    public function hitungLuas(){
      return (3.14 * pow($this->jarijari,2));
    }
  }
 
  $persegi = new Persegi(20);
  echo 'Luas Persegi = '. $persegi->hitungLuas() . "<br>";
 
  $segitiga = new Segitiga(8,10);
  echo 'Luas Segitiga = '.$segitiga->hitungLuas() . "<br>";
 
  $lingkaran = new Lingkaran(12);
  echo 'Luas Lingkaran = '.$lingkaran->hitungLuas() . "<br>";
 
?>