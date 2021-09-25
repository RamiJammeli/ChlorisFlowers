<?php

namespace App\Controller;

use App\Entity\LigneCommande;
use App\Entity\Commande;
use App\Entity\Product;
use App\Form\OrderType;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use PhpParser\JsonDecoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/order")
 */
class OrderController extends AbstractController
{

    public function getTotal()
    {
         $total = 0;
        $panier = $this->get('session')->get('panier');
        if (!empty($panier)) {
            foreach ($panier as $product) {
                if ($product['macaron'] != null) {
                    $total += $product['price'] * $product['qty'] + 10;
                } else {
                    $total += $product['price'] * $product['qty'];
                }
            }
                return $total;
        }
    }

     /**
     * @Route("/addPaniers/{id}", name="addPaniers" )
     * @param $id
     * @param SessionInterface $session
     */
    public function addPanier2(Request $request,$id,SessionInterface $session){
        $panier=$session->get('panier',[]);
        $product=$this->getDoctrine()->getRepository(Product::class)->find($id);

            if (!empty($panier[$id])) {
                $panier[$id]++;
                $panier[$id] = array(
                    'carte' => $request->get('txt'), 'date' => $request->request->get('date'), 'categorie' => $product->getCategorie(), 'image' => $product->getImage(),
                    'boxColor' => $product->getBoxColor(), 'price' => $product->getPrix(), 'id' => $product->getId(), 'qty' => $request->request->get('qtybutton'),
                    'commentaire' => $request->get('txt2'),'macaron' =>$request->get('txt3'));
                $session->set('panier', $panier);
            } else {
                $panier[$id] = 1;
                $panier[$id] = array(
                    'carte' => $request->get('txt'), 'date' => $request->request->get('date'), 'categorie' => $product->getCategorie(), 'image' => $product->getImage(),
                    'boxColor' => $product->getBoxColor(), 'price' => $product->getPrix(), 'id' => $product->getId(),
                    'qty' => $request->request->get('qtybutton'), 'commentaire' => $request->get('txt2'),'macaron' =>$request->get('txt3'));

                $session->set('panier', $panier);
            }

            $session->set('total', $this->getTotal());
         $this->addFlash('success', 'Votre produit a été ajouté avec succés');

        // return $this->redirectToRoute('product_details',['id'=>$id]);

        $panierwithdata = [];
        $totalSum = 0;
        foreach ($panier as $id=>$quantity){

            $prodQuantity = abs((int)$quantity);

            $panierwithdata []=[
                'produits' =>$this->getDoctrine()->getRepository(Product::class)->find($id),
                $price = $this->getDoctrine()->getRepository(Product::class)->find($id)->getPrix(),
                $sum = $price * $panier[$id]['qty'],
                'quantity'=>$panier[$id]['qty'],
                'price'=>$price,
                'sum'=>$sum,
                $totalSum += $sum,
                'carte'=>$panier[$id]['carte'],
                'date'=>$panier[$id]['date'],
                'commentaire'=>$panier[$id]['commentaire']



            ];
        }


        return $this->render('order/panier.html.twig', [
            'items'=>$panierwithdata,
            'totalsum' => $totalSum,

        ]);



    }

    /**
     * @Route("/panier", name="list_Panier")
     * @param SessionInterface $session
     * @param ProductRepository $productRepository
     * @param Request $request
     * @return Response
     */
    public function listPanier(SessionInterface $session,ProductRepository $productRepository,Request $request){
        $panier=$session->get('panier',[]);
        $panierwithdata = [];
        $totalSum = 0;
        foreach ($panier as $id=>$quantity){

            $prodQuantity = abs((int)$quantity);

            $panierwithdata []=[
                'produits' =>$productRepository->find($id),
                $price = $productRepository->find($id)->getPrix(),
                $sum = $price * $panier[$id]['qty'],
                'quantity'=>$panier[$id]['qty'],
                'price'=>$price,
                'sum'=>$sum,
                $totalSum += $sum,
                'carte'=>$panier[$id]['carte'],
                'date'=>$panier[$id]['date'],
                'commentaire'=>$panier[$id]['commentaire']



            ];
        }


        return $this->render('order/panier.html.twig', [
            'items'=>$panierwithdata,
            'totalsum' => $totalSum,

        ]);

    }

    /**
     * @Route("/removePanier/{id}", name="remove_carte")
     * @param $id
     * @param SessionInterface $session
     * @return RedirectResponse
     */
    public function remove ($id, SessionInterface $session){

        $panier=$session->get('panier',[]);
        if (!empty($panier[$id])){
            unset($panier[$id]);
        }
        $session->set('panier', $panier);
        $session->set('total',$this->getTotal());
        return $this->redirectToRoute('list_Panier');
    }
    /**
     * @Route("/shop_removefromcart", name="shop_removefromcart")
     * @param Request $request
     * @return JsonResponse
     */
    public function DeleteFromCartAction(Request $request,SessionInterface $session)
    {
        $data=$request->getContent();
        $data=json_decode($data,true);
        $id=$data['product'];
        $panier=$session->get('panier',[]);
        unset($panier[$id]);
        $session->set('panier',$panier);
        $response=new JsonResponse();
        $response->setData(array(
            'status'=> 1,
            'total'=>$this->getTotal(),
        ));
        $session->set('total',$this->getTotal());
        $session->set('panier', $panier);
        return $response;
    }
    /**
     * @param Request $request
     * @return Response
     */
    public  function nbArticle(Request $request)
    {
        $session = $request->getSession();
        if (!$session->has('panier'))

            $articles = 0;
        else
            $articles = count($session->get('panier'));


        return $this->render('order/boutonPanier.html.twig',[
            "articles" => $articles
        ]);



    }

