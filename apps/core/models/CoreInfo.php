<?php

namespace Sirehu\Core\Models;

class CoreInfo extends \Phalcon\Mvc\Model
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
    protected $nombre;

    /**
     *
     * @var string
     */
    protected $direccion;

    /**
     *
     * @var string
     */
    protected $correo;

    /**
     *
     * @var string
     */
    protected $twitter;

    /**
     *
     * @var string
     */
    protected $facebook;

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
     * Method to set the value of field direccion
     *
     * @param string $direccion
     * @return $this
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Method to set the value of field correo
     *
     * @param string $correo
     * @return $this
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Method to set the value of field twitter
     *
     * @param string $twitter
     * @return $this
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Method to set the value of field facebook
     *
     * @param string $facebook
     * @return $this
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

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
     * Returns the value of field nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Returns the value of field direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Returns the value of field correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Returns the value of field twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Returns the value of field facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
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

    public function getSource()
    {
        return 'core_info';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'nombre' => 'nombre', 
            'direccion' => 'direccion', 
            'correo' => 'correo', 
            'twitter' => 'twitter', 
            'facebook' => 'facebook', 
            'fecha_creacion' => 'fecha_creacion', 
            'fecha_modificacion' => 'fecha_modificacion'
        );
    }

}
