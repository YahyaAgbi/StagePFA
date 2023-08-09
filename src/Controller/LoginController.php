<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Intl\Countries;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function index(AuthenticationUtils $authenticationUtils): Response
      {
         $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

          return $this->render('login/index.html.twig', [
             'last_username' => $lastUsername,
             'error'         => $error,
          ]);
      }
      
      /**
 * @Route("/admin/dashboard", name="Admin_dash")
 * @IsGranted("ROLE_ADMIN")
 */
public function adminDashboard()
{
  if (!$this->isGranted('ROLE_ADMIN')) {
    throw $this->createAccessDeniedException('Access Denied.');
}
return $this->render('admin.html.twig');
}
     /**
 * @Route("/logout", name="logoutpage")
 * @IsGranted("ROLE_ADMIN")
 */
public function logout(Request $request,LogoutSuccessHandlerInterface $logoutSuccessHandler)
{
  return $logoutSuccessHandler->onLogoutSuccess($request);
}
/**
 * @Route("/admin/login", name="Admin_signup")
 */
public function adminsignup()
{
  $countries = Countries::getNames();

  return $this->render('signup.html.twig', [
      'countries' => $countries,]);
}
}


  

