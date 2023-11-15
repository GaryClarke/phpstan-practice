<?php

declare(strict_types=1);

class ExampleClass
{
    public function doSomething(): void
    {
        // Do something
    }
}

$example = new ExampleClass();

// Call to undefined method
$example->undefinedMethod(); // @phpstan-ignore-line
