<?php

namespace app\repository;

use app\entity\Sections;

class SectionRepository
{
    public static function getSection(){
        return Sections::find()->all();
    }

}
