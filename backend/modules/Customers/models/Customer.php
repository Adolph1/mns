<?php

namespace backend\modules\customers\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_customer}}".
 *
 * @property integer $customer_no
 * @property string $customer_type
 * @property string $customer_name
 * @property string $customer_address
 * @property string $customer_identification
 * @property string $identification_number
 * @property string $identification_exp_date
 * @property string $nationality
 * @property string $short_name
 * @property integer $liability_number
 * @property string $customer_category
 * @property string $record_stat
 * @property string $auth_stat
 * @property string $maker_id
 * @property string $maker_dt_stamp
 * @property string $checker_id
 * @property string $checker_dt_stamp
 * @property string $currency
 * @property integer $branch_code
 * @property integer $mode_no
 *
 * @property TblBusinessSignatory[] $tblBusinessSignatories
 * @property TblCustomerBusiness[] $tblCustomerBusinesses
 * @property TblCustomerPersonal[] $tblCustomerPersonals
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_customer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_no', 'customer_type', 'customer_name', 'customer_address', 'customer_identification', 'identification_number', 'identification_exp_date', 'nationality', 'short_name', 'liability_number', 'customer_category', 'record_stat', 'auth_stat', 'maker_id', 'maker_dt_stamp', 'checker_id', 'checker_dt_stamp', 'currency', 'branch_code', 'mode_no'], 'required'],
            [['customer_no', 'liability_number', 'branch_code', 'mode_no'], 'integer'],
            [['customer_type'], 'string', 'max' => 20],
            [['customer_name', 'customer_address', 'customer_identification', 'identification_number', 'identification_exp_date', 'nationality', 'short_name', 'customer_category', 'record_stat', 'auth_stat', 'maker_id', 'maker_dt_stamp', 'checker_id', 'checker_dt_stamp', 'currency'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_no' => 'Customer No',
            'customer_type' => 'Customer Type',
            'customer_name' => 'Customer Name',
            'customer_address' => 'Customer Address',
            'customer_identification' => 'Customer Identification',
            'identification_number' => 'Identification Number',
            'identification_exp_date' => 'Identification Exp Date',
            'nationality' => 'Nationality',
            'short_name' => 'Short Name',
            'liability_number' => 'Liability Number',
            'customer_category' => 'Customer Category',
            'record_stat' => 'Record Stat',
            'auth_stat' => 'Auth Stat',
            'maker_id' => 'Maker ID',
            'maker_dt_stamp' => 'Maker Dt Stamp',
            'checker_id' => 'Checker ID',
            'checker_dt_stamp' => 'Checker Dt Stamp',
            'currency' => 'Currency',
            'branch_code' => 'Branch Code',
            'mode_no' => 'Mode No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBusinessSignatories()
    {
        return $this->hasMany(TblBusinessSignatory::className(), ['business_no' => 'customer_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblCustomerBusinesses()
    {
        return $this->hasMany(TblCustomerBusiness::className(), ['cust_no' => 'customer_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblCustomerPersonals()
    {
        return $this->hasMany(TblCustomerPersonal::className(), ['cust_no' => 'customer_no']);
    }
}
