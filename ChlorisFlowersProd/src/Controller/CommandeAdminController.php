<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
/**
 * @Route("/adminx")
 */
class CommandeAdminController extends AbstractController
{
    /**
     * @Route("/list", name="listCommande")
     */
    public function List()
    {

        $em = $this->getDoctrine()->getManager();
        $commandes= $em->getRepository(Commande::class)->findAll();
        $countLivre=  $em->getRepository(Commande::class)->countLivre();
        $countEnCours=  $em->getRepository(Commande::class)->countEnCours();
        $countNonTraite=  $em->getRepository(Commande::class)->countNonTraite();

        return $this->render('admin/listCommande.html.twig',
            array(
                'items' => $commandes,'livre'=>$countLivre,'encours'=>$countEnCours,'nontraite'=>$countNonTraite
            ));
    }


    /**
     * @Route("/detailAdmin/{idCmd}", name="detailsCommandeAdmin")
     */
    public function Details($idCmd)
    {

        $em = $this->getDoctrine()->getManager();
        $commandeDetails= $em->getRepository(LigneCommande::class)->findBy(array('idOrder' => $idCmd));
        return $this->render('admin/CommandeDetails.html.twig',
            array(
                'items' => $commandeDetails
            ));
    }

    /**
     * @Route("/detailLivraison/{idCmd}", name="detailsLivraison")
     */
    public function DetailsLivraison($idCmd)
    {

        $em = $this->getDoctrine()->getManager();
        $commandeDetails= $em->getRepository(LigneCommande::class)->find($idCmd);
        return $this->render('admin/LivraisonDetails.html.twig',
            array(
                'item' => $commandeDetails
            ));
    }


    /**
     * @Route("/ChangeStatus/{idCmd}", name="change_status")
     */
    public function ChangeStatusCommande($idCmd , \Swift_Mailer $mailer)
    {
        $em = $this->getDoctrine()->getManager();
        $Commande= $em->getRepository(Commande::class)->find($idCmd);
        if($Commande->getStatus()==="En cours")
        {
            $Commande->setStatus("Livré");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Commande);
            $entityManager->flush();

            return $this->json(['code' => 200, 'Status' => $Commande->getStatus()], 200);

        }

        else if($Commande->getStatus()==="Non traité")
        {
            $Commande->setStatus("En cours");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Commande);
            $entityManager->flush();
            $user=$Commande->getUser();



            //send mail
            $message = (new \Swift_Message('Chloris Flower:Confirmation commande'))
                ->setFrom('rami.jammeli32@gmail.com')
                ->setTo($user->getEmail())
                ->setBody(
                    '
           Bonjour '.$user->getPrenom().',

                Votre commande crée le ' .date_format($Commande->getOrderDate(),'Y/m/d').' avec un total de: ' .$Commande->getTotalAchat().'DT,  est en cours de traitement.
                
                
                À bientôt,
                L\'équipe ChlorisFlowers.
                '
                )

                ->addPart(  '
            <h1 style="color: hotpink;font-family: \'Comic Sans MS\'">CHLORIS FLOWERS</h1> <hr/>
           <b> Bonjour '.$user->getPrenom().',

               <br/>Votre commande crée le ' .date_format($Commande->getOrderDate(),'Y/m/d').' avec un total de: ' .$Commande->getTotalAchat().'DT,  est en cours de traitement.
                                
               <br/> À bientôt,
               <br/> L\'équipe ChlorisFlowers. </b>
                ','text/html');



            $mailer->send($message);






            return $this->json(['code' => 200, 'Status' => $Commande->getStatus()], 200);

        }
        else if($Commande->getStatus()==="Livré")
        {
            $Commande->setStatus("Non traité");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Commande);
            $entityManager->flush();
            return $this->json(['code' => 200, 'Status' => $Commande->getStatus()], 200);

        }

        return $this->json(['code'=>400,'Bad request']);


    }


    /**
     * @Route("/ChangeStatusDetail/{idCmd}", name="change_status_detail")
     */
    public function ChangeStatusDetailCommande($idCmd)
    {
        $em = $this->getDoctrine()->getManager();
        $Commande= $em->getRepository(LigneCommande::class)->find($idCmd);
        if($Commande->getStatus()==="En cours")
        {
            $Commande->setStatus("Terminé");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Commande);
            $entityManager->flush();

            return $this->json(['code' => 200, 'Status' => $Commande->getStatus()], 200);

        }

        else if($Commande->getStatus()==="Terminé")
        {
            $Commande->setStatus("En cours");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Commande);
            $entityManager->flush();

            return $this->json(['code' => 200, 'Status' => $Commande->getStatus()], 200);

        }

        return $this->json(['code'=>400,'Bad request']);

    }

    /**
     * @Route("/DownloadCsvCommande/", name="downloadcsv")
     */
    public function DownloadCsvCommande()
    {

        $spreadsheet = new Spreadsheet();

        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Commande');
        $sheet->setCellValue('B1', 'Client');
        $sheet->setCellValue('C1', 'Date Commande');
        $sheet->setCellValue('D1', 'Total en DT');
        $sheet->setCellValue('E1', 'Etat');

        $em = $this->getDoctrine()->getManager();
        $commandes= $em->getRepository(Commande::class)->findAll();


        $numberLine=1;
        foreach($commandes as $e)
        {
            $line="A";

            $numberLine++;
            $idcmd = $e->getId();
            $client = $e->getUser()->getNom().' '.$e->getUser()->getPrenom();
            $datecmd = date_format( $e->getOrderDate(),"d/m/Y");
            $totalachat = $e->getTotalAchat();
            $status = $e->getStatus();

            $sheet->setCellValue($line.$numberLine, $idcmd);
            $line++;
            $sheet->setCellValue($line.$numberLine, $client);
            $line++;
            $sheet->setCellValue($line.$numberLine, $datecmd);
            $line++;
            $sheet->setCellValue($line.$numberLine, $totalachat);
            $line++;
            $sheet->setCellValue($line.$numberLine, $status);
        }


        $sheet->setTitle("My First Worksheet");

        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        // Create a Temporary file in the system
        $fileName = 'my_first_excel_symfony4.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);

    }
}
