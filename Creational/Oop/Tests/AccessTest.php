<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Oop\Tests;


use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Oop\Phone;
use DesignPatterns\Creational\Oop\Android;

class AccessTest extends TestCase
{
    public function testAccessError(): void
    {
        $iphone = new Phone('iphone', '11');
        $this->expectException(\InvalidArgumentException::class);

        $this->expectException(\Error::class);

        $brand = $iphone->brand;
    }

    public function testAccessErrorCatch(): void
    {
        $oneplus = new Phone('oneplue', '5');

        $this->expectException(\InvalidArgumentException::class);


        try {
            $model = $oneplus->model;
        } catch (\Throwable $t) {
            echo "Get error message: ".PHP_EOL;
            echo $t->getMessage();
            echo PHP_EOL;
            throw new \InvalidArgumentException('access error');
        }

    }

    public function testAccessExist(): void
    {
//        $samsung = new Android(10, 'Oneui');
//
////        $stock = $samsung->stock;
//
//        $iphone = new Phone('apple', '12');
//        $battery = $iphone->battery;
//        $this->assertSame(null, $battery);
        $sony = new Phone('sony', 'x2');
        //Get an not exit property
        $version = $sony->version;
        $this->assertSame(null, $version);

        //give a value to an not exit property
        $sony->version = 10;
        $this->assertSame(10, $sony->version);

        //Get a property not given value
        $battery = $sony->battery;
        $this->assertSame(null, $battery);

        //Give a value to a property not given value
        $sony->battery = 4000;
        $this->assertSame(4000, $sony->battery);
    }

}