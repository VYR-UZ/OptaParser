<?php

namespace OptaBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;
use RecursiveRegexIterator;
use DirectoryIterator;
use OptaBundle\Entity\Estadistica;

class ProcesarItalianF3Command extends ContainerAwareCommand{

    protected function configure (){
        $this -> setName('analisis:procesaItalianF3');
        $this -> setDescription('Procesa un documento Directorio');
        $this -> setHelp('Ayuda para el usuario general');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $entityManager = $this->getContainer()->get('doctrine')->getManager();
        $entityManager->getConnection()->getConfiguration()->setSQLLogger(null);

        $directoryPath = '..\OptaParser\src\OptaBundle\Resources\push';

        $directory = new RecursiveDirectoryIterator($directoryPath, RecursiveDirectoryIterator::SKIP_DOTS);
        $iterator = new RecursiveIteratorIterator($directory);

        foreach($iterator as $files){
            if($files->getFilename() == ".DS_Store")continue;
                if(preg_match("/F3$/", $files->getPath())){
                    /*$ruta = $files->getPath();
                    $nombre = $files->getFilename();
                    echo $ruta ." -- ". $nombre . "\n";*/

                    $xml = simplexml_load_file($files);

                    foreach ($xml->children() as $soccerDocument) {
                        $atributos = $soccerDocument->attributes();
                        /*echo $atributos ['CurrentRound'] . " -- " . $atributos ['Round'] . " -- " . $atributos ['Type'] . " -- " . $atributos['competition_code'] . " -- " . $atributos['competition_id'] . " -- " .
                        $atributos['competition_name'] . " -- " . $atributos['game_system_id'] . " -- " . $atributos['season_id'] . " -- " . 
                        $atributos['season_name'] . " -- " . $atributos['timestamp'] . "\n";*/

                        $estadistica = new Estadistica();
                        $estadistica  -> setCurrentRound($atributos ['CurrentRound'])
                                 -> setRound($atributos ['Round' ])
                                 -> setTipo($atributos ['Type'])
                                 -> setCompcode($atributos['competition_code'])
                                 -> setCompId($atributos['competition_id'])
                                 -> setCompName($atributos['competition_name'])
                                 -> setSystemId($atributos['game_system_id'])
                                 -> setSeasonId($atributos['season_id'])
                                 -> setSeasonName($atributos['season_name'])
                                 -> setTimestamp($atributos['timestamp']);
                        $entityManager -> persist($estadistica);
    
                            foreach ($soccerDocument->Competition->TeamStandings as $teamstandings) {
                                $atributos = $teamstandings->attributes();
                                #echo $atributos['Matchday'] . "\n";

                                $estadistica = new Estadistica();
                                $estadistica -> setMatchDay($atributos['Matchday']);
                                $entityManager -> persist($estadistica);
    
                                foreach ($teamstandings->TeamRecord as $teamRecord) {
                                    $atributos = $teamRecord->attributes();
                                    #echo $atributos['TeamRef'] . "\n";

                                    $estadistica = new Estadistica();
                                    $estadistica -> setTeamRef($atributos['TeamRef']);
                                 $entityManager -> persist($estadistica);
    
                                    foreach ($teamRecord->Standing as $standing) {
                                        $atributos = $standing->attributes();
                                        /*echo $atributos['Type'] . "\n";
                                        echo $standing->Against . "\n";
                                        echo $standing->AwayAgainst . "\n";
                                        echo $standing->AwayDrawn . "\n";
                                        echo $standing->AwayFor . "\n";
                                        echo $standing->AwayLost. "\n";
                                        echo $standing->AwayPlayed . "\n";
                                        echo $standing->AwayPoints . "\n";
                                        echo $standing->AwayPosition . "\n";
                                        echo $standing->AwayWon . "\n";
                                        echo $standing->Drawn . "\n";
                                        echo $standing->For . "\n";
                                        echo $standing->HomeDrawn . "\n";
                                        echo $standing->HomeFor . "\n";
                                        echo $standing->HomeLost . "\n";
                                        echo $standing->HomePlayed . "\n";
                                        echo $standing->HomePoints . "\n";
                                        echo $standing->HomePosition. "\n";
                                        echo $standing->HomeWon . "\n";
                                        echo $standing->Lost . "\n";
                                        echo $standing->Played . "\n";
                                        echo $standing->Points . "\n";
                                        echo $standing->Position . "\n";
                                        echo $standing->StartDayPosition . "\n";
                                        echo $standing->Won . "\n";*/

                                        $estadistica = new Estadistica();
                                        $estadistica -> setSType($atributos['Type'])
                                                 -> setAgainst($standing->Against)
                                                 -> setAwayAgainst($standing->AwayAgainst)
                                                 -> setAwayDrawn($standing->AwayDrawn)
                                                 -> setAwayFor($standing->AwayFor)
                                                 -> setAwayLost($standing->AwayLost)
                                                 -> setAwayPlayed($standing->AwayPlayed)
                                                 -> setAwayPoinst($standing->AwayPoints)
                                                 -> setAwayPosition($standing->AwayPosition)
                                                 -> setAwayWon($standing->AwayWon)
                                                 -> setDrawn($standing->Drawn)
                                                 -> setPara($standing->For)
                                                 -> setHomeAgainst($standing->HomeAgainst)
                                                 -> setHomeDrawn($standing->HomeDrawn)
                                                 -> setHomeFor($standing->HomeFor)
                                                 -> setHomeLost($standing->HomeLost)
                                                 -> setHomePlayed($standing->HomePlayed)
                                                 -> setHomePoinst($standing->HomePoints)
                                                 -> setHomePosition($standing->HomePosition)
                                                 -> setHomeWon($standing->HomeWon)
                                                 -> setPerdido($standing->Lost)
                                                 -> setPlayed($standing->Played)
                                                 -> setPoinst($standing->Points)
                                                 -> setPosition($standing->Position)
                                                 -> setDayPosition($standing->StartDayPosition)
                                                 -> setWon($standing->Won);
                                        $entityManager -> persist($estadistica);
    
                                    }
                                }
    
                            foreach ($soccerDocument->Qualification->Type as $Type) {
                               $atributos = $Type->attributes();
                               #echo $atributos['qualify'] . "\n";

                               $estadistica = new Estadistica();
                               $estadistica -> setQualify($atributos['qualify']);
                               $entityManager -> persist($estadistica);
    
                               foreach ($Type->Team as $Team) {
                                   $atributos = $Team->attributes();
                                   /*echo $atributos['method'] . " - " . $atributos['team_id'] . " - " . $atributos['team_name'] 
                                   . " - " . $Type->Team . "\n";*/

                                   $estadistica = new Estadistica();
                                   $estadistica -> setMethod($atributos['method'])
                                            -> setTeamId($atributos['team_id'])
                                            -> setTeamName($atributos['team_name']);
                                   $entityManager -> persist($estadistica);
                                   
                                }
    
                            }

                            foreach ($soccerDocument->Team as $team) {
                                $atributos = $team->attributes();
                                #echo $atributos['uID'] . "\n";
                                #echo $team->Name . "\n";

                            }
                            
                            }
                    }
                }
                $entityManager->flush();
        }
    }
}