<?php

/**
 * This is the model class for table "jogo".
 *
 * The followings are the available columns in table 'jogo':
 * @property string $ID
 * @property string $DATA
 * @property string $TIME_CASA
 * @property string $TIME_VISITANTE
 * @property string $PLACAR_CASA
 * @property string $PLACAR_VISITANTE
 * @property string $CAMPEONATO
 * @property string $LIGA
 * @property string $LINK
 */
class Jogo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jogo the static model class
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
		return 'jogo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DATA, TIME_CASA, TIME_VISITANTE, PLACAR_CASA, PLACAR_VISITANTE, LIGA, LINK', 'required'),
			array('TIME_CASA, TIME_VISITANTE', 'length', 'max'=>100),
			array('PLACAR_CASA, PLACAR_VISITANTE', 'length', 'max'=>10),
			array('CAMPEONATO, LIGA', 'length', 'max'=>80),
			array('LINK', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, DATA, TIME_CASA, TIME_VISITANTE, PLACAR_CASA, PLACAR_VISITANTE, CAMPEONATO, LIGA, LINK', 'safe', 'on'=>'search'),
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
			'DATA' => 'Data',
			'TIME_CASA' => 'Time Casa',
			'TIME_VISITANTE' => 'Time Visitante',
			'PLACAR_CASA' => 'Placar Casa',
			'PLACAR_VISITANTE' => 'Placar Visitante',
			'CAMPEONATO' => 'Campeonato',
			'LIGA' => 'Liga',
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
		$criteria->compare('DATA',$this->DATA,true);
		$criteria->compare('TIME_CASA',$this->TIME_CASA,true);
		$criteria->compare('TIME_VISITANTE',$this->TIME_VISITANTE,true);
		$criteria->compare('PLACAR_CASA',$this->PLACAR_CASA,true);
		$criteria->compare('PLACAR_VISITANTE',$this->PLACAR_VISITANTE,true);
		$criteria->compare('CAMPEONATO',$this->CAMPEONATO,true);
		$criteria->compare('LIGA',$this->LIGA,true);
		$criteria->compare('LINK',$this->LINK,true);
		$criteria->order = 'DATA DESC'; //added by Tiago Gondim

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}