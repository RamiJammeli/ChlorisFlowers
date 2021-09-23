<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Json;
use function MongoDB\BSON\toJSON;

/**
 * @Route("/product")
 */
class ProductController extends AbstractController
{


    /**
     * @Route("/List/{categorie}", name="Listproduct")
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @param ProductRepository $repository
     * @param $categorie
     * @return Response
     */

    public function listeproduit(Request $request,PaginatorInterface $paginator,ProductRepository $repository,$categorie):Response
    {

        $products=$repository->findByCategorie($categorie);
        if ($request->isMethod('GET')) {
            if (isset($_GET['BoxColor']) || isset($_GET['Size']) || isset($_GET['RoseColor']) || isset($_GET['price'])) {
                $selectedBoxColor = $request->get('BoxColor');
                $selectedSize = $request->get('Size');
                $selectedRoseColor = $request->get('RoseColor');
                $selectedPrice = $request->get('price');
                preg_match_all('!\d+!', $selectedPrice, $matches);
                $minPrice = (double)$matches[0][0];
                $maxPrice = (double)$matches[0][1];


                $c = $repository->filter($selectedBoxColor,$selectedSize,$categorie, $selectedRoseColor, $minPrice, $maxPrice);
                $count = sizeof($c) / 9;
                if ($count < 1) {
                    $count += 1;
                }
                $recents = $paginator->paginate($c, $request->query->getInt('page', 1), 9);
                return $this->render('product/index.html.twig',
                    ['v' => $recents, 'categorie' => $categorie]
                );
            }
        }
        $count=sizeof($products)/9;
        $all = $paginator->paginate($products, $request->query->getInt('page', 1),9);
        return $this->render('product/index.html.twig',
            ['v' =>$all,'categorie'=>$categorie]
        );
    }

    /**
     * @Route("/details/{id}", name="product_details", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('product/details.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/new", name="Product_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('Product_index');
        }

        return $this->render('Product/new.html.twig', [
            'Product' => $product,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/delete/{id}", name="Product_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('Product_index');
    }

    /**
     * @Route("/collection", name="list_collection")
     * @param ProductRepository $repository
     * @return Response
     */
    public function ListCategorie(ProductRepository $repository)
    {

        $c=$repository->ShowCatgorie();

        return $this->render('product/collection.html.twig',['i' =>$c]
        );
    }


}