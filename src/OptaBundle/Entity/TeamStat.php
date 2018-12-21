<?php

namespace OptaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamStat
 *
 * @ORM\Table(name="TeamStat")
 * @ORM\Entity(repositoryClass="OptaBundle\Repository\TeamStatRepository")
 */
class TeamStat
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
     * @ORM\Column(name="TotalDuelsWon", type="string", length=10, nullable=true)
     */
    private $TotalDuelsWon;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalBlockedScoringAtt", type="string", length=10, nullable=true)
     */
    private $TotalBlockedScoringAtt;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalCleanSheet", type="string", length=10, nullable=true)
     */
    private $TotalCleanSheet;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalFoulsRanking", type="string", length=10, nullable=true)
     */
    private $TotalFoulsRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAccuratePassRanking", type="string", length=10, nullable=true)
     */
    private $TotalAccuratePassRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTakeonRanking", type="string", length=10, nullable=true)
     */
    private $TotalTakeonRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalPassRanking", type="string", length=10, nullable=true)
     */
    private $TotalPassRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalLostCornersRanking", type="string", length=10, nullable=true)
     */
    private $TotalLostCornersRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConcededRanking", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConcededRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWasFouled", type="string", length=10, nullable=true)
     */
    private $TotalWasFouled;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTakeon", type="string", length=10, nullable=true)
     */
    private $TotalTakeon;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWonCornersRanking", type="string", length=10, nullable=true)
     */
    private $TotalWonCornersRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTackleRanking", type="string", length=10, nullable=true)
     */
    private $TotalTackleRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalOntargetScoringAtt", type="string", length=10, nullable=true)
     */
    private $TotalOntargetScoringAtt;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWasFouledRanking", type="string", length=10, nullable=true)
     */
    private $TotalWasFouledRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalYellowCard", type="string", length=10, nullable=true)
     */
    private $TotalYellowCard;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalConversionRanking", type="string", length=10, nullable=true)
     */
    private $TotalGoalConversionRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTacklePct", type="string", length=10, nullable=true)
     */
    private $TotalTacklePct;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalDuelsLost", type="string", length=10, nullable=true)
     */
    private $TotalDuelsLost;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededOboxRanking", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededOboxRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWonTackleRanking", type="string", length=10, nullable=true)
     */
    private $TotalWonTackleRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalDuelsLostRanking", type="string", length=10, nullable=true)
     */
    private $TotalDuelsLostRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTouchesInOppositionBox", type="string", length=10, nullable=true)
     */
    private $TotalTouchesInOppositionBox;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTouchesInOppositionBoxRanking", type="string", length=10, nullable=true)
     */
    private $TotalTouchesInOppositionBoxRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalCleanSheetRanking", type="string", length=10, nullable=true)
     */
    private $TotalCleanSheetRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConceded", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConceded;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalCrossPct", type="string", length=10, nullable=true)
     */
    private $TotalCrossPct;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededIbox", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededIbox;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededIboxRanking", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededIboxRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalCrossPctRanking", type="string", length=10, nullable=true)
     */
    private $TotalCrossPctRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalBlockedScoringAttRanking", type="string", length=10, nullable=true)
     */
    private $TotalBlockedScoringAttRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAccuratePass", type="string", length=15, nullable=true)
     */
    private $TotalAccuratePass;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTackle", type="string", length=10, nullable=true)
     */
    private $TotalTackle;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalOffside", type="string", length=10, nullable=true)
     */
    private $TotalOffside;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalLostCorners", type="string", length=10, nullable=true)
     */
    private $TotalLostCorners;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAccurateCross", type="string", length=10, nullable=true)
     */
    private $TotalAccurateCross;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConceded ", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConceded ;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWonTackle", type="string", length=10, nullable=true)
     */
    private $TotalWonTackle;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConcededObox", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConcededObox;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalClaim", type="string", length=10, nullable=true)
     */
    private $TotalClaim;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalPassPct", type="string", length=10, nullable=true)
     */
    private $TotalPassPct;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsRanking", type="string", length=10, nullable=true)
     */
    private $TotalGoalsRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalOffsideRanking", type="string", length=10, nullable=true)
     */
    private $TotalOffsideRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededRanking", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalScoringAccuracy", type="string", length=10, nullable=true)
     */
    private $TotalScoringAccuracy;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalCardRanking", type="string", length=10, nullable=true)
     */
    private $TotalCardRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalContest", type="string", length=10, nullable=true)
     */
    private $TotalContest;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalConversion", type="string", length=10, nullable=true)
     */
    private $TotalGoalConversion;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalClearance", type="string", length=10, nullable=true)
     */
    private $TotalClearance;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalOntargetScoringAttRanking", type="string", length=10, nullable=true)
     */
    private $TotalOntargetScoringAttRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConcededOboxRanking", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConcededOboxRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalCross", type="string", length=10, nullable=true)
     */
    private $TotalCross;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConcededIbox", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConcededIbox;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalRedCard", type="string", length=10, nullable=true)
     */
    private $TotalRedCard;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoals", type="string", length=10, nullable=true)
     */
    private $TotalGoals;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalScoringAttRanking", type="string", length=10, nullable=true)
     */
    private $TotalScoringAttRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalClaimRanking", type="string", length=10, nullable=true)
     */
    private $TotalClaimRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalWonCorners", type="string", length=10, nullable=true)
     */
    private $TotalWonCorners;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalCrossRanking", type="string", length=10, nullable=true)
     */
    private $TotalCrossRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGoalsConcededObox", type="string", length=10, nullable=true)
     */
    private $TotalGoalsConcededObox;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalFouls", type="string", length=10, nullable=true)
     */
    private $TotalFouls;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGames", type="string", length=10, nullable=true)
     */
    private $TotalGames;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalClearanceRanking", type="string", length=10, nullable=true)
     */
    private $TotalClearanceRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalDuelsWonRanking", type="string", length=10, nullable=true)
     */
    private $TotalDuelsWonRanking;

        /**
     * @var string
     *
     * @ORM\Column(name="TotalRedCardRanking", type="string", length=10, nullable=true)
     */
    private $TotalRedCardRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalPassPctRanking", type="string", length=10, nullable=true)
     */
    private $TotalPassPctRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAccurateCrossRanking", type="string", length=10, nullable=true)
     */
    private $TotalAccurateCrossRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalPass", type="string", length=10, nullable=true)
     */
    private $TotalPass;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalAttemptsConcededIboxRanking", type="string", length=10, nullable=true)
     */
    private $TotalAttemptsConcededIboxRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalContestRanking", type="string", length=10, nullable=true)
     */
    private $TotalContestRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalGamesRanking", type="string", length=10, nullable=true)
     */
    private $TotalGamesRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalCard", type="string", length=10, nullable=true)
     */
    private $TotalCard;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalScoringAccuracyRanking", type="string", length=10, nullable=true)
     */
    private $TotalScoringAccuracyRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalYellowCardRanking", type="string", length=10, nullable=true)
     */
    private $TotalYellowCardRanking;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalScoringAtt", type="string", length=10, nullable=true)
     */
    private $TotalScoringAtt;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalTacklePctRanking", type="string", length=10, nullable=true)
     */
    private $TotalTacklePctRanking;

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
     * @return TeamStat
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
     * Set totalDuelsWon
     *
     * @param string $totalDuelsWon
     *
     * @return TeamStat
     */
    public function setTotalDuelsWon($totalDuelsWon)
    {
        $this->TotalDuelsWon = $totalDuelsWon;

        return $this;
    }

    /**
     * Get totalDuelsWon
     *
     * @return string
     */
    public function getTotalDuelsWon()
    {
        return $this->TotalDuelsWon;
    }

    /**
     * Set totalBlockedScoringAtt
     *
     * @param string $totalBlockedScoringAtt
     *
     * @return TeamStat
     */
    public function setTotalBlockedScoringAtt($totalBlockedScoringAtt)
    {
        $this->TotalBlockedScoringAtt = $totalBlockedScoringAtt;

        return $this;
    }

    /**
     * Get totalBlockedScoringAtt
     *
     * @return string
     */
    public function getTotalBlockedScoringAtt()
    {
        return $this->TotalBlockedScoringAtt;
    }

    /**
     * Set totalCleanSheet
     *
     * @param string $totalCleanSheet
     *
     * @return TeamStat
     */
    public function setTotalCleanSheet($totalCleanSheet)
    {
        $this->TotalCleanSheet = $totalCleanSheet;

        return $this;
    }

    /**
     * Get totalCleanSheet
     *
     * @return string
     */
    public function getTotalCleanSheet()
    {
        return $this->TotalCleanSheet;
    }

    /**
     * Set totalFoulsRanking
     *
     * @param string $totalFoulsRanking
     *
     * @return TeamStat
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
     * Set totalAccuratePassRanking
     *
     * @param string $totalAccuratePassRanking
     *
     * @return TeamStat
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
     * Set totalTakeonRanking
     *
     * @param string $totalTakeonRanking
     *
     * @return TeamStat
     */
    public function setTotalTakeonRanking($totalTakeonRanking)
    {
        $this->TotalTakeonRanking = $totalTakeonRanking;

        return $this;
    }

    /**
     * Get totalTakeonRanking
     *
     * @return string
     */
    public function getTotalTakeonRanking()
    {
        return $this->TotalTakeonRanking;
    }

    /**
     * Set totalPassRanking
     *
     * @param string $totalPassRanking
     *
     * @return TeamStat
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
     * Set totalLostCornersRanking
     *
     * @param string $totalLostCornersRanking
     *
     * @return TeamStat
     */
    public function setTotalLostCornersRanking($totalLostCornersRanking)
    {
        $this->TotalLostCornersRanking = $totalLostCornersRanking;

        return $this;
    }

    /**
     * Get totalLostCornersRanking
     *
     * @return string
     */
    public function getTotalLostCornersRanking()
    {
        return $this->TotalLostCornersRanking;
    }

    /**
     * Set totalAttemptsConcededRanking
     *
     * @param string $totalAttemptsConcededRanking
     *
     * @return TeamStat
     */
    public function setTotalAttemptsConcededRanking($totalAttemptsConcededRanking)
    {
        $this->TotalAttemptsConcededRanking = $totalAttemptsConcededRanking;

        return $this;
    }

    /**
     * Get totalAttemptsConcededRanking
     *
     * @return string
     */
    public function getTotalAttemptsConcededRanking()
    {
        return $this->TotalAttemptsConcededRanking;
    }

    /**
     * Set totalWasFouled
     *
     * @param string $totalWasFouled
     *
     * @return TeamStat
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
     * Set totalTakeon
     *
     * @param string $totalTakeon
     *
     * @return TeamStat
     */
    public function setTotalTakeon($totalTakeon)
    {
        $this->TotalTakeon = $totalTakeon;

        return $this;
    }

    /**
     * Get totalTakeon
     *
     * @return string
     */
    public function getTotalTakeon()
    {
        return $this->TotalTakeon;
    }

    /**
     * Set totalWonCornersRanking
     *
     * @param string $totalWonCornersRanking
     *
     * @return TeamStat
     */
    public function setTotalWonCornersRanking($totalWonCornersRanking)
    {
        $this->TotalWonCornersRanking = $totalWonCornersRanking;

        return $this;
    }

    /**
     * Get totalWonCornersRanking
     *
     * @return string
     */
    public function getTotalWonCornersRanking()
    {
        return $this->TotalWonCornersRanking;
    }

    /**
     * Set totalTackleRanking
     *
     * @param string $totalTackleRanking
     *
     * @return TeamStat
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
     * Set totalOntargetScoringAtt
     *
     * @param string $totalOntargetScoringAtt
     *
     * @return TeamStat
     */
    public function setTotalOntargetScoringAtt($totalOntargetScoringAtt)
    {
        $this->TotalOntargetScoringAtt = $totalOntargetScoringAtt;

        return $this;
    }

    /**
     * Get totalOntargetScoringAtt
     *
     * @return string
     */
    public function getTotalOntargetScoringAtt()
    {
        return $this->TotalOntargetScoringAtt;
    }

    /**
     * Set totalWasFouledRanking
     *
     * @param string $totalWasFouledRanking
     *
     * @return TeamStat
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
     * Set totalYellowCard
     *
     * @param string $totalYellowCard
     *
     * @return TeamStat
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

    /**
     * Set totalGoalConversionRanking
     *
     * @param string $totalGoalConversionRanking
     *
     * @return TeamStat
     */
    public function setTotalGoalConversionRanking($totalGoalConversionRanking)
    {
        $this->TotalGoalConversionRanking = $totalGoalConversionRanking;

        return $this;
    }

    /**
     * Get totalGoalConversionRanking
     *
     * @return string
     */
    public function getTotalGoalConversionRanking()
    {
        return $this->TotalGoalConversionRanking;
    }

    /**
     * Set totalTacklePct
     *
     * @param string $totalTacklePct
     *
     * @return TeamStat
     */
    public function setTotalTacklePct($totalTacklePct)
    {
        $this->TotalTacklePct = $totalTacklePct;

        return $this;
    }

    /**
     * Get totalTacklePct
     *
     * @return string
     */
    public function getTotalTacklePct()
    {
        return $this->TotalTacklePct;
    }

    /**
     * Set totalDuelsLost
     *
     * @param string $totalDuelsLost
     *
     * @return TeamStat
     */
    public function setTotalDuelsLost($totalDuelsLost)
    {
        $this->TotalDuelsLost = $totalDuelsLost;

        return $this;
    }

    /**
     * Get totalDuelsLost
     *
     * @return string
     */
    public function getTotalDuelsLost()
    {
        return $this->TotalDuelsLost;
    }

    /**
     * Set totalGoalsConcededOboxRanking
     *
     * @param string $totalGoalsConcededOboxRanking
     *
     * @return TeamStat
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
     * Set totalWonTackleRanking
     *
     * @param string $totalWonTackleRanking
     *
     * @return TeamStat
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
     * Set totalDuelsLostRanking
     *
     * @param string $totalDuelsLostRanking
     *
     * @return TeamStat
     */
    public function setTotalDuelsLostRanking($totalDuelsLostRanking)
    {
        $this->TotalDuelsLostRanking = $totalDuelsLostRanking;

        return $this;
    }

    /**
     * Get totalDuelsLostRanking
     *
     * @return string
     */
    public function getTotalDuelsLostRanking()
    {
        return $this->TotalDuelsLostRanking;
    }

    /**
     * Set totalTouchesInOppositionBox
     *
     * @param string $totalTouchesInOppositionBox
     *
     * @return TeamStat
     */
    public function setTotalTouchesInOppositionBox($totalTouchesInOppositionBox)
    {
        $this->TotalTouchesInOppositionBox = $totalTouchesInOppositionBox;

        return $this;
    }

    /**
     * Get totalTouchesInOppositionBox
     *
     * @return string
     */
    public function getTotalTouchesInOppositionBox()
    {
        return $this->TotalTouchesInOppositionBox;
    }

    /**
     * Set totalTouchesInOppositionBoxRanking
     *
     * @param string $totalTouchesInOppositionBoxRanking
     *
     * @return TeamStat
     */
    public function setTotalTouchesInOppositionBoxRanking($totalTouchesInOppositionBoxRanking)
    {
        $this->TotalTouchesInOppositionBoxRanking = $totalTouchesInOppositionBoxRanking;

        return $this;
    }

    /**
     * Get totalTouchesInOppositionBoxRanking
     *
     * @return string
     */
    public function getTotalTouchesInOppositionBoxRanking()
    {
        return $this->TotalTouchesInOppositionBoxRanking;
    }

    /**
     * Set totalCleanSheetRanking
     *
     * @param string $totalCleanSheetRanking
     *
     * @return TeamStat
     */
    public function setTotalCleanSheetRanking($totalCleanSheetRanking)
    {
        $this->TotalCleanSheetRanking = $totalCleanSheetRanking;

        return $this;
    }

    /**
     * Get totalCleanSheetRanking
     *
     * @return string
     */
    public function getTotalCleanSheetRanking()
    {
        return $this->TotalCleanSheetRanking;
    }

    /**
     * Set totalGoalsConceded
     *
     * @param string $totalGoalsConceded
     *
     * @return TeamStat
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
     * Set totalCrossPct
     *
     * @param string $totalCrossPct
     *
     * @return TeamStat
     */
    public function setTotalCrossPct($totalCrossPct)
    {
        $this->TotalCrossPct = $totalCrossPct;

        return $this;
    }

    /**
     * Get totalCrossPct
     *
     * @return string
     */
    public function getTotalCrossPct()
    {
        return $this->TotalCrossPct;
    }

    /**
     * Set totalGoalsConcededIbox
     *
     * @param string $totalGoalsConcededIbox
     *
     * @return TeamStat
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
     * Set totalGoalsConcededIboxRanking
     *
     * @param string $totalGoalsConcededIboxRanking
     *
     * @return TeamStat
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
     * Set totalCrossPctRanking
     *
     * @param string $totalCrossPctRanking
     *
     * @return TeamStat
     */
    public function setTotalCrossPctRanking($totalCrossPctRanking)
    {
        $this->TotalCrossPctRanking = $totalCrossPctRanking;

        return $this;
    }

    /**
     * Get totalCrossPctRanking
     *
     * @return string
     */
    public function getTotalCrossPctRanking()
    {
        return $this->TotalCrossPctRanking;
    }

    /**
     * Set totalBlockedScoringAttRanking
     *
     * @param string $totalBlockedScoringAttRanking
     *
     * @return TeamStat
     */
    public function setTotalBlockedScoringAttRanking($totalBlockedScoringAttRanking)
    {
        $this->TotalBlockedScoringAttRanking = $totalBlockedScoringAttRanking;

        return $this;
    }

    /**
     * Get totalBlockedScoringAttRanking
     *
     * @return string
     */
    public function getTotalBlockedScoringAttRanking()
    {
        return $this->TotalBlockedScoringAttRanking;
    }

    /**
     * Set totalAccuratePass
     *
     * @param string $totalAccuratePass
     *
     * @return TeamStat
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
     * Set totalTackle
     *
     * @param string $totalTackle
     *
     * @return TeamStat
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
     * Set totalOffside
     *
     * @param string $totalOffside
     *
     * @return TeamStat
     */
    public function setTotalOffside($totalOffside)
    {
        $this->TotalOffside = $totalOffside;

        return $this;
    }

    /**
     * Get totalOffside
     *
     * @return string
     */
    public function getTotalOffside()
    {
        return $this->TotalOffside;
    }

    /**
     * Set totalLostCorners
     *
     * @param string $totalLostCorners
     *
     * @return TeamStat
     */
    public function setTotalLostCorners($totalLostCorners)
    {
        $this->TotalLostCorners = $totalLostCorners;

        return $this;
    }

    /**
     * Get totalLostCorners
     *
     * @return string
     */
    public function getTotalLostCorners()
    {
        return $this->TotalLostCorners;
    }

    /**
     * Set totalAccurateCross
     *
     * @param string $totalAccurateCross
     *
     * @return TeamStat
     */
    public function setTotalAccurateCross($totalAccurateCross)
    {
        $this->TotalAccurateCross = $totalAccurateCross;

        return $this;
    }

    /**
     * Get totalAccurateCross
     *
     * @return string
     */
    public function getTotalAccurateCross()
    {
        return $this->TotalAccurateCross;
    }

    /**
     * Set totalAttemptsConceded
     *
     * @param string $totalAttemptsConceded
     *
     * @return TeamStat
     */
    public function setTotalAttemptsConceded($totalAttemptsConceded)
    {
        $this->TotalAttemptsConceded = $totalAttemptsConceded;

        return $this;
    }

    /**
     * Get totalAttemptsConceded
     *
     * @return string
     */
    public function getTotalAttemptsConceded()
    {
        return $this->TotalAttemptsConceded;
    }

    /**
     * Set totalWonTackle
     *
     * @param string $totalWonTackle
     *
     * @return TeamStat
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
     * Set totalAttemptsConcededObox
     *
     * @param string $totalAttemptsConcededObox
     *
     * @return TeamStat
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
     * Set totalClaim
     *
     * @param string $totalClaim
     *
     * @return TeamStat
     */
    public function setTotalClaim($totalClaim)
    {
        $this->TotalClaim = $totalClaim;

        return $this;
    }

    /**
     * Get totalClaim
     *
     * @return string
     */
    public function getTotalClaim()
    {
        return $this->TotalClaim;
    }

    /**
     * Set totalPassPct
     *
     * @param string $totalPassPct
     *
     * @return TeamStat
     */
    public function setTotalPassPct($totalPassPct)
    {
        $this->TotalPassPct = $totalPassPct;

        return $this;
    }

    /**
     * Get totalPassPct
     *
     * @return string
     */
    public function getTotalPassPct()
    {
        return $this->TotalPassPct;
    }

    /**
     * Set totalGoalsRanking
     *
     * @param string $totalGoalsRanking
     *
     * @return TeamStat
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
     * Set totalOffsideRanking
     *
     * @param string $totalOffsideRanking
     *
     * @return TeamStat
     */
    public function setTotalOffsideRanking($totalOffsideRanking)
    {
        $this->TotalOffsideRanking = $totalOffsideRanking;

        return $this;
    }

    /**
     * Get totalOffsideRanking
     *
     * @return string
     */
    public function getTotalOffsideRanking()
    {
        return $this->TotalOffsideRanking;
    }

    /**
     * Set totalGoalsConcededRanking
     *
     * @param string $totalGoalsConcededRanking
     *
     * @return TeamStat
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
     * Set totalScoringAccuracy
     *
     * @param string $totalScoringAccuracy
     *
     * @return TeamStat
     */
    public function setTotalScoringAccuracy($totalScoringAccuracy)
    {
        $this->TotalScoringAccuracy = $totalScoringAccuracy;

        return $this;
    }

    /**
     * Get totalScoringAccuracy
     *
     * @return string
     */
    public function getTotalScoringAccuracy()
    {
        return $this->TotalScoringAccuracy;
    }

    /**
     * Set totalCardRanking
     *
     * @param string $totalCardRanking
     *
     * @return TeamStat
     */
    public function setTotalCardRanking($totalCardRanking)
    {
        $this->TotalCardRanking = $totalCardRanking;

        return $this;
    }

    /**
     * Get totalCardRanking
     *
     * @return string
     */
    public function getTotalCardRanking()
    {
        return $this->TotalCardRanking;
    }

    /**
     * Set totalContest
     *
     * @param string $totalContest
     *
     * @return TeamStat
     */
    public function setTotalContest($totalContest)
    {
        $this->TotalContest = $totalContest;

        return $this;
    }

    /**
     * Get totalContest
     *
     * @return string
     */
    public function getTotalContest()
    {
        return $this->TotalContest;
    }

    /**
     * Set totalGoalConversion
     *
     * @param string $totalGoalConversion
     *
     * @return TeamStat
     */
    public function setTotalGoalConversion($totalGoalConversion)
    {
        $this->TotalGoalConversion = $totalGoalConversion;

        return $this;
    }

    /**
     * Get totalGoalConversion
     *
     * @return string
     */
    public function getTotalGoalConversion()
    {
        return $this->TotalGoalConversion;
    }

    /**
     * Set totalClearance
     *
     * @param string $totalClearance
     *
     * @return TeamStat
     */
    public function setTotalClearance($totalClearance)
    {
        $this->TotalClearance = $totalClearance;

        return $this;
    }

    /**
     * Get totalClearance
     *
     * @return string
     */
    public function getTotalClearance()
    {
        return $this->TotalClearance;
    }

    /**
     * Set totalOntargetScoringAttRanking
     *
     * @param string $totalOntargetScoringAttRanking
     *
     * @return TeamStat
     */
    public function setTotalOntargetScoringAttRanking($totalOntargetScoringAttRanking)
    {
        $this->TotalOntargetScoringAttRanking = $totalOntargetScoringAttRanking;

        return $this;
    }

    /**
     * Get totalOntargetScoringAttRanking
     *
     * @return string
     */
    public function getTotalOntargetScoringAttRanking()
    {
        return $this->TotalOntargetScoringAttRanking;
    }

    /**
     * Set totalAttemptsConcededOboxRanking
     *
     * @param string $totalAttemptsConcededOboxRanking
     *
     * @return TeamStat
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
     * Set totalCross
     *
     * @param string $totalCross
     *
     * @return TeamStat
     */
    public function setTotalCross($totalCross)
    {
        $this->TotalCross = $totalCross;

        return $this;
    }

    /**
     * Get totalCross
     *
     * @return string
     */
    public function getTotalCross()
    {
        return $this->TotalCross;
    }

    /**
     * Set totalAttemptsConcededIbox
     *
     * @param string $totalAttemptsConcededIbox
     *
     * @return TeamStat
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
     * Set totalRedCard
     *
     * @param string $totalRedCard
     *
     * @return TeamStat
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
     * Set totalGoals
     *
     * @param string $totalGoals
     *
     * @return TeamStat
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
     * Set totalScoringAttRanking
     *
     * @param string $totalScoringAttRanking
     *
     * @return TeamStat
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
     * Set totalClaimRanking
     *
     * @param string $totalClaimRanking
     *
     * @return TeamStat
     */
    public function setTotalClaimRanking($totalClaimRanking)
    {
        $this->TotalClaimRanking = $totalClaimRanking;

        return $this;
    }

    /**
     * Get totalClaimRanking
     *
     * @return string
     */
    public function getTotalClaimRanking()
    {
        return $this->TotalClaimRanking;
    }

    /**
     * Set totalWonCorners
     *
     * @param string $totalWonCorners
     *
     * @return TeamStat
     */
    public function setTotalWonCorners($totalWonCorners)
    {
        $this->TotalWonCorners = $totalWonCorners;

        return $this;
    }

    /**
     * Get totalWonCorners
     *
     * @return string
     */
    public function getTotalWonCorners()
    {
        return $this->TotalWonCorners;
    }

    /**
     * Set totalCrossRanking
     *
     * @param string $totalCrossRanking
     *
     * @return TeamStat
     */
    public function setTotalCrossRanking($totalCrossRanking)
    {
        $this->TotalCrossRanking = $totalCrossRanking;

        return $this;
    }

    /**
     * Get totalCrossRanking
     *
     * @return string
     */
    public function getTotalCrossRanking()
    {
        return $this->TotalCrossRanking;
    }

    /**
     * Set totalGoalsConcededObox
     *
     * @param string $totalGoalsConcededObox
     *
     * @return TeamStat
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
     * Set totalFouls
     *
     * @param string $totalFouls
     *
     * @return TeamStat
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
     * Set totalGames
     *
     * @param string $totalGames
     *
     * @return TeamStat
     */
    public function setTotalGames($totalGames)
    {
        $this->TotalGames = $totalGames;

        return $this;
    }

    /**
     * Get totalGames
     *
     * @return string
     */
    public function getTotalGames()
    {
        return $this->TotalGames;
    }

    /**
     * Set totalClearanceRanking
     *
     * @param string $totalClearanceRanking
     *
     * @return TeamStat
     */
    public function setTotalClearanceRanking($totalClearanceRanking)
    {
        $this->TotalClearanceRanking = $totalClearanceRanking;

        return $this;
    }

    /**
     * Get totalClearanceRanking
     *
     * @return string
     */
    public function getTotalClearanceRanking()
    {
        return $this->TotalClearanceRanking;
    }

    /**
     * Set totalDuelsWonRanking
     *
     * @param string $totalDuelsWonRanking
     *
     * @return TeamStat
     */
    public function setTotalDuelsWonRanking($totalDuelsWonRanking)
    {
        $this->TotalDuelsWonRanking = $totalDuelsWonRanking;

        return $this;
    }

    /**
     * Get totalDuelsWonRanking
     *
     * @return string
     */
    public function getTotalDuelsWonRanking()
    {
        return $this->TotalDuelsWonRanking;
    }

    /**
     * Set totalRedCardRanking
     *
     * @param string $totalRedCardRanking
     *
     * @return TeamStat
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
     * Set totalPassPctRanking
     *
     * @param string $totalPassPctRanking
     *
     * @return TeamStat
     */
    public function setTotalPassPctRanking($totalPassPctRanking)
    {
        $this->TotalPassPctRanking = $totalPassPctRanking;

        return $this;
    }

    /**
     * Get totalPassPctRanking
     *
     * @return string
     */
    public function getTotalPassPctRanking()
    {
        return $this->TotalPassPctRanking;
    }

    /**
     * Set totalAccurateCrossRanking
     *
     * @param string $totalAccurateCrossRanking
     *
     * @return TeamStat
     */
    public function setTotalAccurateCrossRanking($totalAccurateCrossRanking)
    {
        $this->TotalAccurateCrossRanking = $totalAccurateCrossRanking;

        return $this;
    }

    /**
     * Get totalAccurateCrossRanking
     *
     * @return string
     */
    public function getTotalAccurateCrossRanking()
    {
        return $this->TotalAccurateCrossRanking;
    }

    /**
     * Set totalPass
     *
     * @param string $totalPass
     *
     * @return TeamStat
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
     * Set totalAttemptsConcededIboxRanking
     *
     * @param string $totalAttemptsConcededIboxRanking
     *
     * @return TeamStat
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
     * Set totalContestRanking
     *
     * @param string $totalContestRanking
     *
     * @return TeamStat
     */
    public function setTotalContestRanking($totalContestRanking)
    {
        $this->TotalContestRanking = $totalContestRanking;

        return $this;
    }

    /**
     * Get totalContestRanking
     *
     * @return string
     */
    public function getTotalContestRanking()
    {
        return $this->TotalContestRanking;
    }

    /**
     * Set totalGamesRanking
     *
     * @param string $totalGamesRanking
     *
     * @return TeamStat
     */
    public function setTotalGamesRanking($totalGamesRanking)
    {
        $this->TotalGamesRanking = $totalGamesRanking;

        return $this;
    }

    /**
     * Get totalGamesRanking
     *
     * @return string
     */
    public function getTotalGamesRanking()
    {
        return $this->TotalGamesRanking;
    }

    /**
     * Set totalCard
     *
     * @param string $totalCard
     *
     * @return TeamStat
     */
    public function setTotalCard($totalCard)
    {
        $this->TotalCard = $totalCard;

        return $this;
    }

    /**
     * Get totalCard
     *
     * @return string
     */
    public function getTotalCard()
    {
        return $this->TotalCard;
    }

    /**
     * Set totalScoringAccuracyRanking
     *
     * @param string $totalScoringAccuracyRanking
     *
     * @return TeamStat
     */
    public function setTotalScoringAccuracyRanking($totalScoringAccuracyRanking)
    {
        $this->TotalScoringAccuracyRanking = $totalScoringAccuracyRanking;

        return $this;
    }

    /**
     * Get totalScoringAccuracyRanking
     *
     * @return string
     */
    public function getTotalScoringAccuracyRanking()
    {
        return $this->TotalScoringAccuracyRanking;
    }

    /**
     * Set totalYellowCardRanking
     *
     * @param string $totalYellowCardRanking
     *
     * @return TeamStat
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
     * Set totalScoringAtt
     *
     * @param string $totalScoringAtt
     *
     * @return TeamStat
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
     * Set totalTacklePctRanking
     *
     * @param string $totalTacklePctRanking
     *
     * @return TeamStat
     */
    public function setTotalTacklePctRanking($totalTacklePctRanking)
    {
        $this->TotalTacklePctRanking = $totalTacklePctRanking;

        return $this;
    }

    /**
     * Get totalTacklePctRanking
     *
     * @return string
     */
    public function getTotalTacklePctRanking()
    {
        return $this->TotalTacklePctRanking;
    }
}
