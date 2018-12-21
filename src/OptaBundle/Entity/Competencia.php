<?php

namespace OptaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competencia
 *
 * @ORM\Table(name="competencia")
 * @ORM\Entity(repositoryClass="OptaBundle\Repository\CompetenciaRepository")
 */
class Competencia
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
     * @ORM\Column(name="tipo", type="string", length=50)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo", type="integer")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="idProvedor", type="string", length=40)
     */
    private $idProvedor;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Competencia
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
     * Set codigo
     *
     * @param integer $codigo
     *
     * @return Competencia
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return int
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set idProvedor
     *
     * @param string $idProvedor
     *
     * @return Competencia
     */
    public function setIdProvedor($idProvedor)
    {
        $this->idProvedor = $idProvedor;

        return $this;
    }

    /**
     * Get idProvedor
     *
     * @return string
     */
    public function getIdProvedor()
    {
        return $this->idProvedor;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Competencia
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
}
