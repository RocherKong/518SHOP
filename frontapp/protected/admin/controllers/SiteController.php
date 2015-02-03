<?php

class SiteController extends Controller
{
    public function actionTestDb(){
        $model = new TestForm;
        $res = $model->findAll();
        print_r($res);
    }
}