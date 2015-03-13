<?php

namespace backend\modules\customers\models;

use Yii;

/**
 * This is the model class for table "tbl_customer_category".
 *
 * @property integer $id
 * @property string $category_name
 * @property string $category_code
 * @property string $maker_id
 * @property string $maker_stamptime
 * @property string $checker_id
 * @property string $cheker_stamptime
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name', 'category_code', 'maker_id', 'maker_stamptime', 'checker_id', 'cheker_stamptime'], 'required'],
            [['category_name', 'category_code', 'maker_id', 'maker_stamptime', 'checker_id', 'cheker_stamptime'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
            'category_code' => 'Category Code',
            'maker_id' => 'Maker ID',
            'maker_stamptime' => 'Maker Stamptime',
            'checker_id' => 'Checker ID',
            'cheker_stamptime' => 'Cheker Stamptime',
        ];
    }
}
