<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerCertificadoCategoria
 *
 * @ORM\Table(name="server_certificado_categoria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServerCertificadoCategoriaRepository")
 */
class ServerCertificadoCategoria
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
     * @ORM\OneToMany(targetEntity="ServerCertificadoCategoria", mappedBy="parent")
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="ServerCertificadoCategoria", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

    public function __construct() {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ServerCertificadoCategoria
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
     * Add child
     *
     * @param \AppBundle\Entity\ServerCertificadoCategoria $child
     *
     * @return ServerCertificadoCategoria
     */
    public function addChild(\AppBundle\Entity\ServerCertificadoCategoria $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AppBundle\Entity\ServerCertificadoCategoria $child
     */
    public function removeChild(\AppBundle\Entity\ServerCertificadoCategoria $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \AppBundle\Entity\ServerCertificadoCategoria $parent
     *
     * @return ServerCertificadoCategoria
     */
    public function setParent(\AppBundle\Entity\ServerCertificadoCategoria $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\ServerCertificadoCategoria
     */
    public function getParent()
    {
        return $this->parent;
    }
}
