<?php

/**
 * This is the model class for table "turnos".
 *
 * The followings are the available columns in table 'turnos':
 * @property string $id_turno
 * @property string $fecha_turno
 * @property string $cupos_turno
 */
class Turnos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Turnos the static model class
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
		return 'turnos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cupos_turno', 'length', 'max'=>10),
			array('fecha_turno', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_turno, fecha_turno, cupos_turno', 'safe', 'on'=>'search'),
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
                    'usuarios_has_turnos'=>array(self::HAS_MANY,'UsuariosHasTurnos','usuario_id_usuario')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_turno' => 'ID Turno',
			'fecha_turno' => 'Fecha',
			'cupos_turno' => 'Cantidad de cupos',
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

		$criteria->compare('id_turno',$this->id_turno,true);
		$criteria->compare('fecha_turno',$this->fecha_turno,true);
		$criteria->compare('cupos_turno',$this->cupos_turno,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}