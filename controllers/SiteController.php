<?php

namespace app\controllers;

use app\components\Foo;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Article;
use yii\helpers\Url;

class SiteController extends Controller
{
    /**
     * @inheritdoc
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
     * @inheritdoc
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
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
        $coo = Yii::$app->response->cookies;
        $coo->add(new \yii\web\Cookie(
            [
                'name' => 'lang',
                'value' => 'ru',
            ]
        ));
        $data = Yii::$app->language;
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            'data' => $data
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $art = new Article();
        
        var_dump($art->config);
        echo(Yii::getAlias('@adm'));
        echo '<br />';

        $count = Article::findOne(1);


        /*$count = (new \yii\db\Query())
            ->select('*')
            ->from('article')
            ->where('id=:id', [':id' => '3'])->one();*/

        /*$count = Yii::$app->db->createCommand('SELECT * FROM article WHERE id=:id')
            ->bindValue(':id', '3')
            ->queryOne();*/

        echo '<pre>';
        echo '<h2>Данный язык: ' . Yii::$app->language . '</h2>';
        echo '<br />';
        echo '<h3><a href="' . Url::to(['site/about', 'language' => 'ru']) . '">Русский</a>';
        echo '<br />';
        echo '<h3><a href="' . Url::to(['site/about', 'language' => 'en']) . '">English</a>';

        //Event create
//        $art->on(Article::ARTICLE_CREATED, function($event){
//            echo $event->data . '<br />';
//        }, 'some data');

        //Event start
        //$art->trigger(Article::ARTICLE_CREATED);
        die;
//        return $this->render('about');
    }
    public function actionError()
    {
        throw new NotFoundHttpException();
    }
}
