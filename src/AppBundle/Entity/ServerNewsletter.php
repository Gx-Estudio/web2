<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerNewsletter
 *
 * @ORM\Table(name="server_newsletter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServerNewsletterRepository")
 */
class ServerNewsletter
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
     * @ORM\Column(name="contactos", type="string", length=255)
     */
    private $contactos;

    /**
     * @var string
     *
     * @ORM\Column(name="envios", type="string", length=255)
     */
    private $envios;

    /**
     * @var string
     *
     * @ORM\Column(name="formularios", type="string", length=255)
     */
    private $formularios;

    /**
     * @var string
     *
     * @ORM\Column(name="imagenes", type="string", length=255)
     */
    private $imagenes;

    /**
     * @var string
     *
     * @ORM\Column(name="automatico", type="string", length=255)
     */
    private $automatico;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_mes", type="decimal", precision=10, scale=2)
     */
    private $precioMes;


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
     * Set contactos
     *
     * @param string $contactos
     *
     * @return ServerNewsletter
     */
    public function setContactos($contactos)
    {
        $this->contactos = $contactos;

        return $this;
    }

    /**
     * Get contactos
     *
     * @return string
     */
    public function getContactos()
    {
        return $this->contactos;
    }

    /**
     * Set envios
     *
     * @param string $envios
     *
     * @return ServerNewsletter
     */
    public function setEnvios($envios)
    {
        $this->envios = $envios;

        return $this;
    }

    /**
     * Get envios
     *
     * @return string
     */
    public function getEnvios()
    {
        return $this->envios;
    }

    /**
     * Set formularios
     *
     * @param string $formularios
     *
     * @return ServerNewsletter
     */
    public function setFormularios($formularios)
    {
        $this->formularios = $formularios;

        return $this;
    }

    /**
     * Get formularios
     *
     * @return string
     */
    public function getFormularios()
    {
        return $this->formularios;
    }

    /**
     * Set imagenes
     *
     * @param string $imagenes
     *
     * @return ServerNewsletter
     */
    public function setImagenes($imagenes)
    {
        $this->imagenes = $imagenes;

        return $this;
    }

    /**
     * Get imagenes
     *
     * @return string
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }

    /**
     * Set automatico
     *
     * @param string $automatico
     *
     * @return ServerNewsletter
     */
    public function setAutomatico($automatico)
    {
        $this->automatico = $automatico;

        return $this;
    }

    /**
     * Get automatico
     *
     * @return string
     */
    public function getAutomatico()
    {
        return $this->automatico;
    }

    /**
     * Set precioMes
     *
     * @param string $precioMes
     *
     * @return ServerNewsletter
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
}
