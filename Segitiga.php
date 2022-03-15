<?php
require_once "BangunDatar.php";

class Segitiga extends BangunDatar
{
    public function hitungKelilingSegitiga($s)
    {
        if ($s == '') return 'Tidak boleh kosong';
        else return $s + $s + $s;
    }
    public function hitungLuasSegitiga($a, $t)
    {
        if ($a == '' && $t == '') return 'Tidak boleh kosong';
        else return 0.5 * $a * $t;
    }
    public function hitungKelilingJajarGenjang($a, $t)
    {
    }
    public function hitungLuasJajarGenjang($a, $b)
    {
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

}
