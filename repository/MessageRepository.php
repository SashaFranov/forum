<?php

namespace app\repository;

use app\entity\Messages;
class MessageRepository
{
    public static function getMessage($Topic_id){
        return Messages::find()->joinWith('user')->where(['topic_id' => $Topic_id])->all();
    }
}