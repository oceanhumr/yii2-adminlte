<?php
// +----------------------------------------------------------------------
// | LIKE [ THERE IS NO IF ]
// +----------------------------------------------------------------------
// | Author: Mr.hu <huhaiyang7788@163.com>
// +----------------------------------------------------------------------
// | DESC: 菜单管理
// +----------------------------------------------------------------------


namespace backend\models;


use yii\db\ActiveRecord;

class SmenusModel extends  ActiveRecord
{

    public static function tableName()
    {
        return "{{%sys_menus}}";
    }


}