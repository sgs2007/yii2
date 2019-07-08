<?php

namespace app\components;
use yii\base\Widget;

class Widget1 extends Widget {
  public $name;

  public function init() {
    parent::init();
    if ($this->name===null) $this->name = 'Serega';
  }

  public function run() {
    return $this->render('firstview',['name' => $this->name]);
  }
}
