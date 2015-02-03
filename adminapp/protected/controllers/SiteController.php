<?php

class SiteController extends Controller
{
    public function actionUpload()
    {
        date_default_timezone_set("PRC");   //使用北京时间
        //只接受post请求
        if(strtolower($_SERVER['REQUEST_METHOD']) != 'post'){
                exit;
        }
        $folder = 'images/uploads/';
        $filename = date('YmdHis').rand().'.jpg';
        $original = $folder.$filename;
        $input = file_get_contents('php://input');
        if(md5($input) == '7d4df9cc423720b7f1f3d672b89362be'){
                exit;
        }
        $result = file_put_contents($original, $input);
        if (!$result) {
                echo '{"error":1,"message":"文件目录不可写";}';
                exit;
        }
        $info = getimagesize($original);
        if($info['mime'] != 'image/jpeg'){
                unlink($original);
                exit;
        }
        $origImage	= imagecreatefromjpeg($original);
        $newImage	= imagecreatetruecolor(154,110);
        imagecopyresampled($newImage,$origImage,0,0,0,0,154,110,520,370); 
        //imagejpeg($newImage,'uploads/thumbs/'.$filename);
        imagejpeg($newImage,'images/uploads/small_'.$filename);
    }
    public function actionIndex(){
        //echo 'string';
        $model=new Test;
        $arr = $model->findAll();
        print_r($arr);
    }
}