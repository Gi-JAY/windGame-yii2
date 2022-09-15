<?php

namespace app\assets\class1\skills;

class Strong extends Skills
{
    public function __construct()
    {
        $this->name = 'Strong';
        $this->description = '在你抽牌階段，每有一張黑色情報，抽牌數加一。';
    }
    public function useThisSkill(){

    }
}
