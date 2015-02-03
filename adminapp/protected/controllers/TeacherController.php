<?php

class TeacherController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
        
    }

    public function actionInformation(){
        $provinces = Yii::app()->db->createCommand() 
                    ->select('region_id,region_name') 
                    ->from('base_region')
                    ->where('region_type=:region_type', array(':region_type'=>1)) 
                    ->queryAll();
        $province = "<select id='select_pro' class='select_information' onchange='select_city()'><option value='0'>--请选择--</option>";
        foreach ($provinces as $key => $value) {
                $province.="<option value=".$value['region_id'].">".$value['region_name']."</option>";
        }
        $province.="</select>";
        $this->render('infomation',array('list'  => $province));
    }

    public function actionCity(){
        $citys = Yii::app()->db->createCommand() 
                    ->select('region_id,region_name') 
                    ->from('base_region')
                    ->where('parent_id=:parent_id', array(':parent_id'=>$_POST['region_id'])) 
                    ->queryAll();
        $city = "<select id='select_city' class='select_information' onchange='select_area()'><option value='0'>--请选择--</option>";
        foreach ($citys as $key => $value) {
                $city.="<option value=".$value['region_id'].">".$value['region_name']."</option>";
        }
        $city.="</select>";
        echo $city;
    }

    public function actionArea(){
        $areas = Yii::app()->db->createCommand() 
                    ->select('region_id,region_name') 
                    ->from('base_region')
                    ->where('parent_id=:parent_id', array(':parent_id'=>$_POST['region_city'])) 
                    ->queryAll();
        $area = "<select id='select_area' class='select_information'><option value='0'>--请选择--</option>";
        foreach ($areas as $key => $value) {
                $area.="<option value=".$value['region_id'].">".$value['region_name']."</option>";
        }
        $area.="</select>";
        echo $area;
    }

    public function actionImg(){
            echo ftp_put($conn,"uploads/imguser.jpg","imguser.jpg",FTP_ASCII);
    }
}