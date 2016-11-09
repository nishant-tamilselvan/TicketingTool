<?php

namespace AppBundle\Controller;

use AppBundle\Entity\events;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
#use Symfony\Component\Form\Extention\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
#use Symfony\Component\Form\Extention\Core\Type\DateTimeType;



class EventmngrController extends Controller
{
    /**
     * @Route("/events", name="eventmngr_homepage")
     */
    public function listAction()
    {
        $eventslist = $this->getDoctrine()
              ->getRepository('AppBundle:events')
              ->findall();

        // replace this example code with whatever you need
        return $this->render('events/index.html.twig', array(

          'eventslist' => $eventslist ));
    }

    /**
     * @Route("/events/create", name="eventmngr_create")
     */
    public function createAction(Request $request)
    {
        $eventslist = new events;
        $form = $this->createFormBuilder($eventslist)
        ->add('category', ChoiceType::class, array('choices' => array('leisure' => 'Leisure','personal' => 'Personal','sports' => 'Sports','professional' => 'Professional','academic' => 'Academic', 'other' => 'Other'),'attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
        ->add('subject', TextType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
        ->add('message', TextareaType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
        ->add('priority', ChoiceType::class, array('choices' => array('Low' => 'low','Emergency' => 'emergency','Critical' => 'critical','Urgent' => 'urgent','High' => 'high', 'Medium' => 'medium'),'attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
        ->add('date', DateTimeType::class, array('attr' => array('class' =>'formcontrol' , 'style' => 'margin-bottom:15px')))
        ->add('save', SubmitType::class, array('label' => 'Create / Save Event','attr' => array('class' =>'form-control','class' => "btn btn-primary btn-block", 'style' => 'margin-bottom:15px')))
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

          $subject = $form['subject']->getData();
          $category = $form['category']->getData();
          $message = $form['message']->getData();
          $priority = $form['priority']->getData();
          $date = $form['date']->getData();

          $eventslist->setSubject($subject);
          $eventslist->setCategory($category);
          $eventslist->setMessage($message);
          $eventslist->setPriority($priority);
          $eventslist->setDate($date);

          $em = $this->getDoctrine()->getManager();
          $em->persist($eventslist);
          $em->flush();

          $this->addFlash(
              'notice',
              'Events Added'

        );

        return $this->redirectToRoute('eventmngr_homepage');



        }
                // replace this example code with whatever you need
        return $this->render('events/create.html.twig', array(
          'form' => $form->createView()
        ));
    }

    /**
     * @Route("/events/edit/{id}", name="eventmngr_edit")
     */
    public function editAction($id, Request $request)
    {

      $eventlist = $this->getDoctrine()
            ->getRepository('AppBundle:events')
            ->find($id);


            $eventlist->setSubject($eventlist->getSubject());
            $eventlist->setCategory($eventlist->getCategory());
            $eventlist->setMessage($eventlist->getMessage());
            $eventlist->setPriority($eventlist->getPriority());
            $eventlist->setDate($eventlist->getDate());


            $form = $this->createFormBuilder($eventlist)
            ->add('category', ChoiceType::class, array('choices' => array('leisure' => 'Leisure','personal' => 'Personal','sports' => 'Sports','professional' => 'Professional','academic' => 'Academic', 'other' => 'Other'),'attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
            ->add('subject', TextType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
            ->add('message', TextareaType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
            ->add('priority', ChoiceType::class, array('choices' => array('Low' => 'low','Emergency' => 'emergency','Critical' => 'critical','Urgent' => 'urgent','High' => 'high', 'Medium' => 'medium'),'attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
            ->add('date', DateTimeType::class, array('attr' => array('class' =>'formcontrol' , 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Update / Save Event','attr' => array('class' =>'form-control','class' => "btn btn-primary btn-block", 'style' => 'margin-bottom:15px')))
            ->getForm();

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){

              $subject = $form['subject']->getData();
              $category = $form['category']->getData();
              $message = $form['message']->getData();
              $priority = $form['priority']->getData();
              $date = $form['date']->getData();


              $em = $this->getDoctrine()->getManager();
              $eventlist = $em->getRepository('AppBundle:events')->find($id);

              $eventlist->setSubject($subject);
              $eventlist->setCategory($category);
              $eventlist->setMessage($message);
              $eventlist->setPriority($priority);
              $eventlist->setDate($date);


              $em->persist($eventlist);
              $em->flush();

              $this->addFlash(
                  'notice',
                  'Events Updated'

            );

            return $this->redirectToRoute('eventmngr_homepage');

            }




      // replace this example code with whatever you need
      return $this->render('events/edit.html.twig', array(

        'eventlist' => $eventlist
        ,
          'form' => $form->createView()
        ));

    }

    /**
     * @Route("/events/details/{id}", name="eventmngr_details")
     */
    public function deatilsAction($id, Request $request)
    {
      $eventlist = $this->getDoctrine()
            ->getRepository('AppBundle:events')
            ->find($id);

      // replace this example code with whatever you need
      return $this->render('events/details.html.twig', array(

        'eventlist' => $eventlist ));


    }

    /**
     * @Route("/events/delete/{id}", name="eventmngr_delete")
     */
    public function deleteAction($id, Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $eventlist = $em->getRepository('AppBundle:events')->find($id);

      $em->remove($eventlist);
      $em->flush();

      $this->addFlash(
          'notice',
          'Event Deleted'

    );

    return $this->redirectToRoute('eventmngr_homepage');


    }
}
