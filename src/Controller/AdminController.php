<?php
// src/Controller/AdminUserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User; // Adjust the namespace to match your User entity

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function index(): Response
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('admin.html.twig', [
            'users' => $users,
        ]);

    }
     /**
     * @Route("/admin/users/{id}/edit", name="admin_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        // Handle user editing here
        // You can use a form to edit user data and update the database

        return $this->render('edit.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/admin/users/{id}/delete", name="admin_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user): Response
    {
    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->remove($user);
    $entityManager->flush();
        return $this->redirectToRoute('admin_users');
    }
}
