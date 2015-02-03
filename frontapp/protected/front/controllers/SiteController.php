<?php
class SiteController extends Controller
{
     //加载首页
    public $layout = '/layouts/main';
    public function actionIndex(){
       $this->render("index");
    }
    //测试urlmanager
    public function actionTest(){
        echo '111111';
    }
    //测试数据库的连接
    public function actionTestDb(){
        $id = Yii::app()->request->getParam('id');
        print_r($id);
    }
    //加载登录页
    public function actionLogin(){
        $this->layout = 'login';
        $model = new EntryForm;
        //if ($model->load(Yii::app()->request->post()) && $model->validate()) {
            //return $this->render('entry-confirm', array('model' => $model));
        //} else {
            return $this->render('login', array('model' => $model));
        //}
    }
    //加载找回密码页
    public function actionFindPwd(){
        $this->layout = 'login';
        $this->render("forgetpass");
    }
}