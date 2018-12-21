<?php

namespace OptaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directorios
 *
 * @ORM\Table(name="directorios")
 * @ORM\Entity(repositoryClass="OptaBundle\Repository\DirectorioRepository")
 */
class Directorio
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
     * @ORM\Column(name="Ruta", type="string", length=500)
     */
    private $ruta;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Extension", type="string", length=40)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", length=40)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="Size", type="integer")
     */
    private $size;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Procesado", type="boolean")
     */
    private $procesado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Procesando", type="boolean")
     */
    private $procesando;

    /**
     * @var date
     *
     * @ORM\Column(name="FechaModificacion", type="date")
     */
    private $fechaModificacion;

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
     * Set ruta
     *
     * @param string $ruta
     *
     * @return Directorio
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Directorio
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
     * Set extension
     *
     * @param string $extension
     *
     * @return Directorio
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Directorio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Directorio
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set procesado
     *
     * @param boolean $procesado
     *
     * @return Directorio
     */
    public function setProcesado($procesado)
    {
        $this->procesado = $procesado;

        return $this;
    }

    /**
     * Get procesado
     *
     * @return boolean
     */
    public function getProcesado()
    {
        return $this->procesado;
    }

    /**
     * Set procesando
     *
     * @param boolean $procesando
     *
     * @return Directorio
     */
    public function setProcesando($procesando)
    {
        $this->procesando = $procesando;

        return $this;
    }

    /**
     * Get procesando
     *
     * @return boolean
     */
    public function getProcesando()
    {
        return $this->procesando;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     *
     * @return Directorio
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }
}
