<?php

/**
 * This is the model class for table "faltas".
 *
 * The followings are the available columns in table 'faltas':
 * @property string $id_falta
 * @property string $usuarios_id_usuario
 * @property string $desc_falta
 * @property string $tipo_falta
 * @property string $fecha_falta
 */
class Faltas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Faltas the static model class
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
		return 'faltas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuarios_id_usuario', 'required'),
			array('usuarios_id_usuario', 'length', 'max'=>10),
			array('tipo_falta', 'length', 'max'=>7),
			array('desc_falta, fecha_falta', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_falta, usuarios_id_usuario, desc_falta, tipo_falta, fecha_falta', 'safe', 'on'=>'search'),
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
                    'usuarios'=>array(self::BELONGS_TO,'Usuarios','usuarios_id_usuario')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_falta' => 'ID Falta',
			'usuarios_id_usuario' => 'ID Usuario',
			'desc_falta' => 'Descripcion',
			'tipo_falta' => 'Tipo',
			'fecha_falta' => 'Fecha de realizacion',
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

		$criteria->compare('id_falta',$this->id_falta,true);
		$criteria->compare('usuarios_id_usuario',$this->usuarios_id_usuario,true);
		$criteria->compare('desc_falta',$this->desc_falta,true);
		$criteria->compare('tipo_falta',$this->tipo_falta,true);
		$criteria->compare('fecha_falta',$this->fecha_falta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}