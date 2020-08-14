<?php declare(strict_types=1);

namespace DesignPatterns\Oop\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Oop\Android;
use DesignPatterns\Creational\Oop\Phone;

class InheritTest extends TestCase
{
    public function testAccess(): void
    {
        $samsung = new Android(10, 'Oneui');

        $stock = $samsung->stock1;

        $iphone = new Phone('apple', '12');
        $iphone->battery = 10;
        $this->assertSame(10, $iphone->battery);

        $this->assertSame(null, $stock);

    }
}