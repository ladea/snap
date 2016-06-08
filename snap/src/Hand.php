<?php

namespace Snap;

/**
 * Hand of a player.
 */
class Hand extends Deck
{
    public function __construct()
    {
        //overwrites deck constructor
    }

    public function addCards(array $cards)
    {
        foreach ($cards as $card) {
            $this->addCard($card);
        }
    }
}
