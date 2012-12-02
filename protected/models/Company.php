<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $birth_date
 * @property string $phone
 * @property double $square
 * @property integer $worker_count
 * @property string $avg_turnout
 * @property integer $excl_period
 * @property integer $excl_period_unit
 * @property integer $excl_duration
 * @property integer $excl_duration_unit
 * @property double $excl_amount
 * @property integer $excl_amount_unit
 * @property integer $period
 * @property integer $period_unit
 * @property integer $duration
 * @property integer $duration_unit
 * @property double $amount
 * @property integer $amount_unit
 * @property integer $service_id
 * @property double $discard
 * @property integer $marketing_id
 * @property integer $org_form_id
 * @property integer $franchise_id
 * @property string $privacy_edit_contracts
 * @property string $privacy_docs
 * @property string $privacy_new_contracts
 * @property string $privacy_contracts
 * @property string $create_time
 * @property string $update_time
 */
class Company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Company the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('birth_date, worker_count, excl_period, excl_period_unit, excl_duration, excl_duration_unit, excl_amount_unit, period, period_unit, duration, duration_unit, amount_unit, service_id, marketing_id, org_form_id, franchise_id', 'numerical', 'integerOnly'=>true),
			array('square, excl_amount, amount, discard', 'numerical'),
			array('name, email, phone, avg_turnout, privacy_edit_contracts, privacy_docs, privacy_new_contracts, privacy_contracts', 'length', 'max'=>255),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, email, birth_date, phone, square, worker_count, avg_turnout, excl_period, excl_period_unit, excl_duration, excl_duration_unit, excl_amount, excl_amount_unit, period, period_unit, duration, duration_unit, amount, amount_unit, service_id, discard, marketing_id, org_form_id, franchise_id, privacy_edit_contracts, privacy_docs, privacy_new_contracts, privacy_contracts, create_time, update_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'email' => 'Email',
			'birth_date' => 'Birth Date',
			'phone' => 'Phone',
			'square' => 'Square',
			'worker_count' => 'Worker Count',
			'avg_turnout' => 'Avg Turnout',
			'excl_period' => 'Excl Period',
			'excl_period_unit' => 'Excl Period Unit',
			'excl_duration' => 'Excl Duration',
			'excl_duration_unit' => 'Excl Duration Unit',
			'excl_amount' => 'Excl Amount',
			'excl_amount_unit' => 'Excl Amount Unit',
			'period' => 'Period',
			'period_unit' => 'Period Unit',
			'duration' => 'Duration',
			'duration_unit' => 'Duration Unit',
			'amount' => 'Amount',
			'amount_unit' => 'Amount Unit',
			'service_id' => 'Service',
			'discard' => 'Discard',
			'marketing_id' => 'Marketing',
			'org_form_id' => 'Org Form',
			'franchise_id' => 'Franchise',
			'privacy_edit_contracts' => 'Privacy Edit Contracts',
			'privacy_docs' => 'Privacy Docs',
			'privacy_new_contracts' => 'Privacy New Contracts',
			'privacy_contracts' => 'Privacy Contracts',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('birth_date',$this->birth_date);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('square',$this->square);
		$criteria->compare('worker_count',$this->worker_count);
		$criteria->compare('avg_turnout',$this->avg_turnout,true);
		$criteria->compare('excl_period',$this->excl_period);
		$criteria->compare('excl_period_unit',$this->excl_period_unit);
		$criteria->compare('excl_duration',$this->excl_duration);
		$criteria->compare('excl_duration_unit',$this->excl_duration_unit);
		$criteria->compare('excl_amount',$this->excl_amount);
		$criteria->compare('excl_amount_unit',$this->excl_amount_unit);
		$criteria->compare('period',$this->period);
		$criteria->compare('period_unit',$this->period_unit);
		$criteria->compare('duration',$this->duration);
		$criteria->compare('duration_unit',$this->duration_unit);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('amount_unit',$this->amount_unit);
		$criteria->compare('service_id',$this->service_id);
		$criteria->compare('discard',$this->discard);
		$criteria->compare('marketing_id',$this->marketing_id);
		$criteria->compare('org_form_id',$this->org_form_id);
		$criteria->compare('franchise_id',$this->franchise_id);
		$criteria->compare('privacy_edit_contracts',$this->privacy_edit_contracts,true);
		$criteria->compare('privacy_docs',$this->privacy_docs,true);
		$criteria->compare('privacy_new_contracts',$this->privacy_new_contracts,true);
		$criteria->compare('privacy_contracts',$this->privacy_contracts,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}