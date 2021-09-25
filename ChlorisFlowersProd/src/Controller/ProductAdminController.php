<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\ProductController;
use Gedmo\Sluggable\Util\Urlizer;

/**
 * @Route("/adminw")
 *
 */
class ProductAdminController extends AbstractController
{
    /**
     * @Route("/", name="listProduitAdmin")
     */
    public function ListProduct()
    {

        $em = $this->getDoctrine()->getManager();
        $p = $em->getRepository(Product::class)->findAll();
        return $this->render('admin/listProduct.html.twig',
            array(
                'items' => $p
            ));
    }


    /**
     * @Route("/add", name="AddProductAdmin")
     */
    public function AjoutProduit(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['imageFile']->getData();
            $uploadedFileHaut = $form['imageFileHaut']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/client/img/product';
            $entityManager = $this->getDoctrine()->getManager();

            if($uploadedFileHaut){
                $newFilenameHaut=$product->uploadImageProduct($uploadedFileHaut,$destination);
                $product->setHautImage("$newFilenameHaut");
            }
            if($uploadedFile){
                $newFilename=$product->uploadImageProduct($uploadedFile,$destination);
                $product->setImage("$newFilename");


            }

$product->setStatus("Valide");
            $product->setImagesAccordingToSwitch($product);
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('listProduitAdmin');
        }


        return $this->render('admin/addProduct.html.twig', [
            'Product' => $product,
            'form' => $form->createView(),
        ]);


    }

    /**
     * @Route("/edit/{id}", name="ProductAdminedit")
     * @param Request $request
     * @param ProductRepository $productRepository
     * @param $id
     * @return Response
     */
    public function edit(Request $request, ProductRepository $productRepository,$id): Response
    {
        $product=$productRepository->find($id);

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['imageFile']->getData();
            $uploadedFileHaut = $form['imageFileHaut']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/client/img/product';
            $entityManager = $this->getDoctrine()->getManager();

            if($uploadedFileHaut){
                $newFilenameHaut=$product->uploadImageProduct($uploadedFileHaut,$destination);
                $product->setHautImage("$newFilenameHaut");
            }
            if(isset($uploadedFile)){
                $newFilename=$product->uploadImageProduct($uploadedFile,$destination);
                $product->setImage("$newFilename");


            }


            $product->setImagesAccordingToSwitch($product);
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('listProduitAdmin');
        }

        return $this->render('admin/editProduct.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/ChangeStatusProduit/{idProduit}", name="change_status_produit")
     */
    public function ChangeStatusProduit($idProduit)
    {
        $em = $this->getDoctrine()->getManager();
        $produit= $em->getRepository(Product::class)->find($idProduit);
        if($produit->getStatus()==="Valide")
        {
            $produit->setStatus("Bloqué");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->json(['code' => 200, 'Status' => $produit->getStatus()], 200);

        }

        else if($produit->getStatus()==="Bloqué")
        {
            $produit->setStatus("Valide");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->json(['code' => 200, 'Status' => $produit->getStatus()], 200);

        }

        return $this->json(['code'=>400,'Bad request']);

    }
}