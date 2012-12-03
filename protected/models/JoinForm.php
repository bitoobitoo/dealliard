<?php

/**
 * JoinForm class.
 */
class JoinForm extends CFormModel
{
	public $email;
	public $lastname;
	public $name;
	public $patronymic;
	public $password;
	public $confirm_password;
	public $language;
	public $is_manufacturer;
	
	private $user;
	
	public function rules()
	{
		return array(
			array('email, lastname, name, password, confirm_password', 'required'),
			array('password','length','max'=>32,'min'=>6),
			array('confirm_password','length','max'=>32,'min'=>6),
			array('password','compare','compareAttribute'=>'confirm_password'),
			array('password','length','max'=>64),
			array('email','email'),
			array('email','unique')
		);
	}
	
}