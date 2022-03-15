<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit

use phpDocumentor\Reflection\Types\This;
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
include "PersegiPanjang.php";
class PersegiPanjangTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian\n";
    }


    public function testHitungKeliling()
    {
        $persegipanjang = new PersegiPanjang();
        $panjang = 2;
        $lebar = 2;
        $result = $persegipanjang->hitungKelilingPersegiPanjang($panjang, $lebar);
        $expected = 8;
        $this->assertEquals($expected, $result);
    }

    public function testHitungKelilingKosong()
    {
        $persegipanjang = new PersegiPanjang();
        $panjang = '';
        $lebar = '';
        $result = $persegipanjang->hitungKelilingPersegiPanjang($panjang, $lebar);
        $expected = 'Tidak boleh kosong';
        $this->assertEquals($expected, $result);
    }

    public function testHitungLuas()
    {
        $persegipanjang = new PersegiPanjang();
        $panjang = 2;
        $lebar = 2;
        $result = $persegipanjang->hitungLuasPersegiPanjang($panjang, $lebar);
        $expected = 4;
         $this->assertEquals($expected, $result);
    }
    public function testHitungLuasKosong()
    {
        $persegipanjang = new PersegiPanjang();

        $panjang = '';
        $lebar = '';
        $result = $persegipanjang->hitungLuasPersegiPanjang($panjang, $lebar);
        $expected = 'Tidak boleh kosong';
        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengujian";
    }
}
