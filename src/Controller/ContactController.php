<?php

namespace App\Controller;m:


use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ContactController extends AbstractController
{ 

     /**
      * @Route("/contact", name="pagecontact")
      */

    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class,$contact);

        $form->handlerequest($request);
        if($form->isSubmitted() && $form->isValid())
         {
            
            $data=$form->getData(); 
            $entityManager->persist($data); 
            $entityManager->flush();
             $this->addFlash('message', 'votre message a bien été envoyer');
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form'=> $form->createView(),
        ]);
    }
     
       /**
      * @Route("/contacts", name="app_contact")
      */
      
    public function listContacts()
    {
        $repository = $this->getDoctrine()->getRepository(Contact::class);
        $contacts = $repository->findAll();


        return $this->render('contact/list.html.twig', [
            'contacts' => $contacts,
        ]);
    }
    /**
    * @Route("/contact/edit/{id}", name="contact_edit", requirements={"id"="\d+"})
    */
   public function edit(Request $request, Contact $contact): Response
   {
       $form = $this->createForm(ContactType::class, $contact);
       $form->handleRequest($request);


       if ($form->isSubmitted() && $form->isValid()) {
           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->flush();


           return $this->redirectToRoute('app_contact');
       }


       return $this->render('contact/edit.html.twig', [
           'form' => $form->createView(),
       ]);
   }
   /**
    * @Route("/contact/delete/{id}", name="contact_delete", requirements={"id"="\d+"})
    */
    public function delete(Contact $contact): Response
    { 
        $entityManager = $this->getDoctrine()->getManager(); 
        $entityManager->remove($contact);
        $entityManager->flush();


        return $this->redirectToRoute('app_contact');
    }
   
  

}
