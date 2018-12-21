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
use OptaBundle\Entity\Competencia;


class ProcesarXmlF13Command extends ContainerAwareCommand{

    protected function configure (){
        $this -> setName('analisis:procesaXmlF13');
        $this -> setDescription('Procesa un documento XML Feed13');
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
            if(preg_match("/F13$/", $file->getPath())){

                   #$ruta=  $file->getPath();
                   #$nombre=  $file->getFilename();
                   #echo $ruta ." -- ". $nombre . "\n";

                      $xml = simplexml_load_file($file);
                      
                          $atributos =  $xml->attributes();
                           #echo $atributos['away_score'] . "--" . $atributos['away_team_id'] . "--" . $atributos['away_team_name'] . "--" . $atributos['competition'] . "\n";

                           $competencia = new Competencia();
                           $competencia -> setTipo('#')
                                        -> setCodigo('#')
                                        -> setIdProvedor('#')
                                        -> setNombre($atributos['competition']);
                           $entityManager -> persist($competencia);
                    
            }                 
                           $entityManager->flush();
        }
    }
}