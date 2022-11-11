<?php

require_once 'Game.php';
require_once 'Element.php';
require_once 'Person.php';

$rock = new Element("Rock");
$paper = new Element('Paper');
$scissors = new Element('Scissors');
$lizard = new Element('Lizard');
$spock = new Element('Spock');

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
$input = $selection + 1;

var_dump($input);

$playerSelection = $elements[$selection];
$pcSelection = $elements[array_rand($elements)];

$playerA = new Person('Player', $playerSelection);
$playerB = new Person('PC', $pcSelection);

$game = new Game($playerA, $playerB);
$winner = $game->getWinner($playerA, $playerB);

echo "{$playerSelection->getName()} VS {$pcSelection->getName()}";
echo PHP_EOL;

if ($winner === null) {
    echo "The game is tie!" . PHP_EOL;
    exit;
} else {
    echo "Winner: " . $winner->getName() . PHP_EOL;
}

