<?php

namespace Sirehu\Blog\Models;

class BlogComments extends \Phalcon\Mvc\Model
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
    protected $id_post;

    /**
     *
     * @var integer
     */
    protected $id_user_respuesta;

    /**
     *
     * @var integer
     */
    protected $id_user;

    /**
     *
     * @var string
     */
    protected $commentario;

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
     * Method to set the value of field id_post
     *
     * @param integer $id_post
     * @return $this
     */
    public function setIdPost($id_post)
    {
        $this->id_post = $id_post;

        return $this;
    }

    /**
     * Method to set the value of field id_user_respuesta
     *
     * @param integer $id_user_respuesta
     * @return $this
     */
    public function setIdUserRespuesta($id_user_respuesta)
    {
        $this->id_user_respuesta = $id_user_respuesta;

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
     * Method to set the value of field commentario
     *
     * @param string $commentario
     * @return $this
     */
    public function setCommentario($commentario)
    {
        $this->commentario = $commentario;

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
     * Returns the value of field id_post
     *
     * @return integer
     */
    public function getIdPost()
    {
        return $this->id_post;
    }

    /**
     * Returns the value of field id_user_respuesta
     *
     * @return integer
     */
    public function getIdUserRespuesta()
    {
        return $this->id_user_respuesta;
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
     * Returns the value of field commentario
     *
     * @return string
     */
    public function getCommentario()
    {
        return $this->commentario;
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

    public function getSource()
    {
        return 'blog_comments';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'id_post' => 'id_post', 
            'id_user_respuesta' => 'id_user_respuesta', 
            'id_user' => 'id_user', 
            'commentario' => 'commentario', 
            'id_status' => 'id_status', 
            'fecha_creacion' => 'fecha_creacion', 
            'fecha_modificacion' => 'fecha_modificacion'
        );
    }

}
