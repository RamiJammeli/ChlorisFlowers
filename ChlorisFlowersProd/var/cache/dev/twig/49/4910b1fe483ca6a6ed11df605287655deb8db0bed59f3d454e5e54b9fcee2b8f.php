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

/* base.html.twig */
class __TwigTemplate_d95d02bac5e3d8a72439a58169ab8d5dadc8a11fac91e3db63d35bdd6229819d extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=icon href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/favicon.ico"), "html", null, true);
        echo "\" sizes=\"20x20\" type=\"image/png\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Quattrocento\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Playfair+Display\"/>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/styles/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/styles/all-icon-font.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/styles/css-plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/styles/responsive.css"), "html", null, true);
        echo "\">
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    <style>
        a:hover {
            color: #BD6F51;
            text-decoration: underline;
        }
    </style>

</head>
<body>
";
        // line 31
        $this->displayBlock('navBar', $context, $blocks);
        // line 348
        echo "
";
        // line 349
        $this->displayBlock('body', $context, $blocks);
        // line 350
        echo "
";
        // line 351
        $this->displayBlock('footer', $context, $blocks);
        // line 438
        echo "

";
        // line 453
        echo "<!----quantity --->

<!--date --->
<!----date picker---->

<script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/jquery-plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 461
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/codingeek-link.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/codingeek.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/axios.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/sweetalert2.js"), "html", null, true);
        echo "\"></script>

<!---radion button livraison-->
<script>
    \$(document).ready(function () {
        \$(\"input[id='202']\").click(function () {
            if (\$(this).is(':checked')) {
                \$(\"#form\").hide();
            }
        });
        \$(\"input[id='201']\").click(function () {
            if (\$(this).is(':checked')) {
                \$(\"#form\").show();
            }
        });

    });
</script>
<script>
    \$('.date').datepicker({
        startDate: '+3d'
    });
</script>

