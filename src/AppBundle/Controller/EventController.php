<?php
namespace AppBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class EventController extends Controller
{
   /**
    * @Route("/", name="event_list")
    */
   public function listAction(Request $request)
   {
       return $this->render('events/index.html.twig');
   }

  /**
    * @Route("/events/create", name="event_create")
    */
   public function createAction(Request $request)
   {
       return $this->render('events/create.html.twig');
   }

  /**
    * @Route("/events/details/{id}", name="event_details")
    */
   public function detailsAction($id)
   {
       return $this->render('events/details.html.twig');
   }
 
  /**
    * @Route("/events/edit/{id}", name="event_edit")
    */
   public function editAction($id, Request $request)
   {
       return $this->render('events/edit.html.twig');
   }
}