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

/* product/index.html.twig */
class __TwigTemplate_8b5c26d416dc5d2321461f77be5a3abcb0deacedb274121cf3f7d8ecded0b62c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if ((0 === twig_compare((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 6, $this->source); })()), "the classic collection"))) {
            // line 7
            echo "    <div class=\"breadcrumb-area breadcrumb-style-1\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-inner text-center\">
                        <h1 class=\"page-title\" style=\"text-transform: uppercase\">The Classic Collection</h1>
                        <!-- <ul class=\"page-list\">
                            <li><a href=\"#\">Home</a></li>
                            <li>Shop</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        } elseif ((0 === twig_compare(        // line 22
(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 22, $this->source); })()), "the bird collection"))) {
            // line 23
            echo "    <div class=\"breadcrumb-area breadcrumb-style-8\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-inner text-center\">
                        <h1 class=\"page-title\" style=\"text-transform: uppercase\">The Bird Collection</h1>
                        <!-- <ul class=\"page-list\">
                            <li><a href=\"#\">Home</a></li>
                            <li>Shop</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        } elseif ((0 === twig_compare(        // line 38
(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 38, $this->source); })()), "the marble collection"))) {
            // line 39
            echo "        <div class=\"breadcrumb-area breadcrumb-style-9\">
            <div class=\"container\">
                <div class=\"row custom-gutter\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-inner text-center\">
                            <h1 class=\"page-title\" style=\"text-transform: uppercase\">The Marble Collection</h1>
                            <!-- <ul class=\"page-list\">
                                <li><a href=\"#\">Home</a></li>
                                <li>Shop</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } elseif ((0 === twig_compare(        // line 54
(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 54, $this->source); })()), "The Blooming Bride"))) {
            // line 55
            echo "        <div class=\"breadcrumb-area breadcrumb-style-10\">
            <div class=\"container\">
                <div class=\"row custom-gutter\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-inner text-center\">
                            <h1 class=\"page-title\" style=\"text-transform: uppercase\">The Blooming Bride</h1>
                            <!-- <ul class=\"page-list\">
                                <li><a href=\"#\">Home</a></li>
                                <li>Shop</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 71
        echo "    <div class=\"bloom-product-area margin-bottom-120 mobile-mb-50 tab-mb-80\" >
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <!-- shop-options -->
                    <div class=\"shop-options clearfix\">

                        <div class=\"shop-grid-list-view-tab-menu pull-left\">
                            <div class=\"nav\">
                                <a class=\"active show\" data-toggle=\"tab\" href=\"#bloom_shop_grid_view\"><i class=\"ti-layout-grid3\"></i></a>
                                <a data-toggle=\"tab\" href=\"#bloom_shop_list_view\" class=\"\"><i class=\"ti-view-list-alt\"></i></a>
                            </div>
                        </div>
                        <div class=\"product-search pull-right\">
                            <form action=\"#\" class=\"form-input-box\">
                                <input type=\"text\" placeholder=\"Search products\">
                                <button type=\"submit\"><i class=\"ti-search\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-12\">
                    <div class=\"row\">

                        <div class=\"col-xl-9 col-lg-8 col-md-12 col-sm-12 order-lg-2\">
                            <div class=\"shop-grid-list-view-tab-content\">
                                <div class=\"tab-content\">
                                    <!-- cart -->
                                    <div class=\"tab-pane fade active show\" id=\"bloom_shop_grid_view\">
                                        <div class=\"shop-grid-view-tab-content-inner\">
                                            <div class=\"row custom-gutter\">
                                                <!-- product-item -->
                                                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 104
            echo "                                                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12\">
                                                    <div class=\"product-item text-center\">
                                                        ";
            // line 106
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 106), "the marble collection"))) {
                // line 107
                echo "                                                        <div class=\"product-image\">
                                                            <img src=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 108))), "html", null, true);
                echo "\" alt=\"Flower Image\">
                                                            <div class=\"product-action\">
                                                                <ul>
                                                                    ";
                // line 112
                echo "                                                                    <li class=\"details-link\"></li>
                                                                </ul>
                                                            </div>
                                                                <div class=\"product-badge\">
                                                                    <ul>
                                                                        <li class=\"sale-badge\">Sold Out</li>
                                                                    </ul>
                                                                </div>
                                                        </div>
                                                         ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 121
