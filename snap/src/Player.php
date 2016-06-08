<?php

namespace Snap;

class Player
{
    private $name;
    private $hand;

    public function __construct($name)
    {
        $this->name = $name;
        $this->hand = new Hand();
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the value of hand.
     *
     * @return mixed
     */
    public function getHand()
    {
        return $this->hand;
    }

    public function getCard()
    {
        return $this->hand->drawCard();
    }
}
