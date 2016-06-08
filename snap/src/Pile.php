<?php

namespace Snap;

class Pile extends Deck
{
    public function __construct()
    {
        //overwrites deck constructor
    }

    public function snap()
    {
        if (count($this->cards) > 1) {
            end($this->cards);
            $snap = (current($this->cards)->getRank() == prev($this->cards)->getRank());
            reset($this->cards);

            return $snap;
        }

        return false;
    }

    public function empty()
    {
        $this->cards = [];
    }
}
