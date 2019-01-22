<?php
  namespace App\Controller;

  use App\Entity\Text;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  class TextController extends Controller{
    /**
      * @Route("/", name="text_list")
      *
      */
    public function index(){

      $texts= $this->getDoctrine()->getRepository(Text::class)->findAll();
      return $this->render('text/index.html.twig', array('texts' => $texts));
    }

    /**
      * @Route("/text/{id}", name="text_show")
      *
      */
    public function show($id){
      $text = $this->getDoctrine()->getRepository(Text::class)->find($id);

      return $this->render('text/show.html.twig', array('text' => $text));
    }
    /**
      * @Route("/text/save")
      *
      */
      // public function save(){
      //   $entityManager = $this->getDoctrine()->getManager();
      //
      //   $text = new Text();
      //   $text->setTitle('Text Two');
      //   $text->setBody('This is the body');
      //
      //   $entityManager->persist($text);
      //
      //   $entityManager->flush();
      //
      //   return new Response('Text saved with the id of '.$text->getId());
      // }

  }

 ?>
