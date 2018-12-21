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
  use OptaBundle\Entity\Directorio;

  class ProcesarTIPOCommand extends ContainerAwareCommand {

    protected function configure() {
      $this->setName("analisis:procesaTest");
      $this->setDescription("Procesa directorios Test");
      $this->setHelp("Ayuda para el usuario");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $entityManager = $this->getContainer()->get('doctrine')->getManager();
        $entityManager->getConnection()->getConfiguration()->setSQLLogger(null);

        $DirectoryPath = '..\OptaParser\src\OptaBundle\Resources\push';

        
        $Directory = new RecursiveDirectoryIterator($DirectoryPath, RecursiveDirectoryIterator::SKIP_DOTS);
        $iterator = new RecursiveIteratorIterator($Directory);

        foreach ($iterator as $file) {
          if($file->getFilename() == ".DS_Store")continue;
            if(preg_match("/F9$/", $file->getPath())){

                   $ruta=  $file->getPath();
                   $nombre=  $file->getFilename();
                   echo $ruta ." -- ". $nombre . "\n";

                $xml = simplexml_load_file($file);

                foreach ($xml->children() as $soccerDocument) {
                        $atributos = $soccerDocument->attributes();
                        #echo $atributos['uID'] ."\n";

                        foreach ($soccerDocument->Competition as $competition) {
                            $atributos = $competition->attributes();
                            echo $atributos['uID'] . "\n";
                            echo $competition->Name . "\n";
        
                           /*$competencia = new Competencia();
                           $competencia -> setTipo('#')
                                        -> setCodigo('#')
                                        -> setIdProvedor('#')
                                        -> setNombre($competition->Name);
                           $entityManager -> persist($competencia);*/
                        }
                        #$entityManager->flush();
                        #$entityManager->clear();    
                }
            }
          }
        }
}