<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit

use phpDocumentor\Reflection\Types\This;
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "JajarGenjang.php";

// Class untuk run Testing.
class JajarGenjangTest extends TestCase
{   
    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian\n";
    }


    public function testHitungKeliling()
    {
        // Kita pakai class yang mau kita test.
        $jajar = new JajarGenjang();

        // Kita masukan parameter
        $a = 2; $t = 2;
        $result = $jajar->hitungKelilingJajarGenjang($a, $t);
        $expected = 4;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungKelilingKosong()
    {
       // Kita pakai class yang mau kita test.
       $jajar = new JajarGenjang();

       // Kita masukan parameter
       $a = ''; $t = '';
       $result = $jajar->hitungKelilingJajarGenjang($a, $t);
       $expected = 'Tidak boleh kosong';
       // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
       $this->assertEquals($expected, $result);
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
       $jajar = new JajarGenjang();

       // Kita masukan parameter
       $a = 2; $b = 2;
       $result = $jajar->hitungLuasJajarGenjang($a, $b);
       $expected = 8;
       // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
       $this->assertEquals($expected, $result);
    }
    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $jajar = new JajarGenjang();

        // Kita masukan parameter
        $a = ''; $b = '';
        $result = $jajar->hitungLuasJajarGenjang($a, $b);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengujian";
    }
}