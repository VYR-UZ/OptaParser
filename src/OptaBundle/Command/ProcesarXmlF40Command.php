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

class ProcesarXmlF40Command extends ContainerAwareCommand{

    protected function configure (){
        $this -> setName('analisis:procesaXmlF40');
        $this -> setDescription('Procesa un documento XML Feed40');
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
            if(preg_match("/F40$/", $file->getPath())){

                   $ruta=  $file->getPath();
                   $nombre=  $file->getFilename();
                   echo $ruta ." -- ". $nombre . "\n";

                      $xml = simplexml_load_file($file);

                  foreach ($xml->children() as $soccerdocument) {
                      $atributos = $soccerdocument->attributes();
                      echo $atributos['competition_name'] ."\n";

                      /*$competencia = new Competencia();
                      $competencia -> setTipo('#')
                                   -> setCodigo('#')
                                   -> setIdProvedor('#')
                                   -> setNombre($atributos['competition_name']);
                      $entityManager -> persist($competencia);*/
                  }
                      #$entityManager->flush();
            }
        }

        
    }

}