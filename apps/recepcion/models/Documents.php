<?php

namespace Sirehu\Recepcion\Models;

class Documents extends \Phalcon\Mvc\Model
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
    protected $id_usuario;

    /**
     *
     * @var integer
     */
    protected $id_coordinacion;

    /**
     *
     * @var string
     */
    protected $titulo;

    /**
     *
     * @var string
     */
    protected $desscripcion;

    /**
     *
     * @var string
     */
    protected $url_documento;

    /**
     *
     * @var string
     */
    protected $tipo;

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
     * Method to set the value of field id_usuario
     *
     * @param integer $id_usuario
     * @return $this
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    /**
     * Method to set the value of field id_coordinacion
     *
     * @param integer $id_coordinacion
     * @return $this
     */
    public function setIdCoordinacion($id_coordinacion)
    {
        $this->id_coordinacion = $id_coordinacion;

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
     * Method to set the value of field desscripcion
     *
     * @param string $desscripcion
     * @return $this
     */
    public function setDesscripcion($desscripcion)
    {
        $this->desscripcion = $desscripcion;

        return $this;
    }

    /**
     * Method to set the value of field url_documento
     *
     * @param string $url_documento
     * @return $this
     */
    public function setUrlDocumento($url_documento)
    {
        $this->url_documento = $url_documento;

        return $this;
    }

    /**
     * Method to set the value of field tipo
     *
     * @param string $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field id_usuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * Returns the value of field id_coordinacion
     *
     * @return integer
     */
    public function getIdCoordinacion()
    {
        return $this->id_coordinacion;
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
     * Returns the value of field desscripcion
     *
     * @return string
     */
    public function getDesscripcion()
    {
        return $this->desscripcion;
    }

    /**
     * Returns the value of field url_documento
     *
     * @return string
     */
    public function getUrlDocumento()
    {
        return $this->url_documento;
    }

    /**
     * Returns the value of field tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_usuario', 'Sirehu\Core\Models\CoreUsers', 'id', array('alias' => 'Core_users'));
        $this->belongsTo('id_coordinacion', 'Sirehu\Core\Models\CoreDepartments', 'id', array('alias' => 'Core_departments'));
    }

    public function getSource()
    {
        return 'documents';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'id_usuario' => 'id_usuario', 
            'id_coordinacion' => 'id_coordinacion', 
            'titulo' => 'titulo', 
            'desscripcion' => 'desscripcion', 
            'url_documento' => 'url_documento', 
            'tipo' => 'tipo', 
            'id_status' => 'id_status', 
            'fecha_creacion' => 'fecha_creacion'
        );
    }

}
