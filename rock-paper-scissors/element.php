<?php

class Element
{
    private string $name;
//    private string $enemy;
    private Element $beats;
    private Element $enemy;

    public function __construct(string $name) // string $enemy
    {
        $this->name = $name;
//        $this->enemy = $enemy;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBeats(): Element
    {
        return $this->beats;
    }

    public function setBeats(Element $element, Element $enemy): void
    {
        $this->beats = $element;
        $this->enemy = $enemy;
    }
}
