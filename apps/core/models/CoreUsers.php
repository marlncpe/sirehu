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
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Sirehu\Blog\Models\Blog_comments', 'id_user_respuesta', array('alias' => 'Blog_comments'));
        $this->hasMany('id', 'Sirehu\Blog\Models\Blog_comments', 'id_user', array('alias' => 'Blog_comments'));
        $this->hasMany('id', 'Sirehu\Blog\Models\Blog_posts', 'id_user', array('alias' => 'Blog_posts'));
        $this->hasMany('id', 'Sirehu\Blog\Models\Blog_tags', 'id_user', array('alias' => 'Blog_tags'));
        $this->belongsTo('id_permiso', 'Sirehu\Core\Models\Core_permisos', 'id', array('alias' => 'Core_permisos'));
        $this->belongsTo('id_status', 'Sirehu\Core\Models\Core_status', 'id', array('alias' => 'Core_status'));
    }

    public function getSource()
    {
        return 'core_users';
    }

    /**
     * Independent Column Mapping.
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
            'id_permiso' => 'id_permiso', 
            'id_status' => 'id_status', 
            'fecha_creacion' => 'fecha_creacion', 
            'fecha_modificacion' => 'fecha_modificacion'
        );
    }

}
