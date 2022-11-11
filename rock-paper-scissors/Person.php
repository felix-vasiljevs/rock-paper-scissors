<?php

class Person
{
    private string $name;
    private Element $element;

    public function __construct(string $name, Element $element)
    {
        $this->name = $name;
        $this->element = $element;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChosenElement (): Element
    {
        return $this->element;
    }
}
