<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Encapsulation;

class Phone
{
    private string $brand;

    private string $color;

    private string $model;

    private float $size;

    private int $storage;

    private int $memory;

    private int $battery;

    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }


}