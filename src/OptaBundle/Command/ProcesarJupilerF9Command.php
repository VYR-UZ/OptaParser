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

class ProcesarJupilerF9Command extends ContainerAwareCommand{

    protected function configure (){
        $this -> setName('analisis:procesaJupilerF9');
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
            if(preg_match("/F9$/", $file->getPath())){
  
                   #$ruta=  $file->getPath();
                   #$nombre=  $file->getFilename();
                   #cho $ruta ." -- ". $nombre . "\n";

                  $xml = simplexml_load_file($file);

                echo $soccerDocument = $xml->attributes() . "\n";

                foreach ($xml->children() as $soccerDocument) {
                    $atributos = $soccerDocument->attributes();
                    echo $atributos['detail_id'] ."--". $atributos['uID'] . "\n";
                }
                foreach ($soccerDocument->Competition as $competition) {
                    echo $competition->attributes() . "\n";
                    echo $competition->Country ."\n";
                    echo $competition->Name ."\n";
                    echo $competition->Round->RoundNumber ."\n";
                }
                
                $cont = 1;
                foreach ($competition->children() as $stats) {
                    if($stats->getName() != "Stat"){
                        continue;
                    }
                    echo $cont . ":";
                    $tipos = convertirEnFuncion($stats->attributes()[0]->__toString()); 
                    $valor = $stats->__toString();
                    echo "\t $tipos = $valor \n";
                $cont ++;
                }

                foreach ($soccerDocument->MatchData->MatchInfo as $matchInfo) {
                    $atributos = $matchInfo->attributes();
                    echo $atributos['MatchType'] ." -- ". $atributos['Period'] ." -- ". $atributos['TimeStamp'] . "\n";
                    echo $matchInfo->Attendance ."\n";
                    echo $matchInfo->Date ."\n";
                    echo $matchInfo->Result->attributes()."\n";
                }

                foreach ($soccerDocument->MatchData->MatchOfficial as $MatchOfficial) {
                    $atributos = $MatchOfficial->attributes();
                    echo $atributos['uID']  . "\n";
                    echo $MatchOfficial->OfficialData->OfficialRef->attributes() ."\n";
                    echo $MatchOfficial->OfficialName->First ."\n";
                    echo $MatchOfficial->OfficialName->Last ."\n";
                }
                foreach ($soccerDocument->MatchData->AssistantOfficials->AssistantOfficial as $AssistantOfficial) {
                    $atributos = $AssistantOfficial->attributes();
                    echo $atributos['FirstName'] ." -- ". $atributos['LastName'] ." -- ". $atributos['Type'] 
                    ." -- ". $atributos['uID']  . "\n";
                }

                $conts = 1;
                foreach ($soccerDocument->MatchData->children() as $stats) {
                    if($stats->getName() != "Stat"){
                        continue;
                    }
                    echo $conts . ":";
                    $tipos = convertirEnFuncion($stats->attributes()[0]->__toString()); 
                    $valor = $stats->__toString();
                    echo "\t $tipos = $valor \n";
                $conts ++;
                }
                foreach ($soccerDocument->MatchData->TeamData as $TeamData) {
                    $atributos = $TeamData->attributes();
                    echo $atributos['Score'] ." -- ". $atributos['Side'] ." -- ". $atributos['TeamRef'] . "\n";
                }
                foreach ($soccerDocument->MatchData->TeamData->Booking as $Booking) {
                    $atributos = $Booking->attributes();
                    echo $atributos['Card'] ." -- ". $atributos['CardType'] ." -- ". $atributos['EventID'] 
                    ." -- ". $atributos['EventNumber'] ." -- ". $atributos['Min'] ." -- ". $atributos['Period']
                    ." -- ". $atributos['PlayerRef'] ." -- ". $atributos['Reason'] ." -- ". $atributos['Sec'] 
                    ." -- ". $atributos['Time'] ." -- ". $atributos['TimeStamp'] ." -- ". $atributos['uID'] . "\n";
                }

                foreach ($soccerDocument->MatchData->TeamData->Goal as $Goal) {
                    $atributos = $Goal->attributes();
                    echo $atributos['EventID'] 
                    ." -- ". $atributos['EventNumber'] ." -- ". $atributos['Min'] ." -- ". $atributos['Period']
                    ." -- ". $atributos['PlayerRef'] ." -- ".  $atributos['Sec'] 
                    ." -- ". $atributos['Time'] ." -- ". $atributos['TimeStamp'] ." -- ". $atributos['Type'] 
                    ." -- ". $atributos['uID'] . "\n";
                
                    foreach ($Goal->Assist as $Assist) {
                        $atributos = $Assist->attributes();
                        echo $atributos['PlayerRef'] . "\n";
                    }
                }
                foreach ($soccerDocument->MatchData->TeamData->PlayerLineUp->MatchPlayer as $MatchPlayer) {
                    $atributos = $MatchPlayer->attributes();
                    echo $atributos['PlayerRef'] 
                    ." -- ". $atributos['Position'] ." -- ". $atributos['ShirtNumber'] ." -- ". $atributos['Status'] . " -- ". $atributos['SubPosition'] ."\n";
                
                    $conta = 1;
                    foreach ($MatchPlayer->children() as $stats) {
                        if($stats->getName() != "Stat"){
                            continue;
                        }
                        echo $conta . ":";
                        $tipos = convertirEnFuncion($stats->attributes()[0]->__toString()); 
                        $valor = $stats->__toString();
                        echo "\t $tipos = $valor \n";
                    $conta ++;
                    }
                }
                

                echo "- - -" . "\n";
            }
        }
    }
} 
function convertir($tipo){
    return("set". str_replace(" ", "", ucwords($tipo)));
    
} 

/*function convertir($tipos){
    $espacio = str_replace("_", " ", $tipos);
    $seteo = str_replace(" ", "", ucwords($espacio));
    return("set".$seteo);
}*/