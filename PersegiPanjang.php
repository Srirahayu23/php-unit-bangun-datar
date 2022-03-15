<?php
require_once "BangunDatar.php";

class PersegiPanjang extends BangunDatar
{
    public function hitungKelilingPersegiPanjang($panjang, $lebar)
    {
        if ($panjang  == '' && $lebar == '') return 'Tidak boleh kosong';
        else return 2 * ($panjang + $lebar);
    }
    public function hitungLuasPersegiPanjang($panjang, $lebar)
    {
        if ($panjang  == '' && $lebar == '') return 'Tidak boleh kosong';
        else return $panjang * $lebar;
    }

    public function hitungKelilingPersegi($sisi)
    {
    }
    public function hitungLuasPersegi($sisi)
    {
    }
    public function hitungKelilingTrapesium($AB, $BC, $CD, $DA)
    {
    }
    public function hitungLuasTrapesium($tinggi, $a, $b)
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
    public function hitungLuasSegitiga($a, $t)
    {
    }
    public function hitungKelilingSegitiga($s)
    {
    }
}
