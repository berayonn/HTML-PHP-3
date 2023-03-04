<?php
class Tabel{
    private $nama_tabel;
    private $kon;

    public function __construct($nama_tabel){
        $this->nama_tabel = $nama_tabel;
        $this->kon = new mysqli("localhost", "root", "", "akademik");
    }

    public function showTable(){
        echo "<table border=\"1\" width=\"50%\">";
        $hasil = $this->kon->query("SELECT * FROM ".$this->nama_tabel);
        $brs = 0;
        while($baris = $hasil->fetch_assoc()){
            if($brs++ ==0 ){
            echo "<tr>";
                foreach($baris as $kol=>$isi){
                    echo "<th>$kol</th>";
                }
                echo "</tr>";
            }
            echo "<tr>";
            foreach ($baris as $isi){
                echo "<td>$isi</td>";
            }
    
        }
    }
}
