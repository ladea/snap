<?php

namespace Snap;

class Deck
{
    /**
     * the cards in the deck.
     *
     * @var array
     */
    protected $cards = [];

    public function __construct()
    {
        foreach (range(0, 3) as $suit) {
            foreach (range(1, 13) as $rank) {
                $card = new Card($suit, $rank);
                $this->cards[] = $card;
            }
        }
    }

    /**
     * Gets the the cards in the deck.
     *
     * @return array
     */
    public function getCards()
    {
        return $this->cards;
    }

    public function shuffle()
    {
        shuffle($this->cards);
    }

    public function addCard(Card $card)
    {
        array_push($this->cards, $card);
    }

    public function drawCard()
    {
        return array_shift($this->cards);
    }

    public function dealCards(Hand $hand, $numCards)
    {
        for ($i = 0; $i < $numCards; ++$i) {
            $hand->addCard($this->drawCard());
        }
    }

    public function count()
    {
        return count($this->cards).' cards';
    }
}
