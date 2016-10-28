<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerHosting
 *
 * @ORM\Table(name="server_hosting")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServerHostingRepository")
 */
class ServerHosting
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="almacenamiento", type="string", length=255)
     */
    private $almacenamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="emails", type="string", length=255)
     */
    private $emails;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_mes", type="decimal", precision=10, scale=2)
     */
    private $precioMes;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento_precio_anual", type="string", length=255, nullable=true)
     */
    private $descuentoPrecioAnual;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento_precio_bi_anual", type="string", length=255, nullable=true)
     */
    private $descuentoPrecioBiAnual;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento_precio_tri_anual", type="string", length=255, nullable=true)
     */
    private $descuentoPrecioTriAnual;


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
     * @return ServerHosting
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
     * Set almacenamiento
     *
     * @param string $almacenamiento
     *
     * @return ServerHosting
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
     * Set emails
     *
     * @param string $emails
     *
     * @return ServerHosting
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;

        return $this;
    }

    /**
     * Get emails
     *
     * @return string
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Set precioMes
     *
     * @param string $precioMes
     *
     * @return ServerHosting
     */
    public function setPrecioMes($precioMes)
    {
        $this->precioMes = $precioMes;

        return $this;
    }

    /**
     * Get precioMes
     *
     * @return string
     */
    public function getPrecioMes()
    {
        return $this->precioMes;
    }

    /**
     * Set descuentoPrecioAnual
     *
     * @param string $descuentoPrecioAnual
     *
     * @return ServerHosting
     */
    public function setDescuentoPrecioAnual($descuentoPrecioAnual)
    {
        $this->descuentoPrecioAnual = $descuentoPrecioAnual;

        return $this;
    }

    /**
     * Get descuentoPrecioAnual
     *
     * @return string
     */
    public function getDescuentoPrecioAnual()
    {
        return $this->descuentoPrecioAnual;
    }

    /**
     * Set descuentoPrecioBiAnual
     *
     * @param string $descuentoPrecioBiAnual
     *
     * @return ServerHosting
     */
    public function setDescuentoPrecioBiAnual($descuentoPrecioBiAnual)
    {
        $this->descuentoPrecioBiAnual = $descuentoPrecioBiAnual;

        return $this;
    }

    /**
     * Get descuentoPrecioBiAnual
     *
     * @return string
     */
    public function getDescuentoPrecioBiAnual()
    {
        return $this->descuentoPrecioBiAnual;
    }

    /**
     * Set descuentoPrecioTriAnual
     *
     * @param string $descuentoPrecioTriAnual
     *
     * @return ServerHosting
     */
    public function setDescuentoPrecioTriAnual($descuentoPrecioTriAnual)
    {
        $this->descuentoPrecioTriAnual = $descuentoPrecioTriAnual;

        return $this;
    }

    /**
     * Get descuentoPrecioTriAnual
     *
     * @return string
     */
    public function getDescuentoPrecioTriAnual()
    {
        return $this->descuentoPrecioTriAnual;
    }
}
