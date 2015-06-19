<?php

namespace Sirehu\Core\Models;

class CoreDepartmentsSkills extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $id_user;

    /**
     *
     * @var integer
     */
    protected $id_departamento;

    /**
     *
     * @var string
     */
    protected $nombre;

    /**
     *
     * @var integer
     */
    protected $porcenetaje;

    /**
     *
     * @var string
     */
    protected $fecha_creacion;

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
     * Method to set the value of field id_user
     *
     * @param integer $id_user
     * @return $this
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Method to set the value of field id_departamento
     *
     * @param integer $id_departamento
     * @return $this
     */
    public function setIdDepartamento($id_departamento)
    {
        $this->id_departamento = $id_departamento;

        return $this;
    }

    /**
     * Method to set the value of field nombre
     *
     * @param string $nombre
     * @return $this
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Method to set the value of field porcenetaje
     *
     * @param integer $porcenetaje
     * @return $this
     */
    public function setPorcenetaje($porcenetaje)
    {
        $this->porcenetaje = $porcenetaje;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field id_user
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Returns the value of field id_departamento
     *
     * @return integer
     */
    public function getIdDepartamento()
    {
        return $this->id_departamento;
    }

    /**
     * Returns the value of field nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Returns the value of field porcenetaje
     *
     * @return integer
     */
    public function getPorcenetaje()
    {
        return $this->porcenetaje;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_user', 'Sirehu\Core\Models\CoreUsers', 'id', array('alias' => 'Core_users'));
        $this->belongsTo('id_departamento', 'Sirehu\Core\Models\CoreDepartments', 'id', array('alias' => 'Core_departments'));
    }

    public function getSource()
    {
        return 'core_departments_skills';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'id_user' => 'id_user', 
            'id_departamento' => 'id_departamento', 
            'nombre' => 'nombre', 
            'porcenetaje' => 'porcenetaje', 
            'fecha_creacion' => 'fecha_creacion'
        );
    }

}
