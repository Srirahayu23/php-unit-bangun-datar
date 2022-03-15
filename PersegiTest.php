<?php

use PHPUnit\Framework\TestCase;

include "Persegi.php";

// Class untuk run Testing.
class PersegiTest extends TestCase
{   
    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian\n";
    }


    public function testHitungKeliling()
    {
        // Kita pakai class yang mau kita test.
        $persegi = new Persegi();

        // Kita masukan parameter
        $sisi = 2;
        $result = $persegi->hitungKelilingPersegi($sisi);
        $expected = 8;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungKelilingKosong()
    {
        // Kita pakai class yang mau kita test.
        $persegi = new Persegi();

        // Kita masukan parameter
        $sisi = "";
        $result = $persegi->hitungKelilingPersegi($sisi);
        $expected = "Tidak boleh kosong";
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
        $persegi = new Persegi();

        // Kita masukan parameter
        $sisi = 2;
        $result = $persegi->hitungLuasPersegi($sisi);
        $expected = 4;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }
    public function testHitungLuasKosong()
    {
        $persegi = new Persegi();

        $sisi = "";
        $result = $persegi->hitungLuasPersegi($sisi);
        $expected = "Tidak boleh kosong";
        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengujian";
    }
}