<!----recupérer livraison--->
<script>
    function checkout(event) {
        event.preventDefault();
        const ls = \$(\"input[id='201']\").is(':checked');
        const ld = \$(\"input[id='202']\").is(':checked');
        const Rs = \$(\"input[id='203']\").is(':checked');
        const nom = \$('#l_name').val();
        const prenom = \$('#f_name').val();
        const adresse = \$('#street-address').val();
        const phone = \$('#phone').val();
        total = document.getElementById(\"total\").innerText;
        const totalAchat = total.replace('DT', '')
        const fraisLiv= parseInt(totalAchat);
        console.log(fraisLiv+10);
        console.log(ls);
        console.log(Rs);
        let body = {
            nom: nom,
            prenom: prenom,
            livraisonSurprise: ls,
            adresse: adresse,
            tel: phone,
            livraisondomicile: ld,
            total: fraisLiv + 10,
            Recuperer : Rs
        };
        axios({
            method: 'post',
            url: '";
        // line 520
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_order");
        echo "',
            data: body
        }).then(function (response) {
            let status = response.data.status;
            if (status === 1) {
                swal.fire({
                    type: 'error',
                    title: 'Veuillez Remplir Le Formulaire',
                    text: 'Vérifez !',
                });
            } else {
                window.location.replace('";
        // line 531
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MesCommandes");
        echo "');
            }
        });
    }

    function OnClickDelete(event, id) {
        event.preventDefault();
        //const fullid=this.id;
        //var id=fullid.split('_');
        var node = document.getElementById('prod_' + id);
        console.log(id);
        let body = {
            product: id
        };
        axios({
            url: '";
        // line 546
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_removefromcart");
        echo "',
            data: body,
            method: 'post'
        }).then(function (response) {
            const total = response.data.total;
            const size = response.data.size;
            node.remove();
            document.getElementById(\"total\").innerHTML = total + ' DT';
            if (status === 1) {
                Swal.fire({
                    type: 'success',
                    title: 'Produit Supprimé',
                });
            }
        });
    }

</script>
<!--- filtre par --->
<script>
    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById(\"myCheck\");
        // Get the output text
        var text = document.getElementById(\"txt\");
        // If the checkbox is checked, display the output text
        if (checkBox.checked === true){
            text.style.display = \"block\";
        } else {
            text.style.display = \"none\";
        }
    }
</script>
<script>
    function myFunction2() {
// Get the checkbox
        var checkBox1 = document.getElementById(\"myCheck1\");
// Get the output text
        var text1 = document.getElementById(\"txt2\");
// If the checkbox is checked, display the output text
        if (checkBox1.checked === true) {
            text1.style.display = \"block\";
        } else {
            text1.style.display = \"none\";
        }
    }
</script>


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Chloris Flowers";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_navBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        // line 32
        echo "
    <!-- preloader area start -->
    <div class=\"preloader\" id=\"preloader\">
        <div class=\"preloader-inner\">
            <div class=\"spinner\">
                <div class=\"dot1\"></div>
                <div class=\"dot2\"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class=\"body-overlay\" id=\"body-overlay\"></div>
    <div class=\"search-popup\" id=\"search-popup\">
        <form action=\"http://codingeek.net/html/gazania/index.html\" class=\"search-form\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search.....\">
            </div>
            <button type=\"submit\" class=\"submit-btn\"><i class=\"ti-search\"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- Info-popup -->
    <div class=\"popup-item info-popup\">
        <div class=\"popup-item-inner scrollbar-primary\">
            <button class=\"popup-close-btn info-popup-content_close\">X</button>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"popup-inner-img\">
                        <div class=\"popup-inner-img-inner\">
                            <ul>
                                <li><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/others/modal-1.png"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                                </li>
                                <li><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/others/modal-2.png"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                                </li>
                                <li><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/others/modal-3.png"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class=\"popup-inner-content text-center\">
                        <div class=\"section-title-area text-center\">
                            <div class=\"section-title section-title-2\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                                </div>
                                <div class=\"title-text\">
                                    <h2 class=\"title\">Contact us</h2>
                                </div>
                            </div>
                        </div>
                        <address><a href=\"tel:+216 21900767\">+216 21900767 / +216 21184775</a> <br>
                            <a href=\"mailto:info@bloom.com\">flowerschloris@gmail.com</a></address>
                        <div class=\"social_share\">
                            <ul>
                                <li><a href=\"https://www.instagram.com/chloris.flowers/?hl=fr\" target=\"_blank\"><i
                                                class=\"fa fa-instagram\"></i></a></li>

                                <li><a href=\"https://www.facebook.com/ChlorisflowersTunisia\" target=\"_blank\"><i
                                                class=\"fa fa-facebook\"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Message-popup -->
    <div class=\"popup-item message-popup\">
        <div class=\"popup-item-inner scrollbar-primary\">
            <button class=\"popup-close-btn message-popup-content_close\">X</button>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"message-popup-img\">
                        <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/others/modal-4.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"popup-inner-content\">
                        <div class=\"section-title-area \">
                            <div class=\"section-title section-title-2\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                                </div>
                                <div class=\"title-text\">
                                    <h2 class=\"title\">Send a message</h2>
                                </div>
                            </div>
                        </div>
                        <form action=\"#\" class=\"message-popup-form\">
                            <label>Full name*</label>
                            <input type=\"text\" name=\"name\">
                            <label>Email address*</label>
                            <input type=\"email\" name=\"email\">
                            <label>Insert message</label>
                            <textarea name=\"message\"></textarea>
                            <div class=\"btn-wrapper\">
                                <button class=\"boxed-btn btn-rounded\" type=\"submit\">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location-popup -->
    <div class=\"popup-item location-popup \">
        <div class=\"popup-item-inner scrollbar-primary\">
            <button class=\"popup-close-btn location-popup-content_close\">X</button>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"popup-inner-img\">
                        <div class=\"popup-inner-img-inner\">
                            <ul>
                                <li><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/others/modal-2.png"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                                </li>
                                <li><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/others/modal-3.png"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                                </li>
                                <li><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/others/modal-1.png"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class=\"popup-inner-content text-center\">
                        <div class=\"section-title-area text-center\">
                            <div class=\"section-title section-title-2\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                                </div>
                                <div class=\"title-text\">
                                    <h2 class=\"title\">Working hours</h2>
                                </div>
                            </div>
                        </div>
                        <p>Monday - Friday: 9AM - 4PM <br> Saturday: 9Am - 1PM <br> Sunday: Closed </p>
                        <div class=\"social_share\">
                            <ul>
                                <li><a href=\"https://www.instagram.com/codingeeknet\" target=\"_blank\"><i
                                                class=\"fa fa-instagram\"></i></a></li>
                                <li><a href=\"https://twitter.com/codingeeknet\" target=\"_blank\"><i
                                                class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"https://www.facebook.com/codingeek.net/\" target=\"_blank\"><i
                                                class=\"fa fa-facebook\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar area start -->
    <div class=\"nav-style-01-wrap\">
        <nav class=\"navbar navbar-area navbar-expand-lg nav-style-01 nav-style-6-color\">
            <div class=\"container-fluid nav-container\">
                <div class=\"responsive-mobile-menu\">
                    <div class=\"logo-wrapper mobile-logo\">
                        <a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"logo\">
                            <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/LOGO.png"), "html", null, true);
        echo "\" alt=\"logo\">
                        </a>
                    </div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bloom_main_menu\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\">
                            <span class=\"line\"></span>
                            <span class=\"line\"></span>
                            <span class=\"line\"></span>
                            <span class=\"line\"></span>
                        </span>
                    </button>
                </div>
                <div class=\"logo-wrapper desktop-logo\">
                    <a href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"logo\">
                        <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/LOGO.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"180px\" height=\"82px\">
                    </a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bloom_main_menu\">
                    <ul class=\"navbar-nav\">

                        <li>
                            <a href=\"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_collection");
        echo "\">ACHETER MAINTENANT</a>
                        </li>
                        <li><a href=\"";
        // line 217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("behind_the_brand");
        echo "\">A PROPOS</a></li>
                        <li><a href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableau_dimension");
        echo "\">TABLEAU DE DIMESION</a></li>

                    </ul>
                </div>
                <div class=\"nav-right-content\">
                    <ul>
                        <li class=\"mini-cart-icon\">
                            <span class=\"mini-cart-icon header-navbar-active\">

                         <a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_Panier");
        echo "\"><i class=\"ti-shopping-cart\"></i>
                             <sup>
                                 ";
        // line 229
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "session", [], "any", false, false, false, 229), "get", [0 => "panier"], "method", false, false, false, 229)), "html", null, true);
        echo "
                             </sup>
                         </a>

                            </span>
                        </li>
                        <li class=\"search\" id=\"search\">
                            <i class=\"ti-search\"></i>
                        </li>
                        <li class=\"user-menu\">


                            ";
        // line 241
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 242
            echo "                                <span>Bonjour, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "user", [], "any", false, false, false, 242), "nom", [], "any", false, false, false, 242), "html", null, true);
            echo "</span>
                                <ul>
                                    <li><a href=\"my-account.html\">Votre Compte</a></li>
                                    <li><a href=\"";
            // line 245
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MesCommandes");
            echo "\">Vos Commandes</a></li>
                                    <li><a href=\"";
            // line 246
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                                </ul>
                            ";
        } else {
            // line 249
            echo "                                <span>Se Connecter</span>
                                <ul>

                                    <li><a href=\"";
            // line 252
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\">Inscription</a></li>
                                    <li><a href=\"";
            // line 253
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">S'identifier</a></li>
                                </ul>
                            ";
        }
        // line 256
        echo "                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar area end -->
    <div class=\"mini-cart-wrapper\" style=\"background-color: white\">
        <div class=\"sidebar-nav-icon\">
            <button class=\"mini-cart-close\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/cart-icon.png"), "html", null, true);
        echo "\"
                                                 alt=\"Arrow Image\"></button>
        </div>
        <div class=\"mini-cart-inner scrollbar-primary\">
            <ul>
                <li>
                    <div class=\"section-title-area \">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">My orders</h2>
                            </div>
                        </div>
                    </div>
                </li>
                ";
        // line 282
        $context["panier"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "session", [], "any", false, false, false, 282), "get", [0 => "panier"], "method", false, false, false, 282);
        // line 283
        echo "
                ";
        // line 284
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "session", [], "any", false, false, false, 284), "get", [0 => "panier"], "method", false, false, false, 284)), 0))) {
            // line 285
            echo "                    <li>
                    <div class=\"single-cart-item d-flex\">
                        <div class=\"cart-item\">

                            <div class=\"cart-item-inner\">
                                Votre panier est vide
                            </div>
                        </div>
                    </div>
                ";
        } elseif ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 294
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 294, $this->source); })()), "session", [], "any", false, false, false, 294), "get", [0 => "panier"], "method", false, false, false, 294)), 0))) {
            // line 295
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 295, $this->source); })()));
            foreach ($context['_seq'] as $context["slug"] => $context["product"]) {
                // line 296
                echo "                        <li>
                            <div id=\"prod_";
                // line 297
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\" class=\"single-cart-item d-flex\">
                                <div class=\"cart-item\">
                                  <div  id=\"prod_";
                // line 299
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\" type=\"hidden\"></div>
                                    <div class=\"cart-item-inner\">
                                        <div class=\"product-image\">
                                            <a href=\"product-details.html\"><img
                                                        src=\"";
                // line 303
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 303))), "html", null, true);
                echo "\"
                                                        alt=\"Flower Image\"></a>
                                        </div>
                                        <div class=\"cart-item-brief\">
                                            <div class=\"product-order-number\">";
                // line 307
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 307), "html", null, true);
                echo "</div>
                                            <div class=\"product-multiply\">x</div>
                                            <div class=\"cart-product-title\" style=\"text-transform: uppercase\"><h2
                                                        class=\"product-title\"><a href=\"product-details.html\"></a></h2>
                                            </div>
                                            <div class=\"product-price\">";
                // line 312
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 312), "html", null, true);
                echo " DT</div>
                                            <div class=\"product-remove\"><a onclick=\"OnClickDelete(event,";
                // line 313
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo ")\"><i
                                                            class=\"fa fa-trash-o\"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            echo "                ";
        }
        // line 322
        echo "                <li>
                    <div class=\"cart-item\">
                        <span id=\"count\" class=\"count\"></span>
                        <div class=\"cart-item-inner cart-total\">
                            <h2 style=\"font-family: var(--heading-font)\">Total</h2>
                            <h2 id=\"total\" style=\"font-family: var(--heading-font)\">
                                <strong>";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "session", [], "any", false, false, false, 328), "get", [0 => "total"], "method", false, false, false, 328), "html", null, true);
        echo " DT</strong></h2>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"cart-item\">
                        <div class=\"cart-item-inner cart-total cart-btn\">
                            <div class=\"btn-wrapper\">
                                <a href=\"";
        // line 336
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_Panier");
        echo "\" class=\"boxed-btn btn-rounded\">Panier</a>
                            </div>
                            <div class=\"btn-wrapper\">
                                <a href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_collection");
        echo "\" class=\"boxed-btn btn-rounded\">Shopping</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 349
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 351
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 352
        echo "    <footer class=\"footer-area\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row custom-gutter\">
                    <div class=\"col-xl-3 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget\">
                            <div class=\"about_us_widget\">
                                <a href=\"index-2.html\" class=\"footer-logo\">
                                    <img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/logo1.png"), "html", null, true);
        echo "\" alt=\"footer logo\">
                                </a>
                                <p>Flowers always make people better, happier, they are sunshine and medicine for the
                                    soul.</p>
                                <address><a href=\"tel:+0123456789\">+12345678912</a> <br>3, Avenue Saint Andrews,
                                    California <br><a href=\"mailto:info@bloom.com\">info@bloom.com</a></address>
                                <div class=\"social_share\">
                                    <ul>
                                        <li><a href=\"https://www.instagram.com/codingeeknet\" target=\"_blank\"><i
                                                        class=\"fa fa-instagram\"></i></a></li>
                                        <li><a href=\"https://twitter.com/codingeeknet\" target=\"_blank\"><i
                                                        class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"https://www.facebook.com/codingeek.net/\" target=\"_blank\"><i
                                                        class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"https://www.linkedin.com/company/codingeek/about\"
                                               target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget widget_text text-center mobile-text-left\">
                            <h4 class=\"widget-title\">Working hours</h4>
                            <p>Monday - Friday: 9AM - 4PM <br> Saturday: 9Am - 3PM <br> Sunday: Closed </p>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3\">
                        <div class=\"footer-widget widget widget_nav_menu desktop-center\">
                            <h4 class=\"widget-title\">Support</h4>
                            <ul>
                                <li><a href=\"faq.html\">FAQs</a></li>
                                <li><a href=\"my-account.html\">My Account</a></li>
                                <li><a href=\"#\">Payment facilities</a></li>
                                <li><a href=\"#\">Policy</a></li>
                                <li><a href=\"#\">Refunds</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3\">
                        <div class=\"footer-widget widget widget_nav_menu desktop-center\">
                            <h4 class=\"widget-title\">About us</h4>
                            <ul>
                                <li><a href=\"about.html\">About us</a></li>
                                <li><a href=\"blog.html\">Blog</a></li>
                                <li><a href=\"gallery.html\">Gallery</a></li>
                                <li><a href=\"price.html\">Price</a></li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget\">
                            <div class=\"newsletter-widget\">
                                <h4 class=\"widget-title\">Contact us</h4>
                                <p>Be among the first one to eceive and benefit from our inclusive sales every week.</p>
                                <form action=\"#\" class=\"form-input-box\">
                                    <input type=\"text\" placeholder=\"Enter your email address\">
                                    <button type=\"submit\"><img
                                                src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/arrow-right-white-2.svg"), "html", null, true);
        echo "\"
                                                alt=\"Arrow Icon\"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class=\"back-to-top\">
        <span class=\"back-top\"><i class=\"fa fa-long-arrow-up\"></i></span>
    </div>
    <!-- back to top area end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  911 => 419,  849 => 360,  839 => 352,  829 => 351,  811 => 349,  792 => 339,  786 => 336,  775 => 328,  767 => 322,  764 => 321,  750 => 313,  746 => 312,  738 => 307,  731 => 303,  724 => 299,  719 => 297,  716 => 296,  711 => 295,  709 => 294,  698 => 285,  696 => 284,  693 => 283,  691 => 282,  680 => 274,  668 => 265,  657 => 256,  651 => 253,  647 => 252,  642 => 249,  636 => 246,  632 => 245,  625 => 242,  623 => 241,  608 => 229,  603 => 227,  591 => 218,  587 => 217,  582 => 215,  572 => 208,  568 => 207,  551 => 193,  547 => 192,  514 => 162,  501 => 152,  496 => 150,  491 => 148,  456 => 116,  447 => 110,  413 => 79,  400 => 69,  395 => 67,  390 => 65,  355 => 32,  345 => 31,  326 => 21,  307 => 14,  245 => 546,  227 => 531,  213 => 520,  157 => 467,  153 => 466,  149 => 465,  145 => 464,  141 => 463,  137 => 462,  132 => 461,  128 => 459,  124 => 458,  117 => 453,  113 => 438,  111 => 351,  108 => 350,  106 => 349,  103 => 348,  101 => 31,  90 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  66 => 14,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=icon href=\"{{ asset(\"client/img/favicon.ico\") }}\" sizes=\"20x20\" type=\"image/png\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Quattrocento\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Playfair+Display\"/>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
    <title>{% block title %}Chloris Flowers{% endblock %}</title>


    <link rel=\"stylesheet\" href=\"{{ asset('client/styles/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('client/styles/all-icon-font.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('client/styles/css-plugins.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('client/styles/responsive.css') }}\">
    {% block stylesheets %}  {% endblock %}
    <style>
        a:hover {
            color: #BD6F51;
            text-decoration: underline;
        }
    </style>

