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
class __TwigTemplate_749dde6a640d7d783e7b146c5e5dc2c6c4e68f4f194f2f5413b909d96c1e3747 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((0 === twig_compare(($context["categorie"] ?? null), "the classic collection"))) {
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
($context["categorie"] ?? null), "the bird collection"))) {
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
($context["categorie"] ?? null), "the marble collection"))) {
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
($context["categorie"] ?? null), "The Blooming Bride"))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["v"] ?? null));
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["v"] ?? null));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => ($context["categorie"] ?? null)]), "html", null, true);
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
        return array (  441 => 356,  329 => 193,  312 => 179,  308 => 177,  298 => 172,  292 => 169,  284 => 167,  280 => 165,  276 => 163,  274 => 162,  271 => 161,  269 => 160,  266 => 159,  264 => 158,  257 => 157,  251 => 154,  244 => 152,  239 => 151,  237 => 150,  234 => 149,  225 => 144,  219 => 140,  216 => 139,  202 => 127,  196 => 123,  193 => 122,  191 => 121,  180 => 112,  174 => 108,  171 => 107,  169 => 106,  165 => 104,  161 => 103,  127 => 71,  109 => 55,  107 => 54,  90 => 39,  88 => 38,  71 => 23,  69 => 22,  52 => 7,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/index.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/product/index.html.twig");
    }
}
