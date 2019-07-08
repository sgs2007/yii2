<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord {

  public static function tableName()
  {
    return 'posts';
  }
  public function rules()
  {
    return [
      [['name','email','text'],'required'],
    ];
  }

}