<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerChat
 *
 * @ORM\Table(name="server_chat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServerChatRepository")
 */
class ServerChat
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
     * @ORM\Column(name="operadores", type="string", length=255)
     */
    private $operadores;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_mes", type="decimal", precision=10, scale=2)
     */
    private $precioMes;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="string", length=255, nullable=true)
     */
    private $descuento;

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
     * Set operadores
     *
     * @param string $operadores
     *
     * @return ServerChat
     */
    public function setOperadores($operadores)
    {
        $this->operadores = $operadores;

        return $this;
    }

    /**
     * Get operadores
     *
     * @return string
     */
    public function getOperadores()
    {
        return $this->operadores;
    }

    /**
     * Set precioMes
     *
     * @param string $precioMes
     *
     * @return ServerChat
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
     * Set descuento
     *
     * @param string $descuento
     *
     * @return ServerChat
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
}
