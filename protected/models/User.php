<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $profile
 * @property string $grade
 * @property string $role
 */
class User extends CActiveRecord
{
	// Properties to allow user to change password
	public $new_password;
	public $new_password_repeat;
	
	// Codeword to ensure only members sign up
	public $codeword;
	
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			// Username must be unique
            array('username', 'unique'),
            array('email, grade, codeword', 'safe'),
            
			// New password constraints 
			array('new_password', 'length', 'max'=>50),
		    array('new_password', 'compare', 'on'=>'insert, changePassword'),
		    array('new_password_repeat, is_specialist, nurse_sessions', 'safe'),
		    array('new_password, new_password_repeat', 'required', 'on'=>'insert'),
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
			'username' => 'Username',
			'password' => 'Password',
			'title' => 'Title',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'profile' => 'Profile',
			'grade' => 'Grade',
			'role' => 'Role',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('profile',$this->profile,true);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('role',$this->role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
		
	/**
	 * Encrypts a password using md5
	 * @param String The value to be encrypted
	 * @returns String The encrypted value
	 */
	public function encrypt($value)
    {
        return md5($value);
    }
}