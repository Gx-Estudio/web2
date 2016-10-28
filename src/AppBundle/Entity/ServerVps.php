<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerVps
 *
 * @ORM\Table(name="server_vps")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServerVpsRepository")
 */
class ServerVps
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;


    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=2)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento_precio", type="string", length=255, nullable=true)
     */
    private $descuentoPrecio;

    /**
     * @var string
     *
     * @ORM\Column(name="almacenamiento", type="string", length=255)
     */
    private $almacenamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="transferencia", type="string", length=255)
     */
    private $transferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="memoria", type="string", length=255)
     */
    private $memoria;

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
     * Set type
     *
     * @param string $type
     *
     * @return ServerVps
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return ServerVps
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
     * Set precio
     *
     * @param string $precio
     *
     * @return ServerVps
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
     * Set descuentoPrecio
     *
     * @param string $descuentoPrecio
     *
     * @return ServerVps
     */
    public function setDescuentoPrecio($descuentoPrecio)
    {
        $this->descuentoPrecio = $descuentoPrecio;

        return $this;
    }

    /**
     * Get descuentoPrecio
     *
     * @return string
     */
    public function getDescuentoPrecio()
    {
        return $this->descuentoPrecio;
    }

    /**
     * Set almacenamiento
     *
     * @param string $almacenamiento
     *
     * @return ServerVps
     */
    public function setAlmacenamiento($almacenamiento)
    {
        $this->almacenamiento = $almacenamiento;

        return $this;
    }

    /**
     * Get almacenamiento
     *
     * @return string
     */
    public function getAlmacenamiento()
    {
        return $this->almacenamiento;
    }

    /**
     * Set transferencia
     *
     * @param string $transferencia
     *
     * @return ServerVps
     */
    public function setTransferencia($transferencia)
    {
        $this->transferencia = $transferencia;

        return $this;
    }

    /**
     * Get transferencia
     *
     * @return string
     */
    public function getTransferencia()
    {
        return $this->transferencia;
    }

    /**
     * Set memoria
     *
     * @param string $memoria
     *
     * @return ServerVps
     */
    public function setMemoria($memoria)
    {
        $this->memoria = $memoria;

        return $this;
    }

    /**
     * Get memoria
     *
     * @return string
     */
    public function getMemoria()
    {
        return $this->memoria;
    }
}