</head>
<body>
{% block navBar %}

    <!-- preloader area start -->
    <div class=\"preloader\" id=\"preloader\">
        <div class=\"preloader-inner\">
            <div class=\"spinner\">
                <div class=\"dot1\"></div>
                <div class=\"dot2\"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class=\"body-overlay\" id=\"body-overlay\"></div>
    <div class=\"search-popup\" id=\"search-popup\">
        <form action=\"http://codingeek.net/html/gazania/index.html\" class=\"search-form\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search.....\">
            </div>
            <button type=\"submit\" class=\"submit-btn\"><i class=\"ti-search\"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- Info-popup -->
    <div class=\"popup-item info-popup\">
        <div class=\"popup-item-inner scrollbar-primary\">
            <button class=\"popup-close-btn info-popup-content_close\">X</button>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"popup-inner-img\">
                        <div class=\"popup-inner-img-inner\">
                            <ul>
                                <li><img src=\"{{ asset('client/img/others/modal-1.png') }}\" alt=\"Flower Image\">
                                </li>
                                <li><img src=\"{{ asset('client/img/others/modal-2.png') }}\" alt=\"Flower Image\">
                                </li>
                                <li><img src=\"{{ asset('client/img/others/modal-3.png') }}\" alt=\"Flower Image\">
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class=\"popup-inner-content text-center\">
                        <div class=\"section-title-area text-center\">
                            <div class=\"section-title section-title-2\">
                                <div class=\"icon\">
                                    <img src=\"{{ asset('client/img/icon/title.svg') }}\" alt=\"Bloom\">
                                </div>
                                <div class=\"title-text\">
                                    <h2 class=\"title\">Contact us</h2>
                                </div>
                            </div>
                        </div>
                        <address><a href=\"tel:+216 21900767\">+216 21900767 / +216 21184775</a> <br>
                            <a href=\"mailto:info@bloom.com\">flowerschloris@gmail.com</a></address>
                        <div class=\"social_share\">
                            <ul>
                                <li><a href=\"https://www.instagram.com/chloris.flowers/?hl=fr\" target=\"_blank\"><i
                                                class=\"fa fa-instagram\"></i></a></li>

                                <li><a href=\"https://www.facebook.com/ChlorisflowersTunisia\" target=\"_blank\"><i
                                                class=\"fa fa-facebook\"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Message-popup -->
    <div class=\"popup-item message-popup\">
        <div class=\"popup-item-inner scrollbar-primary\">
            <button class=\"popup-close-btn message-popup-content_close\">X</button>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"message-popup-img\">
                        <img src=\"{{ asset('client/img/others/modal-4.png') }}\" alt=\"\">
                    </div>
                    <div class=\"popup-inner-content\">
                        <div class=\"section-title-area \">
                            <div class=\"section-title section-title-2\">
                                <div class=\"icon\">
                                    <img src=\"{{ asset('client/img/icon/title.svg') }}\" alt=\"Bloom\">
                                </div>
                                <div class=\"title-text\">
                                    <h2 class=\"title\">Send a message</h2>
                                </div>
                            </div>
                        </div>
                        <form action=\"#\" class=\"message-popup-form\">
                            <label>Full name*</label>
                            <input type=\"text\" name=\"name\">
                            <label>Email address*</label>
                            <input type=\"email\" name=\"email\">
                            <label>Insert message</label>
                            <textarea name=\"message\"></textarea>
                            <div class=\"btn-wrapper\">
                                <button class=\"boxed-btn btn-rounded\" type=\"submit\">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location-popup -->
    <div class=\"popup-item location-popup \">
        <div class=\"popup-item-inner scrollbar-primary\">
            <button class=\"popup-close-btn location-popup-content_close\">X</button>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"popup-inner-img\">
                        <div class=\"popup-inner-img-inner\">
                            <ul>
                                <li><img src=\"{{ asset('client/img/others/modal-2.png') }}\" alt=\"Flower Image\">
                                </li>
                                <li><img src=\"{{ asset('client/img/others/modal-3.png') }}\" alt=\"Flower Image\">
                                </li>
                                <li><img src=\"{{ asset('client/img/others/modal-1.png') }}\" alt=\"Flower Image\">
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class=\"popup-inner-content text-center\">
                        <div class=\"section-title-area text-center\">
                            <div class=\"section-title section-title-2\">
                                <div class=\"icon\">
                                    <img src=\"{{ asset('client/img/icon/title.svg') }}\" alt=\"Bloom\">
                                </div>
                                <div class=\"title-text\">
                                    <h2 class=\"title\">Working hours</h2>
                                </div>
                            </div>
                        </div>
                        <p>Monday - Friday: 9AM - 4PM <br> Saturday: 9Am - 1PM <br> Sunday: Closed </p>
                        <div class=\"social_share\">
                            <ul>
                                <li><a href=\"https://www.instagram.com/codingeeknet\" target=\"_blank\"><i
                                                class=\"fa fa-instagram\"></i></a></li>
                                <li><a href=\"https://twitter.com/codingeeknet\" target=\"_blank\"><i
                                                class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"https://www.facebook.com/codingeek.net/\" target=\"_blank\"><i
                                                class=\"fa fa-facebook\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar area start -->
    <div class=\"nav-style-01-wrap\">
        <nav class=\"navbar navbar-area navbar-expand-lg nav-style-01 nav-style-6-color\">
            <div class=\"container-fluid nav-container\">
                <div class=\"responsive-mobile-menu\">
                    <div class=\"logo-wrapper mobile-logo\">
                        <a href=\"{{ path('accueil') }}\" class=\"logo\">
                            <img src=\"{{ asset('client/img/LOGO.png') }}\" alt=\"logo\">
                        </a>
                    </div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bloom_main_menu\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\">
                            <span class=\"line\"></span>
                            <span class=\"line\"></span>
                            <span class=\"line\"></span>
                            <span class=\"line\"></span>
                        </span>
                    </button>
                </div>
                <div class=\"logo-wrapper desktop-logo\">
                    <a href=\"{{ path('accueil') }}\" class=\"logo\">
                        <img src=\"{{ asset('client/img/LOGO.png') }}\" alt=\"logo\" width=\"180px\" height=\"82px\">
                    </a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bloom_main_menu\">
                    <ul class=\"navbar-nav\">

                        <li>
                            <a href=\"{{ path('list_collection') }}\">ACHETER MAINTENANT</a>
                        </li>
                        <li><a href=\"{{ path('behind_the_brand') }}\">A PROPOS</a></li>
                        <li><a href=\"{{ path('tableau_dimension') }}\">TABLEAU DE DIMESION</a></li>

                    </ul>
                </div>
                <div class=\"nav-right-content\">
                    <ul>
                        <li class=\"mini-cart-icon\">
                            <span class=\"mini-cart-icon header-navbar-active\">

                         <a href=\"{{ path('list_Panier') }}\"><i class=\"ti-shopping-cart\"></i>
                             <sup>
                                 {{ app.session.get('panier') | length }}
                             </sup>
                         </a>

                            </span>
                        </li>
                        <li class=\"search\" id=\"search\">
                            <i class=\"ti-search\"></i>
                        </li>
                        <li class=\"user-menu\">


                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <span>Bonjour, {{ app.user.nom }}</span>
                                <ul>
                                    <li><a href=\"my-account.html\">Votre Compte</a></li>
                                    <li><a href=\"{{ path('MesCommandes') }}\">Vos Commandes</a></li>
                                    <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                                </ul>
                            {% else %}
                                <span>Se Connecter</span>
                                <ul>

                                    <li><a href=\"{{ path('registration') }}\">Inscription</a></li>
                                    <li><a href=\"{{ path('app_login') }}\">S'identifier</a></li>
                                </ul>
                            {% endif %}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar area end -->
    <div class=\"mini-cart-wrapper\" style=\"background-color: white\">
        <div class=\"sidebar-nav-icon\">
            <button class=\"mini-cart-close\"><img src=\"{{ asset('client/img/icon/cart-icon.png') }}\"
                                                 alt=\"Arrow Image\"></button>
        </div>
        <div class=\"mini-cart-inner scrollbar-primary\">
            <ul>
                <li>
                    <div class=\"section-title-area \">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"{{ asset('client/img/icon/title.svg') }}\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">My orders</h2>
                            </div>
                        </div>
                    </div>
                </li>
                {% set panier = app.session.get('panier') %}

                {% if  app.session.get('panier') | length == 0 %}
                    <li>
                    <div class=\"single-cart-item d-flex\">
                        <div class=\"cart-item\">

                            <div class=\"cart-item-inner\">
                                Votre panier est vide
                            </div>
                        </div>
                    </div>
                {% elseif app.session.get('panier') | length > 0 %}
                    {% for slug, product in panier %}
                        <li>
                            <div id=\"prod_{{ slug }}\" class=\"single-cart-item d-flex\">
                                <div class=\"cart-item\">
                                  <div  id=\"prod_{{ slug }}\" type=\"hidden\"></div>
                                    <div class=\"cart-item-inner\">
                                        <div class=\"product-image\">
                                            <a href=\"product-details.html\"><img
                                                        src=\"{{ asset('client/img/product/'~product.image) }}\"
                                                        alt=\"Flower Image\"></a>
                                        </div>
                                        <div class=\"cart-item-brief\">
                                            <div class=\"product-order-number\">{{product.qty}}</div>
                                            <div class=\"product-multiply\">x</div>
                                            <div class=\"cart-product-title\" style=\"text-transform: uppercase\"><h2
                                                        class=\"product-title\"><a href=\"product-details.html\"></a></h2>
                                            </div>
                                            <div class=\"product-price\">{{ product.price }} DT</div>
                                            <div class=\"product-remove\"><a onclick=\"OnClickDelete(event,{{ slug }})\"><i
                                                            class=\"fa fa-trash-o\"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    {% endfor %}
                {% endif %}
                <li>
                    <div class=\"cart-item\">
                        <span id=\"count\" class=\"count\"></span>
                        <div class=\"cart-item-inner cart-total\">
                            <h2 style=\"font-family: var(--heading-font)\">Total</h2>
                            <h2 id=\"total\" style=\"font-family: var(--heading-font)\">
                                <strong>{{ app.session.get('total') }} DT</strong></h2>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"cart-item\">
                        <div class=\"cart-item-inner cart-total cart-btn\">
                            <div class=\"btn-wrapper\">
                                <a href=\"{{ path('list_Panier') }}\" class=\"boxed-btn btn-rounded\">Panier</a>
                            </div>
                            <div class=\"btn-wrapper\">
                                <a href=\"{{ path('list_collection')}}\" class=\"boxed-btn btn-rounded\">Shopping</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
{% endblock %}

