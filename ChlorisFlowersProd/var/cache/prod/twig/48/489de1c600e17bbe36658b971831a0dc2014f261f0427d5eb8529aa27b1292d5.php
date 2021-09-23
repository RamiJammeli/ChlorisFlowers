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

/* product/details.html.twig */
class __TwigTemplate_bd7141e82485a42197c190370e1725e1d71bb487bcbdb7b59c64a42cd6f98853 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <!-- Breadcrumb area start -->
    <!-- Breadcrumb area end -->

    <!-- Prodcut details area start -->
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"alert alert-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <br>
    <br>
    <div class=\"bloom-product-details-area margin-bottom-110 mobile-mb-30 tab-mb-50 s-laptop-mb-90\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-xl-8 col-lg-7 col-md-12\">
                    <div class=\"product-details-image-gallery mobile-mb-20 tab-mb-60 s-laptop-mb-80\">
                        <div class=\"product-details-small-img-slider \">
                            <div class=\"single-item\">
                                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 24))), "html", null, true);
        echo "\" alt=\"Flower Image\">
                            </div>
                            <div class=\"single-item\">
                                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hautImage", [], "any", false, false, false, 27))), "html", null, true);
        echo "\" alt=\"Flower Image\">
                            </div>




                        </div>
                        <div class=\"product-details-large-img-slider \">
                            <div class=\"single-item\">
                                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 36))), "html", null, true);
        echo "\"
                                   data-rel=\"lightcase:myCollection\">
                                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 38))), "html", null, true);
        echo "\"
                                         alt=\"Flower Image\">
                                </a>
                            </div>
                            <div class=\"single-item\">
                                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hautImage", [], "any", false, false, false, 43))), "html", null, true);
        echo "\"
                                   data-rel=\"lightcase:myCollection\">
                                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hautImage", [], "any", false, false, false, 45))), "html", null, true);
        echo "\"
                                         alt=\"Flower Image\">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-5 col-md-12\">
                    <div class=\"product-details-content\">
                        <h4 class=\"product-title\"><a style=\"text-transform: uppercase;\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getCategorie", [], "any", false, false, false, 55), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getBoxColor", [], "any", false, false, false, 55), "html", null, true);
        echo "</a></h4>

                        <div class=\"product-price\">
                            ";
        // line 58
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boxSize", [], "any", false, false, false, 58), "L"))) {
            // line 59
            echo "                            <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getProdcutName", [], "any", false, false, false, 59), "html", null, true);
            echo " Large</span>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 60
($context["product"] ?? null), "boxSize", [], "any", false, false, false, 60), "M"))) {
            // line 61
            echo "                            <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getProdcutName", [], "any", false, false, false, 61), "html", null, true);
            echo " Medium</span>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 62
