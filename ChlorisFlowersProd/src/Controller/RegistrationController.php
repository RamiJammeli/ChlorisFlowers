<?php



namespace App\Controller;



use App\Entity\User;

use App\Form\ProfilType;

use App\Form\UserType;

use Psr\Log\LoggerInterface;

use Swift_Mailer;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Mailer\Mailer;

use Symfony\Component\Mailer\MailerInterface;

use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;

use Symfony\Component\Mime\Email;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;



class RegistrationController extends AbstractController

{

    private $passwordEncoder;





    public function __construct(UserPasswordEncoderInterface $passwordEncoder)

    {

        $this->passwordEncoder = $passwordEncoder;



    }



    /**

     * @Route("/registration", name="registration")

     * @param Request $request

     * @param Swift_Mailer $mailer

     * @param LoggerInterface $logger

     * @return RedirectResponse|Response

     */

    public function index(Request $request,Swift_Mailer $mailer,LoggerInterface $logger)

    {

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



            return $this->redirectToRoute('app_login');

        }



        return $this->render('registration/index.html.twig', [

            'form' => $form->createView(),

        ]);

    }



    /**

     * @Route("/profil", name="profil")

     * @param Request $request

     */

    public function Profil(Request $request)

    {

        $user = $this->getUser();





        $form = $this->createForm(ProfilType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Save

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);

            $em->flush();





            $this->addFlash('modification', 'Modification du profil effectuée avec succès!');





        }

        return $this->render('registration/profil.html.twig', [

            'form' => $form->createView(),

        ]);



    }





}

