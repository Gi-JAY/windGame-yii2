<?php

namespace app\assets\class1\effects;

abstract class Effects
{
    private $name;
    private $describe;

    public function __construct($name, $describe){
        $this->name = $name;
        $this->describe = $describe;
    }
    public abstract function useEffect();
}
