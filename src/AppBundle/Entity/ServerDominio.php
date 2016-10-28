<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerDominio
 *
 * @ORM\Table(name="server_dominio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServerDominioRepository")
 */
class ServerDominio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="slogan", type="string", length=255)
     */
    private $slogan;

    /**
     * @var string
     *
     * @ORM\Column(name="top", type="boolean")
     */
    private $top;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=2)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="string", length=255, nullable=true)
     */
    private $descuento;

    /**
     * @var string
     *
     * @ORM\Column(name="restricciones", type="text", nullable=true)
     */
    private $restricciones;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return ServerDominio
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set slogan
     *
     * @param string $slogan
     *
     * @return ServerDominio
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * Get slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Set top
     *
     * @param boolean $top
     *
     * @return ServerDominio
     */
    public function setTop($top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get top
     *
     * @return boolean
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return ServerDominio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     *
     * @return ServerDominio
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string
     */
    public function getDescuento()
    {
        return $this->descuento;
    }


    /**
     * Set restricciones
     *
     * @param string $restricciones
     *
     * @return ServerDominio
     */
    public function setRestricciones($restricciones)
    {
        $this->restricciones = $restricciones;

        return $this;
    }

    /**
     * Get restricciones
     *
     * @return string
     */
    public function getRestricciones()
    {
        return $this->restricciones;
    }
}
