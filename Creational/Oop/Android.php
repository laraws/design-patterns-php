<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Oop;

use DesignPatterns\Creational\Oop\Phone;

class Android extends Phone
{
    private int $osVersion;

    protected string $uiName;

    public int $stock;

    public function __construct(int $osVersion, string $uiName)
    {
        $this->osVersion = $osVersion;
        $this->uiName = $uiName;
    }

    public function getBrand()
    {
        return $this->brand;
    }
    public function getVersion()
    {
        return $this->osVersion;
    }

}