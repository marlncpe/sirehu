<?php

namespace Sirehu\Core\Models;

class CoreDepartmentsInfo extends \Phalcon\Mvc\Model
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
    protected $id_departament;

    /**
     *
     * @var string
     */
    protected $titulo;

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
     * Method to set the value of field id_departament
     *
     * @param integer $id_departament
     * @return $this
     */
    public function setIdDepartament($id_departament)
    {
        $this->id_departament = $id_departament;

        return $this;
    }

    /**
     * Method to set the value of field titulo
     *
     * @param string $titulo
     * @return $this
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

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
     * Returns the value of field id_departament
     *
     * @return integer
     */
    public function getIdDepartament()
    {
        return $this->id_departament;
    }

    /**
     * Returns the value of field titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
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
        $this->belongsTo('id_departament', 'Sirehu\Core\Models\CoreDepartments', 'id', array('alias' => 'Core_departments'));
        $this->belongsTo('id_user', 'Sirehu\Core\Models\CoreUsers', 'id', array('alias' => 'Core_users'));
    }

    public function getSource()
    {
        return 'core_departments_info';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'id_user' => 'id_user', 
            'id_departament' => 'id_departament', 
            'titulo' => 'titulo', 
            'fecha_creacion' => 'fecha_creacion'
        );
    }

}
