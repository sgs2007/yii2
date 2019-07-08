<?php

namespace app\controllers;

use Yii;
use yii\base\Controller;
use yii\web\UploadedFile;
use app\models\DataForm;
use app\models\Emails;
use yii\data\ActiveDataProvider;

class DataController extends Controller
{
  public function actionIndex()
  {
    $hi = 'Hello World';
    return $this->render('index',compact('hi'));
  }

  public function actionData()
  {
    $model = new DataForm();
    $dataProvider = new ActiveDataProvider([
      'query' => Emails::find(),
      'pagination' => [
        'pageSize' => 20,
      ],
    ]);
      if (Yii::$app->request->isPost) {
        $model->file = UploadedFile::getInstance($model, 'file');
        
        if ($model->upload()) {
          if ($file = fopen('C:\Work\OpenServerApp\OSPanel\domains\basic\web\uploads' . "\/" . $model->file->name,"r")) {
            // $rownumber = 0;
            while (($data = fgetcsv($file,1000,"\n")) !== false ) { 
              $row = explode(";",$data[0]);
              if (preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/',$row[0])) {
                $data_file = new Emails();
                $data_file->email = $row[0];
                $data_file->country = $row[1];
                $data_file->gender = $row[2];
                $data_file->name = $row[3];
                $data_file->save();
              }
              // $data_file[$rownumber] = $row;
              // $rownumber++;
            }
            // debug($data_file);
            fclose($file);
          }
            Yii::$app->session->setFlash('success', 'Data was get');
            // return $this->render('data', ['model' => $model]);
        } else {
            Yii::$app->session->setFlash('error','Error');
            // return $this->render('data', ['model' => $model]);
        }
      }
  return $this->render('data', ['model' => $model, 'dataProvider' => $dataProvider]);
  }
}
