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
class __TwigTemplate_c2893e8cecd42d9693bd9aeea0e3be77a607b335322f22b8df816fc8907667ce extends Template
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
        // line 359
        echo "
";
        // line 360
        $this->displayBlock('body', $context, $blocks);
        // line 361
        echo "
";
        // line 362
        $this->displayBlock('footer', $context, $blocks);
        // line 432
        echo "

";
        // line 447
        echo "<!----quantity --->

<!--date --->
<!----date picker---->

<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/jquery-plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 455
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/codingeek-link.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/codingeek.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/axios.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 461
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
        // line 514
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
        // line 525
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
        // line 540
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

<script>
    function myFunction3() {
// Get the checkbox
        var checkBox1 = document.getElementById(\"myCheck2\");
// Get the output text
        var text1 = document.getElementById(\"txt3\");
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
                                    <h2 class=\"title\">Nous Contacter</h2>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/logosite.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/logosite.png"), "html", null, true);
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
                        ";
        // line 219
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 220
            echo "
                        <li>
                            <a href=\"";
            // line 222
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listProduitAdmin");
            echo "\">Dashboard</a>
                        </li>
                        ";
        }
        // line 225
        echo "
                    </ul>
                </div>
                <div class=\"nav-right-content\">
                    <ul>
                        <li class=\"mini-cart-icon\">
                            <span class=\"mini-cart-icon header-navbar-active\">

                         <a href=\"";
        // line 233
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_Panier");
        echo "\"><i class=\"ti-shopping-cart\"></i>
                             <sup>
                                 ";
        // line 235
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "session", [], "any", false, false, false, 235), "get", [0 => "panier"], "method", false, false, false, 235)), "html", null, true);
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
        // line 247
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 248
            echo "                                <span>Bonjour, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 248, $this->source); })()), "user", [], "any", false, false, false, 248), "nom", [], "any", false, false, false, 248), "html", null, true);
            echo "</span>
                                <ul>
                                    <li><a href=\"";
            // line 250
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Votre Compte</a></li>
                                    <li><a href=\"";
            // line 251
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MesCommandes");
            echo "\">Vos Commandes</a></li>
                                    <li><a href=\"";
            // line 252
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                                </ul>
                            ";
        } else {
            // line 255
            echo "                                <span>Se Connecter</span>
                                <ul>

                                    <li><a href=\"";
            // line 258
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\">S'inscrire</a></li>
                                    <li><a href=\"";
            // line 259
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">S'identifier</a></li>
                                </ul>
                            ";
        }
        // line 262
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
        // line 271
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
        // line 280
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
        // line 288
        $context["panier"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "session", [], "any", false, false, false, 288), "get", [0 => "panier"], "method", false, false, false, 288);
        // line 289
        echo "
                ";
        // line 290
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "session", [], "any", false, false, false, 290), "get", [0 => "panier"], "method", false, false, false, 290)), 0))) {
            // line 291
            echo "                    <li>
                    <div class=\"single-cart-item d-flex\">
                        <div class=\"cart-item\">

                            <div class=\"cart-item-inner\">
                                Votre panier est vide
                            </div>
                        </div>
                    </div>
                ";
        } elseif ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 300
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "session", [], "any", false, false, false, 300), "get", [0 => "panier"], "method", false, false, false, 300)), 0))) {
            // line 301
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 301, $this->source); })()));
            foreach ($context['_seq'] as $context["slug"] => $context["product"]) {
                // line 302
                echo "                        <li>
                            <div id=\"prod_";
                // line 303
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\" class=\"single-cart-item d-flex\">
                                <div class=\"cart-item\">
                                  <div  id=\"prod_";
                // line 305
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\" type=\"hidden\"></div>
                                    <div class=\"cart-item-inner\">
                                        <div class=\"product-image\">
                                            <a href=\"product-details.html\"><img
                                                        src=\"";
                // line 309
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 309))), "html", null, true);
                echo "\"
                                                        alt=\"Flower Image\"></a>
                                        </div>
                                        <div class=\"cart-item-brief\">
                                            <div class=\"product-order-number\">";
                // line 313
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 313), "html", null, true);
                echo "</div>
                                            <div class=\"product-multiply\">x</div>
                                            <div class=\"cart-product-title\" style=\"text-transform: uppercase\"><h2
                                                        class=\"product-title\"><a href=\"product-details.html\"></a></h2>
                                            </div>
                                            <div class=\"product-price\">";
                // line 318
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 318), "html", null, true);
                echo " DT</div>
                                            <div class=\"product-remove\"><a onclick=\"OnClickDelete(event,";
                // line 319
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
            // line 327
            echo "                ";
        }
        // line 328
        echo "                <li>
                    <div class=\"cart-item\">
                        <span id=\"count\" class=\"count\"></span>
                        <div class=\"cart-item-inner cart-total\">
                            <h2 style=\"font-family: var(--heading-font)\">Total</h2>
                            <h2 id=\"total\" style=\"font-family: var(--heading-font)\">
                                <strong>";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "session", [], "any", false, false, false, 334), "get", [0 => "total"], "method", false, false, false, 334), "html", null, true);
        echo " DT</strong></h2>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"cart-item\">
                        <div class=\"cart-item-inner cart-total cart-btn\">
                            <div class=\"btn-wrapper\">
                                <a href=\"";
        // line 342
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_Panier");
        echo "\" class=\"boxed-btn btn-rounded\">Panier</a>
                            </div>
                            <div class=\"btn-wrapper\">
                                <a href=\"";
        // line 345
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
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "session", [], "any", false, false, false, 353), "flashbag", [], "any", false, false, false, 353), "get", [0 => "inscription"], "method", false, false, false, 353));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 354
            echo "        <div class=\"alert alert-success\">
            ";
            // line 355
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 360
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

    // line 362
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 363
        echo "    <footer class=\"footer-area\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row custom-gutter\">
                    <div class=\"col-xl-3 col-lg-6 col-md-6\">
                       <div class=\"footer-widget widget\">
                            <div class=\"about_us_widget\">
                                <a href=\"index-2.html\" class=\"footer-logo\">
                                    <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/logo1.png"), "html", null, true);
        echo "\" alt=\"footer logo\">
                                </a>
                                <p>Flowers always make people better, happier, they are sunshine and medicine for the
                                    soul.</p>
                                <address><a href=\"tel:+0123456789\">+216 21900767 / +216 21184775</a> <br><a href=\"mailto:info@bloom.com\">Flowerschloris@gmail.com</a></address>
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
                    <div class=\"col-xl-2 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget widget_text text-center mobile-text-left\">
                            <h4 class=\"widget-title\">Horaire de Travail</h4>
                            <p>Lundi - Vendredi: 9H - 16H <br> Samedi: 9H - 14H <br> Dimanche: Closed </p>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3\">
                        <div class=\"footer-widget widget widget_nav_menu desktop-center\">
                            
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3\">
                        <div class=\"footer-widget widget widget_nav_menu desktop-center\">
                            <h4>Adresse</h4>
                            <p>Bureau 2, 2 Residence Tej, Av. Mohamed Rached El Baji, Ariana 2037</p>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget\">
                            <div class=\"newsletter-widget\">
                                <h4 class=\"widget-title\">Nous Contacter</h4>
                                <p>Soyez parmi les premiers à recevoir et bénéficier de nos ventes de chaque semaine.</p>
                                <form action=\"#\" class=\"form-input-box\">
                                    <input type=\"text\" placeholder=\"Enter your emaSoyez parmi les premiers à recevoir et bénéficier de nos ventes tout compris chaque semaine.il address\">
                                    <button type=\"submit\"><img
                                                src=\"";
        // line 412
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
        return array (  940 => 412,  896 => 371,  886 => 363,  876 => 362,  858 => 360,  841 => 355,  838 => 354,  834 => 353,  823 => 345,  817 => 342,  806 => 334,  798 => 328,  795 => 327,  781 => 319,  777 => 318,  769 => 313,  762 => 309,  755 => 305,  750 => 303,  747 => 302,  742 => 301,  740 => 300,  729 => 291,  727 => 290,  724 => 289,  722 => 288,  711 => 280,  699 => 271,  688 => 262,  682 => 259,  678 => 258,  673 => 255,  667 => 252,  663 => 251,  659 => 250,  653 => 248,  651 => 247,  636 => 235,  631 => 233,  621 => 225,  615 => 222,  611 => 220,  609 => 219,  605 => 218,  601 => 217,  596 => 215,  586 => 208,  582 => 207,  565 => 193,  561 => 192,  528 => 162,  515 => 152,  510 => 150,  505 => 148,  470 => 116,  461 => 110,  427 => 79,  414 => 69,  409 => 67,  404 => 65,  369 => 32,  359 => 31,  340 => 21,  321 => 14,  245 => 540,  227 => 525,  213 => 514,  157 => 461,  153 => 460,  149 => 459,  145 => 458,  141 => 457,  137 => 456,  132 => 455,  128 => 453,  124 => 452,  117 => 447,  113 => 432,  111 => 362,  108 => 361,  106 => 360,  103 => 359,  101 => 31,  90 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  66 => 14,  57 => 8,  48 => 1,);
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
                                    <h2 class=\"title\">Nous Contacter</h2>
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
                            <img src=\"{{ asset('client/img/logosite.png') }}\" alt=\"logo\">
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
                        <img src=\"{{ asset('client/img/logosite.png') }}\" alt=\"logo\" width=\"180px\" height=\"82px\">
                    </a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bloom_main_menu\">
                    <ul class=\"navbar-nav\">

                        <li>
                            <a href=\"{{ path('list_collection') }}\">ACHETER MAINTENANT</a>
                        </li>
                        <li><a href=\"{{ path('behind_the_brand') }}\">A PROPOS</a></li>
                        <li><a href=\"{{ path('tableau_dimension') }}\">TABLEAU DE DIMESION</a></li>
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") and  is_granted('ROLE_ADMIN') %}

                        <li>
                            <a href=\"{{ path('listProduitAdmin') }}\">Dashboard</a>
                        </li>
                        {% endif %}

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
                                    <li><a href=\"{{ path('profil') }}\">Votre Compte</a></li>
                                    <li><a href=\"{{ path('MesCommandes') }}\">Vos Commandes</a></li>
                                    <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                                </ul>
                            {% else %}
                                <span>Se Connecter</span>
                                <ul>

                                    <li><a href=\"{{ path('registration') }}\">S'inscrire</a></li>
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
    {% for message in app.session.flashbag.get('inscription') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
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
                                <address><a href=\"tel:+0123456789\">+216 21900767 / +216 21184775</a> <br><a href=\"mailto:info@bloom.com\">Flowerschloris@gmail.com</a></address>
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
                    <div class=\"col-xl-2 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget widget_text text-center mobile-text-left\">
                            <h4 class=\"widget-title\">Horaire de Travail</h4>
                            <p>Lundi - Vendredi: 9H - 16H <br> Samedi: 9H - 14H <br> Dimanche: Closed </p>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3\">
                        <div class=\"footer-widget widget widget_nav_menu desktop-center\">
                            
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3\">
                        <div class=\"footer-widget widget widget_nav_menu desktop-center\">
                            <h4>Adresse</h4>
                            <p>Bureau 2, 2 Residence Tej, Av. Mohamed Rached El Baji, Ariana 2037</p>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6\">
                        <div class=\"footer-widget widget\">
                            <div class=\"newsletter-widget\">
                                <h4 class=\"widget-title\">Nous Contacter</h4>
                                <p>Soyez parmi les premiers à recevoir et bénéficier de nos ventes de chaque semaine.</p>
                                <form action=\"#\" class=\"form-input-box\">
                                    <input type=\"text\" placeholder=\"Enter your emaSoyez parmi les premiers à recevoir et bénéficier de nos ventes tout compris chaque semaine.il address\">
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

<script>
    function myFunction3() {
// Get the checkbox
        var checkBox1 = document.getElementById(\"myCheck2\");
// Get the output text
        var text1 = document.getElementById(\"txt3\");
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
", "base.html.twig", "C:\\Users\\ramij\\OneDrive\\Documents\\Smartleap2\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\base.html.twig");
    }
}
