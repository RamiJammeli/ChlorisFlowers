<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/behind_the_brand' => [[['_route' => 'behind_the_brand', '_controller' => 'App\\Controller\\AccueilController::aboutUs'], null, null, null, false, false, null]],
        '/tableau_dimension' => [[['_route' => 'tableau_dimension', '_controller' => 'App\\Controller\\AccueilController::dimension'], null, null, null, false, false, null]],
        '/adminx/list' => [[['_route' => 'listCommande', '_controller' => 'App\\Controller\\CommandeAdminController::List'], null, null, null, false, false, null]],
        '/adminx/DownloadCsvCommande' => [[['_route' => 'downloadcsv', '_controller' => 'App\\Controller\\CommandeAdminController::DownloadCsvCommande'], null, null, null, true, false, null]],
        '/order/panier' => [[['_route' => 'list_Panier', '_controller' => 'App\\Controller\\OrderController::listPanier'], null, null, null, false, false, null]],
        '/order/shop_removefromcart' => [[['_route' => 'shop_removefromcart', '_controller' => 'App\\Controller\\OrderController::DeleteFromCartAction'], null, null, null, false, false, null]],
        '/order/addOrder' => [[['_route' => 'add_order', '_controller' => 'App\\Controller\\OrderController::addOrder'], null, null, null, false, false, null]],
        '/order/MesCommandes' => [[['_route' => 'MesCommandes', '_controller' => 'App\\Controller\\OrderController::MesCommandes'], null, null, null, false, false, null]],
        '/adminw' => [[['_route' => 'listProduitAdmin', '_controller' => 'App\\Controller\\ProductAdminController::ListProduct'], null, null, null, true, false, null]],
        '/adminw/add' => [[['_route' => 'AddProductAdmin', '_controller' => 'App\\Controller\\ProductAdminController::AjoutProduit'], null, null, null, false, false, null]],
        '/product/new' => [[['_route' => 'Product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product/collection' => [[['_route' => 'list_collection', '_controller' => 'App\\Controller\\ProductController::ListCategorie'], null, null, null, false, false, null]],
        '/connecter' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\RegistrationController::Profil'], null, null, null, false, false, null]],
        '/resetpassword' => [[['_route' => 'resetpassword', '_controller' => 'App\\Controller\\RegistrationController::resetpassword'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/keep/alive' => [[['_route' => 'security_keep_alive', '_controller' => 'App\\Controller\\SecurityController::keepAlive'], null, null, null, true, false, null]],
        '/sendmail' => [[['_route' => 'sendmail', '_controller' => 'App\\Controller\\SecurityController::sendmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin(?'
                    .'|x/(?'
                        .'|detail(?'
                            .'|Admin/([^/]++)(*:206)'
                            .'|Livraison/([^/]++)(*:232)'
                        .')'
                        .'|ChangeStatus(?'
                            .'|/([^/]++)(*:265)'
                            .'|Detail/([^/]++)(*:288)'
                        .')'
                    .')'
                    .'|w/(?'
                        .'|edit/([^/]++)(*:316)'
                        .'|ChangeStatusProduit/([^/]++)(*:352)'
                    .')'
                .')'
                .'|/order/(?'
                    .'|addPaniers/([^/]++)(*:391)'
                    .'|removePanier/([^/]++)(*:420)'
                    .'|detail/([^/]++)(*:443)'
                .')'
                .'|/product/(?'
                    .'|List/([^/]++)(*:477)'
                    .'|de(?'
                        .'|tails/([^/]++)(*:504)'
                        .'|lete/([^/]++)(*:525)'
                    .')'
                .')'
                .'|/reset/([^/]++)(*:550)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'detailsCommandeAdmin', '_controller' => 'App\\Controller\\CommandeAdminController::Details'], ['idCmd'], null, null, false, true, null]],
        232 => [[['_route' => 'detailsLivraison', '_controller' => 'App\\Controller\\CommandeAdminController::DetailsLivraison'], ['idCmd'], null, null, false, true, null]],
        265 => [[['_route' => 'change_status', '_controller' => 'App\\Controller\\CommandeAdminController::ChangeStatusCommande'], ['idCmd'], null, null, false, true, null]],
        288 => [[['_route' => 'change_status_detail', '_controller' => 'App\\Controller\\CommandeAdminController::ChangeStatusDetailCommande'], ['idCmd'], null, null, false, true, null]],
        316 => [[['_route' => 'ProductAdminedit', '_controller' => 'App\\Controller\\ProductAdminController::edit'], ['id'], null, null, false, true, null]],
        352 => [[['_route' => 'change_status_produit', '_controller' => 'App\\Controller\\ProductAdminController::ChangeStatusProduit'], ['idProduit'], null, null, false, true, null]],
        391 => [[['_route' => 'addPaniers', '_controller' => 'App\\Controller\\OrderController::addPanier2'], ['id'], null, null, false, true, null]],
        420 => [[['_route' => 'remove_carte', '_controller' => 'App\\Controller\\OrderController::remove'], ['id'], null, null, false, true, null]],
        443 => [[['_route' => 'detailsCommande', '_controller' => 'App\\Controller\\OrderController::DetailsCommande'], ['idCmd'], null, null, false, true, null]],
        477 => [[['_route' => 'Listproduct', '_controller' => 'App\\Controller\\ProductController::listeproduit'], ['categorie'], null, null, false, true, null]],
        504 => [[['_route' => 'product_details', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        525 => [[['_route' => 'Product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        550 => [
            [['_route' => 'reset', '_controller' => 'App\\Controller\\SecurityController::reset'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
