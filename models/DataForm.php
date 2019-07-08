<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class DataForm extends Model 
{
  /**
     * @var UploadedFile
     */
  public $file;

  public function rules()
  {
    return [
      ['file', 'required'],
    ];
  }

  public function upload()
  {
    if ($this->validate()) {
      $this->file->saveAs('uploads/' . $this->file->baseName . '.' . $this->file->extension);
      return true;
    } else {
      return false;
    }
  }
}