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
class __TwigTemplate_9b88887f6e2ee1df328717f96ccd1e97f6f2a7150082bb9deb69e6b5550b4a85 extends Template
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
        echo "
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
    <div class=\"bloom-product-area margin-bottom-120 mobile-mb-50 tab-mb-80\" >
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <!-- shop-options -->
                    <div class=\"shop-options clearfix\">
                        <div class=\"short-by pull-left\">
                            <select class=\"nice-select\">
                                <option>Default sorting</option>
                                <option>Sort by popularity</option>
                                <option>Sort by new arrivals</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
                            </select>
                        </div>
                        <div class=\"showing-product-number pull-left\">
                            <span>Showing 9 of 20 results</span>
                        </div>
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
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            echo "                                                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12\">
                                                    <div class=\"product-item text-center\">
                                                        <div class=\"product-image\">
                                                            <a href=\"product-details.html\"><img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 69))), "html", null, true);
            echo "\" alt=\"Flower Image\"></a>

                                                            <div class=\"product-action\">
                                                                <ul>
                                                                    ";
            // line 74
            echo "                                                                    <li class=\"details-link\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" >DETAILS</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=\"product-item-brief\">
                                                            ";
            // line 79
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 79), "the bird collection"))) {
                // line 80
                echo "                                                            <h2 class=\"product-title\" style=\"font-size:18px;font-weight:bold;font-family: 'Quicksand', sans-serif;\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prodcutName", [], "any", false, false, false, 80), "html", null, true);
                echo " </a></h2>
                                                    <img class=\"freeze_class ff-image-ready\" src=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageRoseNumber", [], "any", false, false, false, 81), "html", null, true);
                echo "\" width=\"50\" height=\"50\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "roseColor", [], "any", false, false, false, 81), "html", null, true);
                echo "
                                                    <div class=\"product-price\">
                                                        <span>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 83), "html", null, true);
                echo " dt</span>
                                                    </div>
                                                            ";
            } else {
                // line 86
                echo "                                                            <h2 class=\"product-title\" style=\"font-size:18px;font-weight:bold;font-family: 'Quicksand', sans-serif;\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prodcutName", [], "any", false, false, false, 86), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "boxColor", [], "any", false, false, false, 86), "html", null, true);
                echo "</a></h2>
                                                            ";
                // line 87
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "boxSize", [], "any", false, false, false, 87), "L"))) {
                    // line 88
                    echo "                                                            <h2 class=\"product-title\" ><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                    echo "\"  >Large</a></h2>
                                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 89
$context["item"], "boxSize", [], "any", false, false, false, 89), "M"))) {
                    // line 90
                    echo "                                                                <h2 class=\"product-title\" ><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                    echo "\"  >Medium</a></h2>
                                                             ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 91
$context["item"], "boxSize", [], "any", false, false, false, 91), "S"))) {
                    // line 92
                    echo "                                                                 <h2 class=\"product-title\" ><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                    echo "\"  >Small</a></h2>
                                                             ";
                } else {
                    // line 94
                    echo "                                                                 <h2 class=\"product-title\" ><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\"  >XLarge</a></h2>
                                                            ";
                }
                // line 96
                echo "                                                            <img class=\"freeze_class ff-image-ready\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageRoseNumber", [], "any", false, false, false, 96), "html", null, true);
                echo "\" width=\"50\" height=\"50\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "roseColor", [], "any", false, false, false, 96), "html", null, true);
                echo "
                                                            <div class=\"product-price\">
                                                                <span>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 98), "html", null, true);
                echo " dt</span>
                                                            </div>
                                                                ";
            }
            // line 101
            echo "                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product-item -->
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                                <div class=\"navigation\">

                                                        ";
        // line 108
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 108, $this->source); })()));
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
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 122, $this->source); })())]), "html", null, true);
        echo "\" method=\"get\">
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
        // line 285
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
        return array (  370 => 285,  258 => 122,  241 => 108,  237 => 106,  227 => 101,  221 => 98,  213 => 96,  207 => 94,  201 => 92,  199 => 91,  194 => 90,  192 => 89,  187 => 88,  185 => 87,  176 => 86,  170 => 83,  163 => 81,  156 => 80,  154 => 79,  145 => 74,  138 => 69,  133 => 66,  129 => 65,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}

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
    <div class=\"bloom-product-area margin-bottom-120 mobile-mb-50 tab-mb-80\" >
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <!-- shop-options -->
                    <div class=\"shop-options clearfix\">
                        <div class=\"short-by pull-left\">
                            <select class=\"nice-select\">
                                <option>Default sorting</option>
                                <option>Sort by popularity</option>
                                <option>Sort by new arrivals</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
                            </select>
                        </div>
                        <div class=\"showing-product-number pull-left\">
                            <span>Showing 9 of 20 results</span>
                        </div>
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
                                                        <div class=\"product-image\">
                                                            <a href=\"product-details.html\"><img src=\"{{ asset('client/img/product/'~item.image) }}\" alt=\"Flower Image\"></a>

                                                            <div class=\"product-action\">
                                                                <ul>
                                                                    {#  <li><a href=\"{{ path('addPanier',{'id': item.id,'categorie': item.categorie}) }}\" >ADD TO CART</a></li>#}
                                                                    <li class=\"details-link\"><a href=\"{{ path('product_details', {'id': item.id }) }}\" >DETAILS</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=\"product-item-brief\">
                                                            {% if item.categorie == \"the bird collection\" %}
                                                            <h2 class=\"product-title\" style=\"font-size:18px;font-weight:bold;font-family: 'Quicksand', sans-serif;\"><a href=\"{{ path('product_details', {'id': item.id}) }}\" >{{ item.prodcutName }} </a></h2>
                                                    <img class=\"freeze_class ff-image-ready\" src=\"{{ item.imageRoseNumber }}\" width=\"50\" height=\"50\">{{ item.roseColor }}
                                                    <div class=\"product-price\">
                                                        <span>{{ item.prix }} dt</span>
                                                    </div>
                                                            {% else %}
                                                            <h2 class=\"product-title\" style=\"font-size:18px;font-weight:bold;font-family: 'Quicksand', sans-serif;\"><a href=\"{{ path('product_details', {'id': item.id}) }}\" >{{ item.prodcutName }} {{ item.boxColor }}</a></h2>
                                                            {% if item.boxSize == \"L\" %}
                                                            <h2 class=\"product-title\" ><a href=\"{{ path('product_details', {'id': item.id}) }}\"  >Large</a></h2>
                                                            {% elseif item.boxSize == \"M\"%}
                                                                <h2 class=\"product-title\" ><a href=\"{{ path('product_details', {'id': item.id}) }}\"  >Medium</a></h2>
                                                             {% elseif item.boxSize == \"S\"%}
                                                                 <h2 class=\"product-title\" ><a href=\"{{ path('product_details', {'id': item.id}) }}\"  >Small</a></h2>
                                                             {% else %}
                                                                 <h2 class=\"product-title\" ><a href=\"{{ path('product_details', {'id': item.id}) }}\"  >XLarge</a></h2>
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
                                <form action=\"{{ path(\"Listproduct\",{\"categorie\":categorie}) }}\" method=\"get\">
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
", "product/index.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/product/index.html.twig");
    }
}
