<?php

namespace App\Controller;

use App\Entity\Etudiant;
use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class etudiantController extends AbstractController
{
    private $etudiantRepository;
    /**
     * @Route("/Etudiant/", name="show_all")
     */
    public function __construct(EtudiantRepository $etudiantRepository){
        $this->etudiantRepository=$etudiantRepository;
    }
    public function index(EtudiantRepository $etudiantRepository)
    {
        $Etudiants=$etudiantRepository->findAll();
        return $this->render('home.html.twig', [
            'Etudiants' => $Etudiants,
        ]);
    }

}
