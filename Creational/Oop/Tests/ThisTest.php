<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Oop\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Oop\Phone;

class ThisTest extends TestCase
{
    public function testThisUsage()
    {
        $pixel = new Phone('pixel', '4');

        // this is Phone
        $this->assertInstanceOf(Phone::class, $pixel->setColor('white'));

        //this is ThisTest
        $this->assertInstanceOf(self::class, $this);
    }
}