<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property integer $id
 * @property string $name
 * @property string $country
 * @property string $gender
 * @property string $email
 */

class Emails extends ActiveRecord 
{
  public static function tableName()
  {
    return '{{emails}}';
  }
  
}