<?php

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class SampleClassTest extends TestCase
{
    public function testExample()
    {
	$sample = new Tarohida\Sample\SampleClass();
	$val = $sample->helloWorld();
        $this->assertSame('Hello, World', $val);
    }
}
