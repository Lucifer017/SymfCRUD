<?php
  namespace App\Controller;

  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  class TextController extends Controller{
    /**
      * @Route("/")
      *
      */
    public function index(){
      //return new Response('<html><body>Test</body></html>');

      $texts=['Text 1', 'Text 2'];

      return $this->render('text/index.html.twig', array('texts' => $texts));
    }

  }

 ?>
