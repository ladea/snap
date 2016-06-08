<?php

use Snap\Deck;
use Snap\Pile;
use Snap\Player;

require __DIR__.'/vendor/autoload.php';

header('Content-type: text/plain');

// deck of cards
$deck = new Deck();
$deck->shuffle();

$numCards = mt_rand(5, 26);

$pile = new Pile();

$players = [new Player('Player 1'), new Player('Player 2')];

foreach ($players as $player) {
    $deck->dealCards($player->getHand(), $numCards);
}

while (count($players) > 1) {
    foreach ($players as $key => $player) {
        if ($card = $player->getCard()) {
            echo $player->getName().' has '.$card.PHP_EOL;

            // add card to the pile
            $pile->addCard($card);

            // if there's a snap
            if ($pile->snap()) {
                echo 'SNAP!'.PHP_EOL;
                // player gets all the cards from the pile
                $player->getHand()->addCards($pile->getCards());
                $pile->empty();
            }
        } else {
            echo $player->getName().' don\'t have any more cards!'.PHP_EOL;
            unset($players[$key]);
            $players = array_values($players);
            if (count($players) < 2) {
                echo $players[0]->getName().' is a winner!';
                exit;
            }
        }
    }
}
