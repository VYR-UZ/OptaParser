<?php
namespace OptaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(){
      return new Response(
          '<html><body>Hello Vyruz!</body></html>'
      );
    }
}
