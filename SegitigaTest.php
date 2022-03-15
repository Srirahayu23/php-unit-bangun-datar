<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit

use phpDocumentor\Reflection\Types\This;
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Segitiga.php";

// Class untuk run Testing.
class SegitigaTest extends TestCase
{   
    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian\n";
    }


    public function testHitungKeliling()
    {
        // Kita pakai class yang mau kita test.
        $segitiga = new Segitiga();

        // Kita masukan parameter
        $s = 2;
        $result = $segitiga->hitungKelilingSegitiga($s);
        $expected = 6;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungKelilingKosong()
    {
       // Kita pakai class yang mau kita test.
       $segitiga = new Segitiga();

       // Kita masukan parameter
       $s = '';
       $result = $segitiga->hitungKelilingSegitiga($s);
       $expected = 'Tidak boleh kosong';
       // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
       $this->assertEquals($expected, $result);
    }

    public function testHitungLuas()
    {
       // Kita pakai class yang mau kita test.
       $segitiga = new Segitiga();

       // Kita masukan parameter
       $a = 2; $t = 2;
       $result = $segitiga->hitungLuasSegitiga($a, $t);
       $expected = 2;
       // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
       $this->assertEquals($expected, $result);
    }
    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $segitiga = new Segitiga();

        // Kita masukan parameter
        $a = ''; $t = '';
        $result = $segitiga->hitungLuasSegitiga($a, $t);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengujian";
    }
}