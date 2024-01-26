<?php

namespace app\repository;
use app\entity\Topic;

class TopicRepository
{
    public static function getTopic($Subsection_id){
        return Topic::find()->where(['subsection_id' => $Subsection_id])->all();
    }

}