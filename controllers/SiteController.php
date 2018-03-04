<?php

namespace app\controllers;

use app\components\Foo;
use app\models\Category;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\validators\EmailValidator;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserForm;
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

    public function actionUser()
    {
        $model = new UserForm();

        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post()))
        {
            $model->signup();

                echo '<pre>';
                var_dump($model);
                die;

            echo '<pre>';
            var_dump($model->errors);
        } else {
            return $this->render('user', [
                'model' => $model,
            ]);
        }
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
    public function actionAbout($id = null, $part = null, $color = null, $idcolor = null)
    {
        echo '<pre>';

        echo $part . ' => ' . $id . '<br />';
        echo $color . ' => ' . $idcolor . '<br />';

        die;

        $confPath = Yii::getAlias('@app') . '/translations/' . Yii::$app->language . '/interface.php';
        $t = require $confPath;

        //$count = Article::find()->with('category')->all();
        
        //$count = Article::find()->joinWith('category cc')->where(['cc.id' => '1'])->all();

//        $a = Article::findOne(1);
//        $c = new Category();
//        $c->title = 'Технологии';
//        $c->save();

        //commit evening

//        $c->link('articles', $a);
//        echo '<pre>';
//        var_dump($a->category->title);
//        die;

        //echo '<pre>';

        //echo(Yii::$app->formatter->asDate('2014-01-01', 'long'));
        //echo '<br />';

//        $count = (new \yii\db\Query())
//            ->select('*')
//            ->from('article')
//            ->where('id=:id', [':id' => '1'])->limit(1)->one();

//        $count = Yii::$app->db->createCommand('SELECT title_' . Yii::$app->language . ' AS title FROM article WHERE id=:id')
//        ->bindValue(':id', '1')
//        ->queryOne();

        //$tags = $count->getTags()->orderBy('title')->all();

        //$category = $count->category;

        
        /*echo '<h2>Данный язык: ' . Yii::$app->language . '</h2>';
        echo '<br />';
        echo '<h3><a href="' . Url::to(['site/about', 'language' => 'ru']) . '">Русский</a>';
        echo '<br />';
        echo '<h3><a href="' . Url::to(['site/about', 'language' => 'en']) . '">English</a>';*/

        //Event create
//        $art->on(Article::ARTICLE_CREATED, function($event){
//            echo $event->data . '<br />';
//        }, 'some data');

        //Event start
        //$art->trigger(Article::ARTICLE_CREATED);

        $count =
          [
              'title' => 'Заголовок 1',
              'description' => 'Описание 1'
          ]
        ;
        return $this->render('about', ['count' => $count]);
    }
    public function actionError()
    {
        throw new NotFoundHttpException();
    }
}
