<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Guest;
use yii\data\Pagination;

class GuestController extends \yii\web\Controller
{
	    public function actionIndex()
	    {   
	       $model = Guest::find();

	         $pagination = new Pagination([
	             'defaultPageSize' => 10,
	             'totalCount' => $model->count(),
	         ]);

	         $model = $model->orderBy('id')
	             ->offset($pagination->offset)
	             ->limit($pagination->limit)
	             ->all();

	         return $this->render('index', [
	             'model' => $model,
	             'pagination' => $pagination,
	         ]);

	    }

        
        public function actionCreate()
        {
            $model = new Guest();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }

        public function actionView($id)
        {
         $model = Guest::findOne($id);
          
            return $this->render('view', [
                'model' => $model,
            ]);
        }

       
        public function actionUpdate($id)
        {
            $model = Guest::findOne($id);
            

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }

        
         
        public function actionDelete($id)
        {   $model = Guest::findOne($id);
            $model->delete();

            return $this->redirect(['index']);
        }

        }





