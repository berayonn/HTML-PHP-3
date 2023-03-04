<?php
class Barang{
    private $harga;

    public function __set($property, $nilai){
        if($nilai>1000)
            $this->$property = $nilai;
        else
            $this->$property = 1000;
    }

    public function __get($property){
        return "Rp ". number_format($this->$property,0,",",".")."<br>";
    }
    public function getInfo(){
        echo "Harga Barang Rp. ".$this->harga."<br>";
    }

}

$b = new Barang();
$b->harga = 1235311;
$b->getInfo();
echo $b->harga;

