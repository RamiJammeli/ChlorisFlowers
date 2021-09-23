<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/admin")
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
    public function ChangeStatusCommande($idCmd)
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
}
