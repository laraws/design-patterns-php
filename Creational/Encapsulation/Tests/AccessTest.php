<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Encapsulation\Tests;

use http\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Encapsulation\Phone;

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

}