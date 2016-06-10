<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller{

  /**
  * @Route("/genus/{genusName}")
  */
  public function showAction($genusName){
    return $this->render('genus/show.html.twig', [
      'name' => $genusName,
    ]);
  }

  /**
  * @Route("/genus/{genusName}/notes", name="genus_show_notes")
  * @Method("GET")
  */
  public function getNotesAction($genusName){
    $notes = [
      "My first note is about my array",
      "I'm not so imaginative so i make notes about what i'm coding now",
      "Let's sing dadada tata lakadada"
    ];

    $data = [
      'notes' => $notes
    ];

    return new JsonResponse($data);
  }

}
