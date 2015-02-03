<?php
class Test extends CFormModel
{
    public function findAll(){
        $provinces = Yii::app()->db->createCommand() 
                    ->select('region_id,region_name') 
                    ->from('base_region')
                    ->where('region_type=:region_type', array(':region_type'=>1)) 
                    ->queryAll();
        return $provinces;
    }
}
