<?php

namespace app\controllers\xhiddenimstadminurlx;

use app\models\db\MainPhoto;
use app\models\db\Services;
use app\models\db\Guarantees;
use Yii;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\db\Texts;
use app\models\LoginForm;
use yii\helpers\BaseHtml;

class TextsController extends Controller
{
    public $layout = '@app/views/layouts/admin.php';

    public function behaviors()
    {
        return [
          'access' => [
            'class' => AccessControl::className(),
            'only' => ['logout'],
            'rules' => [
                [
                    'actions' => ['logout'],
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
            'denyCallback' => function () {
                $this->redirect(['Xhiddenimstadminurlx/login']);
            },
          ],
          'verbs' => [
            'class' => VerbFilter::className(),
            'actions' => [],
          ],
        ];
    }

    public function beforeAction($action)
    {
        if (Yii::$app->user->identity == NULL) {
            $this->layout = 'content';
            return $this->redirect('/Xhiddenimstadminurlx/login');
        }
        return $action;        
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionUpdate()
    {
        $text = Texts::find()->where(['id' => '1'])->one();

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionMainphoto()
    {
        $text = MainPhoto::find()->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findMainPhotoModel(Yii::$app->request->post()['MainPhoto']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/mainphoto');
            }
        }

        return $this->render('/admin/mainphototexts', [
            'model' => $text,
        ]);
    }

    public function actionWorkWithUsUpdate()
    {
        $text = Texts::find()->where(['id' => '6'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findTextModel(Yii::$app->request->post()['Texts']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/work-with-us-update');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionCompanyUpdate()
    {
        $text = Texts::find()->where(['id' => '1'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findTextModel(Yii::$app->request->post()['Texts']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/company-update');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionValuesUpdate()
    {
        $text = Texts::find()->where(['id' => '2'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findTextModel(Yii::$app->request->post()['Texts']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/values-update');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionMissionUpdate()
    {
        $text = Texts::find()->where(['id' => '3'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findTextModel(Yii::$app->request->post()['Texts']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/mission-update');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeUpdate()
    {
        $text = Texts::find()->where(['id' => '4'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findTextModel(Yii::$app->request->post()['Texts']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-update');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionServicesTextOne()
    {
        $text = Services::find()->where(['id' => '1'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findServicesTextModel(Yii::$app->request->post()['Services']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/services-text-one');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionServicesTextTwo()
    {
        $text = Services::find()->where(['id' => '2'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findServicesTextModel(Yii::$app->request->post()['Services']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/services-text-two');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionServicesTextThree()
    {
        $text = Services::find()->where(['id' => '3'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findServicesTextModel(Yii::$app->request->post()['Services']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/services-text-three');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionServicesTextFour()
    {
        $text = Services::find()->where(['id' => '4'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findServicesTextModel(Yii::$app->request->post()['Services']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/services-text-four');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionServicesTextFive()
    {
        $text = Services::find()->where(['id' => '5'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findServicesTextModel(Yii::$app->request->post()['Services']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/services-text-five');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionServicesTextSix()
    {
        $text = Services::find()->where(['id' => '6'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findServicesTextModel(Yii::$app->request->post()['Services']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/services-text-six');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeTextOne()
    {
        $text = Guarantees::find()->where(['id' => '1'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findGuaranteesTextModel(Yii::$app->request->post()['Guarantees']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-text-one');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeTextTwo()
    {
        $text = Guarantees::find()->where(['id' => '2'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findGuaranteesTextModel(Yii::$app->request->post()['Guarantees']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-text-two');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeTextThree()
    {
        $text = Guarantees::find()->where(['id' => '3'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findGuaranteesTextModel(Yii::$app->request->post()['Guarantees']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-text-three');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeTextFour()
    {
        $text = Guarantees::find()->where(['id' => '4'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findGuaranteesTextModel(Yii::$app->request->post()['Guarantees']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-text-four');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeTextFive()
    {
        $text = Guarantees::find()->where(['id' => '5'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findGuaranteesTextModel(Yii::$app->request->post()['Guarantees']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-text-five');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeTextSix()
    {
        $text = Guarantees::find()->where(['id' => '6'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findGuaranteesTextModel(Yii::$app->request->post()['Guarantees']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-text-six');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeTextSeven()
    {
        $text = Guarantees::find()->where(['id' => '7'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findGuaranteesTextModel(Yii::$app->request->post()['Guarantees']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-text-seven');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeTextEight()
    {
        $text = Guarantees::find()->where(['id' => '8'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findGuaranteesTextModel(Yii::$app->request->post()['Guarantees']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-text-eight');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function actionGuaranteeTextNine()
    {
        $text = Guarantees::find()->where(['id' => '9'])->one();

        if (Yii::$app->request->post()) {
            
            $model = $this->findGuaranteesTextModel(Yii::$app->request->post()['Guarantees']);
            
            if($model->save()) {
                $this->redirect('/Xhiddenimstadminurlx/texts/guarantee-text-nine');
            }
        }

        return $this->render('/admin/texts', [
            'model' => $text,
        ]);
    }

    public function findTextModel($params)
    {
        if (($model = Texts::findOne($params['id'])) !== null) {
            $model->title_en = BaseHtml::decode($params['title_en']);
            $model->title_rus = BaseHtml::decode($params['title_rus']);
            $model->text_en = BaseHtml::decode($params['text_en']);
            $model->text_rus = BaseHtml::decode($params['text_rus']);
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function findServicesTextModel($params)
    {
        if (($model = Services::findOne($params['id'])) !== null) {
            $model->title_en = BaseHtml::decode($params['title_en']);
            $model->title_rus = BaseHtml::decode($params['title_rus']);
            $model->text_en = BaseHtml::decode($params['text_en']);
            $model->text_rus = BaseHtml::decode($params['text_rus']);
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function findGuaranteesTextModel($params)
    {
        if (($model = Guarantees::findOne($params['id'])) !== null) {
            $model->title_en = BaseHtml::decode($params['title_en']);
            $model->title_rus = BaseHtml::decode($params['title_rus']);
            $model->text_en = BaseHtml::decode($params['text_en']);
            $model->text_rus = BaseHtml::decode($params['text_rus']);
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function findMainPhotoModel($params)
    {
        if (($model = MainPhoto::findOne($params['id'])) !== null) {
            $model->title_en = BaseHtml::decode($params['title_en']);
            $model->title_rus = BaseHtml::decode($params['title_rus']);
            $model->subtitle_en = BaseHtml::decode($params['subtitle_en']);
            $model->subtitle_rus = BaseHtml::decode($params['subtitle_rus']);
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function findMainPhotoTextModel($params)
    {
        if (($model = MainPhoto::findOne($params['id'])) !== null) {
            $model->title_en = BaseHtml::decode($params['title_en']);
            $model->title_rus = BaseHtml::decode($params['title_rus']);
            $model->text_en = BaseHtml::decode($params['text_en']);
            $model->text_rus = BaseHtml::decode($params['text_rus']);
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}