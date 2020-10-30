<?php

namespace app\controllers\xhiddenimstadminurlx;

use app\models\db\MainPhoto;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\upload\MainphotoUpload;
use yii\web\UploadedFile;

class MainphotoController extends Controller
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

    public function actionIndex()
    {
        $main_photo = MainPhoto::find()->all();
        
        return $this->render('/admin/mainphoto/index', [
            'main_photo' => $main_photo,
        ]);


    }

    public function actionUploadPhoto()
    {
        $main_photo =  MainPhoto::find()->one();
        $photo = new MainphotoUpload();
        $photo->imageFile = UploadedFile::getInstanceByName('imageFile');
        $photo->photo = \Yii::$app->security->generateRandomString();

        if ($photo->upload()) {

            $main_photo->photo = $photo->photo;

            if ($main_photo->save()) {     

                $this->redirect('index');

            } else {

                return false;
            }

        } else {
            return ["error" => $photo->getErrors('imageFile')];/* 
            return false; */
        }
    }

    public function actionDelete()
    {
        if (Yii::$app->request->post()) {
            $main_photo = MainPhoto::findOne(Yii::$app->request->post('id'));

            if($main_photo->photo) {
                unlink('images/mainphoto/'.$main_photo->photo.'.jpg');
                unlink('images/mainphoto/'.$main_photo->photo.'@100x100.jpg');
                unlink('images/mainphoto/'.$main_photo->photo.'@200x200.jpg');
                unlink('images/mainphoto/'.$main_photo->photo.'@380x220.jpg');
                unlink('images/mainphoto/'.$main_photo->photo.'@600x250.jpg');
                unlink('images/mainphoto/'.$main_photo->photo.'@1024.jpg');
            }

            $main_photo->delete();
            
            return $this->redirect('index');
        }

    }

    public function actionRestSort()
    {
        if (Yii::$app->request->isGet) {
            $main_photo = MainPhoto::find();

            return $this->asJson(['mainphoto' => $main_photo->all()]);
        }

    }

}