$context["item"], "stock", [], "any", false, false, false, 121), 0)) || (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "stock", [], "any", false, false, false, 121), 0)))) {
                // line 122
                echo "                                                        <div class=\"product-image\">
                                                            <img src=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 123))), "html", null, true);
                echo "\" alt=\"Flower Image\">
                                                            <div class=\"product-action\">
                                                                <ul>
                                                                    ";
                // line 127
                echo "                                                                    <li class=\"details-link\"></li>
                                                                </ul>
                                                            </div>
                                                                <div class=\"product-badge\">
                                                                    <ul>
                                                                        <li class=\"sale-badge\">Sold Out</li>
                                                                    </ul>
                                                                </div>
                                                        </div>


                                                        ";
            } else {
                // line 139
                echo "                                                        <div class=\"product-image\">
                                                            <img src=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 140))), "html", null, true);
                echo "\" alt=\"Flower Image\">
                                                        <div class=\"product-action\">
                                                            <ul>
                                                                ";
                // line 144
                echo "                                                                <li class=\"details-link\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                echo "\" >DETAILS</a></li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                            ";
            }
            // line 149
            echo "                                                        <div class=\"product-item-brief\">
                                                            ";
            // line 150
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 150), "the bird collection"))) {
                // line 151
                echo "                                                            <h2 class=\"product-title\" style=\"font-size:18px;font-weight:bold;font-family: 'Quicksand', sans-serif;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prodcutName", [], "any", false, false, false, 151), "html", null, true);
                echo "</h2>
                                                    <img class=\"freeze_class ff-image-ready\" src=\"";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageRoseNumber", [], "any", false, false, false, 152), "html", null, true);
                echo "\" width=\"50\" height=\"50\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "roseColor", [], "any", false, false, false, 152), "html", null, true);
                echo "
                                                    <div class=\"product-price\">
                                                        <span>";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 154), "html", null, true);
                echo " dt</span>
                                                    </div>
                                                            ";
            } else {
                // line 157
                echo "                                                            <h2 class=\"product-title\" style=\"font-size:18px;font-weight:bold;font-family: 'Quicksand', sans-serif;\"><a>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prodcutName", [], "any", false, false, false, 157), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "boxColor", [], "any", false, false, false, 157), "html", null, true);
                echo "</a></h2>
                                                            ";
                // line 158
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "boxSize", [], "any", false, false, false, 158), "L"))) {
                    // line 159
                    echo "                                                            <h2 class=\"product-title\" ><a>Large</a></h2>
                                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 160
$context["item"], "boxSize", [], "any", false, false, false, 160), "M"))) {
                    // line 161
                    echo "                                                                <h2 class=\"product-title\" ><a>Medium</a></h2>
                                                             ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 162
$context["item"], "boxSize", [], "any", false, false, false, 162), "S"))) {
                    // line 163
                    echo "                                                                 <h2 class=\"product-title\" ><a>Small</a></h2>
                                                             ";
                } else {
                    // line 165
                    echo "                                                                 <h2 class=\"product-title\" ><a>XLarge</a></h2>
                                                            ";
                }
                // line 167
                echo "                                                            <img class=\"freeze_class ff-image-ready\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageRoseNumber", [], "any", false, false, false, 167), "html", null, true);
                echo "\" width=\"50\" height=\"50\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "roseColor", [], "any", false, false, false, 167), "html", null, true);
                echo "
                                                            <div class=\"product-price\">
                                                                <span>";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 169), "html", null, true);
                echo " dt</span>
                                                            </div>
                                                                ";
            }
            // line 172
            echo "                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product-item -->
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                                                <div class=\"navigation\">

                                                        ";
        // line 179
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 179, $this->source); })()));
        echo "
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- cart -->

                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-4 col-md-12 col-sm-12\" >
                            <aside class=\"shop-sidebar-area shop-sidebar-left\">
                                <!-- category-widget -->
                                <form action=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 193, $this->source); })())]), "html", null, true);
        echo "\" >
                                    <div class=\"widget widget_nav_menu category-widget\">
                                        <div  id=\"sizeCheckBox\">

                                            <h4 class=\"widget-title\">Taille du Box </h4>
                                            <ul>
                                                <li>
                                                    <label class=\"checkbox-item\">XL
                                                        <input type=\"checkbox\"   name=\"Size[]\" value=\"XL\">
                                                        <span class=\"checkmark\"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class=\"checkbox-item\">L
                                                        <input type=\"checkbox\" class=\"size\"  name=\"Size[]\" value=\"L\">
                                                        <span class=\"checkmark\"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class=\"checkbox-item\">M
                                                        <input type=\"checkbox\" class=\"size\"  name=\"Size[]\" value=\"M\">
                                                        <span class=\"checkmark\"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class=\"checkbox-item\">S
                                                        <input type=\"checkbox\" class=\"size\"  name=\"Size[]\" value=\"S\">
                                                        <span class=\"checkmark\"></span>
                                                    </label>
                                                </li>


                                            </ul>

                                        </div>
                                    </div>
                                    <!-- color-widget -->
                                    <div class=\"widget widget_nav_menu color-widget\">
                                        <h4 class=\"widget-title\">Couleur Du Box</h4>
                                        <ul>
                                            <li>
                                                <label class=\"checkbox-item\">Blanc
                                                    <input type=\"checkbox\" name=\"BoxColor[]\" value=\"Blanc\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-white\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Noir
                                                    <input type=\"checkbox\" name=\"BoxColor[]\" value=\"Noir\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-black\"></span>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class=\"widget widget_nav_menu color-widget\">
                                        <h4 class=\"widget-title\">Couleur Des Roses</h4>
                                        <ul>
                                            <li>
                                                <label class=\"checkbox-item\">Blanche
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Blanche\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-white\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Rouge
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Rouge\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-green\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Rose
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Rose\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-rose\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Champagne
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Champagne\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-yellow\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Rose Bicolore
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Rose Bicolore\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-orange\"></span>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- price-filter-widget -->
                                    <div class=\"widget price-filter-widget\">
                                        <h4 class=\"widget-title\">Price Range</h4>
                                        <div class=\"price_filter\">
                                            <div class=\"price_slider_amount\">
                                                <input type=\"submit\"  value=\"Your range:\"/>
                                                <input type=\"text\" id=\"amount\" name=\"price\"  value=\"\" min=\"\" max=\"\" placeholder=\"Add Your Price\" />
                                            </div>
                                            <div id=\"slider-range\"></div>
                                        </div>
                                    </div>
                                    ";
        // line 356
        echo "                                    <br>
                                    <div class=\"btn-wrapper \">
                                        <button class=\"boxed-btn btn-rounded\" type=\"submit\">Filtrer</button>
                                    </div>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 356,  347 => 193,  330 => 179,  326 => 177,  316 => 172,  310 => 169,  302 => 167,  298 => 165,  294 => 163,  292 => 162,  289 => 161,  287 => 160,  284 => 159,  282 => 158,  275 => 157,  269 => 154,  262 => 152,  257 => 151,  255 => 150,  252 => 149,  243 => 144,  237 => 140,  234 => 139,  220 => 127,  214 => 123,  211 => 122,  209 => 121,  198 => 112,  192 => 108,  189 => 107,  187 => 106,  183 => 104,  179 => 103,  145 => 71,  127 => 55,  125 => 54,  108 => 39,  106 => 38,  89 => 23,  87 => 22,  70 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
{% if categorie == \"the classic collection\" %}
    <div class=\"breadcrumb-area breadcrumb-style-1\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-inner text-center\">
                        <h1 class=\"page-title\" style=\"text-transform: uppercase\">The Classic Collection</h1>
                        <!-- <ul class=\"page-list\">
                            <li><a href=\"#\">Home</a></li>
                            <li>Shop</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% elseif categorie == \"the bird collection\" %}
    <div class=\"breadcrumb-area breadcrumb-style-8\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-inner text-center\">
                        <h1 class=\"page-title\" style=\"text-transform: uppercase\">The Bird Collection</h1>
                        <!-- <ul class=\"page-list\">
                            <li><a href=\"#\">Home</a></li>
                            <li>Shop</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% elseif categorie == \"the marble collection\" %}
        <div class=\"breadcrumb-area breadcrumb-style-9\">
            <div class=\"container\">
                <div class=\"row custom-gutter\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-inner text-center\">
                            <h1 class=\"page-title\" style=\"text-transform: uppercase\">The Marble Collection</h1>
                            <!-- <ul class=\"page-list\">
                                <li><a href=\"#\">Home</a></li>
                                <li>Shop</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% elseif categorie == \"The Blooming Bride\" %}
        <div class=\"breadcrumb-area breadcrumb-style-10\">
            <div class=\"container\">
                <div class=\"row custom-gutter\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-inner text-center\">
                            <h1 class=\"page-title\" style=\"text-transform: uppercase\">The Blooming Bride</h1>
                            <!-- <ul class=\"page-list\">
                                <li><a href=\"#\">Home</a></li>
                                <li>Shop</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
    <div class=\"bloom-product-area margin-bottom-120 mobile-mb-50 tab-mb-80\" >
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <!-- shop-options -->
                    <div class=\"shop-options clearfix\">

                        <div class=\"shop-grid-list-view-tab-menu pull-left\">
                            <div class=\"nav\">
                                <a class=\"active show\" data-toggle=\"tab\" href=\"#bloom_shop_grid_view\"><i class=\"ti-layout-grid3\"></i></a>
                                <a data-toggle=\"tab\" href=\"#bloom_shop_list_view\" class=\"\"><i class=\"ti-view-list-alt\"></i></a>
                            </div>
                        </div>
                        <div class=\"product-search pull-right\">
                            <form action=\"#\" class=\"form-input-box\">
                                <input type=\"text\" placeholder=\"Search products\">
                                <button type=\"submit\"><i class=\"ti-search\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-12\">
                    <div class=\"row\">

                        <div class=\"col-xl-9 col-lg-8 col-md-12 col-sm-12 order-lg-2\">
                            <div class=\"shop-grid-list-view-tab-content\">
                                <div class=\"tab-content\">
                                    <!-- cart -->
                                    <div class=\"tab-pane fade active show\" id=\"bloom_shop_grid_view\">
                                        <div class=\"shop-grid-view-tab-content-inner\">
                                            <div class=\"row custom-gutter\">
                                                <!-- product-item -->
                                                {% for item in v %}
                                                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12\">
                                                    <div class=\"product-item text-center\">
                                                        {% if item.categorie == \"the marble collection\"%}
                                                        <div class=\"product-image\">
                                                            <img src=\"{{ asset('client/img/product/'~item.image) }}\" alt=\"Flower Image\">
                                                            <div class=\"product-action\">
                                                                <ul>
                                                                    {#  <li><a href=\"{{ path('addPanier',{'id': item.id,'categorie': item.categorie}) }}\" >ADD TO CART</a></li>#}
                                                                    <li class=\"details-link\"></li>
                                                                </ul>
                                                            </div>
                                                                <div class=\"product-badge\">
                                                                    <ul>
                                                                        <li class=\"sale-badge\">Sold Out</li>
                                                                    </ul>
                                                                </div>
                                                        </div>
                                                         {% elseif (item.stock == 0) or (item.stock <0) %}
                                                        <div class=\"product-image\">
                                                            <img src=\"{{ asset('client/img/product/'~item.image) }}\" alt=\"Flower Image\">
                                                            <div class=\"product-action\">
                                                                <ul>
                                                                    {#  <li><a href=\"{{ path('addPanier',{'id': item.id,'categorie': item.categorie}) }}\" >ADD TO CART</a></li>#}
                                                                    <li class=\"details-link\"></li>
                                                                </ul>
                                                            </div>
                                                                <div class=\"product-badge\">
                                                                    <ul>
                                                                        <li class=\"sale-badge\">Sold Out</li>
                                                                    </ul>
                                                                </div>
                                                        </div>


                                                        {% else %}
                                                        <div class=\"product-image\">
                                                            <img src=\"{{ asset('client/img/product/'~item.image) }}\" alt=\"Flower Image\">
                                                        <div class=\"product-action\">
                                                            <ul>
                                                                {#  <li><a href=\"{{ path('addPanier',{'id': item.id,'categorie': item.categorie}) }}\" >ADD TO CART</a></li>#}
                                                                <li class=\"details-link\"><a href=\"{{ path('product_details', {'id': item.id }) }}\" >DETAILS</a></li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                            {% endif %}
                                                        <div class=\"product-item-brief\">
                                                            {% if item.categorie == \"the bird collection\" %}
                                                            <h2 class=\"product-title\" style=\"font-size:18px;font-weight:bold;font-family: 'Quicksand', sans-serif;\">{{ item.prodcutName }}</h2>
                                                    <img class=\"freeze_class ff-image-ready\" src=\"{{ item.imageRoseNumber }}\" width=\"50\" height=\"50\">{{ item.roseColor }}
                                                    <div class=\"product-price\">
                                                        <span>{{ item.prix }} dt</span>
                                                    </div>
                                                            {% else %}
                                                            <h2 class=\"product-title\" style=\"font-size:18px;font-weight:bold;font-family: 'Quicksand', sans-serif;\"><a>{{ item.prodcutName }} {{ item.boxColor }}</a></h2>
                                                            {% if item.boxSize == \"L\" %}
                                                            <h2 class=\"product-title\" ><a>Large</a></h2>
                                                            {% elseif item.boxSize == \"M\"%}
                                                                <h2 class=\"product-title\" ><a>Medium</a></h2>
                                                             {% elseif item.boxSize == \"S\"%}
                                                                 <h2 class=\"product-title\" ><a>Small</a></h2>
                                                             {% else %}
                                                                 <h2 class=\"product-title\" ><a>XLarge</a></h2>
                                                            {% endif %}
                                                            <img class=\"freeze_class ff-image-ready\" src=\"{{ item.imageRoseNumber }}\" width=\"50\" height=\"50\">{{ item.roseColor }}
                                                            <div class=\"product-price\">
                                                                <span>{{ item.prix }} dt</span>
                                                            </div>
                                                                {% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product-item -->
                                                {% endfor %}
                                                <div class=\"navigation\">

                                                        {{ knp_pagination_render(v) }}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- cart -->

                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-4 col-md-12 col-sm-12\" >
                            <aside class=\"shop-sidebar-area shop-sidebar-left\">
                                <!-- category-widget -->
                                <form action=\"{{ path(\"Listproduct\",{\"categorie\":categorie}) }}\" >
                                    <div class=\"widget widget_nav_menu category-widget\">
                                        <div  id=\"sizeCheckBox\">

                                            <h4 class=\"widget-title\">Taille du Box </h4>
                                            <ul>
                                                <li>
                                                    <label class=\"checkbox-item\">XL
                                                        <input type=\"checkbox\"   name=\"Size[]\" value=\"XL\">
                                                        <span class=\"checkmark\"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class=\"checkbox-item\">L
                                                        <input type=\"checkbox\" class=\"size\"  name=\"Size[]\" value=\"L\">
                                                        <span class=\"checkmark\"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class=\"checkbox-item\">M
                                                        <input type=\"checkbox\" class=\"size\"  name=\"Size[]\" value=\"M\">
                                                        <span class=\"checkmark\"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class=\"checkbox-item\">S
                                                        <input type=\"checkbox\" class=\"size\"  name=\"Size[]\" value=\"S\">
                                                        <span class=\"checkmark\"></span>
                                                    </label>
                                                </li>


                                            </ul>

                                        </div>
                                    </div>
                                    <!-- color-widget -->
                                    <div class=\"widget widget_nav_menu color-widget\">
                                        <h4 class=\"widget-title\">Couleur Du Box</h4>
                                        <ul>
                                            <li>
                                                <label class=\"checkbox-item\">Blanc
                                                    <input type=\"checkbox\" name=\"BoxColor[]\" value=\"Blanc\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-white\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Noir
                                                    <input type=\"checkbox\" name=\"BoxColor[]\" value=\"Noir\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-black\"></span>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class=\"widget widget_nav_menu color-widget\">
                                        <h4 class=\"widget-title\">Couleur Des Roses</h4>
                                        <ul>
                                            <li>
                                                <label class=\"checkbox-item\">Blanche
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Blanche\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-white\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Rouge
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Rouge\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-green\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Rose
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Rose\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-rose\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Champagne
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Champagne\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-yellow\"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class=\"checkbox-item\">Rose Bicolore
                                                    <input type=\"checkbox\" name=\"RoseColor[]\" value=\"Rose Bicolore\">
                                                    <span class=\"checkmark\"></span>
                                                    <span class=\"color-variation color-orange\"></span>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- price-filter-widget -->
                                    <div class=\"widget price-filter-widget\">
                                        <h4 class=\"widget-title\">Price Range</h4>
                                        <div class=\"price_filter\">
                                            <div class=\"price_slider_amount\">
                                                <input type=\"submit\"  value=\"Your range:\"/>
                                                <input type=\"text\" id=\"amount\" name=\"price\"  value=\"\" min=\"\" max=\"\" placeholder=\"Add Your Price\" />
                                            </div>
                                            <div id=\"slider-range\"></div>
                                        </div>
                                    </div>
                                    {#  <!-- recent-viewed-product-widget -->
                                <div class=\"widget recent-viewed-product-widget\">
                                    <h4 class=\"widget-title\">Recent Viewed Items</h4>
                                    <ul>
                                        <li>
                                            <div class=\"recent-viewed-product-item clearfix\">
                                                <div class=\"thumb\">
                                                    <a href=\"product-details.html\"><img src=\"assets/img/product/1.png\" alt=\"Bloom Image\"></a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"content-inner\">
                                                        <h6><a href=\"product-details.html\">Beautiful Roses</a></h6>
                                                        <div class=\"product-price\">
                                                            <del>\$280</del>
                                                            <span>\$250</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"recent-viewed-product-item clearfix\">
                                                <div class=\"thumb\">
                                                    <a href=\"product-details.html\"><img src=\"assets/img/product/2.png\" alt=\"Bloom Image\"></a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"content-inner\">
                                                        <h6><a href=\"product-details.html\">Wonderful Lillies</a></h6>
                                                        <div class=\"product-price\">
                                                            <del>\$270</del>
                                                            <span>\$240</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"recent-viewed-product-item clearfix\">
                                                <div class=\"thumb\">
                                                    <a href=\"product-details.html\"><img src=\"assets/img/product/3.png\" alt=\"Bloom Image\"></a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"content-inner\">
                                                        <h6><a href=\"product-details.html\">Red Flowers</a></h6>
                                                        <div class=\"product-price\">
                                                            <del>\$250</del>
                                                            <span>\$230</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>#}
                                    <br>
                                    <div class=\"btn-wrapper \">
                                        <button class=\"boxed-btn btn-rounded\" type=\"submit\">Filtrer</button>
                                    </div>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "product/index.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\product\\index.html.twig");
    }
}
