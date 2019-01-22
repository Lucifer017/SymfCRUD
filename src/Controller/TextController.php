<?php
  namespace App\Controller;

  use App\Entity\Text;
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

    /**
      * @Route("/text/save")
      *
      */
      public function save(){
        $entityManager = $this->getDoctrine()->getManager();

        $text = new Text();
        $text->setTitle('Text Two');
        $text->setBody('This is the body');

        $entityManager->persist($text);

        $entityManager->flush();

        return new Response('Text saved with the id of '.$text->getId());
      }

  }

 ?>
