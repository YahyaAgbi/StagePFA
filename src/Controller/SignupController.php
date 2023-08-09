<?php
// src/Controller/SignupController.php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Intl\Countries;


class SignupController extends AbstractController
{
    /**
     * @Route("/signup", name="app_signup")
     */
    public function signup(Request $request,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        // Handle form submission
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            $prenom = $request->request->get('Prenom');
            $sexe = $request->request->get('Sexe');
            $num = $request->request->get('Num');
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            $Adresse = $request->request->get('Adresse');
            $ville = $request->request->get('Ville');
            $region = $request->request->get('Region');
            $pays = $request->request->get('Pays');

            // Create a new User entity
            $user = new User();
            $user->setPrenom($prenom);
            $user->setNom($name);
            $user->setSexe($sexe);
            $user->setEmail($email);
            $user->setVille($ville);
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                  $password
                )
            );
            $user->setNumTelephone($num);
            $user->setAdresse($Adresse);
            $user->setRegion($region);
            $user->setPays($pays);

            // Get Doctrine's entity manager and persist the user
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
        }

        // Fetch the list of countries from the Sylius AddressingBundle
        $countries = Countries::getNames();

        return $this->render('signup.html.twig', [
            'countries' => $countries,
        ]);
    }
}
