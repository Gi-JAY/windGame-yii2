<?php

namespace app\assets\class1\roles;

use app\assets\skills\skills;

class BlackBoss extends BaseRole
{
  public function getRoleOfSkills(Skills $skills){
    $this->skills = $skills;
  }  
}
