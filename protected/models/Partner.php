<?php

/**
 * This is the model class for table "partner".
 *
 * The followings are the available columns in table 'partner':
 * @property integer $id1
 * @property integer $id2
 * @property integer $status1
 * @property integer $status2
 */
class Partner extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Partner the static model class
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
		return 'partner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id1, id2', 'required'),
			array('id1, id2, status1, status2', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id1, id2, status1, status2', 'safe', 'on'=>'search'),
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
			'id1' => 'Id1',
			'id2' => 'Id2',
			'status1' => 'Status1',
			'status2' => 'Status2',
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

		$criteria->compare('id1',$this->id1);
		$criteria->compare('id2',$this->id2);
		$criteria->compare('status1',$this->status1);
		$criteria->compare('status2',$this->status2);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}