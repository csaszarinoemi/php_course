<?php

namespace app\models;
use yii\db\ActiveRecord;

class Post extends ActiveRecord{
  public function rules() {
    return [
        [['title', 'content', 'creator', 'votes'], 'required']
    ];
}
}
?>