<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebComponente
 *
 * @ORM\Table(name="web_componente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WebComponenteRepository")
 */
class WebComponente
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
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     */
    private $imagen;
    

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
     * @return WebComponente
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return WebComponente
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return WebComponente
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $webWebsite;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->webWebsite = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add webWebsite
     *
     * @param \AppBundle\Entity\WebWebsite $webWebsite
     *
     * @return WebComponente
     */
    public function addWebWebsite(\AppBundle\Entity\WebWebsite $webWebsite)
    {
        $this->webWebsite[] = $webWebsite;

        return $this;
    }

    /**
     * Remove webWebsite
     *
     * @param \AppBundle\Entity\WebWebsite $webWebsite
     */
    public function removeWebWebsite(\AppBundle\Entity\WebWebsite $webWebsite)
    {
        $this->webWebsite->removeElement($webWebsite);
    }

    /**
     * Get webWebsite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWebWebsite()
    {
        return $this->webWebsite;
    }
}
