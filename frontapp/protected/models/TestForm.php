<?php
Class TestForm extends CFormModel
{
    public function findAll(){
    $provinces = Yii::app()->db_test->createCommand() 
                ->select('*') 
                ->from('t_employee')
                ->queryAll();
    return $provinces;
    }
}
