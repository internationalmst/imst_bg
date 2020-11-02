<?php

namespace app\controllers\xhiddenimstadminurlx;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\db\Slider;
use app\models\upload\SliderPhotosUpload;
use yii\web\UploadedFile;

class SliderController extends Controller
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
                $this->redirect(['xhiddenimstadminurlx/login']);
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

    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            $list = Yii::$app->request->post('photo');
            $count = 0;
            foreach ($list as $id) {
                $model = Slider::find()->where(['id' => $id])->one();
                $model->position = $count;
                $model->save();
                ++$count;
            }
    
            return $this->render('/admin/slider/index');
        }

        $slider = Slider::find()->all();
        
        return $this->render('/admin/slider/index', [
            'slider' => $slider,
        ]);
    }

    public function actionUploadPhoto()
    {
        $slider =  new Slider();
        $photo = new SliderPhotosUpload();
        $photo->imageFile = UploadedFile::getInstanceByName('imageFile');
        $photo->photo = \Yii::$app->security->generateRandomString();

        if ($photo->upload()) {

            $slider->photo = $photo->photo;

            if ($slider->save()) {     

                $this->redirect('index');

            } else {

                return false;
            }

        } else {
            return ["error" => $photo->getErrors('imageFile')];/* 
            return false; */
        }
    }

    public function actionRestSort()
    {
        if (Yii::$app->request->isGet) {
            $slider = Slider::find();

            return $this->asJson(['slider' => $slider->orderBy('position')->all()]);
        }

    }

    public function actionDelete()
    {
        if (Yii::$app->request->post()) {
            $slider = Slider::findOne(Yii::$app->request->post('id'));

            if($slider->photo) {
                unlink('images/slider/'.$slider->photo.'.jpg');
                unlink('images/slider/'.$slider->photo.'@100x100.jpg');
                unlink('images/slider/'.$slider->photo.'@200x200.jpg');
                unlink('images/slider/'.$slider->photo.'@380x220.jpg');
                unlink('images/slider/'.$slider->photo.'@600x250.jpg');
                unlink('images/slider/'.$slider->photo.'@1024.jpg');
            }

            $slider->delete();
            
            return $this->redirect('index');
        }

    }
}