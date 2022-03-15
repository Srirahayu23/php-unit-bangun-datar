<?php
require_once "BangunDatar.php";

class LayangLayang extends BangunDatar
{
    public function hitungKelilingLayangLayang($a, $b, $c, $d)
    {
        if ($a == '' && $b == '' && $c == '' && $d == '') return 'Tidak boleh kosong';
        else return $a + $b  + $c + $d;
    }
    public function hitungLuasLayangLayang($d1, $d2)
    {
        if ($d1 == '' && $d2 == '') return 'Tidak boleh kosong';
        else return 0.5 * $d1 * $d2;
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

    public function hitungKelilingJajarGenjang($a, $t)
    {
    }
    public function hitungLuasJajarGenjang($a, $b)
    {
    }
    public function hitungLuasSegitiga($a, $t)
    {
    }
    public function hitungKelilingSegitiga($s)
    {
    }
}
