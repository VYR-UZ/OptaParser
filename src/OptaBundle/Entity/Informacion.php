<?php

namespace OptaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Informacion
 *
 * @ORM\Table(name="informacion")
 * @ORM\Entity(repositoryClass="OptaBundle\Repository\InformacionRepository")
 */
class Informacion
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
     * @ORM\Column(name="tipo", type="string", length=70)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=10)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="competenciaID", type="string", length=10)
     */
    private $competenciaID;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=70)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sistemaJuegoID", type="string", length=10)
     */
    private $sistemaJuegoID;

    /**
     * @var string
     *
     * @ORM\Column(name="temporadaID", type="string", length=10)
     */
    private $temporadaID;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreTemporada", type="string", length=40)
     */
    private $nombreTemporada;

    /**
     * @var string
     *
     * @ORM\Column(name="timestamp", type="string", length=50)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="detalleID", type="string", length=10)
     */
    private $detalleID;

    /**
     * @var string
     *
     * @ORM\Column(name="ultimaModificacion", type="string", length=70)
     */
    private $ultimaModificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="accurancyID", type="string", length=10)
     */
    private $accurancyID;

    /**
     * @var string
     *
     * @ORM\Column(name="timingID", type="string", length=10)
     */
    private $timingID;

    /**
     * @var string
     *
     * @ORM\Column(name="uID", type="string", length=15)
     */
    private $uID;

    /**
     * @var string
     *
     * @ORM\Column(name="detalleNombre", type="string", length=40)
     */
    private $detalleNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="accurancyNombre", type="string", length=40)
     */
    private $accurancyNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="timingNombre", type="string", length=40)
     */
    private $timingNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=10)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="diaJuego", type="string", length=10)
     */
    private $diaJuego;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoJuego", type="string", length=10)
     */
    private $tipoJuego;

    /**
     * @var string
     *
     * @ORM\Column(name="ganadorPartido", type="string", length=10)
     */
    private $ganadorPartido;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=10)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroRonda", type="string", length=10)
     */
    private $numeroRonda;

     /**
     * @var string
     *
     * @ORM\Column(name="tipoRonda", type="string", length=10)
     */
    private $tipoRonda;

    /**
     * @var string
     *
     * @ORM\Column(name="venueID", type="string", length=255)
     */
    private $venueID;

    /**
     * @var string
     *
     * @ORM\Column(name="dato", type="string", length=50)
     */
    private $dato;

    /**
     * @var string
     *
     * @ORM\Column(name="timeZone", type="string", length=10)
     */
    private $timeZone;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreArbitro", type="string", length=10)
     */
    private $nombreArbitro;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoArbitro", type="string", length=10)
     */
    private $apellidoArbitro;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoArbitro", type="string", length=10)
     */
    private $tipoArbitro;

    /**
     * @var string
     *
     * @ORM\Column(name="arbitroID", type="string", length=10)
     */
    private $arbitroID;

    /**
     * @var string
     *
     * @ORM\Column(name="estadio", type="string", length=40)
     */
    private $estadio;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=25)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="marcadorMT", type="string", length=10)
     */
    private $marcadorMT;

    /**
     * @var string
     *
     * @ORM\Column(name="marcador", type="string", length=10)
     */
    private $marcador;

    /**
     * @var string
     *
     * @ORM\Column(name="side", type="string", length=10)
     */
    private $side;

    /**
     * @var string
     *
     * @ORM\Column(name="referenciaEquipo", type="string", length=10)
     */
    private $referenciaEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="tiempoPeriodo", type="string", length=20)
     */
    private $tiempoPeriodo;

    /**
     * @var string
     *
     * @ORM\Column(name="referenciaJugador", type="string", length=255)
     */
    private $referenciaJugador;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoGol", type="string", length=15)
     */
    private $tipoGol;

    /**
     * @var string
     *
     * @ORM\Column(name="equipo", type="string", length=30)
     */
    private $equipo;

    /**
     * @var string
     *
     * @ORM\Column(name="equipoID", type="string", length=15)
     */
    private $equipoID;



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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Informacion
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
     * @param string $codigo
     *
     * @return Informacion
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set competenciaID
     *
     * @param string $competenciaID
     *
     * @return Informacion
     */
    public function setCompetenciaID($competenciaID)
    {
        $this->competenciaID = $competenciaID;

        return $this;
    }

    /**
     * Get competenciaID
     *
     * @return string
     */
    public function getCompetenciaID()
    {
        return $this->competenciaID;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Informacion
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
     * Set sistemaJuegoID
     *
     * @param string $sistemaJuegoID
     *
     * @return Informacion
     */
    public function setSistemaJuegoID($sistemaJuegoID)
    {
        $this->sistemaJuegoID = $sistemaJuegoID;

        return $this;
    }

    /**
     * Get sistemaJuegoID
     *
     * @return string
     */
    public function getSistemaJuegoID()
    {
        return $this->sistemaJuegoID;
    }

    /**
     * Set temporadaID
     *
     * @param string $temporadaID
     *
     * @return Informacion
     */
    public function setTemporadaID($temporadaID)
    {
        $this->temporadaID = $temporadaID;

        return $this;
    }

    /**
     * Get temporadaID
     *
     * @return string
     */
    public function getTemporadaID()
    {
        return $this->temporadaID;
    }

    /**
     * Set nombreTemporada
     *
     * @param string $nombreTemporada
     *
     * @return Informacion
     */
    public function setNombreTemporada($nombreTemporada)
    {
        $this->nombreTemporada = $nombreTemporada;

        return $this;
    }

    /**
     * Get nombreTemporada
     *
     * @return string
     */
    public function getNombreTemporada()
    {
        return $this->nombreTemporada;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     *
     * @return Informacion
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set detalleID
     *
     * @param string $detalleID
     *
     * @return Informacion
     */
    public function setDetalleID($detalleID)
    {
        $this->detalleID = $detalleID;

        return $this;
    }

    /**
     * Get detalleID
     *
     * @return string
     */
    public function getDetalleID()
    {
        return $this->detalleID;
    }

    /**
     * Set ultimaModificacion
     *
     * @param string $ultimaModificacion
     *
     * @return Informacion
     */
    public function setUltimaModificacion($ultimaModificacion)
    {
        $this->ultimaModificacion = $ultimaModificacion;

        return $this;
    }

    /**
     * Get ultimaModificacion
     *
     * @return string
     */
    public function getUltimaModificacion()
    {
        return $this->ultimaModificacion;
    }

    /**
     * Set accurancyID
     *
     * @param string $accurancyID
     *
     * @return Informacion
     */
    public function setAccurancyID($accurancyID)
    {
        $this->accurancyID = $accurancyID;

        return $this;
    }

    /**
     * Get accurancyID
     *
     * @return string
     */
    public function getAccurancyID()
    {
        return $this->accurancyID;
    }

    /**
     * Set timingID
     *
     * @param string $timingID
     *
     * @return Informacion
     */
    public function setTimingID($timingID)
    {
        $this->timingID = $timingID;

        return $this;
    }

    /**
     * Get timingID
     *
     * @return string
     */
    public function getTimingID()
    {
        return $this->timingID;
    }

    /**
     * Set uID
     *
     * @param string $uID
     *
     * @return Informacion
     */
    public function setUID($uID)
    {
        $this->uID = $uID;

        return $this;
    }

    /**
     * Get uID
     *
     * @return string
     */
    public function getUID()
    {
        return $this->uID;
    }

    /**
     * Set detalleNombre
     *
     * @param string $detalleNombre
     *
     * @return Informacion
     */
    public function setDetalleNombre($detalleNombre)
    {
        $this->detalleNombre = $detalleNombre;

        return $this;
    }

    /**
     * Get detalleNombre
     *
     * @return string
     */
    public function getDetalleNombre()
    {
        return $this->detalleNombre;
    }

    /**
     * Set accurancyNombre
     *
     * @param string $accurancyNombre
     *
     * @return Informacion
     */
    public function setAccurancyNombre($accurancyNombre)
    {
        $this->accurancyNombre = $accurancyNombre;

        return $this;
    }

    /**
     * Get accurancyNombre
     *
     * @return string
     */
    public function getAccurancyNombre()
    {
        return $this->accurancyNombre;
    }

    /**
     * Set timingNombre
     *
     * @param string $timingNombre
     *
     * @return Informacion
     */
    public function setTimingNombre($timingNombre)
    {
        $this->timingNombre = $timingNombre;

        return $this;
    }

    /**
     * Get timingNombre
     *
     * @return string
     */
    public function getTimingNombre()
    {
        return $this->timingNombre;
    }

    /**
     * Set grupo
     *
     * @param string $grupo
     *
     * @return Informacion
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set diaJuego
     *
     * @param string $diaJuego
     *
     * @return Informacion
     */
    public function setDiaJuego($diaJuego)
    {
        $this->diaJuego = $diaJuego;

        return $this;
    }

    /**
     * Get diaJuego
     *
     * @return string
     */
    public function getDiaJuego()
    {
        return $this->diaJuego;
    }

    /**
     * Set tipoJuego
     *
     * @param string $tipoJuego
     *
     * @return Informacion
     */
    public function setTipoJuego($tipoJuego)
    {
        $this->tipoJuego = $tipoJuego;

        return $this;
    }

    /**
     * Get tipoJuego
     *
     * @return string
     */
    public function getTipoJuego()
    {
        return $this->tipoJuego;
    }

    /**
     * Set ganadorPartido
     *
     * @param string $ganadorPartido
     *
     * @return Informacion
     */
    public function setGanadorPartido($ganadorPartido)
    {
        $this->ganadorPartido = $ganadorPartido;

        return $this;
    }

    /**
     * Get ganadorPartido
     *
     * @return string
     */
    public function getGanadorPartido()
    {
        return $this->ganadorPartido;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     *
     * @return Informacion
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set numeroRonda
     *
     * @param string $numeroRonda
     *
     * @return Informacion
     */
    public function setNumeroRonda($numeroRonda)
    {
        $this->numeroRonda = $numeroRonda;

        return $this;
    }

    /**
     * Get numeroRonda
     *
     * @return string
     */
    public function getNumeroRonda()
    {
        return $this->numeroRonda;
    }

    /**
     * Set tipoRonda
     *
     * @param string $tipoRonda
     *
     * @return Informacion
     */
    public function setTipoRonda($tipoRonda)
    {
        $this->tipoRonda = $tipoRonda;

        return $this;
    }

    /**
     * Get tipoRonda
     *
     * @return string
     */
    public function getTipoRonda()
    {
        return $this->tipoRonda;
    }

    /**
     * Set venueID
     *
     * @param string $venueID
     *
     * @return Informacion
     */
    public function setVenueID($venueID)
    {
        $this->venueID = $venueID;

        return $this;
    }

    /**
     * Get venueID
     *
     * @return string
     */
    public function getVenueID()
    {
        return $this->venueID;
    }

    /**
     * Set dato
     *
     * @param string $dato
     *
     * @return Informacion
     */
    public function setDato($dato)
    {
        $this->dato = $dato;

        return $this;
    }

    /**
     * Get dato
     *
     * @return string
     */
    public function getDato()
    {
        return $this->dato;
    }

    /**
     * Set timeZone
     *
     * @param string $timeZone
     *
     * @return Informacion
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set nombreArbitro
     *
     * @param string $nombreArbitro
     *
     * @return Informacion
     */
    public function setNombreArbitro($nombreArbitro)
    {
        $this->nombreArbitro = $nombreArbitro;

        return $this;
    }

    /**
     * Get nombreArbitro
     *
     * @return string
     */
    public function getNombreArbitro()
    {
        return $this->nombreArbitro;
    }

    /**
     * Set apellidoArbitro
     *
     * @param string $apellidoArbitro
     *
     * @return Informacion
     */
    public function setApellidoArbitro($apellidoArbitro)
    {
        $this->apellidoArbitro = $apellidoArbitro;

        return $this;
    }

    /**
     * Get apellidoArbitro
     *
     * @return string
     */
    public function getApellidoArbitro()
    {
        return $this->apellidoArbitro;
    }

    /**
     * Set tipoArbitro
     *
     * @param string $tipoArbitro
     *
     * @return Informacion
     */
    public function setTipoArbitro($tipoArbitro)
    {
        $this->tipoArbitro = $tipoArbitro;

        return $this;
    }

    /**
     * Get tipoArbitro
     *
     * @return string
     */
    public function getTipoArbitro()
    {
        return $this->tipoArbitro;
    }

    /**
     * Set arbitroID
     *
     * @param string $arbitroID
     *
     * @return Informacion
     */
    public function setArbitroID($arbitroID)
    {
        $this->arbitroID = $arbitroID;

        return $this;
    }

    /**
     * Get arbitroID
     *
     * @return string
     */
    public function getArbitroID()
    {
        return $this->arbitroID;
    }

    /**
     * Set estadio
     *
     * @param string $estadio
     *
     * @return Informacion
     */
    public function setEstadio($estadio)
    {
        $this->estadio = $estadio;

        return $this;
    }

    /**
     * Get estadio
     *
     * @return string
     */
    public function getEstadio()
    {
        return $this->estadio;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Informacion
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set marcadorMT
     *
     * @param string $marcadorMT
     *
     * @return Informacion
     */
    public function setMarcadorMT($marcadorMT)
    {
        $this->marcadorMT = $marcadorMT;

        return $this;
    }

    /**
     * Get marcadorMT
     *
     * @return string
     */
    public function getMarcadorMT()
    {
        return $this->marcadorMT;
    }

    /**
     * Set marcador
     *
     * @param string $marcador
     *
     * @return Informacion
     */
    public function setMarcador($marcador)
    {
        $this->marcador = $marcador;

        return $this;
    }

    /**
     * Get marcador
     *
     * @return string
     */
    public function getMarcador()
    {
        return $this->marcador;
    }

    /**
     * Set side
     *
     * @param string $side
     *
     * @return Informacion
     */
    public function setSide($side)
    {
        $this->side = $side;

        return $this;
    }

    /**
     * Get side
     *
     * @return string
     */
    public function getSide()
    {
        return $this->side;
    }

    /**
     * Set referenciaEquipo
     *
     * @param string $referenciaEquipo
     *
     * @return Informacion
     */
    public function setReferenciaEquipo($referenciaEquipo)
    {
        $this->referenciaEquipo = $referenciaEquipo;

        return $this;
    }

    /**
     * Get referenciaEquipo
     *
     * @return string
     */
    public function getReferenciaEquipo()
    {
        return $this->referenciaEquipo;
    }

    /**
     * Set tiempoPeriodo
     *
     * @param string $tiempoPeriodo
     *
     * @return Informacion
     */
    public function setTiempoPeriodo($tiempoPeriodo)
    {
        $this->tiempoPeriodo = $tiempoPeriodo;

        return $this;
    }

    /**
     * Get tiempoPeriodo
     *
     * @return string
     */
    public function getTiempoPeriodo()
    {
        return $this->tiempoPeriodo;
    }

    /**
     * Set referenciaJugador
     *
     * @param string $referenciaJugador
     *
     * @return Informacion
     */
    public function setReferenciaJugador($referenciaJugador)
    {
        $this->referenciaJugador = $referenciaJugador;

        return $this;
    }

    /**
     * Get referenciaJugador
     *
     * @return string
     */
    public function getReferenciaJugador()
    {
        return $this->referenciaJugador;
    }

    /**
     * Set tipoGol
     *
     * @param string $tipoGol
     *
     * @return Informacion
     */
    public function setTipoGol($tipoGol)
    {
        $this->tipoGol = $tipoGol;

        return $this;
    }

    /**
     * Get tipoGol
     *
     * @return string
     */
    public function getTipoGol()
    {
        return $this->tipoGol;
    }

    /**
     * Set equipo
     *
     * @param string $equipo
     *
     * @return Informacion
     */
    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return string
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * Set equipoID
     *
     * @param string $equipoID
     *
     * @return Informacion
     */
    public function setEquipoID($equipoID)
    {
        $this->equipoID = $equipoID;

        return $this;
    }

    /**
     * Get equipoID
     *
     * @return string
     */
    public function getEquipoID()
    {
        return $this->equipoID;
    }
}
