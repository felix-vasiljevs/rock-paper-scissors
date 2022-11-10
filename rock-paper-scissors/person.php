<?php

class Person
{
    private string $name;
//    private Element $element;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

//    public function getChosenElement (): Element
//    {
//        $this-
//    }
}
