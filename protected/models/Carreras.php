<?php

/**
 * This is the model class for table "carreras".
 *
 * The followings are the available columns in table 'carreras':
 * @property string $id_carrera
 * @property string $universidades_id_univ
 * @property string $nom_carrera
 * @property string $tipo
 */
class Carreras extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Carreras the static model class
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
		return 'carreras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('universidades_id_univ, tipo', 'required'),
			array('universidades_id_univ', 'length', 'max'=>10),
			array('nom_carrera', 'length', 'max'=>100),
			array('tipo', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_carrera, universidades_id_univ, nom_carrera, tipo', 'safe', 'on'=>'search'),
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
                    'universidades'=>array(self::BELONGS_TO,'Universidades','universidades_id_univ')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_carrera' => 'ID Carrera',
			'universidades_id_univ' => 'ID Universidad',
			'nom_carrera' => 'Carrera',
			'tipo' => 'Tipo',
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

		$criteria->compare('id_carrera',$this->id_carrera,true);
		$criteria->compare('universidades_id_univ',$this->universidades_id_univ,true);
		$criteria->compare('nom_carrera',$this->nom_carrera,true);
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}