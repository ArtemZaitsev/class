<?php

namespace App\Models;

class Dog
{
    public function __construct($name, $weight)
    {
        $this->name = $name,
        $this->weight = $weight,
    }


    protected $fillable = [
        'name',
        'weight'
    ];

    public function setName():string
    {

    }

    public function getName():string
    {

    }

    public function setWeight():int
    {

    }

    public function getWeight():int
    {

    }
}
