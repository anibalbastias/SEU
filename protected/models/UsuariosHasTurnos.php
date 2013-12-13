<?php

/**
 * This is the model class for table "usuarios_has_turnos".
 *
 * The followings are the available columns in table 'usuarios_has_turnos':
 * @property string $id
 * * @property string $usuarios_id_usuario
 * @property string $turnos_id_turno
 * @property string $estado
 */
class UsuariosHasTurnos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UsuariosHasTurnos the static model class
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
		return 'usuarios_has_turnos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('usuarios_id_usuario, turnos_id_turno', 'required'),
			array('usuarios_id_usuario, turnos_id_turno, estado', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('usuarios_id_usuario, turnos_id_turno, estado', 'safe', 'on'=>'search'),
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
                    'turnos'=>array(self::BELONGS_TO,'Turnos','turnos_id_turno'),
                    'usuarios'=>array(self::BELONGS_TO,'Usuarios','usuarios_id_usuario')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usuarios_id_usuario' => 'ID Usuario',
			'turnos_id_turno' => 'ID Turno',
			'estado' => 'Estado',
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

		$criteria->compare('usuarios_id_usuario',$this->usuarios_id_usuario,true);
		$criteria->compare('turnos_id_turno',$this->turnos_id_turno,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}