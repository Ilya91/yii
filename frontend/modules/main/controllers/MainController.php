<?php
namespace app\modules\main\controllers;

use common\models\LoginForm;
use frontend\models\ContactForm;
use frontend\models\Image;
use frontend\models\SignupForm;
use yii\web\Response;
use yii\widgets\ActiveForm;

class MainController extends \yii\web\Controller
{
    public $layout = "inner";

    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'test' => [
                'class' => 'frontend\actions\TestAction',
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        $model = new ContactForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('about', ['model' => $model]);
        }
    }

    public function actionAgents()
    {
        return $this->render('agents');
    }

    public function actionRegister(){

        $model = new SignupForm();

        if(\Yii::$app->request->isAjax && \Yii::$app->request->isPost){
            if($model->load(\Yii::$app->request->post())) {
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
        }

        if($model->load(\Yii::$app->request->post()) && $model->signup()){

            \Yii::$app->session->setFlash('success', 'Register Success');

            return $this->render("register_confirm");
        }

        return $this->render("register",['model' => $model]);
    }

    public function actionLogin(){
        $model = new LoginForm;

        if($model->load(\Yii::$app->request->post()) && $model->login()){

            $this->goBack();
        }

        return $this->render("login", ['model' => $model]);
    }

    public function actionLogout(){

        \Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionContact(){

        $model = new ContactForm();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $body = " <div>Body: <b> ".$model->body." </b></div>";
            $body .= " <div>Email: <b> ".$model->email." </b></div>";

            \Yii::$app->common->sendMail($model->subject,$body);

            print "Send success";
            die;
        }

        return $this->render("contact", ['model' => $model]);
    }

}
