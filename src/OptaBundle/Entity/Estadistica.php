<?php

namespace OptaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadistica
 *
 * @ORM\Table(name="estadistica")
 * @ORM\Entity(repositoryClass="OptaBundle\Repository\EstadisticaRepository")
 */
class Estadistica
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
     * @ORM\Column(name="currentRound", type="string", length=10)
     */
    private $currentRound;

    /**
     * @var string
     *
     * @ORM\Column(name="round", type="string", length=10)
     */
    private $round;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="compcode", type="string", length=10)
     */
    private $compcode;

    /**
     * @var string
     *
     * @ORM\Column(name="compId", type="string", length=10)
     */
    private $compId;

    /**
     * @var string
     *
     * @ORM\Column(name="compName", type="string", length=20)
     */
    private $compName;

    /**
     * @var string
     *
     * @ORM\Column(name="systemId", type="string", length=10)
     */
    private $systemId;

    /**
     * @var string
     *
     * @ORM\Column(name="seasonId", type="string", length=10)
     */
    private $seasonId;

    /**
     * @var string
     *
     * @ORM\Column(name="seasonName", type="string", length=20)
     */
    private $seasonName;

    /**
     * @var string
     *
     * @ORM\Column(name="timestamp", type="string", length=20)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="matchDay", type="string", length=10)
     */
    private $matchDay;

    /**
     * @var string
     *
     * @ORM\Column(name="teamRef", type="string", length=10)
     */
    private $teamRef;

    /**
     * @var string
     *
     * @ORM\Column(name="sType", type="string", length=10)
     */
    private $sType;

    /**
     * @var string
     *
     * @ORM\Column(name="against", type="string", length=10)
     */
    private $against;

    /**
     * @var string
     *
     * @ORM\Column(name="awayAgainst", type="string", length=10)
     */
    private $awayAgainst;

    /**
     * @var string
     *
     * @ORM\Column(name="awayDrawn", type="string", length=10)
     */
    private $awayDrawn;

    /**
     * @var string
     *
     * @ORM\Column(name="awayFor", type="string", length=10)
     */
    private $awayFor;

    /**
     * @var string
     *
     * @ORM\Column(name="awayLost", type="string", length=10)
     */
    private $awayLost;

    /**
     * @var string
     *
     * @ORM\Column(name="awayPlayed", type="string", length=10)
     */
    private $awayPlayed;

    /**
     * @var string
     *
     * @ORM\Column(name="awayPoinst", type="string", length=10)
     */
    private $awayPoinst;

    /**
     * @var string
     *
     * @ORM\Column(name="awayPosition", type="string", length=10)
     */
    private $awayPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="awayWon", type="string", length=10)
     */
    private $awayWon;

    /**
     * @var string
     *
     * @ORM\Column(name="drawn", type="string", length=10)
     */
    private $drawn;

    /**
     * @var string
     *
     * @ORM\Column(name="para", type="string", length=10)
     */
    private $para;

    /**
     * @var string
     *
     * @ORM\Column(name="homeAgainst", type="string", length=10)
     */
    private $homeAgainst;

    
     /**
     * @var string
     *
     * @ORM\Column(name="homeDrawn", type="string", length=10)
     */
    private $homeDrawn;

      
     /**
     * @var string
     *
     * @ORM\Column(name="homeFor", type="string", length=10)
     */
    private $homeFor;

    /**
     * @var string
     *
     * @ORM\Column(name="homeLost", type="string", length=10)
     */
    private $homeLost;

     /**
     * @var string
     *
     * @ORM\Column(name="homePlayed", type="string", length=10)
     */
    private $homePlayed;

     /**
     * @var string
     *
     * @ORM\Column(name="homePoinst", type="string", length=10)
     */
    private $homePoinst;

     /**
     * @var string
     *
     * @ORM\Column(name="homePosition", type="string", length=10)
     */
    private $homePosition;

     /**
     * @var string
     *
     * @ORM\Column(name="homeWon", type="string", length=10)
     */
    private $homeWon;

     /**
     * @var string
     *
     * @ORM\Column(name="perdido", type="string", length=10)
     */
    private $perdido;

     /**
     * @var string
     *
     * @ORM\Column(name="played", type="string", length=10)
     */
    private $played;

     /**
     * @var string
     *
     * @ORM\Column(name="poinst", type="string", length=10)
     */
    private $poinst;

     /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=10)
     */
    private $position;

     /**
     * @var string
     *
     * @ORM\Column(name="dayPosition", type="string", length=10)
     */
    private $dayPosition;


     /**
     * @var string
     *
     * @ORM\Column(name="won", type="string", length=10)
     */
    private $won;

     /**
     * @var string
     *
     * @ORM\Column(name="qualify", type="string", length=10)
     */
    private $qualify;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=20)
     */
    private $method;

    /**
     * @var string
     *
     * @ORM\Column(name="teamId", type="string", length=10)
     */
    private $teamId;

    /**
     * @var string
     *
     * @ORM\Column(name="teamName", type="string", length=10)
     */
    private $teamName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=10)
     */
    private $name;


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
     * Set currentRound
     *
     * @param string $currentRound
     *
     * @return Estadistica
     */
    public function setCurrentRound($currentRound)
    {
        $this->currentRound = $currentRound;

        return $this;
    }

    /**
     * Get currentRound
     *
     * @return string
     */
    public function getCurrentRound()
    {
        return $this->currentRound;
    }

    /**
     * Set round
     *
     * @param string $round
     *
     * @return Estadistica
     */
    public function setRound($round)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * Get round
     *
     * @return string
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Estadistica
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
     * Set compcode
     *
     * @param string $compcode
     *
     * @return Estadistica
     */
    public function setCompcode($compcode)
    {
        $this->compcode = $compcode;

        return $this;
    }

    /**
     * Get compcode
     *
     * @return string
     */
    public function getCompcode()
    {
        return $this->compcode;
    }

    /**
     * Set compId
     *
     * @param string $compId
     *
     * @return Estadistica
     */
    public function setCompId($compId)
    {
        $this->compId = $compId;

        return $this;
    }

    /**
     * Get compId
     *
     * @return string
     */
    public function getCompId()
    {
        return $this->compId;
    }

    /**
     * Set compName
     *
     * @param string $compName
     *
     * @return Estadistica
     */
    public function setCompName($compName)
    {
        $this->compName = $compName;

        return $this;
    }

    /**
     * Get compName
     *
     * @return string
     */
    public function getCompName()
    {
        return $this->compName;
    }

    /**
     * Set systemId
     *
     * @param string $systemId
     *
     * @return Estadistica
     */
    public function setSystemId($systemId)
    {
        $this->systemId = $systemId;

        return $this;
    }

    /**
     * Get systemId
     *
     * @return string
     */
    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * Set seasonId
     *
     * @param string $seasonId
     *
     * @return Estadistica
     */
    public function setSeasonId($seasonId)
    {
        $this->seasonId = $seasonId;

        return $this;
    }

    /**
     * Get seasonId
     *
     * @return string
     */
    public function getSeasonId()
    {
        return $this->seasonId;
    }

    /**
     * Set seasonName
     *
     * @param string $seasonName
     *
     * @return Estadistica
     */
    public function setSeasonName($seasonName)
    {
        $this->seasonName = $seasonName;

        return $this;
    }

    /**
     * Get seasonName
     *
     * @return string
     */
    public function getSeasonName()
    {
        return $this->seasonName;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     *
     * @return Estadistica
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
     * Set matchDay
     *
     * @param string $matchDay
     *
     * @return Estadistica
     */
    public function setMatchDay($matchDay)
    {
        $this->matchDay = $matchDay;

        return $this;
    }

    /**
     * Get matchDay
     *
     * @return string
     */
    public function getMatchDay()
    {
        return $this->matchDay;
    }

    /**
     * Set teamRef
     *
     * @param string $teamRef
     *
     * @return Estadistica
     */
    public function setTeamRef($teamRef)
    {
        $this->teamRef = $teamRef;

        return $this;
    }

    /**
     * Get teamRef
     *
     * @return string
     */
    public function getTeamRef()
    {
        return $this->teamRef;
    }

    /**
     * Set sType
     *
     * @param string $sType
     *
     * @return Estadistica
     */
    public function setSType($sType)
    {
        $this->sType = $sType;

        return $this;
    }

    /**
     * Get sType
     *
     * @return string
     */
    public function getSType()
    {
        return $this->sType;
    }

    /**
     * Set against
     *
     * @param string $against
     *
     * @return Estadistica
     */
    public function setAgainst($against)
    {
        $this->against = $against;

        return $this;
    }

    /**
     * Get against
     *
     * @return string
     */
    public function getAgainst()
    {
        return $this->against;
    }

    /**
     * Set awayAgainst
     *
     * @param string $awayAgainst
     *
     * @return Estadistica
     */
    public function setAwayAgainst($awayAgainst)
    {
        $this->awayAgainst = $awayAgainst;

        return $this;
    }

    /**
     * Get awayAgainst
     *
     * @return string
     */
    public function getAwayAgainst()
    {
        return $this->awayAgainst;
    }

    /**
     * Set awayDrawn
     *
     * @param string $awayDrawn
     *
     * @return Estadistica
     */
    public function setAwayDrawn($awayDrawn)
    {
        $this->awayDrawn = $awayDrawn;

        return $this;
    }

    /**
     * Get awayDrawn
     *
     * @return string
     */
    public function getAwayDrawn()
    {
        return $this->awayDrawn;
    }

    /**
     * Set awayFor
     *
     * @param string $awayFor
     *
     * @return Estadistica
     */
    public function setAwayFor($awayFor)
    {
        $this->awayFor = $awayFor;

        return $this;
    }

    /**
     * Get awayFor
     *
     * @return string
     */
    public function getAwayFor()
    {
        return $this->awayFor;
    }

    /**
     * Set awayLost
     *
     * @param string $awayLost
     *
     * @return Estadistica
     */
    public function setAwayLost($awayLost)
    {
        $this->awayLost = $awayLost;

        return $this;
    }

    /**
     * Get awayLost
     *
     * @return string
     */
    public function getAwayLost()
    {
        return $this->awayLost;
    }

    /**
     * Set awayPlayed
     *
     * @param string $awayPlayed
     *
     * @return Estadistica
     */
    public function setAwayPlayed($awayPlayed)
    {
        $this->awayPlayed = $awayPlayed;

        return $this;
    }

    /**
     * Get awayPlayed
     *
     * @return string
     */
    public function getAwayPlayed()
    {
        return $this->awayPlayed;
    }

    /**
     * Set awayPoinst
     *
     * @param string $awayPoinst
     *
     * @return Estadistica
     */
    public function setAwayPoinst($awayPoinst)
    {
        $this->awayPoinst = $awayPoinst;

        return $this;
    }

    /**
     * Get awayPoinst
     *
     * @return string
     */
    public function getAwayPoinst()
    {
        return $this->awayPoinst;
    }

    /**
     * Set awayPosition
     *
     * @param string $awayPosition
     *
     * @return Estadistica
     */
    public function setAwayPosition($awayPosition)
    {
        $this->awayPosition = $awayPosition;

        return $this;
    }

    /**
     * Get awayPosition
     *
     * @return string
     */
    public function getAwayPosition()
    {
        return $this->awayPosition;
    }

    /**
     * Set awayWon
     *
     * @param string $awayWon
     *
     * @return Estadistica
     */
    public function setAwayWon($awayWon)
    {
        $this->awayWon = $awayWon;

        return $this;
    }

    /**
     * Get awayWon
     *
     * @return string
     */
    public function getAwayWon()
    {
        return $this->awayWon;
    }

    /**
     * Set drawn
     *
     * @param string $drawn
     *
     * @return Estadistica
     */
    public function setDrawn($drawn)
    {
        $this->drawn = $drawn;

        return $this;
    }

    /**
     * Get drawn
     *
     * @return string
     */
    public function getDrawn()
    {
        return $this->drawn;
    }

    /**
     * Set para
     *
     * @param string $para
     *
     * @return Estadistica
     */
    public function setPara($para)
    {
        $this->para = $para;

        return $this;
    }

    /**
     * Get para
     *
     * @return string
     */
    public function getPara()
    {
        return $this->para;
    }

    /**
     * Set homeAgainst
     *
     * @param string $homeAgainst
     *
     * @return Estadistica
     */
    public function setHomeAgainst($homeAgainst)
    {
        $this->homeAgainst = $homeAgainst;

        return $this;
    }

    /**
     * Get homeAgainst
     *
     * @return string
     */
    public function getHomeAgainst()
    {
        return $this->homeAgainst;
    }

    /**
     * Set homeDrawn
     *
     * @param string $homeDrawn
     *
     * @return Estadistica
     */
    public function setHomeDrawn($homeDrawn)
    {
        $this->homeDrawn = $homeDrawn;

        return $this;
    }

    /**
     * Get homeDrawn
     *
     * @return string
     */
    public function getHomeDrawn()
    {
        return $this->homeDrawn;
    }

    /**
     * Set homeFor
     *
     * @param string $homeFor
     *
     * @return Estadistica
     */
    public function setHomeFor($homeFor)
    {
        $this->homeFor = $homeFor;

        return $this;
    }

    /**
     * Get homeFor
     *
     * @return string
     */
    public function getHomeFor()
    {
        return $this->homeFor;
    }

    /**
     * Set homeLost
     *
     * @param string $homeLost
     *
     * @return Estadistica
     */
    public function setHomeLost($homeLost)
    {
        $this->homeLost = $homeLost;

        return $this;
    }

    /**
     * Get homeLost
     *
     * @return string
     */
    public function getHomeLost()
    {
        return $this->homeLost;
    }

    /**
     * Set homePlayed
     *
     * @param string $homePlayed
     *
     * @return Estadistica
     */
    public function setHomePlayed($homePlayed)
    {
        $this->homePlayed = $homePlayed;

        return $this;
    }

    /**
     * Get homePlayed
     *
     * @return string
     */
    public function getHomePlayed()
    {
        return $this->homePlayed;
    }

    /**
     * Set homePoinst
     *
     * @param string $homePoinst
     *
     * @return Estadistica
     */
    public function setHomePoinst($homePoinst)
    {
        $this->homePoinst = $homePoinst;

        return $this;
    }

    /**
     * Get homePoinst
     *
     * @return string
     */
    public function getHomePoinst()
    {
        return $this->homePoinst;
    }

    /**
     * Set homePosition
     *
     * @param string $homePosition
     *
     * @return Estadistica
     */
    public function setHomePosition($homePosition)
    {
        $this->homePosition = $homePosition;

        return $this;
    }

    /**
     * Get homePosition
     *
     * @return string
     */
    public function getHomePosition()
    {
        return $this->homePosition;
    }

    /**
     * Set homeWon
     *
     * @param string $homeWon
     *
     * @return Estadistica
     */
    public function setHomeWon($homeWon)
    {
        $this->homeWon = $homeWon;

        return $this;
    }

    /**
     * Get homeWon
     *
     * @return string
     */
    public function getHomeWon()
    {
        return $this->homeWon;
    }

    /**
     * Set perdido
     *
     * @param string $perdido
     *
     * @return Estadistica
     */
    public function setPerdido($perdido)
    {
        $this->perdido = $perdido;

        return $this;
    }

    /**
     * Get perdido
     *
     * @return string
     */
    public function getPerdido()
    {
        return $this->perdido;
    }

    /**
     * Set played
     *
     * @param string $played
     *
     * @return Estadistica
     */
    public function setPlayed($played)
    {
        $this->played = $played;

        return $this;
    }

    /**
     * Get played
     *
     * @return string
     */
    public function getPlayed()
    {
        return $this->played;
    }

    /**
     * Set poinst
     *
     * @param string $poinst
     *
     * @return Estadistica
     */
    public function setPoinst($poinst)
    {
        $this->poinst = $poinst;

        return $this;
    }

    /**
     * Get poinst
     *
     * @return string
     */
    public function getPoinst()
    {
        return $this->poinst;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Estadistica
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set dayPosition
     *
     * @param string $dayPosition
     *
     * @return Estadistica
     */
    public function setDayPosition($dayPosition)
    {
        $this->dayPosition = $dayPosition;

        return $this;
    }

    /**
     * Get dayPosition
     *
     * @return string
     */
    public function getDayPosition()
    {
        return $this->dayPosition;
    }

    /**
     * Set won
     *
     * @param string $won
     *
     * @return Estadistica
     */
    public function setWon($won)
    {
        $this->won = $won;

        return $this;
    }

    /**
     * Get won
     *
     * @return string
     */
    public function getWon()
    {
        return $this->won;
    }

    /**
     * Set qualify
     *
     * @param string $qualify
     *
     * @return Estadistica
     */
    public function setQualify($qualify)
    {
        $this->qualify = $qualify;

        return $this;
    }

    /**
     * Get qualify
     *
     * @return string
     */
    public function getQualify()
    {
        return $this->qualify;
    }

    /**
     * Set method
     *
     * @param string $method
     *
     * @return Estadistica
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set teamId
     *
     * @param string $teamId
     *
     * @return Estadistica
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;

        return $this;
    }

    /**
     * Get teamId
     *
     * @return string
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set teamName
     *
     * @param string $teamName
     *
     * @return Estadistica
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;

        return $this;
    }

    /**
     * Get teamName
     *
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Estadistica
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
}
