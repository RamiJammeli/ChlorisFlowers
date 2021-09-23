<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/behind_the_brand' => [[['_route' => 'behind_the_brand', '_controller' => 'App\\Controller\\AccueilController::aboutUs'], null, null, null, false, false, null]],
        '/tableau_dimension' => [[['_route' => 'tableau_dimension', '_controller' => 'App\\Controller\\AccueilController::dimension'], null, null, null, false, false, null]],
        '/admin/list' => [[['_route' => 'listCommande', '_controller' => 'App\\Controller\\CommandeAdminController::List'], null, null, null, false, false, null]],
        '/order/panier' => [[['_route' => 'list_Panier', '_controller' => 'App\\Controller\\OrderController::listPanier'], null, null, null, false, false, null]],
        '/order/shop_removefromcart' => [[['_route' => 'shop_removefromcart', '_controller' => 'App\\Controller\\OrderController::DeleteFromCartAction'], null, null, null, false, false, null]],
        '/order/addOrder' => [[['_route' => 'add_order', '_controller' => 'App\\Controller\\OrderController::addOrder'], null, null, null, false, false, null]],
        '/order/MesCommandes' => [[['_route' => 'MesCommandes', '_controller' => 'App\\Controller\\OrderController::MesCommandes'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'listProduitAdmin', '_controller' => 'App\\Controller\\ProductAdminController::ListProduct'], null, null, null, true, false, null]],
        '/admin/add' => [[['_route' => 'AddProductAdmin', '_controller' => 'App\\Controller\\ProductAdminController::AjoutProduit'], null, null, null, false, false, null]],
        '/product/new' => [[['_route' => 'Product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product/collection' => [[['_route' => 'list_collection', '_controller' => 'App\\Controller\\ProductController::ListCategorie'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\RegistrationController::Profil'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/keep/alive' => [[['_route' => 'security_keep_alive', '_controller' => 'App\\Controller\\SecurityController::keepAlive'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|detail(?'
                        .'|Admin/([^/]++)(*:40)'
                        .'|Livraison/([^/]++)(*:65)'
                    .')'
                    .'|ChangeStatus(?'
                        .'|/([^/]++)(*:97)'
                        .'|Detail/([^/]++)(*:119)'
                        .'|Produit/([^/]++)(*:143)'
                    .')'
                    .'|edit/([^/]++)(*:165)'
                .')'
                .'|/order/(?'
                    .'|addPaniers/([^/]++)(*:203)'
                    .'|removePanier/([^/]++)(*:232)'
                    .'|detail/([^/]++)(*:255)'
                .')'
                .'|/product/(?'
                    .'|List/([^/]++)(*:289)'
                    .'|de(?'
                        .'|tails/([^/]++)(*:316)'
                        .'|lete/([^/]++)(*:337)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'detailsCommandeAdmin', '_controller' => 'App\\Controller\\CommandeAdminController::Details'], ['idCmd'], null, null, false, true, null]],
        65 => [[['_route' => 'detailsLivraison', '_controller' => 'App\\Controller\\CommandeAdminController::DetailsLivraison'], ['idCmd'], null, null, false, true, null]],
        97 => [[['_route' => 'change_status', '_controller' => 'App\\Controller\\CommandeAdminController::ChangeStatusCommande'], ['idCmd'], null, null, false, true, null]],
        119 => [[['_route' => 'change_status_detail', '_controller' => 'App\\Controller\\CommandeAdminController::ChangeStatusDetailCommande'], ['idCmd'], null, null, false, true, null]],
        143 => [[['_route' => 'change_status_produit', '_controller' => 'App\\Controller\\ProductAdminController::ChangeStatusProduit'], ['idProduit'], null, null, false, true, null]],
        165 => [[['_route' => 'ProductAdminedit', '_controller' => 'App\\Controller\\ProductAdminController::edit'], ['id'], null, null, false, true, null]],
        203 => [[['_route' => 'addPaniers', '_controller' => 'App\\Controller\\OrderController::addPanier2'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'remove_carte', '_controller' => 'App\\Controller\\OrderController::remove'], ['id'], null, null, false, true, null]],
        255 => [[['_route' => 'detailsCommande', '_controller' => 'App\\Controller\\OrderController::DetailsCommande'], ['idCmd'], null, null, false, true, null]],
        289 => [[['_route' => 'Listproduct', '_controller' => 'App\\Controller\\ProductController::listeproduit'], ['categorie'], null, null, false, true, null]],
        316 => [[['_route' => 'product_details', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        337 => [
            [['_route' => 'Product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
