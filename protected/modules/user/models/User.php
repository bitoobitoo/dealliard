<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property integer $user_group
 * @property string $email
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $midname
 * @property integer $birth_date
 * @property integer $lang
 * @property integer $sex
 * @property string $avatar
 * @property integer $occupation_id
 * @property integer $education_id
 * @property integer $position_id
 * @property integer $country_id
 * @property integer $m_region_id
 * @property integer $region_id
 * @property integer $city_id
 * @property string $address
 * @property string $privacy_dialog
 * @property string $privacy_contact
 * @property string $privacy_profile
 * @property string $privacy_news
 * @property string $last_action
 * @property string $create_time
 * @property string $update_time
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_group, email, password, firstname, lang', 'required'),
			array('user_group, birth_date, lang, sex, occupation_id, education_id, position_id, country_id, m_region_id, region_id, city_id', 'numerical', 'integerOnly'=>true),
			array('email, firstname, lastname, midname', 'length', 'max'=>45),
			array('password', 'length', 'max'=>100),
			array('avatar, address, privacy_dialog, privacy_contact, privacy_profile, privacy_news', 'length', 'max'=>255),
			array('last_action, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_group, email, password, firstname, lastname, midname, birth_date, lang, sex, avatar, occupation_id, education_id, position_id, country_id, m_region_id, region_id, city_id, address, privacy_dialog, privacy_contact, privacy_profile, privacy_news, last_action, create_time, update_time', 'safe', 'on'=>'search'),
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
			'user_group' => 'User Group',
			'email' => 'Email',
			'password' => 'Password',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'midname' => 'Midname',
			'birth_date' => 'Birth Date',
			'lang' => 'Lang',
			'sex' => 'Sex',
			'avatar' => 'Avatar',
			'occupation_id' => 'Occupation',
			'education_id' => 'Education',
			'position_id' => 'Position',
			'country_id' => 'Country',
			'm_region_id' => 'M Region',
			'region_id' => 'Region',
			'city_id' => 'City',
			'address' => 'Address',
			'privacy_dialog' => 'Privacy Dialog',
			'privacy_contact' => 'Privacy Contact',
			'privacy_profile' => 'Privacy Profile',
			'privacy_news' => 'Privacy News',
			'last_action' => 'Last Action',
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
		$criteria->compare('user_group',$this->user_group);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('midname',$this->midname,true);
		$criteria->compare('birth_date',$this->birth_date);
		$criteria->compare('lang',$this->lang);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('occupation_id',$this->occupation_id);
		$criteria->compare('education_id',$this->education_id);
		$criteria->compare('position_id',$this->position_id);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('m_region_id',$this->m_region_id);
		$criteria->compare('region_id',$this->region_id);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('privacy_dialog',$this->privacy_dialog,true);
		$criteria->compare('privacy_contact',$this->privacy_contact,true);
		$criteria->compare('privacy_profile',$this->privacy_profile,true);
		$criteria->compare('privacy_news',$this->privacy_news,true);
		$criteria->compare('last_action',$this->last_action,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}