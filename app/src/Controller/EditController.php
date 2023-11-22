<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;    
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\EditUserType;
use App\Entity\User;

class EditController extends AbstractController
{


#[Route('/profile/edit', name: "app_profil_edit")]
    public function editProfil(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $edit_form = $this->createForm(EditUserType::class, $user);
        $edit_form->handleRequest($request);
        
        // si pas logged in -> renvoie sur login
        if (!($this->getUser())) {
            return $this->redirectToRoute('app_login');
        }

        
        //FORMULAIRE MODIFICATION USERNAME
        if ($edit_form->isSubmitted() && $edit_form->isValid()) {
            $data = $edit_form->getData();
            $user = $this->getUser(); 
            $username = $edit_form->get('username')->getData();
            $user->setUsername($username);

            
            $entityManager->persist($user);
            $entityManager->flush();
        
            $this->addFlash('success', 'Nom d\'utilisateur mis à jour avec succès.'); 
            return $this->redirectToRoute('app_profil'); 
        }

        return $this->render('profile/edit.html.twig', [
            'formi' => $edit_form->createView(), 
        ]);
    }

    #[Route('/profile/delete', name: 'app_profil_delete')]
    public function delete(EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $user = $this->getUser();
        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash('success', 'Profil supprimé');

        $session->invalidate();

        return $this->redirectToRoute('app_register');
    }
}