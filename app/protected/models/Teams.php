<?php

/**
 * This is the model class for table "teams".
 *
 * The followings are the available columns in table 'teams':
 * @property integer $id
 * @property string $name
 * @property string $university
 * @property string $created
 * @property string $name1
 * @property string $tel1
 * @property string $email1
 * @property integer $level1
 * @property string $name2
 * @property string $tel2
 * @property string $email2
 * @property integer $level2
 * @property string $name3
 * @property string $tel3
 * @property string $email3
 * @property integer $level3
 */
class Teams extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'teams';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, university, name1, tel1, email1, level1, name2, tel2, email2, level2, name3, tel3, email3, level3', 'required'),
			array('level1, level2, level3', 'numerical', 'integerOnly'=>true),
			array('name, name1, name2, name3', 'length', 'max'=>255),
			array('tel1, tel2, tel3', 'length', 'max'=>10),
			array('email1, email2, email3', 'length', 'max'=>50),
			array('created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, university, created, name1, tel1, email1, level1, name2, tel2, email2, level2, name3, tel3, email3, level3', 'safe', 'on'=>'search'),
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
			'name' => 'ชื่อทีม',
			'university' => 'มหาวิทยาลัย',
			'created' => 'Created',
			'name1' => 'ชื่อ - นามสกุล',
			'tel1' => 'เบอร์โทร',
			'email1' => 'อีเมลล์',
			'level1' => 'ชั้นปี',
			'name2' => 'ชื่อ - นามสกุล',
			'tel2' => 'เบอร์โทร',
			'email2' => 'อีเมลล์',
			'level2' => 'ชั้นปี',
			'name3' => 'ชื่อ - นามสกุล',
			'tel3' => 'เบอร์โทร',
			'email3' => 'อีเมลล์',
			'level3' => 'ชั้นปี',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('university',$this->university,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('name1',$this->name1,true);
		$criteria->compare('tel1',$this->tel1,true);
		$criteria->compare('email1',$this->email1,true);
		$criteria->compare('level1',$this->level1);
		$criteria->compare('name2',$this->name2,true);
		$criteria->compare('tel2',$this->tel2,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('level2',$this->level2);
		$criteria->compare('name3',$this->name3,true);
		$criteria->compare('tel3',$this->tel3,true);
		$criteria->compare('email3',$this->email3,true);
		$criteria->compare('level3',$this->level3);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Teams the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
