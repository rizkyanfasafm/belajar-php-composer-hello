<?php

namespace RizkyAnfasaFarrasMada\Belajar;

class Customer{

    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name = "Guest")
    {
        return "Hello $name, My Name is $this->name";
    }
}