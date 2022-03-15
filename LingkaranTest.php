<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit

use phpDocumentor\Reflection\Types\This;
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Lingkaran.php";

// Class untuk run Testing.
class LingkaranTest extends TestCase
{   
    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian\n";
    }


    public function testHitungKeliling()
    {
        // Kita pakai class yang mau kita test.
        $lingkaran = new Lingkaran();

        // Kita masukan parameter
        $r = 2;
        $result = $lingkaran->hitungKelilingLingkaran($r);
        $expected = 12.56;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungKelilingKosong()
    {
        $lingkaran = new Lingkaran();

        // Kita masukan parameter
        $r = '';
        $result = $lingkaran->hitungKelilingLingkaran($r);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungLuas()
    {
        $lingkaran = new Lingkaran();

        // Kita masukan parameter
        $r = 2;
        $result = $lingkaran->hitungLuasLingkaran($r);
        $expected = 12.56;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }
    public function testHitungLuasKosong()
    {
        $lingkaran = new Lingkaran();

        // Kita masukan parameter
        $r = '';
        $result = $lingkaran->hitungLuasLingkaran($r);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengujian";
    }
}