<?php
require_once "Kelas/Form.php";

$frm = new Form("Data Dosen","isi_mhs.php");
$frm->addText("NIDN", "", "20");
$frm->addText("nama", "", "50");
$frm->addText("kota", "", "30");
$frm->addPassword("password", "", 10);
$frm->addRadio("kelamin", "", 10);
$frm->addTextArea("keterangan", "", "100");
$frm->show();

?>