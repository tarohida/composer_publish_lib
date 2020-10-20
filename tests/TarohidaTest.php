<?php

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class TarohidaTest extends TestCase
{
    public function testTarohidaSay()
    {
	$tarohida = new Tarohida\Tarohida\Tarohida('Hello, World');
        $this->assertSame('Hello, World', $tarohida->say());
    }
}