($context["product"] ?? null), "boxSize", [], "any", false, false, false, 62), "S"))) {
            // line 63
            echo "                            <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getProdcutName", [], "any", false, false, false, 63), "html", null, true);
            echo " Small</span>
                            ";
        } else {
            // line 65
            echo "                            <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getProdcutName", [], "any", false, false, false, 65), "html", null, true);
            echo " XLarge</span>
                            ";
        }
        // line 67
        echo "                        </div>
                        <div class=\"product-price\">
                            <span id=\"prix\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrix", [], "any", false, false, false, 69), "html", null, true);
        echo " DT</span>
                        </div>

                        <p>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getDescriptionBox", [], "any", false, false, false, 72), "html", null, true);
        echo "</p>
                        <img class=\"freeze_class ff-image-ready\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getImageRoseNumber", [], "any", false, false, false, 73), "html", null, true);
        echo "\" width=\"50\"
                             height=\"50\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getRoseColor", [], "any", false, false, false, 74), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getRoseNumber", [], "method", false, false, false, 74), "html", null, true);
        echo " Roses
                        ";
        // line 75
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categorie", [], "any", false, false, false, 75), "the bird collection"))) {
            // line 76
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getMacronNumber", [], "any", false, false, false, 76), "html", null, true);
            echo " Macarons</p>
                        ";
        }
        // line 78
        echo "                        <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPaniers", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 78)]), "html", null, true);
        echo "\" method=\"post\" >
                            <div class=\"product-meta-area\">
                                <div class=\"product-meta product-quantity clearfix\">
                                    <span class=\"product-meta-title\">Quantité</span>
                                    <div class=\"product-meta-type\">
                                        <div class=\"cart-plus-minus\">
                                            <input type=\"text\" value=\"01\" name=\"qtybutton\" class=\"cart-plus-minus-box\" min=\"01\" max=\"03\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"product-meta product-meta-list bloom-checkbox\">
                                    <input type=\"hidden\" id=\"id\" value=";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 89), "html", null, true);
        echo " >
                                    <ul>
                                        <li>
                                            <label class=\"checkbox-item\" >Carte (inclus et gratuite)
                                                <input type=\"checkbox\" id=\"myCheck\" name=\"myCheck\" onclick=\"myFunction()\">
                                                <span class=\"checkmark\"  ></span>
                                            </label>
                                            <label><textarea id=\"txt\" style=\"display:none\" name=\"txt\"></textarea></label>
                                        </li>
                                    </ul>
                                    ";
        // line 99
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categorie", [], "any", false, false, false, 99), "the bird collection"))) {
            // line 100
            echo "                                    <ul>
                                        <li>
                                            <label class=\"checkbox-item\" >Macaron Personnalisé (10 DT)
                                                <input type=\"checkbox\" id=\"myCheck2\" name=\"myCheck\" onclick=\"myFunction3()\">
                                                <span class=\"checkmark\"  ></span>
                                            </label>
                                            <label><textarea id=\"txt3\" style=\"display:none\" name=\"txt3\"></textarea></label>
                                        </li>
                                    </ul>
                                    ";
        }
        // line 110
        echo "                                    <ul>
                                        <li>
                                            <label class=\"checkbox-item\" >Commentaire
                                                <input type=\"checkbox\" id=\"myCheck1\" name=\"myCheck\" onclick=\"myFunction2()\">
                                                <span class=\"checkmark\"  ></span>
                                            </label>
                                            <label><textarea id=\"txt2\" style=\"display:none\" name=\"txt2\"></textarea></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"product-meta product-meta-button\">

                                    <div class=\"bloom-calender product-receive-date \">
                                        <div class=\"input-group date\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Select delivery date\" name=\"date\" required>
                                            <span class=\"input-group-addon\">
                                                <i class=\"fa fa-calendar\"></i>
                                            </span>
                                        </div>
                                    </div>
                                   ";
        // line 130
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 130), 0)) || (-1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 130), 0)))) {
            // line 131
            echo "                                        <div class=\"btn-wrapper\">
                                        <input type=\"submit\" class=\"boxed-btn btn-rounded\" id=\"cart\" value=\"Add to cart\" disabled=\"disabled\">
                                    </div>
                                     ";
        } else {
            // line 135
            echo "
                                    <div class=\"btn-wrapper\">
                                        <input type=\"submit\" class=\"boxed-btn btn-rounded\" id=\"cart\" value=\"Add to cart\">
                                    </div>
                                     ";
        }
        // line 140
        echo "                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "product/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 140,  272 => 135,  266 => 131,  264 => 130,  242 => 110,  230 => 100,  228 => 99,  215 => 89,  200 => 78,  194 => 76,  192 => 75,  186 => 74,  182 => 73,  178 => 72,  172 => 69,  168 => 67,  162 => 65,  156 => 63,  154 => 62,  149 => 61,  147 => 60,  142 => 59,  140 => 58,  132 => 55,  119 => 45,  114 => 43,  106 => 38,  101 => 36,  89 => 27,  83 => 24,  72 => 15,  63 => 12,  60 => 11,  56 => 10,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/details.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/product/details.html.twig");
    }
}
