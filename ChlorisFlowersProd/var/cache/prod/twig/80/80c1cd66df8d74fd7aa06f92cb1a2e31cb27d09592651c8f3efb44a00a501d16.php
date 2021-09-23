<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* baseAdmin.html.twig */
class __TwigTemplate_d0763c36aecea20bd789b76ba223eddfac963f887ebc01b0fee27e25c3dd0941 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navBar' => [$this, 'block_navBar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=icon href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/favicon.ico"), "html", null, true);
        echo "\" sizes=\"20x20\" type=\"image/png\">
    <title>Chloris Flowers admin</title>

    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "
</head>
<body>
";
        // line 46
        $this->displayBlock('navBar', $context, $blocks);
        // line 316
        echo "
            ";
        // line 317
        $this->displayBlock('body', $context, $blocks);
        // line 318
        echo "        </div>
    </div>
</div>
";
        // line 321
        $this->displayBlock('javascripts', $context, $blocks);
        // line 479
        echo "</body>
</html>";
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Chloris Flowers";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
        <!-- Custom fonts for this template -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/fontawesome-free/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom styles for this page -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/datatables/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style>
            .page-item.active .page-link {
                color: #fff !important;
                background-color: #e5a3a3 !important;
            }
            .page-link {
                color: #8a8a8a !important;
                background-color: #fff !important;
                border: 1px solid #dee2e6 !important;
            }
            .page-link:hover {
                color: #fff !important;
                background-color: #c1bdbd !important;
            }
        </style>
    ";
    }

    // line 46
    public function block_navBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav sidebar sidebar-dark accordion\" id=\"accordionSidebar\" style=\"background-color: #F9EFED;\">

        <!-- Sidebar - Brand -->


        <div class=\"sidebar-brand-text mx-3\">  <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listProduitAdmin");
        echo "\" class=\"logo\">
                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/logo1.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"180px\" height=\"82px\" >
            </a></div>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">


        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fas fa-fw fa-shopping-basket\" style=\"color: #212529;\"></i>
                <span style=\"color: #212529;\">Produits</span>
            </a>
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <a class=\"collapse-item\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listProduitAdmin");
        echo "\">Liste des produits</a>
                    <a class=\"collapse-item\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddProductAdmin");
        echo "\">Ajout produit</a>
                </div>
            </div>
        </li>


        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\" aria-expanded=\"true\" aria-controls=\"collapseUtilities\" style=\"color: #212529;\">
                <i class=\"fas fa-fw fa-shopping-cart\" style=\"color: #212529;\"></i>
                <span style=\"color: #212529;\">Commandes</span>
            </a>
            <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <a class=\"collapse-item\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listCommande");
        echo "\">Liste des Commandes</a>
                </div>
            </div>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\" aria-expanded=\"true\" aria-controls=\"collapseUtilities\" style=\"color: #212529;\">
                <i class=\"fas fa-align-left\" style=\"color: #212529;\"></i>
                <span style=\"color: #212529;\">Site</span>
            </a>
            <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <a class=\"collapse-item\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - Utilities Collapse Menu -->






        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline \" >
            <button class=\"rounded-circle border-c \" id=\"sidebarToggle\" ></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light  topbar mb-4 static-top shadow\" style=\"background-color: #F9EFED;\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>

                ";
        // line 151
        echo "
                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-bell fa-fw\"></i>
                            <!-- Counter - Alerts -->
                            <span class=\"badge badge-danger badge-counter\">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
                            <h6 class=\"dropdown-header\">
                                Alerts Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-primary\">
                                        <i class=\"fas fa-file-alt text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 12, 2019</div>
                                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-success\">
                                        <i class=\"fas fa-donate text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 7, 2019</div>
                                    \$290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-warning\">
                                        <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-envelope fa-fw\"></i>
                            <!-- Counter - Messages -->
                            <span class=\"badge badge-danger badge-counter\">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
                            <h6 class=\"dropdown-header\">
                                Message Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\" alt=\"\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div class=\"font-weight-bold\">
                                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\" alt=\"\">
                                    <div class=\"status-indicator\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\" alt=\"\">
                                    <div class=\"status-indicator bg-warning\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                        </div>
                    </li>

                    <div class=\"topbar-divider d-none d-sm-block\"></div>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Chloris Flowers</span>
                            <img class=\"img-profile rounded-circle\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/LOGO.png"), "html", null, true);
        echo "\" >
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Settings
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Activity Log
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            ";
    }

    // line 317
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 321
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 322
        echo "

    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>


    <!-- Page level plugins -->
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/demo/datatables-demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/demo/datatables-demo.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#dataTable').dataTable( {
            \"oLanguage\": {
                \"oPaginate\": {
                    \"sFirst\": \"Première page\", // This is the link to the first page
                    \"sPrevious\": \"Page précédente\", // This is the link to the previous page
                    \"sNext\": \"Page suivante\", // This is the link to the next page
                    \"sLast\": \"Dernière page\" // This is the link to the last page
                },
                \"sLengthMenu\": \"Afficher _MENU_ entrées\",
                \"sSearch\": \"Recherche:\"
            },
            \"columnDefs\": [
                { \"orderable\": false, \"targets\": -1 }
            ]
        } );
    </script>

    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/axios.min.js"), "html", null, true);
        echo "\"></script>


