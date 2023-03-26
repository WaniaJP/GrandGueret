<?php

namespace App\Controller;

use App\Entity\Sondage;
use App\Form\SondageFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SondageController extends AbstractController
{
    #[Route('/sondage', name: 'app_sondage')]
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_main');
        }

        $sondage = new Sondage($this->getUser());
        $form = $this->createForm(SondageFormType::class, $sondage);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager = $doctrine->getManager();
                $entityManager->persist($sondage);
                $entityManager->flush();
                $this->addFlash('success', 'Sondage envoyé avec succès !');
                return $this->redirectToRoute('app_menu');
            } else {
                $this->addFlash(
                    'error',
                    'Certains aliments sont similaires.'
                );
            }
        }

        return $this->render('sondage/sondage.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/resultat', name: 'app_resultat')]
    public function resultat(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_main');
        }


        return $this->render('sondage/resultat.html.twig');
    }
}
