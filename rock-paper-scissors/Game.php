<?php

class Game
{
    private Person $personA;
    private Person $personB;

    public function __construct(Person $personA, Person $personB)
    {
        $this->personA = $personA;
        $this->personB = $personB;
    }

    public function getWinner(Person $personA, Person $personB): ?Person
    {
        if ($this->personA->getChosenElement()->getName() === $this->personB->getChosenElement()->getName()) {
            return null;
        }

        if (in_array($this->personA->getChosenElement(), $this->personB->getChosenElement()->getBeats())) {
            return $this->personB;
        }
        return $this->personA;
    }
}
