<?php
require_once "BangunDatar.php";

class Trapesium extends BangunDatar
{
    public function hitungKelilingTrapesium($AB, $BC, $CD, $DA)
    {
        if ($AB  == '' && $BC == '' && $CD == '' && $DA == '') return 'Tidak boleh kosong';
        else return $AB + $BC + $CD + $DA;
    }
    public function hitungLuasTrapesium($tinggi, $a, $b)
    {
        if ($a  == '' && $b == '' && $tinggi == '') return 'Tidak boleh kosong';
        else return 1 / 2 * $tinggi * ($a + $b);
    }
    public function hitungKelilingPersegiPanjang($panjang, $lebar)
    {
    }
    public function hitungLuasPersegiPanjang($panjang, $lebar)
    {
    }
    public function hitungKelilingPersegi($sisi)
    {
    }
    public function hitungLuasPersegi($sisi)
    {
    }
    public function hitungKelilingLingkaran($r)
    {
    }
    public function hitungLuasLingkaran($r)
    {
    }
    public function hitungKelilingLayangLayang($a, $b, $c, $d)
    {
    }
    public function hitungLuasLayangLayang($d1, $d2)
    {
    }
    public function hitungKelilingJajarGenjang($a, $t)
    {
    }
    public function hitungLuasJajarGenjang($a, $b)
    {
    }
    public function hitungKelilingSegitiga($s)
    {
    }
    public function hitungLuasSegitiga($a, $t)
    {
    }
}
