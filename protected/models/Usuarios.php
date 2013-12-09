<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $id_usuario
 * @property string $carreras_id_carrera
 * @property string $comunas_id_comuna
 * @property string $nom_usuario
 * @property string $apel1_usuario
 * @property string $apel2_usuario
 * @property string $rut_usuario
 * @property string $dir_usuario
 * @property string $email_usuario
 * @property string $cel_usuario
 * @property integer $estudios_usuario
 * @property string $fnac_usuario
 * @property integer $genero_usuario
 * @property string $hijos_usuario
 * @property string $pass_usuario
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
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
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('carreras_id_carrera, comunas_id_comuna', 'required'),
			array('estudios_usuario, genero_usuario', 'numerical', 'integerOnly'=>true),
			array('carreras_id_carrera, comunas_id_comuna, hijos_usuario', 'length', 'max'=>10),
			array('nom_usuario, apel1_usuario, apel2_usuario, rut_usuario, dir_usuario, email_usuario, cel_usuario, pass_usuario', 'length', 'max'=>100),
			array('fnac_usuario', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_usuario, carreras_id_carrera, comunas_id_comuna, nom_usuario, apel1_usuario, apel2_usuario, rut_usuario, dir_usuario, email_usuario, cel_usuario, estudios_usuario, fnac_usuario, genero_usuario, hijos_usuario, pass_usuario', 'safe', 'on'=>'search'),
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
			'id_usuario' => 'Id Usuario',
			'carreras_id_carrera' => 'Carreras Id Carrera',
			'comunas_id_comuna' => 'Comunas Id Comuna',
			'nom_usuario' => 'Nom Usuario',
			'apel1_usuario' => 'Apel1 Usuario',
			'apel2_usuario' => 'Apel2 Usuario',
			'rut_usuario' => 'Rut Usuario',
			'dir_usuario' => 'Dir Usuario',
			'email_usuario' => 'Email Usuario',
			'cel_usuario' => 'Cel Usuario',
			'estudios_usuario' => 'Estudios Usuario',
			'fnac_usuario' => 'Fnac Usuario',
			'genero_usuario' => 'Genero Usuario',
			'hijos_usuario' => 'Hijos Usuario',
			'pass_usuario' => 'Pass Usuario',
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

		$criteria->compare('id_usuario',$this->id_usuario,true);
		$criteria->compare('carreras_id_carrera',$this->carreras_id_carrera,true);
		$criteria->compare('comunas_id_comuna',$this->comunas_id_comuna,true);
		$criteria->compare('nom_usuario',$this->nom_usuario,true);
		$criteria->compare('apel1_usuario',$this->apel1_usuario,true);
		$criteria->compare('apel2_usuario',$this->apel2_usuario,true);
		$criteria->compare('rut_usuario',$this->rut_usuario,true);
		$criteria->compare('dir_usuario',$this->dir_usuario,true);
		$criteria->compare('email_usuario',$this->email_usuario,true);
		$criteria->compare('cel_usuario',$this->cel_usuario,true);
		$criteria->compare('estudios_usuario',$this->estudios_usuario);
		$criteria->compare('fnac_usuario',$this->fnac_usuario,true);
		$criteria->compare('genero_usuario',$this->genero_usuario);
		$criteria->compare('hijos_usuario',$this->hijos_usuario,true);
		$criteria->compare('pass_usuario',$this->pass_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}