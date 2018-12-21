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

class ProcesarXmlF28Command extends ContainerAwareCommand{

    protected function configure (){
        $this -> setName('analisis:procesaXmlF28');
        $this -> setDescription('Procesa un documento XML Feed28');
        $this -> setHelp('Ayuda para el usuario general');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $entityManager = $this->getContainer()->get('doctrine')->getManager();
        $entityManager->getConnection()->getConfiguration()->setSQLLogger(null);

        $DirectoryPath = '..\OptaParser\src\OptaBundle\Resources\push';
  
        $Directory = new RecursiveDirectoryIterator($DirectoryPath, RecursiveDirectoryIterator::SKIP_DOTS);
        $iterator = new RecursiveIteratorIterator($Directory);

        foreach ($iterator as $file) {
          if($file->getFilename() == ".DS_Store")continue;
            if(preg_match("/null$/", $file->getPath())){

                   $ruta=  $file->getPath();
                   $nombre=  $file->getFilename();
                   echo $ruta ." -- ". $nombre . "\n";

                      $xml = simplexml_load_file($file);
                                
                                    $atributos = $xml->attributes();
                                     echo  $atributos['away_team_id'] . "--" . $atributos['away_team_name'] . "--" . $atributos['competition_name'] . "\n";
                            }
            }
        }

        
    }