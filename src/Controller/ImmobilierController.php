<?php

namespace App\Controller;

use App\Entity\Immobilier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManagerInterface;

// ...




class ImmobilierController extends AbstractController
{
    /**
     * @Route("/immobilier", name="app_immobilier")
     */
    
    public function traiterFormulaire(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            $titre = $request->request->get('titre');
            $nom = $request->request->get('nom');
            $adresse = $request->request->get('adresse');
            $type = $request->request->get('civilite');
            $ville = $request->request->get('ville');
            $region = $request->request->get('Region');
            $pays = $request->request->get('Pays');
            $email = $request->request->get('email');
            $prix = $request->request->get('prix');
            $date = $request->request->get('date');
            $message = $request->request->get('message');
 
            $annonce = new Immobilier();
            $date = new \DateTime($date);

            $annonce->setTitre($titre);           
            $annonce->setType($type);
            $annonce->setAdresse($adresse); 
            $annonce->setVille($ville);
            $annonce->setRegion($region);
            $annonce->setPays($pays);
            $annonce->setNom($nom); 
            $annonce->setEmail($email);
            $annonce->setPrix($prix);
            $annonce->setDateAnnonce($date);
            $annonce->setMessage($message);
            
            // Persist the entity
            $entityManager->persist($annonce);
            $entityManager->flush();

            // Redirect to the home page or a success page
            return $this->redirectToRoute('home'); // Change 'home' to the actual route name of your home page
        }

        // Handle GET requests or display the form
        return $this->render('Immobilier.html.twig'); // Change the template name as needed
    }
}
