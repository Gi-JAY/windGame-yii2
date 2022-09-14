<?php

namespace app\assets\class1\roles;

abstract class BaseRole
{
    private $name;
    private $sex;
    private $visible;
    private $img;
    private $skills;
    private $mission;

    public function __construct($name, $sex, $visible, $img, $skills, $mission){
        $this->name = $name;
        $this->sex = $sex;
        $this->visible = $visible;
        $this->img = $img;
        $this->skills = $skills;
        $this->mission = $mission;
    }

    public abstract function getRoleOfSkills();
}