{% block body %}{% endblock %}

{% block footer %}
    <footer class=\"footer-area\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row custom-gutter\">
                    <div class=\"col-xl-3 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget\">
                            <div class=\"about_us_widget\">
                                <a href=\"index-2.html\" class=\"footer-logo\">
                                    <img src=\"{{ asset('client/img/logo1.png') }}\" alt=\"footer logo\">
                                </a>
                                <p>Flowers always make people better, happier, they are sunshine and medicine for the
                                    soul.</p>
                                <address><a href=\"tel:+0123456789\">+12345678912</a> <br>3, Avenue Saint Andrews,
                                    California <br><a href=\"mailto:info@bloom.com\">info@bloom.com</a></address>
                                <div class=\"social_share\">
                                    <ul>
                                        <li><a href=\"https://www.instagram.com/codingeeknet\" target=\"_blank\"><i
                                                        class=\"fa fa-instagram\"></i></a></li>
                                        <li><a href=\"https://twitter.com/codingeeknet\" target=\"_blank\"><i
                                                        class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"https://www.facebook.com/codingeek.net/\" target=\"_blank\"><i
                                                        class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"https://www.linkedin.com/company/codingeek/about\"
                                               target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget widget_text text-center mobile-text-left\">
                            <h4 class=\"widget-title\">Working hours</h4>
                            <p>Monday - Friday: 9AM - 4PM <br> Saturday: 9Am - 3PM <br> Sunday: Closed </p>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3\">
                        <div class=\"footer-widget widget widget_nav_menu desktop-center\">
                            <h4 class=\"widget-title\">Support</h4>
                            <ul>
                                <li><a href=\"faq.html\">FAQs</a></li>
                                <li><a href=\"my-account.html\">My Account</a></li>
                                <li><a href=\"#\">Payment facilities</a></li>
                                <li><a href=\"#\">Policy</a></li>
                                <li><a href=\"#\">Refunds</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3\">
                        <div class=\"footer-widget widget widget_nav_menu desktop-center\">
                            <h4 class=\"widget-title\">About us</h4>
                            <ul>
                                <li><a href=\"about.html\">About us</a></li>
                                <li><a href=\"blog.html\">Blog</a></li>
                                <li><a href=\"gallery.html\">Gallery</a></li>
                                <li><a href=\"price.html\">Price</a></li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget\">
                            <div class=\"newsletter-widget\">
                                <h4 class=\"widget-title\">Contact us</h4>
                                <p>Be among the first one to eceive and benefit from our inclusive sales every week.</p>
                                <form action=\"#\" class=\"form-input-box\">
                                    <input type=\"text\" placeholder=\"Enter your email address\">
                                    <button type=\"submit\"><img
                                                src=\"{{ asset('client/img/icon/arrow-right-white-2.svg') }}\"
                                                alt=\"Arrow Icon\"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class=\"back-to-top\">
        <span class=\"back-top\"><i class=\"fa fa-long-arrow-up\"></i></span>
    </div>
    <!-- back to top area end -->
{% endblock %}


