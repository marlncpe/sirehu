<?php

namespace Sirehu\Core\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class CoreUsers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $usuario;

    /**
     *
     * @var string
     */
    protected $clave;

    /**
     *
     * @var string
     */
    protected $nombres;

    /**
     *
     * @var string
     */
    protected $apellidos;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $foto;

    /**
     *
     * @var integer
     */
    protected $id_cargo;

    /**
     *
     * @var integer
     */
    protected $id_permiso;

    /**
     *
     * @var integer
     */
    protected $id_status;

    /**
     *
     * @var string
     */
    protected $fecha_creacion;

    /**
     *
     * @var string
     */
    protected $fecha_modificacion;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field usuario
     *
     * @param string $usuario
     * @return $this
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Method to set the value of field clave
     *
     * @param string $clave
     * @return $this
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Method to set the value of field nombres
     *
     * @param string $nombres
     * @return $this
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Method to set the value of field apellidos
     *
     * @param string $apellidos
     * @return $this
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field foto
     *
     * @param string $foto
     * @return $this
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Method to set the value of field id_cargo
     *
     * @param integer $id_cargo
     * @return $this
     */
    public function setIdCargo($id_cargo)
    {
        $this->id_cargo = $id_cargo;

        return $this;
    }

    /**
     * Method to set the value of field id_permiso
     *
     * @param integer $id_permiso
     * @return $this
     */
    public function setIdPermiso($id_permiso)
    {
        $this->id_permiso = $id_permiso;

        return $this;
    }

    /**
     * Method to set the value of field id_status
     *
     * @param integer $id_status
     * @return $this
     */
    public function setIdStatus($id_status)
    {
        $this->id_status = $id_status;

        return $this;
    }

    /**
     * Method to set the value of field fecha_creacion
     *
     * @param string $fecha_creacion
     * @return $this
     */
    public function setFechaCreacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    /**
     * Method to set the value of field fecha_modificacion
     *
     * @param string $fecha_modificacion
     * @return $this
     */
    public function setFechaModificacion($fecha_modificacion)
    {
        $this->fecha_modificacion = $fecha_modificacion;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Returns the value of field clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Returns the value of field nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Returns the value of field apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Returns the value of field id_cargo
     *
     * @return integer
     */
    public function getIdCargo()
    {
        return $this->id_cargo;
    }

    /**
     * Returns the value of field id_permiso
     *
     * @return integer
     */
    public function getIdPermiso()
    {
        return $this->id_permiso;
    }

    /**
     * Returns the value of field id_status
     *
     * @return integer
     */
    public function getIdStatus()
    {
        return $this->id_status;
    }

    /**
     * Returns the value of field fecha_creacion
     *
     * @return string
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Returns the value of field fecha_modificacion
     *
     * @return string
     */
    public function getFechaModificacion()
    {
        return $this->fecha_modificacion;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Sirehu\Core\Models\BlogComments', 'id_user_respuesta', array('alias' => 'BlogComments'));
        $this->hasMany('id', 'Sirehu\Core\Models\BlogComments', 'id_user', array('alias' => 'BlogComments'));
        $this->hasMany('id', 'Sirehu\Core\Models\BlogPosts', 'id_user', array('alias' => 'BlogPosts'));
        $this->hasMany('id', 'Sirehu\Core\Models\BlogTags', 'id_user', array('alias' => 'BlogTags'));
        $this->hasMany('id', 'Sirehu\Core\Models\CoreDepartmentsInfo', 'id_user', array('alias' => 'CoreDepartmentsInfo'));
        $this->hasMany('id', 'Sirehu\Core\Models\CoreDepartmentsSkills', 'id_user', array('alias' => 'CoreDepartmentsSkills'));
        $this->hasMany('id', 'Sirehu\Core\Models\CoreUsersStaff', 'id_user', array('alias' => 'CoreUsersStaff'));
        $this->hasMany('id', 'Sirehu\Core\Models\WebSliders', 'id_user', array('alias' => 'WebSliders'));
        $this->belongsTo('id_cargo', 'Sirehu\Core\Models\CoreCharges', 'id', array('alias' => 'CoreCharges'));
        $this->belongsTo('id_status', 'Sirehu\Core\Models\CoreStatus', 'id', array('alias' => 'CoreStatus'));
        $this->belongsTo('id_permiso', 'Sirehu\Core\Models\CorePermisos', 'id', array('alias' => 'CorePermisos'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'core_users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CoreUsers[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CoreUsers
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'id' => 'id',
            'usuario' => 'usuario',
            'clave' => 'clave',
            'nombres' => 'nombres',
            'apellidos' => 'apellidos',
            'email' => 'email',
            'foto' => 'foto',
            'id_cargo' => 'id_cargo',
            'id_permiso' => 'id_permiso',
            'id_status' => 'id_status',
            'fecha_creacion' => 'fecha_creacion',
            'fecha_modificacion' => 'fecha_modificacion'
        );
    }

}
