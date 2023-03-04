<?php
class Form{

    private $judul;
    private $terima;
    private $kontrol = array();

    public function __construct($judul="Formulir", $terima=""){
        $this->judul = $judul;
        $this->terima = $terima;
    }

    public function addText($nama, $nilai="", $lebar="20"){
        $this->kontrol[$nama] = $this->textBox($nama, $nilai, $lebar);
    }

    public function textBox($nama, $nilai, $lebar){
        $hsl = "<input type=\"text\" name=\"$nama\" value=\"$nilai\" size=\"$lebar\">";  
        return $hsl;
    }

    function addPassword($nama,$nilai,$lebar){ 
        $this->kontrol[$nama] = $this->passWord($nama,$nilai,$lebar); 
    }

    private function passWord($nama,$nilai,$lebar){ 
        return "<INPUT TYPE=\"password\" NAME=\"$nama\" VALUE=\"$nilai\" SIZE=\"$lebar\">"; 
    }

    function addHidden($nama,$nilai,$lebar){ 
        $this->kontrol[$nama] = $this->hidden($nama,$nilai,$lebar); 
    }

    function addRadio($nama,$nilai,$lebar){ 
        $this->kontrol[$nama] = $this->radio($nama,$nilai,$lebar); 
    } 

    private function radio($nama,$nilai,$lebar){ 
        return "<INPUT TYPE=\"radio\" NAME=\"$nama\" VALUE=\"Laki\" SIZE=\"$lebar\"> Laki"; 
        return "<INPUT TYPE=\"radio\" NAME=\"$nama\" VALUE=\"Perempuan\" SIZE=\"$lebar\"> Perempuan";
    }

    function addTextArea($nama,$nilai,$lebar){ 
        $this->kontrol[$nama] = $this->textArea($nama,$nilai,$lebar); 
    } 
    
    private function textArea($nama,$nilai,$lebar){ 
        return "<TEXTAREA NAME=\"$nama\" 
        COLS=\"$lebar\">$nilai</TEXTAREA>"; }

    public function show(){
        echo "<form action =\"$this->terima\" method=\"post\">\n";
        echo "<table border=\"4\" cellspacing=\"10\">\n";
        echo "<caption>$this->judul</caption>\n";

        foreach($this->kontrol as $label=>$elemen){
            echo "<tr><td>".ucwords($label)."</td><td>$elemen</td></tr>";
        }
        echo "<tr><td colspan=\"2\" align=\"center\">";
        echo "<input type=\"reset\"><input type=\"submit\">";
        echo "</td></tr>";
        echo "<TR bgcolor=\"#888888\" height=40><TH colspan=2>";
        echo "</table>";
        echo "</form>";
    }
}