<?php

namespace OptaBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use OptaBundle\Entity\Clasificacion;
use OptaBundle\Entity\TeamStat;

class ProcesarJupilerF15Command extends ContainerAwareCommand{

    protected function configure (){
        $this -> setName('analisis:procesaJupilerF15');
        $this -> setDescription('Procesa un documento Directorio');
        $this -> setHelp('Ayuda para el usuario general');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $entityManager = $this->getContainer()->get('doctrine')->getManager();
        $entityManager->getConnection()->getConfiguration()->setSQLLogger(null);

        $DirectoryPath = '..\OptaParser\src\OptaBundle\Resources\push\112\2017';

        $Directory = new RecursiveDirectoryIterator($DirectoryPath, RecursiveDirectoryIterator::SKIP_DOTS);
        $iterator = new RecursiveIteratorIterator($Directory);

        foreach ($iterator as $file) {
          if($file->getFilename() == ".DS_Store")continue;
            if(preg_match("/F15$/", $file->getPath())){

                #$ruta=  $file->getPath();
                #$nombre=  $file->getFilename();
                #echo $ruta ." -- ". $nombre . "\n";

                $xml = simplexml_load_file($file);

                $soccerDocument = $xml->children()[0];


                $contador = 1;
                foreach ($soccerDocument->children() as $matchData) {
                    if($matchData->getName() != "MatchData"){
                        continue;
                    }
                    echo $contador . ":"; //contador MatchDataUid
                    echo $matchDataUid = $matchData->attributes()[0]->__toString() . "\n"; //muestra los MatchDataUid
                    
                    $clasificacion = new Clasificacion();
                    $clasificacion  -> setUID($matchData->attributes()[0]->__toString());
                    $entityManager -> persist($clasificacion);

                    $cont = 1;
                    $objeto = new \stdClass();
                    foreach ($matchData->children() as $stats) {
                        if($stats->getName() != "Stat"){
                            continue;
                        }
                        echo $cont . ":"; //contador stats
                        $tipo = convertirEnFuncion($stats->attributes()[0]->__toString()); //muestra el nombre del stat "tipo"
                        $valor = $stats->__toString();
                        echo "\t $tipo = $valor \n";//muestra todos los stats dentro de MatchDataUid
                    //$objeto->$tipo($valor);
                    $clasificacion->$tipo($valor);
                    $entityManager -> persist($clasificacion);
                    
                    $cont++;
                    }
                    $contador++;

                }
                $contador = 1;
                foreach ($soccerDocument->children() as $teams) {
                    if($teams->getName() != "Team"){
                        continue;
                    }
                    echo $contador . ":";//contador teams
                    echo $teamUid = $teams->attributes()[0]->__toString() ." = ".  $teams->Name ."\n";//muesta teamUid y nombre del equipo

                    $teamStat = new TeamStat();
                    $teamStat  -> setUID($teams->attributes()[0]->__toString());
                    $entityManager -> persist($teamStat);

                    $cont = 1;
                    foreach ($teams->children() as $players) {
                        if($players->getName() != "Player"){
                            continue;
                        }
                        echo $cont . ":"; //contador players
                        echo $playerUid =$players->attributes()[0]->__toString() . "\n";//muetra playerUid
                        echo "\t " . "Position = ". $players->Position . "\n";//muestra posicion del jugador
                        $cuenta = 1;
                        foreach ($players->children() as $stats) {
                            if ($stats->getName() != "Stat") {
                                continue;
                            }
                            echo $cuenta . ":";//contador stats del Team
                            $tipo = convertirEnFuncion($stats->attributes()[0]->__toString());
                            $valor = $stats->__toString();
                            echo "\t $tipo = $valor \n"; //muestra todos los stats dentro de playerUid
                        $cuenta++;
                        }
                    $cont++; 
                    }

                $counter = 1;
                $objeto = new \stdClass();
                foreach ($teams->children() as $stats) {
                    if ($stats->getName() != "Stat") {
                        continue;
                    }
                    echo $counter .":"; //cuenta stats de Team
                    $tipo = convertirEnFuncion($stats->attributes()[0]->__toString());
                    $valor = $stats->__toString();
                    echo "\t $tipo = $valor \n";
                $teamStat->$tipo($valor);
                $entityManager -> persist($teamStat);

                $counter++;
                }

                $contador++;
                }
            }
        }
        $entityManager -> flush();
        $entityManager -> clear();
    }
}

function convertirEnFuncion($tipo){
    return("set". str_replace(" ", "", ucwords($tipo)));
    
}