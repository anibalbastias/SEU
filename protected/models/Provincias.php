<?php

/**
 * This is the model class for table "provincias".
 *
 * The followings are the available columns in table 'provincias':
 * @property string $id_provincia
 * @property string $regiones_id_region
 * @property string $nom_provincia
 */
class Provincias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Provincias the static model class
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
		return 'provincias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('regiones_id_region', 'required'),
			array('regiones_id_region', 'length', 'max'=>10),
			array('nom_provincia', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_provincia, regiones_id_region, nom_provincia', 'safe', 'on'=>'search'),
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
			'id_provincia' => 'Id Provincia',
			'regiones_id_region' => 'Regiones Id Region',
			'nom_provincia' => 'Nom Provincia',
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

		$criteria->compare('id_provincia',$this->id_provincia,true);
		$criteria->compare('regiones_id_region',$this->regiones_id_region,true);
		$criteria->compare('nom_provincia',$this->nom_provincia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}