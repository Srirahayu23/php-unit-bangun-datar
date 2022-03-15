<?php
require_once "BangunDatar.php";

class Lingkaran extends BangunDatar
{
    public function hitungKelilingLingkaran($r)
    {
        if ($r == '') return 'Tidak boleh kosong';
        else return 2 * 3.14 * $r;
    }
    public function hitungLuasLingkaran($r)
    {
        if ($r == '') return 'Tidak boleh kosong';
        else return 3.14 * $r * $r;
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
