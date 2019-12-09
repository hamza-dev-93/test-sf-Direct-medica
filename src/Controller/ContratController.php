<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Entity\Affilie;
use App\Form\ContratType;
use App\Form\AffilieType;
use App\Repository\ContratRepository;
use App\Repository\AffilieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class ContratController extends AbstractController
{
    /**
     * affiche un tableau leste de tous les contrats
     * 
     * @Route("/", name="contrat_index", methods={"GET"})
     * @param ContratRepository $contratRepository
     * @return Response
     */
    public function index(ContratRepository $contratRepository): Response
    {
        return $this->render('contrat/index.html.twig', [
            'contrats' => $contratRepository->findAll(),
        ]);
    }

    /**
     *  function qui creer un contrat
     * 
     * @Route("/new", name="contrat_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $contrat = new Contrat();       
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);
         // verification si la formulaire a ete bien valider et envoyer
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contrat);
            $entityManager->flush();
            // ajouter un message alert succes si l'enregistrement a ete bien executer
            $this->addFlash('success','Votre contrat a été bien enregistrer');
            // rediriger vers la liste des contrat
            return $this->redirectToRoute('contrat_index');
        }
        // afficher la page d'enregistrement d un nouveau contrat (le formulaire)
        return $this->render('contrat/new.html.twig', [
            'contrat' => $contrat,
            'form' => $form->createView(),
        ]);
    }
   
    /**
     *  function pour editer le contrat
     * 
     * @Route("/{id}/edit", name="contrat_edit", methods={"GET","POST"})
     * 
     * @param Request $request
     * @param Contrat $contrat
     * @return Response
     */
    public function edit(Request $request, Contrat $contrat): Response
    {
        // preparation de formulaire
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);
        // verification si la formulaire a ete bien valider et envoyer
        if ($form->isSubmitted() && $form->isValid()) {
            // enregistrement dans la base de donner
            $this->getDoctrine()->getManager()->flush();
            // ajouter un message alert succes si la modif a ete bien executer
            $this->addFlash('success','Votre modification a été bien enregistrer');
            // rediriger vers la liste des contrat
            return $this->redirectToRoute('contrat_index');
        }
        // afficher la page de modif le formulaire
        return $this->render('contrat/edit.html.twig', [
            'contrat' => $contrat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * function pour suppression de contrat
     * 
     * @Route("/{id}", name="contrat_delete", methods={"DELETE"})
     * @param Request $request
     * @param Contrat $contrat
     * @return Response
     */
    public function delete(Request $request, Contrat $contrat, Affilie $affilies): Response
    {
        // verification si la suppression a été bien effectuer en comparant
        // le _token du formulaire avec csrfToken 
        if ($this->isCsrfTokenValid('delete'.$contrat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->remove($contrat);
            
            $entityManager->flush();
            // en onregistre une message si la suppression a ete bien effectuer
            $this->addFlash('success','La suppression a été bien valider ! ');
        }
        // retour ver la liste des contrat
        return $this->redirectToRoute('contrat_index');
    }
}