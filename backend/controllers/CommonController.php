<?php
// +----------------------------------------------------------------------
// | LIKE [ THERE IS NO IF ]
// +----------------------------------------------------------------------
// | Author: Mr.hu <huhaiyang7788@163.com>
// +----------------------------------------------------------------------
// | DESC: 
// +----------------------------------------------------------------------


namespace backend\controllers;


use backend\models\SmenusModel;
use yii\web\Controller;

class CommonController extends Controller
{


    public $new_arr;

    public function init()
    {
        parent::init();
        $hash_key=md5(date('YmdH'));
        $result=\Yii::$app->cache->get($hash_key);
        if($result){
            $this->new_arr=$result;
        }else{
            $menus=new SmenusModel();
            $list=$menus->find()->select('id,pid,label,url,icon')->asArray()->all();
            $new_arr=self::tree($list,0);
            \Yii::$app->cache->set($hash_key,$new_arr,10);
            $this->new_arr=$new_arr;
        }
    }




    /**
     * 生成tree
     * @param $data
     * @param int $pid
     * @ Mr.hu.
     */
    protected static function tree($data,$pid=0)
    {
        $arr=array();
        foreach ($data as $v){
            if($v['pid']==$pid){
                $v['items']=static::tree($data,$v['id']);
                $arr[]=$v;
            }
        }
        return $arr;
    }


    /**
     * 独立action ,通用error
     * @ Mr.hu.
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

}