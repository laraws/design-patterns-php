<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Oop;

class Phone
{
    private string $brand;

    private string $color;

    private string $model;

    protected float $size;

    protected int $storage;

    protected int $memory;

    public int $battery;

    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }


}