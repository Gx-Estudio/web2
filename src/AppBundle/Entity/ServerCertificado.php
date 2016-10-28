<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerCertificado
 *
 * @ORM\Table(name="server_certificado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServerCertificadoRepository")
 */
class ServerCertificado
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
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=2)
     */
    private $precio;

    /**
     * @ORM\ManyToMany(targetEntity="ServerCertificadoCategoria")
     * @ORM\JoinTable(name="server_certificados_categorias",
     *      joinColumns={@ORM\JoinColumn(name="server_certificado_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="server_certificado_categoria_id", referencedColumnName="id")}
     *      )
     */
    private $categorias;

    public function __construct() {
        $this->categorias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ServerCertificado
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
     * @return ServerCertificado
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
     * Set precio
     *
     * @param string $precio
     *
     * @return ServerCertificado
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
     * Add categoria
     *
     * @param \AppBundle\Entity\ServerCertificadoCategoria $categoria
     *
     * @return ServerCertificado
     */
    public function addCategoria(\AppBundle\Entity\ServerCertificadoCategoria $categoria)
    {
        $this->categorias[] = $categoria;

        return $this;
    }

    /**
     * Remove categoria
     *
     * @param \AppBundle\Entity\ServerCertificadoCategoria $categoria
     */
    public function removeCategoria(\AppBundle\Entity\ServerCertificadoCategoria $categoria)
    {
        $this->categorias->removeElement($categoria);
    }

    /**
     * Get categorias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategorias()
    {
        return $this->categorias;
    }

}
