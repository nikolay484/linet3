<?php

/**
 * This is the model class for table "curRates".
 *
 * The followings are the available columns in table 'curRates':
 * @property string $id
 * @property string $currency_id
 * @property string $date
 * @property string $nisvalue
 */
class Currates extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Currates the static model class
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
		return 'curRates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('currency_id', 'required'),
			array('id', 'length', 'max'=>10),
			array('currency_id', 'length', 'max'=>3),
			array('nisvalue', 'length', 'max'=>7),
			array('date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, currency_id, date, nisvalue', 'safe', 'on'=>'search'),
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
			'currency_id' => 'Currency',
			'date' => 'Date',
			'nisvalue' => 'Nisvalue',
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
		$criteria->compare('currency_id',$this->currency_id,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('nisvalue',$this->nisvalue,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}