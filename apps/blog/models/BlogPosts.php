<?php

namespace Sirehu\Blog\Models;

class BlogPosts extends \Phalcon\Mvc\Model
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
     * @var string
     */
    protected $titulo;

    /**
     *
     * @var string
     */
    protected $descripcion;

    /**
     *
     * @var string
     */
    protected $resumen;

    /**
     *
     * @var string
     */
    protected $tags;

    /**
     *
     * @var integer
     */
    protected $id_url_img;

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
     * Method to set the value of field descripcion
     *
     * @param string $descripcion
     * @return $this
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Method to set the value of field resumen
     *
     * @param string $resumen
     * @return $this
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Method to set the value of field tags
     *
     * @param string $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Method to set the value of field id_url_img
     *
     * @param integer $id_url_img
     * @return $this
     */
    public function setIdUrlImg($id_url_img)
    {
        $this->id_url_img = $id_url_img;

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
     * Returns the value of field id_user
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
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
     * Returns the value of field descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Returns the value of field resumen
     *
     * @return string
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Returns the value of field tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Returns the value of field id_url_img
     *
     * @return integer
     */
    public function getIdUrlImg()
    {
        return $this->id_url_img;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_user', 'Sirehu\Core\Models\CoreUsers', 'id', array('alias' => 'Core_users'));
    }

    public function getSource()
    {
        return 'blog_posts';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'id_user' => 'id_user', 
            'titulo' => 'titulo', 
            'descripcion' => 'descripcion', 
            'resumen' => 'resumen', 
            'tags' => 'tags', 
            'id_url_img' => 'id_url_img', 
            'id_status' => 'id_status', 
            'fecha_creacion' => 'fecha_creacion', 
            'fecha_modificacion' => 'fecha_modificacion'
        );
    }

}
