<?php

Abstract Class BangunDatar {
    //persegi
    abstract public function hitungKelilingPersegi($sisi);
    abstract public function hitungLuasPersegi($sisi);
    //persegi panjang
    abstract public function hitungKelilingPersegiPanjang($panjang, $lebar);
    abstract public function hitungLuasPersegiPanjang($panjang, $lebar);
    //trapesium
    abstract public function hitungKelilingTrapesium($AB, $BC, $CD, $DA);
    abstract public function hitungLuasTrapesium($tinggi, $a, $b);
    //lingkaran
    abstract public function hitungKelilingLingkaran($r);
    abstract public function hitungLuasLingkaran($r);
    //layang-layang
    abstract public function hitungKelilingLayangLayang($a, $b, $c, $d);
    abstract public function hitungLuasLayangLayang($d1, $d2);
    //jajar genjang
    abstract public function hitungLuasJajarGenjang($a, $t);
    abstract public function hitungKelilingJajarGenjang($a, $b);
    //segitiga
    //jajar genjang
    abstract public function hitungLuasSegitiga($a, $t);
    abstract public function hitungKelilingSegitiga($s);
}
?>