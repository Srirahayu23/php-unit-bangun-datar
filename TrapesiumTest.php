<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit

use phpDocumentor\Reflection\Types\This;
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Trapesium.php";

// Class untuk run Testing.
class TrapesiumTest extends TestCase
{   
    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian\n";
    }


    public function testHitungKeliling()
    {
        // Kita pakai class yang mau kita test.
        $trapesium = new Trapesium();

        // Kita masukan parameter
        $AB = 2; $BC = 2; $CD = 2; $DA = 2; 
        $result = $trapesium->hitungKelilingTrapesium($AB, $BC, $CD, $DA);
        $expected = 8;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungKelilingKosong()
    {
        // Kita pakai class yang mau kita test.
        $trapesium = new Trapesium();

        // Kita masukan parameter
        $AB = ''; $BC = ''; $CD = ''; $DA = ''; 
        $result = $trapesium->hitungKelilingTrapesium($AB, $BC, $CD, $DA);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
        $trapesium = new Trapesium();

        // Kita masukan parameter
        $a = 2; $b = 2; $tinggi = 2; 
        $result = $trapesium->hitungLuasTrapesium($tinggi, $a, $b,);
        $expected = 4;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }
    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $trapesium = new Trapesium();

        // Kita masukan parameter
        $a = ''; $b = ''; $tinggi = ''; 
        $result = $trapesium->hitungLuasTrapesium($tinggi, $a, $b);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengujian";
    }
}