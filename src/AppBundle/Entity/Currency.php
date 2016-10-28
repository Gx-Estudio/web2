<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity
 */
class Currency
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=32, nullable=false)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=3, nullable=false)
     */
    private $isoCode = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code_num", type="string", length=3, nullable=false)
     */
    private $isoCodeNum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sign", type="string", length=8, nullable=false)
     */
    private $sign;

    /**
     * @var boolean
     *
     * @ORM\Column(name="blank", type="boolean", nullable=false)
     */
    private $blank = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="format", type="boolean", nullable=false)
     */
    private $format = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="decimals", type="integer", nullable=false)
     */
    private $decimals;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=13, scale=6, nullable=false)
     */
    private $conversionRate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Currency
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isoCode
     *
     * @param string $isoCode
     *
     * @return Currency
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * Get isoCode
     *
     * @return string
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * Set isoCodeNum
     *
     * @param string $isoCodeNum
     *
     * @return Currency
     */
    public function setIsoCodeNum($isoCodeNum)
    {
        $this->isoCodeNum = $isoCodeNum;

        return $this;
    }

    /**
     * Get isoCodeNum
     *
     * @return string
     */
    public function getIsoCodeNum()
    {
        return $this->isoCodeNum;
    }

    /**
     * Set sign
     *
     * @param string $sign
     *
     * @return Currency
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set blank
     *
     * @param boolean $blank
     *
     * @return Currency
     */
    public function setBlank($blank)
    {
        $this->blank = $blank;

        return $this;
    }

    /**
     * Get blank
     *
     * @return boolean
     */
    public function getBlank()
    {
        return (boolean)$this->blank;
    }

    /**
     * Set format
     *
     * @param boolean $format
     *
     * @return Currency
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return boolean
     */
    public function getFormat()
    {
        return (boolean)$this->format;
    }

    /**
     * Set decimals
     *
     * @param boolean $decimals
     *
     * @return Currency
     */
    public function setDecimals($decimals)
    {
        $this->decimals = $decimals;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return boolean
     */
    public function getDecimals()
    {
        return $this->decimals;
    }

    /**
     * Set conversionRate
     *
     * @param string $conversionRate
     *
     * @return Currency
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return string
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Currency
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return (boolean)$this->deleted;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Currency
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return (boolean)$this->active;
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
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Currency
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
}
