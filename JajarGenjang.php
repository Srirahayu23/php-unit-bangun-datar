<?php
require_once "BangunDatar.php";

class JajarGenjang extends BangunDatar
{
    public function hitungKelilingJajarGenjang($a, $t)
    {
        if ($a == '' && $t == '') return 'Tidak boleh kosong';
        else return $a * $t;
    }
    public function hitungLuasJajarGenjang($a, $b)
    {
        if ($a == '' && $b == '') return 'Tidak boleh kosong';
        else return 2 * $b * $a;
    }
    public function hitungKelilingLayangLayang($a, $b, $c, $d)
    {
    }
    public function hitungLuasLayangLayang($d1, $d2)
    {
    }
    public function hitungKelilingLingkaran($r)
    {
    }
    public function hitungLuasLingkaran($r)
    {
    }

    public function hitungKelilingPersegi($sisi)
    {
    }
    public function hitungLuasPersegi($sisi)
    {
    }

    public function hitungLuasPersegiPanjang($panjang, $lebar)
    {
    }
    public function hitungKelilingPersegiPanjang($panjang, $lebar)
    {
    }
    public function hitungKelilingTrapesium($AB, $BC, $CD, $DA)
    {
    }
    public function hitungLuasTrapesium($tinggi, $a, $b)
    {
    }
    public function hitungLuasSegitiga($a, $t)
    {
    }
    public function hitungKelilingSegitiga($s)
    {
    }
}
