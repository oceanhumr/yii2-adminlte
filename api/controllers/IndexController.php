<?php
// +----------------------------------------------------------------------
// | LIKE [ THERE IS NO IF ]
// +----------------------------------------------------------------------
// | Author: Mr.hu <huhaiyang7788@163.com>
// +----------------------------------------------------------------------
// | DESC: 入口默认值，展示网站最新的整体的情况
// +----------------------------------------------------------------------


namespace api\controllers;


use yii\db\ActiveRecord;

class IndexController extends CommonController
{
    public function actionIndex()
    {
        $auth_key='zhishimama';
//        $password=\Yii::$app->getSecurity()->generatePasswordHash('haiyang');
//        if(\Yii::$app->getSecurity()->validatePassword('haiyang',$password)){
//            return ['success'=>1];
//        }else{
//            return ['error'=>0];
//        }
//        return   ['user_number'=>\Yii::$app->getSecurity()->generatePasswordHash()];
        $return=\Yii::$app->getSecurity()->hashData('haiyang',$auth_key);
        $check=\Yii::$app->getSecurity()->validateData($return,$auth_key);
        $random_str=\Yii::$app->getSecurity()->generateRandomString();
        return ['encury'=>$return,'decury'=>$check,'random'=>$random_str];
        $user=new ActiveRecord();
        $user->getPrimaryKey();
    }
}