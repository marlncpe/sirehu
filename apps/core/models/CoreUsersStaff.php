<?php

namespace Sirehu\Core\Models;

class CoreUsersStaff extends \Phalcon\Mvc\Model
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
    protected $id_department;

    /**
     *
     * @var integer
     */
    protected $id_user;

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
     * Method to set the value of field id_department
     *
     * @param integer $id_department
     * @return $this
     */
    public function setIdDepartment($id_department)
    {
        $this->id_department = $id_department;

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
     * Returns the value of field id_department
     *
     * @return integer
     */
    public function getIdDepartment()
    {
        return $this->id_department;
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
        $this->belongsTo('id_department', 'Sirehu\Core\Models\CoreDepartments', 'id', array('alias' => 'Core_departments'));
    }

    public function getSource()
    {
        return 'core_users_staff';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'id_department' => 'id_department', 
            'id_user' => 'id_user', 
            'fecha_creacion' => 'fecha_creacion'
        );
    }

}
