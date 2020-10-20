<?php

namespace Tarohida\Sample;

class SampleClass
{
    private $val;

    public function helloWorld()
    {
        return $this->val;
    }

    public function __construct()
    {
        $this->val = 'Hello, World';
    }
}
