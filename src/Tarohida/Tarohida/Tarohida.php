<?php

namespace Tarohida\Tarohida;

class Tarohida 
{
    private $word;

    public function say()
    {
        return $this->word;
    }

    public function __construct($word)
    {
        $this->word = $word;
    }
}
