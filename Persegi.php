<?php
require_once "BangunDatar.php";

class Persegi extends BangunDatar
{
    public function hitungKelilingPersegi($sisi)
    {
        if ($sisi == '') return 'Tidak boleh kosong';
        else return 4 * $sisi;
    }
    public function hitungLuasPersegi($sisi)
    {
        if ($sisi == '') return 'Tidak boleh kosong';
        else return $sisi * $sisi;
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
