<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Psr\Log\LoggerInterface;
use Swift_Mailer;

class SecurityController extends AbstractController
{
    /**
     * @Route("/security", name="security")
     */
    public function index()
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     * @param Request $request
     * @param Swift_Mailer $mailer
     * @param LoggerInterface $logger
     * @return RedirectResponse|Response
     */
    public function login(Request $request,AuthenticationUtils $authenticationUtils,Swift_Mailer $mailer,LoggerInterface $logger)

    {
        $errorformrefresh=0;
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $user = new User();



        $form = $this->createForm(UserType::class, $user);



        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {

            // Encode the new users password

            $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));



            // Set their role

            $user->setRoles(['ROLE_USER']);



            // Save

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);

            $em->flush();





            $this->addFlash('inscription', 'Inscription effectuée avec succès! connectez vous');



            return $this->redirectToRoute('registration');

        }



        return $this->render('security/login.html.twig', [

            'form' => $form->createView(),
            'last_username' => $lastUsername,
            'error' => $error,
            'errorformInscri' => $errorformrefresh

        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    /**
     * @Route("/keep/alive/", name="security_keep_alive")
     */
    public function keepAlive(Request $request)
    {
        $route = $request->get('_route');

        $params = $request->get('_route_params');

        return $this->redirectToRoute($route, $params);
    }
}
