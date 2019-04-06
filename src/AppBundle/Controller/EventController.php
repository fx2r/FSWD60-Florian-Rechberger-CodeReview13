<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Todo;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class EventController extends Controller
{
  /**
    * @Route("/", name="event_list")
    */
  public function listAction(Request $request)
  {
    
    $events = $this->getDoctrine()->getRepository('AppBundle:events')->findAll();
    return $this->render('events/index.html.twig',
    array('events'=>$events));
  }

  /**
  * @Route("/create", name="event_create")
  */
  public function createAction(Request $request)
  {   

    return $this->render('events/create.html.twig');
  }

  /**
    * @Route("/details/{id}", name="event_details")
    */
  public function detailsAction($id)
  {
    return $this->render('events/details.html.twig');
  }

  /**
    * @Route("/edit/{id}", name="event_edit")
    */
  public function editAction($id, Request $request)
  {
    return $this->render('events/edit.html.twig');
  }
}