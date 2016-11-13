<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebWebsite
 *
 * @ORM\Table(name="web_website")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WebWebsiteRepository")
 */
class WebWebsite
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
     * @ORM\Column(name="seo_description", type="text")
     */
    private $seoDescription;

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
     * @ORM\Column(name="abono", type="decimal", precision=10, scale=2)
     */
    private $abono;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento_abono", type="string", length=255, nullable=true)
     */
    private $descuentoAbono;


    /**
     * @ORM\ManyToMany(targetEntity="WebComponente")
     * @ORM\JoinTable(name="web_websites_componentes",
     *      joinColumns={@ORM\JoinColumn(name="web_website_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="web_componente_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $componentes;

    /**
     * @ORM\ManyToOne(targetEntity="ServerHosting")
     * @ORM\JoinColumn(name="server_hosting_id", referencedColumnName="id")
     */
    private $hosting;


    public function __construct() {
        $this->componentes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return WebWebsite
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
     * @return WebWebsite
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
     * @return WebWebsite
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
     * Set precio
     *
     * @param string $precio
     *
     * @return WebWebsite
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
     * @return WebWebsite
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
     * Set abono
     *
     * @param string $abono
     *
     * @return WebWebsite
     */
    public function setAbono($abono)
    {
        $this->abono = $abono;

        return $this;
    }

    /**
     * Get abono
     *
     * @return string
     */
    public function getAbono()
    {
        return $this->abono;
    }

    /**
     * Set descuentoAbono
     *
     * @param string $descuentoAbono
     *
     * @return WebWebsite
     */
    public function setDescuentoAbono($descuentoAbono)
    {
        $this->descuentoAbono = $descuentoAbono;

        return $this;
    }

    /**
     * Get descuentoAbono
     *
     * @return string
     */
    public function getDescuentoAbono()
    {
        return $this->descuentoAbono;
    }

    /**
     * Add componente
     *
     * @param \AppBundle\Entity\WebComponente $componente
     *
     * @return WebWebsite
     */
    public function addComponente(\AppBundle\Entity\WebComponente $componente)
    {
        $this->componentes[] = $componente;

        return $this;
    }

    /**
     * Remove componente
     *
     * @param \AppBundle\Entity\WebComponente $componente
     */
    public function removeComponente(\AppBundle\Entity\WebComponente $componente)
    {
        $this->componentes->removeElement($componente);
    }

    /**
     * Get componentes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComponentes()
    {
        return $this->componentes;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $webComponente;


    /**
     * Add webComponente
     *
     * @param \AppBundle\Entity\WebComponente $webComponente
     *
     * @return WebWebsite
     */
    public function addWebComponente(\AppBundle\Entity\WebComponente $webComponente)
    {
        $this->webComponente[] = $webComponente;

        return $this;
    }

    /**
     * Remove webComponente
     *
     * @param \AppBundle\Entity\WebComponente $webComponente
     */
    public function removeWebComponente(\AppBundle\Entity\WebComponente $webComponente)
    {
        $this->webComponente->removeElement($webComponente);
    }

    /**
     * Get webComponente
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWebComponente()
    {
        return $this->webComponente;
    }

    /**
     * Set hosting
     *
     * @param \AppBundle\Entity\ServerHosting $hosting
     *
     * @return WebWebsite
     */
    public function setHosting(\AppBundle\Entity\ServerHosting $hosting = null)
    {
        $this->hosting = $hosting;

        return $this;
    }

    /**
     * Get hosting
     *
     * @return \AppBundle\Entity\ServerHosting
     */
    public function getHosting()
    {
        return $this->hosting;
    }

    /**
     * Set seoDescription
     *
     * @param string $seoDescription
     *
     * @return WebWebsite
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription
     *
     * @return string
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }
}
