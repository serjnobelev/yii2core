<?php

namespace app\controllers;

use app\models\Conditions;
use app\models\Contacts;
use app\models\Documents;
use app\models\News;
use app\models\Pagetexts;
use app\models\Phones;
use app\models\Pluses;
use app\models\Rates;
use kartik\datecontrol\DateControl;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\StringHelper;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserForm;

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
        $pluses = Pluses::getPluses();
        return $this->render('index', ['pluses' => $pluses, 'pageClass' => 'page_main']);
    }

    public function actionDocuments()
    {
        $docs = Documents::getDocs();
        return $this->render('documents', ['docs' => $docs, 'pageClass' => 'page_documents']);
    }

    public function actionDownloadDoc($image)
    {
        $obj = Yii::$app->params['docsImgPath'] . $image;
        if(file_exists($obj)) {
            Yii::$app->response->sendFile($obj);
            Yii::$app->response->send();
        } else {
            echo false;
        }
        die;
    }

    public function actionPhoneNumbers()
    {
        $phones = Phones::getPhones();
        return $this->render('phone-numbers', ['phones' => $phones]);
    }

    public function actionRates($addr = null)
    {
        if ($addr != null) {
            $addresses = Rates::getAddresses();
            $rate = Rates::getRates($addr);
            return $this->render('rates', ['addresses' => $addresses, 'rate' => $rate]);
        } else {
            if (Yii::$app->language == 'ru') {
                return $this->redirect('/rates/gorkogo5b/', 301);
            } else {
                return $this->redirect('/ua/rates/gorkogo5b/', 301);
            }
            die;
        }
    }


    public function actionContacts()
    {
        $contacts = Contacts::getContacts();
        return $this->render('contacts', ['contacts' => $contacts]);
    }

    public function actionFinishedBuild()
    {
        $data = Conditions::getConditions('finished');
        $text = Pagetexts::getText('finished');
        return $this->render('finished-build', ['data' => $data, 'text' => $text]);
    }

    public function actionInBuild()
    {
        $data = Conditions::getConditions('inbuild');
        $text = Pagetexts::getText('inbuild');
        return $this->render('in-build', ['data' => $data, 'text' => $text]);
    }

    public function actionNews($title = null)
    {
        if($title == null){
            $news = News::getAllNews();
            Yii::$app->formatter->locale = 'ru';
            foreach ($news as $k => $v) {
                $news[$k]['text'] = StringHelper::truncateWords($news[$k]['text'], 37, '', true);
                $news[$k]['date'] = Yii::$app->formatter->asDate($news[$k]['date']);
                $news[$k]['time'] = Yii::$app->formatter->asTime($news[$k]['time']);
            }
            return $this->render('allnews', ['news' => $news]);
        } else {
            $parts = explode('-', $title);
            $id = (int)array_pop($parts);
            if(is_numeric($id)){
                $news = News::getOneNews($id);
                if($news['link']){
                    $lastnews = News::getLast();
                    foreach ($lastnews as $k => $v) {
                        $lastnews[$k]['date'] = Yii::$app->formatter->asDate($lastnews[$k]['date']);
                        $lastnews[$k]['time'] = Yii::$app->formatter->asTime($lastnews[$k]['time']);
                    }
                    $news['date'] = Yii::$app->formatter->asDate($news['date']);
                    $news['time'] = Yii::$app->formatter->asTime($news['time']);
                    return $this->render('onenews', ['news' => $news, 'lastnews' => $lastnews]);
                } else {
                    throw new \yii\web\HttpException(404);
                    die;
                }
            }else{
                throw new \yii\web\HttpException(404);
                die;
            }
        }

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

    public function actionAbout($id = null, $part = null, $color = null, $idcolor = null)
    {

        echo '<a href="/site/download">DOWNLOAD FILE</a>';

        //DAO
        /*$sql = 'SELECT count(*) FROM user';
        $data = Yii::$app->db->createCommand($sql)->queryScalar();
        var_dump($data);*/
        die;

        //$confPath = Yii::getAlias('@app') . '/translations/' . Yii::$app->language . '/interface.php';
        //$t = require $confPath;

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
