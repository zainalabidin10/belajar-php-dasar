<?php
interface Tanah{
    public function hitungLuas();
}
abstract  class Bibit{
    abstract public function ditanami();
}
class Lingkaran extends Bibit implements Tanah{
    private $jariJari;
    private $pi = 3.14;

    public function __construct($jariJari){
        $this->jariJari * $this->jariJari * $this->pi;
    }
    public function ditanami(){
        return "ditanami Padi";
    }
}
class PersegiPanjang extends Bibit implements Tanah {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar){
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
    public function hitungLuas(){
        return 
        $this->panjang * $this->lebar;
    }
    public function ditanami(){
        return "ditanami jagung";
    } 
}

$tanahFeby = new Lingkaran(5);
$tanahZainal = new PersegiPanjang(5,8);

echo "tanah Feby seluas ". $tanahFeby->hitungLuas()."m2 \n";
echo $tanahFeby->ditanami(). "\n \n";

echo "tanah Zainal seluas ". $tanahZainal->hitungLuas()."m2 \n";
echo $tanahZainal->ditanami()."\n \n";