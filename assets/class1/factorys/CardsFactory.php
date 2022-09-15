<?php

namespace app\assets\class1\factorys;

use app\assets\class1\card\Card;
use app\assets\class1\effects\Effects;

class CardsFactory
{
    private $effect;

    public function __construct(Effects $effect){
        $this->$effect = $effect;
    }

    public function createCard($name, $describe, $color, $type, Effects $effect){
        return new Card($name, $describe, $color, $type, $effect);
    }
}
