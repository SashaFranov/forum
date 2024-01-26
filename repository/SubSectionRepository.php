<?php

namespace app\repository;

use app\entity\Subsections;

class SubSectionRepository
{
    public static function getSubsection($section_id){
        return Subsections::find()->where(['sections_id' => $section_id])->all();
    }

}