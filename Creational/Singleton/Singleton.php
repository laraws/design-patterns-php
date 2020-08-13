<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton;

final class Singleton
{
    // the "?" is the Nullable types
    // Which defines ?int as either int or null.
    // Ref: http://php.net/manual/en/migration71.new-features.php
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {

    }



}