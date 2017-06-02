<?php
// +----------------------------------------------------------------------
// | LIKE [ THERE IS NO IF ]
// +----------------------------------------------------------------------
// | Author: Mr.hu <huhaiyang7788@163.com>
// +----------------------------------------------------------------------
// | DESC: 
// +----------------------------------------------------------------------


namespace api\controllers;


use yii\web\Controller;
use yii\web\Response;

class CommonController  extends Controller
{

    /**
     * 条件过滤
     * @param \yii\base\Action $action
     * @ Mr.hu.
     */
    public function beforeAction($action)
    {
//        \Yii::$app->response->format=Response::FORMAT_JSON;
        return true;
    }


}