<script>
    function onClickLink(event) {
        event.preventDefault();
        const url = this.href;
        console.log(url)
        const status = this.querySelector('span.js-status');
        var icone=this.classList;
        axios.get(url).then(function (response){
            const data = response.data;
            console.log(data)
            var proceed = confirm(\"Etes vous sur de vouloir changer l'état du commande ?\");
            if(data.Status===\"En cours\" )
            {
                if (proceed) {
                    icone.remove('btn-danger');
                    icone.add('btn-warning');
                } else {
                    data.Status=\"Non traité\"
                }
            }
            else if(data.Status===\"Livré\")
            {
                if (proceed) {
                    icone.remove('btn-warning');
                    icone.add('btn-success');
                } else {
                    data.Status=\"En cours\"
                }
            }
            else if(data.Status===\"Non traité\")
            {
                if (proceed) {
                    icone.remove('btn-success');
                    icone.add('btn-danger');
                } else {
                    data.Status=\"Livré\"
                }
            }
            status.textContent = data.Status;
        });
    }

    \$(\"#dataTable\").on(\"click\",'a.js-status',  onClickLink);

</script>

    <script>
        function onClickLink(event) {
            event.preventDefault();
            const url = this.href;
            console.log(url)
            const status = this.querySelector('span.js-status_detail');
            var icone=this.classList;
            axios.get(url).then(function (response){
                const data = response.data;
                console.log(data)
                var proceed = confirm(\"Etes vous sur de vouloir changer l'état du commande ?\");
                if(data.Status===\"En cours\" )
                {
                    if (proceed) {
                        icone.remove('btn-success');
                        icone.add('btn-warning');
                    } else {
                        data.Status=\"Terminé\"
                    }
                }
                else if(data.Status===\"Terminé\")
                {
                    if (proceed) {
                        icone.remove('btn-warning');
                        icone.add('btn-success');
                    } else {
                        data.Status=\"En cours\"
                    }
                }

                status.textContent = data.Status;
            });
        }

        \$(\"#dataTable\").on(\"click\",'a.js-status_detail',  onClickLink);

    </script>
    <script>
        function onClickLink(event) {
            event.preventDefault();
            const url = this.href;
            console.log(url)
            const status = this.querySelector('span.js-status_produit');
            var icone=this.classList;
            axios.get(url).then(function (response){
                const data = response.data;
                console.log(data)
                var proceed = confirm(\"Etes vous sur de vouloir changer l'état de ce produit ?\");
                if(data.Status===\"Valide\" )
                {
                    if (proceed) {
                        icone.remove('btn-danger');
                        icone.add('btn-success');
                    } else {
                        data.Status=\"Bloqué\"
                    }
                }
                else if(data.Status===\"Bloqué\")
                {
                    if (proceed) {
                        icone.remove('btn-success');
                        icone.add('btn-danger');
                    } else {
                        data.Status=\"Valide\"
                    }
                }

                status.textContent = data.Status;
            });
        }

            \$(\"#dataTable\").on(\"click\",'a.js-status_produit',  onClickLink);


    </script>

";
    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 353,  473 => 334,  469 => 333,  465 => 332,  461 => 331,  457 => 330,  450 => 326,  446 => 325,  442 => 324,  438 => 322,  434 => 321,  428 => 317,  394 => 286,  257 => 151,  218 => 104,  203 => 92,  186 => 78,  182 => 77,  159 => 57,  155 => 56,  144 => 47,  140 => 46,  119 => 26,  113 => 23,  106 => 19,  102 => 17,  98 => 16,  91 => 14,  86 => 479,  84 => 321,  79 => 318,  77 => 317,  74 => 316,  72 => 46,  67 => 43,  65 => 16,  60 => 14,  54 => 11,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "baseAdmin.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/baseAdmin.html.twig");
    }
}