{# <!-- {{ encore_entry_script_tags('app') }}
    {{ encore_entry_script_tags('jquery') }}
    {{ encore_entry_script_tags('jquery1') }}
    {{ encore_entry_script_tags('jquery3') }}
    {{ encore_entry_script_tags('main') }}
    {{ encore_entry_script_tags('popper') }}
    {{ encore_entry_script_tags('contact') }}
    {{ encore_entry_script_tags('link') }}
    {{ encore_entry_script_tags('cart') }}
    {{ encore_entry_script_tags('cart') }}
    {{ encore_entry_script_tags('axios') }}
    {{ encore_entry_script_tags('swal') }}
    {{ encore_entry_script_tags('maps') }} #}
<!----quantity --->

<!--date --->
<!----date picker---->

<script src=\"{{ asset('client/js/jquery-plugins.js') }}\"></script>
<script src=\"{{ asset('client/js/main.js') }}\"></script>
{# <script src=\"{{ asset('client/js/main1.js') }}\"></script> #}
<script src=\"{{ asset('client/js/popper.js') }}\"></script>
<script src=\"{{ asset('client/js/contact.js') }}\"></script>
<script src=\"{{ asset('client/js/codingeek-link.js') }}\"></script>
<script src=\"{{ asset('client/js/codingeek.js') }}\"></script>
<script src=\"{{ asset('client/js/app.js') }}\"></script>
<script src=\"{{ asset('client/js/axios.js') }}\"></script>
<script src=\"{{ asset('client/js/sweetalert2.js') }}\"></script>

<!---radion button livraison-->
<script>
    \$(document).ready(function () {
        \$(\"input[id='202']\").click(function () {
            if (\$(this).is(':checked')) {
                \$(\"#form\").hide();
            }
        });
        \$(\"input[id='201']\").click(function () {
            if (\$(this).is(':checked')) {
                \$(\"#form\").show();
            }
        });

    });
</script>
<script>
    \$('.date').datepicker({
        startDate: '+3d'
    });
</script>

<!----recupérer livraison--->
<script>
    function checkout(event) {
        event.preventDefault();
        const ls = \$(\"input[id='201']\").is(':checked');
        const ld = \$(\"input[id='202']\").is(':checked');
        const Rs = \$(\"input[id='203']\").is(':checked');
        const nom = \$('#l_name').val();
        const prenom = \$('#f_name').val();
        const adresse = \$('#street-address').val();
        const phone = \$('#phone').val();
        total = document.getElementById(\"total\").innerText;
        const totalAchat = total.replace('DT', '')
        const fraisLiv= parseInt(totalAchat);
        console.log(fraisLiv+10);
        console.log(ls);
        console.log(Rs);
        let body = {
            nom: nom,
            prenom: prenom,
            livraisonSurprise: ls,
            adresse: adresse,
            tel: phone,
            livraisondomicile: ld,
            total: fraisLiv + 10,
            Recuperer : Rs
        };
        axios({
            method: 'post',
            url: '{{ path('add_order') }}',
            data: body
        }).then(function (response) {
            let status = response.data.status;
            if (status === 1) {
                swal.fire({
                    type: 'error',
                    title: 'Veuillez Remplir Le Formulaire',
                    text: 'Vérifez !',
                });
            } else {
                window.location.replace('{{ path('MesCommandes') }}');
            }
        });
    }

    function OnClickDelete(event, id) {
        event.preventDefault();
        //const fullid=this.id;
        //var id=fullid.split('_');
        var node = document.getElementById('prod_' + id);
        console.log(id);
        let body = {
            product: id
        };
        axios({
            url: '{{ path('shop_removefromcart') }}',
            data: body,
            method: 'post'
        }).then(function (response) {
            const total = response.data.total;
            const size = response.data.size;
            node.remove();
            document.getElementById(\"total\").innerHTML = total + ' DT';
            if (status === 1) {
                Swal.fire({
                    type: 'success',
                    title: 'Produit Supprimé',
                });
            }
        });
    }

</script>
<!--- filtre par --->
<script>
    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById(\"myCheck\");
        // Get the output text
        var text = document.getElementById(\"txt\");
        // If the checkbox is checked, display the output text
        if (checkBox.checked === true){
            text.style.display = \"block\";
        } else {
            text.style.display = \"none\";
        }
    }
</script>
<script>
    function myFunction2() {
// Get the checkbox
        var checkBox1 = document.getElementById(\"myCheck1\");
// Get the output text
        var text1 = document.getElementById(\"txt2\");
// If the checkbox is checked, display the output text
        if (checkBox1.checked === true) {
            text1.style.display = \"block\";
        } else {
            text1.style.display = \"none\";
        }
    }
</script>


</body>
</html>
", "base.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/base.html.twig");
    }
}
