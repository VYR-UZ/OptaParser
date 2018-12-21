<?php

namespace OptaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clasificacion
 *
 * @ORM\Table(name="clasificacion")
 * @ORM\Entity(repositoryClass="OptaBundle\Repository\ClasificacionRepository")
 */
class Clasificacion
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
     * @ORM\Column(name="uID", type="string", length=15, nullable=true)
     */
    private $uID;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTackleRanking", type="string", length=10, nullable=true)
     */
    private $TotalTackleRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTackle", type="string", length=10, nullable=true)
     */
    private $TotalTackle;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalFoulsRanking", type="string", length=10, nullable=true)
     */
    private $TotalFoulsRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalFouls", type="string", length=10, nullable=true)
     */
    private $TotalFouls;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAccuratePassRanking", type="string", length=10, nullable=true)
     */
    private $TotalAccuratePassRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAccuratePass", type="string", length=10, nullable=true)
     */
    private $TotalAccuratePass;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsRanking", type="string", length=10, nullable=true)
     */
    private $TotalGoalsRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoals", type="string", length=10, nullable=true)
     */
    private $TotalGoals;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededRanking", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConceded", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConceded;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalScoringAttRanking", type="string", length=10, nullable=true)
     */
    private $TotalScoringAttRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalScoringAtt", type="string", length=10, nullable=true)
     */
    private $TotalScoringAtt;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWasFouledRanking", type="string", length=10, nullable=true)
     */
    private $TotalWasFouledRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWasFouled", type="string", length=10, nullable=true)
     */
    private $TotalWasFouled;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConcededOboxRanking", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConcededOboxRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConcededObox", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConcededObox;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededOboxRanking", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededOboxRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededObox", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededObox;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalPassRanking", type="string", length=10, nullable=true)
     */
    private $TotalPassRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalPass", type="string", length=10, nullable=true)
     */
    private $TotalPass;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWonTackleRanking", type="string", length=10, nullable=true)
     */
    private $TotalWonTackleRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWonTackle", type="string", length=10, nullable=true)
     */
    private $TotalWonTackle;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalRedCardRanking", type="string", length=10, nullable=true)
     */
    private $TotalRedCardRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalRedCard", type="string", length=10, nullable=true)
     */
    private $TotalRedCard;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededIboxRanking", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededIboxRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededIbox", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededIbox;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConcededIboxRanking", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConcededIboxRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConcededIbox", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConcededIbox;

    /**
     * @var string
     *
     * @ORM\Column(name="yellowCardRanking", type="string", length=10, nullable=true)
     */
    private $yellowCardRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalYellowCardRanking", type="string", length=10, nullable=true)
     */
    private $TotalYellowCardRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalYellowCard", type="string", length=10, nullable=true)
     */
    private $TotalYellowCard;


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
     * Set uID
     *
     * @param string $uID
     *
     * @return Clasificacion
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
     * Set totalTackleRanking
     *
     * @param string $totalTackleRanking
     *
     * @return Clasificacion
     */
    public function setTotalTackleRanking($totalTackleRanking)
    {
        $this->TotalTackleRanking = $totalTackleRanking;

        return $this;
    }

    /**
     * Get totalTackleRanking
     *
     * @return string
     */
    public function getTotalTackleRanking()
    {
        return $this->TotalTackleRanking;
    }

    /**
     * Set totalTackle
     *
     * @param string $totalTackle
     *
     * @return Clasificacion
     */
    public function setTotalTackle($totalTackle)
    {
        $this->TotalTackle = $totalTackle;

        return $this;
    }

    /**
     * Get totalTackle
     *
     * @return string
     */
    public function getTotalTackle()
    {
        return $this->TotalTackle;
    }

    /**
     * Set totalFoulsRanking
     *
     * @param string $totalFoulsRanking
     *
     * @return Clasificacion
     */
    public function setTotalFoulsRanking($totalFoulsRanking)
    {
        $this->TotalFoulsRanking = $totalFoulsRanking;

        return $this;
    }

    /**
     * Get totalFoulsRanking
     *
     * @return string
     */
    public function getTotalFoulsRanking()
    {
        return $this->TotalFoulsRanking;
    }

    /**
     * Set totalFouls
     *
     * @param string $totalFouls
     *
     * @return Clasificacion
     */
    public function setTotalFouls($totalFouls)
    {
        $this->TotalFouls = $totalFouls;

        return $this;
    }

    /**
     * Get totalFouls
     *
     * @return string
     */
    public function getTotalFouls()
    {
        return $this->TotalFouls;
    }

    /**
     * Set totalAccuratePassRanking
     *
     * @param string $totalAccuratePassRanking
     *
     * @return Clasificacion
     */
    public function setTotalAccuratePassRanking($totalAccuratePassRanking)
    {
        $this->TotalAccuratePassRanking = $totalAccuratePassRanking;

        return $this;
    }

    /**
     * Get totalAccuratePassRanking
     *
     * @return string
     */
    public function getTotalAccuratePassRanking()
    {
        return $this->TotalAccuratePassRanking;
    }

    /**
     * Set totalAccuratePass
     *
     * @param string $totalAccuratePass
     *
     * @return Clasificacion
     */
    public function setTotalAccuratePass($totalAccuratePass)
    {
        $this->TotalAccuratePass = $totalAccuratePass;

        return $this;
    }

    /**
     * Get totalAccuratePass
     *
     * @return string
     */
    public function getTotalAccuratePass()
    {
        return $this->TotalAccuratePass;
    }

    /**
     * Set totalGoalsRanking
     *
     * @param string $totalGoalsRanking
     *
     * @return Clasificacion
     */
    public function setTotalGoalsRanking($totalGoalsRanking)
    {
        $this->TotalGoalsRanking = $totalGoalsRanking;

        return $this;
    }

    /**
     * Get totalGoalsRanking
     *
     * @return string
     */
    public function getTotalGoalsRanking()
    {
        return $this->TotalGoalsRanking;
    }

    /**
     * Set totalGoals
     *
     * @param string $totalGoals
     *
     * @return Clasificacion
     */
    public function setTotalGoals($totalGoals)
    {
        $this->TotalGoals = $totalGoals;

        return $this;
    }

    /**
     * Get totalGoals
     *
     * @return string
     */
    public function getTotalGoals()
    {
        return $this->TotalGoals;
    }

    /**
     * Set totalGoalsConcededRanking
     *
     * @param string $totalGoalsConcededRanking
     *
     * @return Clasificacion
     */
    public function setTotalGoalsConcededRanking($totalGoalsConcededRanking)
    {
        $this->TotalGoalsConcededRanking = $totalGoalsConcededRanking;

        return $this;
    }

    /**
     * Get totalGoalsConcededRanking
     *
     * @return string
     */
    public function getTotalGoalsConcededRanking()
    {
        return $this->TotalGoalsConcededRanking;
    }

    /**
     * Set totalGoalsConceded
     *
     * @param string $totalGoalsConceded
     *
     * @return Clasificacion
     */
    public function setTotalGoalsConceded($totalGoalsConceded)
    {
        $this->TotalGoalsConceded = $totalGoalsConceded;

        return $this;
    }

    /**
     * Get totalGoalsConceded
     *
     * @return string
     */
    public function getTotalGoalsConceded()
    {
        return $this->TotalGoalsConceded;
    }

    /**
     * Set totalScoringAttRanking
     *
     * @param string $totalScoringAttRanking
     *
     * @return Clasificacion
     */
    public function setTotalScoringAttRanking($totalScoringAttRanking)
    {
        $this->TotalScoringAttRanking = $totalScoringAttRanking;

        return $this;
    }

    /**
     * Get totalScoringAttRanking
     *
     * @return string
     */
    public function getTotalScoringAttRanking()
    {
        return $this->TotalScoringAttRanking;
    }

    /**
     * Set totalScoringAtt
     *
     * @param string $totalScoringAtt
     *
     * @return Clasificacion
     */
    public function setTotalScoringAtt($totalScoringAtt)
    {
        $this->TotalScoringAtt = $totalScoringAtt;

        return $this;
    }

    /**
     * Get totalScoringAtt
     *
     * @return string
     */
    public function getTotalScoringAtt()
    {
        return $this->TotalScoringAtt;
    }

    /**
     * Set totalWasFouledRanking
     *
     * @param string $totalWasFouledRanking
     *
     * @return Clasificacion
     */
    public function setTotalWasFouledRanking($totalWasFouledRanking)
    {
        $this->TotalWasFouledRanking = $totalWasFouledRanking;

        return $this;
    }

    /**
     * Get totalWasFouledRanking
     *
     * @return string
     */
    public function getTotalWasFouledRanking()
    {
        return $this->TotalWasFouledRanking;
    }

    /**
     * Set totalWasFouled
     *
     * @param string $totalWasFouled
     *
     * @return Clasificacion
     */
    public function setTotalWasFouled($totalWasFouled)
    {
        $this->TotalWasFouled = $totalWasFouled;

        return $this;
    }

    /**
     * Get totalWasFouled
     *
     * @return string
     */
    public function getTotalWasFouled()
    {
        return $this->TotalWasFouled;
    }

    /**
     * Set totalAttemptsConcededOboxRanking
     *
     * @param string $totalAttemptsConcededOboxRanking
     *
     * @return Clasificacion
     */
    public function setTotalAttemptsConcededOboxRanking($totalAttemptsConcededOboxRanking)
    {
        $this->TotalAttemptsConcededOboxRanking = $totalAttemptsConcededOboxRanking;

        return $this;
    }

    /**
     * Get totalAttemptsConcededOboxRanking
     *
     * @return string
     */
    public function getTotalAttemptsConcededOboxRanking()
    {
        return $this->TotalAttemptsConcededOboxRanking;
    }

    /**
     * Set totalAttemptsConcededObox
     *
     * @param string $totalAttemptsConcededObox
     *
     * @return Clasificacion
     */
    public function setTotalAttemptsConcededObox($totalAttemptsConcededObox)
    {
        $this->TotalAttemptsConcededObox = $totalAttemptsConcededObox;

        return $this;
    }

    /**
     * Get totalAttemptsConcededObox
     *
     * @return string
     */
    public function getTotalAttemptsConcededObox()
    {
        return $this->TotalAttemptsConcededObox;
    }

    /**
     * Set totalGoalsConcededOboxRanking
     *
     * @param string $totalGoalsConcededOboxRanking
     *
     * @return Clasificacion
     */
    public function setTotalGoalsConcededOboxRanking($totalGoalsConcededOboxRanking)
    {
        $this->TotalGoalsConcededOboxRanking = $totalGoalsConcededOboxRanking;

        return $this;
    }

    /**
     * Get totalGoalsConcededOboxRanking
     *
     * @return string
     */
    public function getTotalGoalsConcededOboxRanking()
    {
        return $this->TotalGoalsConcededOboxRanking;
    }

    /**
     * Set totalGoalsConcededObox
     *
     * @param string $totalGoalsConcededObox
     *
     * @return Clasificacion
     */
    public function setTotalGoalsConcededObox($totalGoalsConcededObox)
    {
        $this->TotalGoalsConcededObox = $totalGoalsConcededObox;

        return $this;
    }

    /**
     * Get totalGoalsConcededObox
     *
     * @return string
     */
    public function getTotalGoalsConcededObox()
    {
        return $this->TotalGoalsConcededObox;
    }

    /**
     * Set totalPassRanking
     *
     * @param string $totalPassRanking
     *
     * @return Clasificacion
     */
    public function setTotalPassRanking($totalPassRanking)
    {
        $this->TotalPassRanking = $totalPassRanking;

        return $this;
    }

    /**
     * Get totalPassRanking
     *
     * @return string
     */
    public function getTotalPassRanking()
    {
        return $this->TotalPassRanking;
    }

    /**
     * Set totalPass
     *
     * @param string $totalPass
     *
     * @return Clasificacion
     */
    public function setTotalPass($totalPass)
    {
        $this->TotalPass = $totalPass;

        return $this;
    }

    /**
     * Get totalPass
     *
     * @return string
     */
    public function getTotalPass()
    {
        return $this->TotalPass;
    }

    /**
     * Set totalWonTackleRanking
     *
     * @param string $totalWonTackleRanking
     *
     * @return Clasificacion
     */
    public function setTotalWonTackleRanking($totalWonTackleRanking)
    {
        $this->TotalWonTackleRanking = $totalWonTackleRanking;

        return $this;
    }

    /**
     * Get totalWonTackleRanking
     *
     * @return string
     */
    public function getTotalWonTackleRanking()
    {
        return $this->TotalWonTackleRanking;
    }

    /**
     * Set totalWonTackle
     *
     * @param string $totalWonTackle
     *
     * @return Clasificacion
     */
    public function setTotalWonTackle($totalWonTackle)
    {
        $this->TotalWonTackle = $totalWonTackle;

        return $this;
    }

    /**
     * Get totalWonTackle
     *
     * @return string
     */
    public function getTotalWonTackle()
    {
        return $this->TotalWonTackle;
    }

    /**
     * Set totalRedCardRanking
     *
     * @param string $totalRedCardRanking
     *
     * @return Clasificacion
     */
    public function setTotalRedCardRanking($totalRedCardRanking)
    {
        $this->TotalRedCardRanking = $totalRedCardRanking;

        return $this;
    }

    /**
     * Get totalRedCardRanking
     *
     * @return string
     */
    public function getTotalRedCardRanking()
    {
        return $this->TotalRedCardRanking;
    }

    /**
     * Set totalRedCard
     *
     * @param string $totalRedCard
     *
     * @return Clasificacion
     */
    public function setTotalRedCard($totalRedCard)
    {
        $this->TotalRedCard = $totalRedCard;

        return $this;
    }

    /**
     * Get totalRedCard
     *
     * @return string
     */
    public function getTotalRedCard()
    {
        return $this->TotalRedCard;
    }

    /**
     * Set totalGoalsConcededIboxRanking
     *
     * @param string $totalGoalsConcededIboxRanking
     *
     * @return Clasificacion
     */
    public function setTotalGoalsConcededIboxRanking($totalGoalsConcededIboxRanking)
    {
        $this->TotalGoalsConcededIboxRanking = $totalGoalsConcededIboxRanking;

        return $this;
    }

    /**
     * Get totalGoalsConcededIboxRanking
     *
     * @return string
     */
    public function getTotalGoalsConcededIboxRanking()
    {
        return $this->TotalGoalsConcededIboxRanking;
    }

    /**
     * Set totalGoalsConcededIbox
     *
     * @param string $totalGoalsConcededIbox
     *
     * @return Clasificacion
     */
    public function setTotalGoalsConcededIbox($totalGoalsConcededIbox)
    {
        $this->TotalGoalsConcededIbox = $totalGoalsConcededIbox;

        return $this;
    }

    /**
     * Get totalGoalsConcededIbox
     *
     * @return string
     */
    public function getTotalGoalsConcededIbox()
    {
        return $this->TotalGoalsConcededIbox;
    }

    /**
     * Set totalAttemptsConcededIboxRanking
     *
     * @param string $totalAttemptsConcededIboxRanking
     *
     * @return Clasificacion
     */
    public function setTotalAttemptsConcededIboxRanking($totalAttemptsConcededIboxRanking)
    {
        $this->TotalAttemptsConcededIboxRanking = $totalAttemptsConcededIboxRanking;

        return $this;
    }

    /**
     * Get totalAttemptsConcededIboxRanking
     *
     * @return string
     */
    public function getTotalAttemptsConcededIboxRanking()
    {
        return $this->TotalAttemptsConcededIboxRanking;
    }

    /**
     * Set totalAttemptsConcededIbox
     *
     * @param string $totalAttemptsConcededIbox
     *
     * @return Clasificacion
     */
    public function setTotalAttemptsConcededIbox($totalAttemptsConcededIbox)
    {
        $this->TotalAttemptsConcededIbox = $totalAttemptsConcededIbox;

        return $this;
    }

    /**
     * Get totalAttemptsConcededIbox
     *
     * @return string
     */
    public function getTotalAttemptsConcededIbox()
    {
        return $this->TotalAttemptsConcededIbox;
    }

    /**
     * Set yellowCardRanking
     *
     * @param string $yellowCardRanking
     *
     * @return Clasificacion
     */
    public function setYellowCardRanking($yellowCardRanking)
    {
        $this->yellowCardRanking = $yellowCardRanking;

        return $this;
    }

    /**
     * Get yellowCardRanking
     *
     * @return string
     */
    public function getYellowCardRanking()
    {
        return $this->yellowCardRanking;
    }

    /**
     * Set totalYellowCardRanking
     *
     * @param string $totalYellowCardRanking
     *
     * @return Clasificacion
     */
    public function setTotalYellowCardRanking($totalYellowCardRanking)
    {
        $this->TotalYellowCardRanking = $totalYellowCardRanking;

        return $this;
    }

    /**
     * Get totalYellowCardRanking
     *
     * @return string
     */
    public function getTotalYellowCardRanking()
    {
        return $this->TotalYellowCardRanking;
    }

    /**
     * Set totalYellowCard
     *
     * @param string $totalYellowCard
     *
     * @return Clasificacion
     */
    public function setTotalYellowCard($totalYellowCard)
    {
        $this->TotalYellowCard = $totalYellowCard;

        return $this;
    }

    /**
     * Get totalYellowCard
     *
     * @return string
     */
    public function getTotalYellowCard()
    {
        return $this->TotalYellowCard;
    }
}