    public function getFullTotal()
    {
        $totalP=$this->getTotal();
        $total=0;
        $user=$this->get('session')->get('CUser');
        if ( $user['livraisonDomicile'] == true ) {
            $total=$totalP +10;
        }
        elseif ($user['livraisonSurprise'] === true) {

            $total=$totalP+10;
        }
        else
            $total+=$totalP;
        return $total;
    }

    /**
     * @Route("/addOrder", name="add_order")
     * @param SessionInterface $session
     * @param Request $request
     * @return Response
     */
    public function  addOrder(Request $request,ProductRepository $productRepository,SessionInterface $session)
    {
        $data=$request->getContent();
        $data=json_decode($data,true);
        $nom=$data['nom'];
        $prenom=$data['prenom'];
        $livraisonSurprise=$data['livraisonSurprise'];
        $livraisonDomicile=$data['livraisondomicile'];
        $adresse=$data['adresse'];
        $total=$data['total'];
        $RecuprerChezNous = $data['Recuperer'];

        $tel=$data['tel'];
        $session->get('cuser',[]);

        $response=new JsonResponse();

        if(  $livraisonSurprise===true) {

            if ($nom == "" || $prenom == "" || $nom == "" || $adresse == "" || $tel == "") {
                return $response->setData(array(
                    'status' => 1,
                ));
            }else{
                $session->set('CUser',array(
                    'nom'=>$nom,
                    'prenom'=>$prenom,
                    'livraisonSurprise'=> $livraisonSurprise,
                    'livraisonDomicile'=>false,
                    'RecuprerChezNous' =>false,
                    'tel'=>$tel,
                    'adresse'=>$adresse,
                    'total'=>$total
                ));

            }
        }elseif(  $livraisonDomicile===true){
            $session->set('CUser',array(
                'livraisonSurprise'=>false,
                'livraisonDomicile'=>$livraisonDomicile,
                'RecuprerChezNous' =>false,
                'total'=>$total

            ));
        }
        elseif($RecuprerChezNous===true){
            $session->set('CUser',array(
                'livraisonSurprise'=>false,
                'livraisonDomicile'=>false,
                'RecuprerChezNous' =>$RecuprerChezNous,
                'total'=>$total

            ));
        }

        $session->set('Fulltotal',$this->getFullTotal());
        $panier = $session->get('panier');
        $user = $session->get('CUser');

        $em = $this->getDoctrine()->getManager();

        if (count($panier) > 0 && count($user) > 0) {
            $commande = new Commande();
            $commande->setOrderDate(new \DateTime());
            $commande->setStatus("Non traité");

            if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
                $cuser = $this->container->get('security.token_storage')->getToken()->getUser();
                $commande->setUser($cuser);

                $commande->setTotalAchat($this->getFullTotal());

                $em->persist($commande);

                foreach ($panier as $key => $value) {
                    $produits = $productRepository->find($key);
                    $ligneCommande = new LigneCommande();
                    $ligneCommande->setQuantite($panier[$key]['qty']);
                     $ligneCommande->setMacaronPersonnalise($panier[$key]['macaron']);
                    $date = new \DateTime($panier[$key]['date']);
                    $ligneCommande->setShipdate($date);
                    $ligneCommande->setStatus("En cours");
                    $stock = $produits->getStock();
                    $produits->setStock($stock-$panier[$key]['qty']);
                    $ligneCommande->setCard($panier[$key]['carte']);
                    $ligneCommande->setCommentaire($panier[$key]['commentaire']);
                    $ligneCommande->setIdProduit($produits);
                    if ($user['livraisonDomicile'] === true) {
                        $ligneCommande->setTypeLivraison("livraisondomicile");
                    } elseif ($user['livraisonSurprise'] === true) {
                        $ligneCommande->setTypeLivraison("livraisonSurpise");
                        $ligneCommande->setNameR($user['nom']);
                        $ligneCommande->setPhoneNumverR($user['tel']);
                        $ligneCommande->setLastNameR($user['prenom']);
                        $ligneCommande->setAdressR($user['adresse']);
                    } else {
                        $ligneCommande->setTypeLivraison("RecuprerChezNous");
                    }
                    $ligneCommande->setIdOrder($commande);
                    $em->persist($ligneCommande);

                }
                $em->flush();
                $this->get('session')->set('panier', array());
                $this->get('session')->set('CUser', array());
                $this->get('session')->set('total', null);
            } else
                return $this->redirectToRoute('app_login');
        }

            return $response;
        }


    /**
     * @Route("/MesCommandes", name="MesCommandes")
     */
public function  MesCommandes(OrderRepository $orderRepository)
{
    if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $repo = $orderRepository->findBy(array(
            "user" => $user
        ),
        array("id"=>"desc"

        ));


        return $this->render("order/MesCommandes.html.twig",array(
            'commandes'=>$repo)
        );
    }
    return $this->redirectToRoute('app_login');
}

    /**
     * @Route("/detail/{idCmd}", name="detailsCommande")
     * @param $idCmd
     * @return RedirectResponse|Response
     */
    public function DetailsCommande($idCmd)
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) ) {
            $em = $this->getDoctrine()->getManager();

            $commandeDetails= $em->getRepository(LigneCommande::class)->findBy(array('idOrder' => $idCmd));
            return $this->render('order/CommandeDetails.html.twig',
                array(
                    'items' => $commandeDetails
                ));

        }
        return $this->redirectToRoute('app_login');
    }
}
