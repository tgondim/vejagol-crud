<?php

/**
 * This is the model class for table "melhor_da_semana".
 *
 * The followings are the available columns in table 'melhor_da_semana':
 * @property string $ID
 * @property string $SEMANA
 * @property string $MES
 * @property string $ANO
 * @property string $LINK
 */
class MelhorDaSemana extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MelhorDaSemana the static model class
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
		return 'melhor_da_semana';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SEMANA, MES, ANO, LINK', 'required'),
			array('SEMANA, MES, ANO', 'length', 'max'=>10),
			array('LINK', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SEMANA, MES, ANO, LINK', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'SEMANA' => 'Semana',
			'MES' => 'Mes',
			'ANO' => 'Ano',
			'LINK' => 'Link',
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

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('SEMANA',$this->SEMANA,true);
		$criteria->compare('MES',$this->MES,true);
		$criteria->compare('ANO',$this->ANO,true);
		$criteria->compare('LINK',$this->LINK,true);
		$criteria->order = 'ANO, MES, SEMANA DESC'; //added by Tiago Gondim

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}