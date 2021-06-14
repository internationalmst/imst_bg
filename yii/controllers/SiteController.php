<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\db\Guarantees;
use app\models\db\MainPhoto;
use app\models\db\Services;
use app\models\db\Texts;
use app\models\NewsletterForm;
use app\models\CvForm;
use app\models\db\Languages;
use yii\web\NotFoundHttpException;
use app\helpers\ChangeLanguage;
use app\models\db\Slider;
use yii\web\View;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function beforeAction($action)
    {
        $language = Yii::$app->getRequest()->getQueryParam('language');
        $langs = Languages::find()->where(['enable' => 1])->all();
        $this->view->params['changeLanguages'] = [];
        if (empty($language)) {
            $lang = Languages::find()->where(['primary' => 1])->one();
        } else {
            $lang = Languages::find()->where(['code' => $language])->one();
        }
        if ($lang == null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        if ($lang->primary == 1) {
            $this->view->params['urlFront'] = Url::base(true);
        } else {
            $this->view->params['urlFront'] = Url::base(true).'/'.$lang->code;
        }
        $this->view->params['language'] = $lang->code;
        $this->view->params['changeLanguages'] = ChangeLanguage::createMirrors($langs);

        if ($this->view->params['changeLanguages'][1]['url'] == 'en') {
            $this->view->params['changeLanguages'][1]['url'][-1]='u';
            $this->view->params['changeLanguages'][1]['url'][-2]='r';
            $this->view->params['changeLanguages'][1]['url'] = $this->view->params['changeLanguages'][1]['url'].'s';            
        }
        if ($this->view->params['changeLanguages'][0]['url'] == 'rus') {
            $this->view->params['changeLanguages'][0]['url'][-2]='n';
            $this->view->params['changeLanguages'][0]['url'][-3]='e';
            $this->view->params['changeLanguages'][0]['url'] = $this->view->params['changeLanguages'][1]['url'] - $this->view->params['changeLanguages'][1]['url'][-1];
        }
        print_r($this->view->params['changeLanguages']);die;
        \Yii::$app->language = $lang->iso_code;

        $this->layout = '@app/views/layouts/main.php';

        return parent::beforeAction($action);


        if (!parent::beforeAction($action)) {
            return false;
        }

        return true;
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $main_photo = MainPhoto::find()->one();
        $texts = Texts::find()->all();
        $guarantees = Guarantees::find()->all();
        $services = Services::find()->all();
        $slider = Slider::find()->orderBy(['position' => SORT_ASC])->all();
        $newsletter = new NewsletterForm();

        if ($newsletter->load(Yii::$app->request->post()) && $newsletter->submit()) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('index', [
            'main_photo' => $main_photo,
            'texts' => $texts,
            'guarantees' => $guarantees,
            'services' => $services,
            'lang' => $this->view->params['language'],
            'slider' => $slider,
            'model' => $newsletter
        ]);
    }
    public function actionWork()
    {
        $main_photo = MainPhoto::find()->one();
        $slider = Slider::find()->orderBy(['position' => SORT_ASC])->all();
        $texts = Texts::find()->all();

        $cv = new CvForm();

        if ($cv->load(Yii::$app->request->post()) && $cv->submit()) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('work', [
            'main_photo' => $main_photo,
            'texts' => $texts,
            'lang' => $this->view->params['language'],
            'slider' => $slider,
            'model' => $cv
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
