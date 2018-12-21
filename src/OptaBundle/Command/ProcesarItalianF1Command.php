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
use OptaBundle\Entity\Informacion;

class ProcesarItalianF1Command extends ContainerAwareCommand{
    
    protected function configure (){
        $this -> setName('analisis:procesaItalianF1');
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
                if(preg_match("/F1$/", $files->getPath())){
                    /*$ruta = $files->getPath();
                    $nombre = $files->getFilename();
                    echo $ruta ." -- ". $nombre . "\n";*/
                    
                    $xml = simplexml_load_file($files);

                    foreach ($xml->children() as $soccerDocument) {
                        $atributos = $soccerDocument->attributes();
                        /*echo $atributos ['Type'] . " -- " . $atributos['competition_code'] . " -- " . $atributos['competition_id'] . " -- " .
                        $atributos['competition_name'] . " -- " . $atributos['game_system_id'] . " -- " . $atributos['season_id'] . " -- " . 
                        $atributos['season_name'] . " -- " . $atributos['timestamp'] . "\n";*/

                        $informacion = new Informacion();
                        $informacion -> setTipo($atributos ['Type'])
                                 -> setCodigo($atributos['competition_code'])
                                 -> setCompetenciaID($atributos['competition_id'])
                                 -> setNombre($atributos['competition_name'])
                                 -> setSistemaJuegoID($atributos['game_system_id'])
                                 -> setTemporadaID($atributos['season_id'])
                                 -> setNombreTemporada($atributos['season_name'])
                                 -> setTimestamp($atributos['timestamp']);
                                 $entityManager -> persist($informacion);
    
                        foreach ($soccerDocument->MatchData as $matchData) {
                            $atributos = $matchData->attributes();
                            /*echo $atributos['detail_id'] . " -- " . $atributos['last_modified'] . " -- " . $atributos['timestamp_accuracy_id'] . " -- " . 
                            $atributos['timing_id'] . " -- " . $atributos['uID'] ."\n";*/

                            $informacion = new Informacion();
                            $informacion -> setUltimaModificacion($atributos['last_modified'])
                                     -> setUID($atributos['uID']);
                                     $entityManager -> persist($informacion);
                        
                            foreach($matchData->MatchInfo as $matchInfo){
                                $atributos = $matchInfo->attributes();
                                /*echo $atributos['GroupName'] . " -- " . $atributos['MatchDay'] . " -- " . $atributos['MatchType'] . " -- " . $atributos['MatchWinner'] . " -- " . $atributos['Period'] 
                                . " -- ". $atributos['RoundNumber'] . " -- ". $atributos['RoundType'] . " -- ". $atributos['Venue_id'] . "\n";
                                echo $matchInfo->Date ."\n";
                                echo $matchInfo->TZ . "\n";*/

                                $informacion = new Informacion();
                                $informacion -> setDiaJuego($atributos['MatchDay'])
                                         -> setTipoJuego($atributos['MatchType'])
                                         -> setGanadorPartido($atributos['MatchWinner'])
                                         -> setPeriodo($atributos['Period'])
                                         -> setNumeroRonda($atributos['RoundNumber'])
                                         #-> setTipoRonda($atributos['RoundType'])
                                         -> setDato($matchInfo->Date )
                                         -> setTimeZone($matchInfo->TZ)
                                         -> setVenueID($atributos['Venue_id']);
                                         $entityManager -> persist($informacion);
                                             
                            }
    
                            foreach($matchData->MatchOfficials as $officials){
                                foreach ($officials->MatchOfficial as $official) {
                                    $atributos = $official->attributes();
                                    #echo $atributos['FirstName'] . " -- " . $atributos['LastName'] . " -- " . $atributos['Type'] . " -- " . $atributos['uID']  . "\n";
                              
                                    $informacion = new Informacion();
                                    $informacion -> setNombreArbitro($atributos['FirstName'])
                                         -> setApellidoArbitro($atributos['LastName'])
                                         -> setTipoArbitro($atributos['Type'])
                                         -> setArbitroID($atributos['uID']);
                                         $entityManager -> persist($informacion);

                                }
                            } 
                            
                            foreach($matchData->Stat->attributes() as $stat){
                               #echo $stat = $matchData->Stat[0] . "\n";
                               #echo $stat = $matchData->Stat[1] . "\n"; 

                               $informacion = new Informacion();
                               $informacion -> setEstadio($matchData->Stat[0])
                                            -> setCiudad($matchData->Stat[1]);
                                            $entityManager -> persist($informacion);
                                            
                            }
    
                            foreach ($matchData->TeamData as $teamData) {
                                $atributos = $teamData->attributes();
                                #echo $atributos['HalfScore'] . " -- " . $atributos['Score'] . " -- " . $atributos['Side'] . " -- " . $atributos['TeamRef'] . "\n";
                                
                                $informacion = new Informacion();
                                $informacion -> setMarcadorMT($atributos['HalfScore'])
                                         -> setMarcador($atributos['Score'])
                                         -> setSide($atributos['Side'])
                                         -> setReferenciaEquipo($atributos['TeamRef']);
                                         $entityManager -> persist($informacion);

                                foreach ($teamData->Goal as $goal) {
                                    $atributos = $goal->attributes();
                                    #echo $atributos['Period'] . " -- " . $atributos['PlayerRef'] . " -- " . $atributos['Type'] . "\n";
                                        
                                    $informacion = new Informacion();
                                    $informacion -> setTiempoPeriodo($atributos['Period'])
                                                 -> setReferenciaJugador($atributos['PlayerRef'])
                                                 -> setTipoGol($atributos['Type']);
                                                 $entityManager -> persist($informacion);

                                }
                            }
                        }
    
                        foreach ($soccerDocument->TimingTypes->DetailTypes->DetailType as $DetailType) {
                            $atributos = $DetailType->attributes();
                              #echo $atributos['detail_id'] ."---". $atributos['name'] . "\n";
    
                              $informacion = new Informacion();
                              $informacion -> setDetalleID($atributos['detail_id'])
                                          -> setDetalleNombre($atributos['name']);
                                          $entityManager -> persist($informacion);

                        }
          
                        foreach ($soccerDocument->TimingTypes->TimestampAccuracyTypes->TimestampAccuracyType as $TimestampAccuracyType) {
                          $atributos = $TimestampAccuracyType->attributes();
                            #echo $atributos['name'] ."---". $atributos['timestamp_accuracy_id'] . "\n";  

                            $informacion = new Informacion();
                            $informacion -> setAccurancyID($atributos['timestamp_accuracy_id'])
                                     -> setAccurancyNombre($atributos['name']);
                                     $entityManager -> persist($informacion);
                                       
                        }
          
                        foreach ($soccerDocument->TimingTypes->TimingType->TimingType as $TimingType) {
                          $atributos = $TimingType->attributes();
                            #echo $atributos['name'] ."---". $atributos['timing_id'] . "\n"; 

                            $informacion = new Informacion();
                            $informacion -> setTimingID($atributos['timing_id'])
                                     -> setTimingNombre($atributos['name']);
                                     $entityManager -> persist($informacion);
                                        
                        }
          
                        foreach ($soccerDocument->Team as $Team){
                            $atributos = $Team->attributes();
                                #echo $atributos['uID'] . "\n";
                                #echo $atributos = $Team->Name . "\n";

                                $informacion = new Informacion();
                                $informacion -> setEquipo($Team->Name)
                                        -> setEquipoID($atributos['uID']);
                                        $entityManager -> persist($informacion);
                          
                        } 
                    }
                    $entityManager->flush();
                }
        }
    }
}

