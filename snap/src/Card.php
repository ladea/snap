<?php

namespace Snap;

/**
 * A game card
 * Each card belongs to one of four suits
 * [clubs, diamonds, hearts, spades]
 * and one of thirteen ranks
 * [ace, 2, 3, 4, 5, 6, 7, 8, 9, 10, jack, queen, king].
 */
class Card
{
    /**
     * One of several categories into which the cards of a deck are divided.
     *
     * @var string
     */
    private $suit;

    /**
     * Ranking indicates which cards within a suit are better.
     *
     * @var string
     */
    private $rank;

    /**
     * Suit mapping.
     *
     * @var array
     */
    private $suit_names = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];

    /**
     * Rank mapping.
     *
     * @var array
     */
    private $rank_names = [null, 'Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King'];

    /**
     * @param int suit
     * @param int rank
     */
    public function __construct(int $suit, int $rank)
    {
        $this->suit = $suit;
        $this->rank = $rank;
    }

    /**
     * Get string representation of a card.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->rank_names[$this->rank].' of '.$this->suit_names[$this->suit];
    }

    /**
     * Gets the One of several categories into which the cards of a deck are divided.
     *
     * @return string
     */
    public function getSuit()
    {
        return $this->suit;
    }

    /**
     * Gets the Ranking indicates which cards within a suit are better.
     *
     * @return string
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Gets the Suit mapping.
     *
     * @return array
     */
    public function getSuitNames()
    {
        return $this->suit_names;
    }

    /**
     * Gets the Rank mapping.
     *
     * @return array
     */
    public function getRankNames()
    {
        return $this->rank_names;
    }
}
