<?php
namespace AppBundle\Controller;
use AppBundle\Entity\events;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
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
    $error = false;
    $event = new events;
    $form = $this->createFormBuilder($event)

    ->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('frequency', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px', 'required'=> false)))

    ->add('date', DateType::class, array('widget' => 'single_text', 'label'=> 'Date me!', 'attr' => array('style'=>'margin-bottom:15px; display:block;')))

    ->add('time', TimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))

    ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('image', TextType::class, array('label'=> 'Image location', 'attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('capacity', NumberType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))    

    ->add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px', 'required'=> false)))

    ->add('place', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('street', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px', 'required'=> false)))

    ->add('postal_code', TextType::class, array('label'=> 'Postal Code', 'attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('city', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('country', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('link', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('type', ChoiceType::class, array('choices'=>array(
        'Museum'=>'Museum',
        'Club'=>'Club',
        'Music'=>'Music',
        'Dancing'=>'Dancing',
        'Politics'=>'Politics',
        'Education'=>'Education',
        'Architecture'=>'Architecture',
        'Wellness'=>'Wellness',
        'Sports'=>'Sports',
        'Martial Arts'=>'Martial Arts',
        'Theatre'=>'Theatre',
        'Cultural Exchange'=>'Cultural Exchange',
        'Travel'=>'Travel',
        'Charity'=>'Charity',
        'Lifestyle'=>'Lifestyle'
        ),
        'attr' => array(
        'class'=>'form-control', 'style'=>'margin-botton:15px'
        )
      )
    )
    ->add('link', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
    ->add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn btn-primary mt-4', 'style'=>'margin-bottom:15px')))
    ->getForm();
       $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){

      //fetching data
      $name         = $form['name']->getData();
      $frequency    = $form['frequency']->getData();
      $date         = $form['date']->getData();
      $time         = $form['time']->getData();
      $description  = $form['description']->getData();
      $image        = $form['image']->getData();
      $capacity     = $form['capacity']->getData();
      $email        = $form['email']->getData();
      $phone        = $form['phone']->getData();
      $place        = $form['place']->getData();
      $street       = $form['street']->getData();
      $postal_code  = $form['postal_code']->getData();
      $city         = $form['city']->getData();
      $country      = $form['country']->getData();
      $link         = $form['link']->getData();
      $type         = $form['type']->getData();

      if(empty($name)){
        $error = true;
        $nameError = "please type your name";
      }


      //function from our entities, each columns has set function to wich we assign the attained value from the form
      $event->setName($name);
      $event->setFrequency($frequency);
      $event->setDate($date);
      $event->setTime($time);
      $event->setDescription($description);
      $event->setImage($image);
      $event->setCapacity($capacity);
      $event->setEmail($email);
      $event->setPhone($phone);
      $event->setPlace($place);
      $event->setStreet($street);
      $event->setPostalCode($postal_code);
      $event->setCity($city);
      $event->setCountry($country);
      $event->setLink($link);
      $event->setType($type);

      $em = $this->getDoctrine()->getManager();
      $em->persist($event);
      $em->flush();
      $this->addFlash(
              'notice',
              'Event Added'
              );
      return $this->redirectToRoute('event_list');
    }
    //form->createView() creates form - seen in create.html.twig
    return $this->render('events/create.html.twig', array('form' => $form->createView()));
  }

  /**
    * @Route("/details/{id}", name="event_details")
    */
  public function detailsAction($id)
  {
    $event = $this->getDoctrine()->getRepository('AppBundle:events')->find($id);
    return $this->render('events/details.html.twig', array('event' => $event));
  }

  /**
    * @Route("event/edit/{id}", name="event_edit")
    */
  public function editAction($id, Request $request)
  {
    $event = $this->getDoctrine()->getRepository('AppBundle:events')->find($id);

    $event->setName($event->getName());
    $event->setFrequency($event->getFrequency());
    $event->setDate($event->getDate());
    $event->setTime($event->getTime());
    $event->setDescription($event->getDescription());
    $event->setImage($event->getImage());
    $event->setCapacity($event->getCapacity());
    $event->setEmail($event->getEmail());
    $event->setPhone($event->getPhone());
    $event->setPlace($event->getPlace());
    $event->setStreet($event->getStreet());
    $event->setPostalCode($event->getPostalCode());
    $event->setCity($event->getCity());
    $event->setCountry($event->getCountry());
    $event->setLink($event->getLink());
    $event->setType($event->getType());

    //form
    $form = $this->createFormBuilder($event)

    ->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('frequency', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px', 'required'=> false)))

    ->add('date', DateType::class, array('widget' => 'single_text', 'label'=> 'Date me!', 'attr' => array('style'=>'margin-bottom:15px; display:block;')))

    ->add('time', TimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))

    ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('image', TextType::class, array('label'=> 'Image location', 'attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('capacity', NumberType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))    

    ->add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px', 'required'=> false)))

    ->add('place', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('street', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px', 'required'=> false)))

    ->add('postal_code', TextType::class, array('label'=> 'Postal Code', 'attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('city', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('country', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('link', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

    ->add('type', ChoiceType::class, array('choices'=>array(
        'Museum'=>'Museum',
        'Club'=>'Club',
        'Music'=>'Music',
        'Dancing'=>'Dancing',
        'Politics'=>'Politics',
        'Education'=>'Education',
        'Architecture'=>'Architecture',
        'Wellness'=>'Wellness',
        'Sports'=>'Sports',
        'Martial Arts'=>'Martial Arts',
        'Theatre'=>'Theatre',
        'Cultural Exchange'=>'Cultural Exchange',
        'Travel'=>'Travel',
        'Charity'=>'Charity',
        'Lifestyle'=>'Lifestyle'
        ),
        'attr' => array(
        'class'=>'form-control', 'style'=>'margin-botton:15px'
        )
      )
    )
    ->add('link', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
    ->add('save', SubmitType::class, array('label'=> 'Save', 'attr' => array('class'=> 'btn btn-info mt-3', 'style'=>'margin-bottom:15px')))
    ->getForm();
       $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){

      //fetching data
      $name         = $form['name']->getData();
      $frequency    = $form['frequency']->getData();
      $date         = $form['date']->getData();
      $time         = $form['time']->getData();
      $description  = $form['description']->getData();
      $image        = $form['image']->getData();
      $capacity     = $form['capacity']->getData();
      $email        = $form['email']->getData();
      $phone        = $form['phone']->getData();
      $place        = $form['place']->getData();
      $street       = $form['street']->getData();
      $postal_code  = $form['postal_code']->getData();
      $city         = $form['city']->getData();
      $country      = $form['country']->getData();
      $link         = $form['link']->getData();
      $type         = $form['type']->getData();

      $em = $this->getDoctrine()->getManager();
      $event = $em->getRepository('AppBundle:events')->find($id);

      //function from our entities, each columns has set function to wich we assign the attained value from the form
      $event->setName($name);
      $event->setFrequency($frequency);
      $event->setDate($date);
      $event->setTime($time);
      $event->setDescription($description);
      $event->setImage($image);
      $event->setCapacity($capacity);
      $event->setEmail($email);
      $event->setPhone($phone);
      $event->setPlace($place);
      $event->setStreet($street);
      $event->setPostalCode($postal_code);
      $event->setCity($city);
      $event->setCountry($country);
      $event->setLink($link);
      $event->setType($type);

      $em->flush();
      $this->addFlash(
              'notice',
              'Event editted'
              );
      return $this->redirectToRoute('event_list');
    }
    return $this->render('events/edit.html.twig', array('events' => $event, 'form' => $form->createView()));;
  }

  /**
    * @Route("/delete/{id}", name="event_delete")
    */
   public function deleteAction($id){
                $em = $this->getDoctrine()->getManager();
           $event = $em->getRepository('AppBundle:events')->find($id);
           $em->remove($event);
            $em->flush();
           $this->addFlash(
                   'notice',
                   'Event Removed'
                   );
            return $this->redirectToRoute('event_list');
   }
}