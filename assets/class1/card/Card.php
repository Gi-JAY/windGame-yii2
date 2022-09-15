<?php

namespace app\assets\class1\card;

use app\assets\class1\effects\Effects;

class Card
{
    private $name;
    private $describe;
    private $color;
    private $type;
    private $effect;

    public function __construct($name, $describe, $color, $type, $effect){
        $this->name = $name;
        $this->describe = $describe;
        $this->color = $color;
        $this->effect = $effect;
        $this->type = $type;
    }

    public function useCard(Effects $effect){

    }
}
