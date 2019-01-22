<?php
  namespace App\Controller;

  use App\Entity\Text;

  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;

  use Symfony\Component\Routing\Annotation\Route;

  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  use Symfony\Component\Form\Extension\Core\Type\TextType;
  use Symfony\Component\Form\Extension\Core\Type\TextareaType;
  use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
      * @Route("/text/new", name="new_text")
      * Method({"GET", "POST"})
      */
    public function new(Request $request){
      $text = new Text();

      $form = $this->createFormBuilder($text)
      ->add('title', TextType::class, array('attr' =>
      array('class' => 'form-control')))
      ->add('body', TextareaType::class, array(
        'required' => false,
        'attr' => array('class' => 'form-control')
      ))
      ->add('save', SubmitType::class, array(
        'label' => 'Create',
        'attr' => array('class' => 'btn btn-primary mt-3')
      ))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $text = $form->getData();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($text);
        $entityManager->flush();

        return $this->redirectToRoute('text_list');
      }

      return $this->render('text/new.html.twig', array(
        'form' => $form->createView()
      ));

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
