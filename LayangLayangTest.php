<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit

use phpDocumentor\Reflection\Types\This;
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "LayangLayang.php";

// Class untuk run Testing.
class LayangLayangTest extends TestCase
{   
    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian\n";
    }


    public function testHitungKeliling()
    {
        // Kita pakai class yang mau kita test.
        $layang = new LayangLayang();

        // Kita masukan parameter
        $a = 2; $b = 2; $c = 2; $d = 2;
        $result = $layang->hitungKelilingLayangLayang($a, $b, $c, $d);
        $expected = 8;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungKelilingKosong()
    {
        // Kita pakai class yang mau kita test.
        $layang = new LayangLayang();

        // Kita masukan parameter
        $a = ''; $b = ''; $c = ''; $d = '';
        $result = $layang->hitungKelilingLayangLayang($a, $b, $c, $d);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
        $layang = new LayangLayang();

        // Kita masukan parameter
        $d1 = 2; $d2 = 2;
        $result = $layang->hitungLuasLayangLayang($d1, $d2);
        $expected = 2;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }
    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $layang = new LayangLayang();

        // Kita masukan parameter
        $d1 = ''; $d2 = '';
        $result = $layang->hitungLuasLayangLayang($d1, $d2);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengujian";
    }
}