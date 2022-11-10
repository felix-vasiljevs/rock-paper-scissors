<?php

require_once 'game.php';
require_once 'element.php';
require_once 'person.php';

$rock = new Element("Rock");
$paper = new Element('Paper');
$scissors = new Element('Scissors');
$lizard = new Element('Lizard');
$spock = new Element('Spock');

$playerA = new Person('Player');
$playerB = new Person('PC');

$rock->setBeats($scissors, $lizard);
$paper->setBeats($rock, $spock);
$scissors->setBeats($paper, $lizard);
$lizard->setBeats($paper, $spock);
$spock->setBeats($scissors, $rock);

$elements = [
    $rock,
    $paper,
    $scissors,
    $lizard,
    $spock
];

$opponentElement = $elements[array_rand($elements)];


foreach ($elements as $key => $element) {
    echo "[{$key}] {$element->getName()}" . PHP_EOL;
}

$selection = (int)readline('Choose element: ');

$playerA = $elements[$selection];
$playerB = $elements[array_rand($elements)];

$game = new Game($playerA, $playerB);
$winner = $game->getWinner();

echo "{$playerA->getName()} VS {$playerB->getName()}";
echo PHP_EOL;

if ($winner === null) {
    echo "The game is tie!";
    exit;
}

echo "Winner: " . $playerA->getName() . PHP_EOL;
