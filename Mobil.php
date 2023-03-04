<?php
class Mobil{
    private $merk;
    private $harga;

    public function __construct($merk="Toyota", $harga="250000000"){
        $this->setMerk($merk);
        $this->harga = $harga;
    }

    public function __destruct(){
        echo "Objek Sudah Dihapus <br>";
    }

    public function setMerk($merk){
        $this->merk = $merk;
    }

    public function getMerk(){
        return $this->merk;
    }
    
    public function getInfo(){
        echo "Merk Mobil : ".$this->getMerk()."<br>";
        echo "Harga Mobil : ".$this->harga."<br>";
    }
}

$nb0 = new Mobil("Mercedez", 245000000); // instansiasi kelas jadi objek
$nb0->getInfo();
$nb1 = new Mobil("Toyota"); // instansiasi kelas jadi objek
$nb1->getInfo();
$nb2 = new Mobil("Honda", 300000000);
$nb2->getInfo();

//echo "Objeck 1 : ".$nb1->getMerk()."<br>"; 
//echo "Objeck 2 : ".$nb2->getMerk()."<br>"; 

//var_dump($nb1);
//var_dump($nb2);