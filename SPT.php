<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

class data{
    private $nama;
    private $no_id;
    private $kolam;
    private $hari;
    private $jmltiket;
    private $harga;
    
    function setNama($nama){
        $this->nama = $nama;
    }
    function setID($no_id){
        $this->id = $no_id;
    }
    function setKolam($kolam){
        $this->kolam = $kolam;
    }
    function setHari($hari){
        $this->hari = $hari;
    }
    function setJumlah($jmltiket){
        $this->jmltiket = $jmltiket;
    }
    function setHarga($harga){
        $this->harga = $harga;
    }
    
    function getNama(){
        return $this->nama;
    }
    function getID(){
        return $this->id;
    }
    function getKolam(){
        return $this->kolam;
    }
    function getHari(){
        return $this->hari;
    }
    function getJumlah(){
        return $this->jmltiket;
    }
    function getHarga(){
        return $this->harga;
    }
}
$tkt = new data();
$tkt->setNama($_POST["nama"]);
$tkt->setID($_POST["no_id"]);
$tkt->setKolam($_POST["kolam"]);
$tkt->setHari($_POST["hari"]);
$tkt->setJumlah($_POST["jmltiket"]);
$tkt->setHarga($_POST["harga"]);
    
    if(($tkt->getKolam())=="Anak-anak" && ($tkt->getHari())=="Sabtu"){
        $total = 10000*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Anak-anak" && ($tkt->getHari())=="Minggu"){
        $total = 10000*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Dewasa" && ($tkt->getHari())=="Sabtu"){
        $total = 15000*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Dewasa" && ($tkt->getHari())=="Minggu"){
        $total = 15000*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Anak-anak" && ($tkt->getHari())=="Senin"){
        $total = 7500*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Anak-anak" && ($tkt->getHari())=="Selasa"){
        $total = 7500*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Anak-anak" && ($tkt->getHari())=="Rabu"){
        $total = 7500*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Anak-anak" && ($tkt->getHari())=="Kamis"){
        $total = 7500*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Anak-anak" && ($tkt->getHari())=="Jumat"){
        $total = 7500*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Dewasa" && ($tkt->getHari())=="Senin"){
        $total = 10000*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Dewasa" && ($tkt->getHari())=="Selasa"){
        $total = 10000*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Dewasa" && ($tkt->getHari())=="Rabu"){
        $total = 10000*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Dewasa" && ($tkt->getHari())=="Kamis"){
        $total = 10000*$tkt->getJumlah();
    }
    else if(($tkt->getKolam())=="Dewasa" && ($tkt->getHari())=="Jumat"){
        $total = 10000*$tkt->getJumlah();
    }
?>