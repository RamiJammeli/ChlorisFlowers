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
class __TwigTemplate_1594d1b468bf4db909f584e70f425c3c3e3946206c66562bbc03ab2418ffbf4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/details.html.twig", 1);
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
        echo "    <!-- Breadcrumb area start -->
    <!-- Breadcrumb area end -->

    <!-- Prodcut details area start -->
    <br>
    <br>
    <div class=\"bloom-product-details-area margin-bottom-110 mobile-mb-30 tab-mb-50 s-laptop-mb-90\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-xl-8 col-lg-7 col-md-12\">
                    <div class=\"product-details-image-gallery mobile-mb-20 tab-mb-60 s-laptop-mb-80\">
                        <div class=\"product-details-small-img-slider \">
                            <div class=\"single-item\">
                                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "image", [], "any", false, false, false, 19))), "html", null, true);
        echo "\" alt=\"Flower Image\">
                            </div>
                            <div class=\"single-item\">
                                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "hautImage", [], "any", false, false, false, 22))), "html", null, true);
        echo "\" alt=\"Flower Image\">
                            </div>




                        </div>
                        <div class=\"product-details-large-img-slider \">
                            <div class=\"single-item\">
                                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31))), "html", null, true);
        echo "\"
                                   data-rel=\"lightcase:myCollection\">
                                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33))), "html", null, true);
        echo "\"
                                         alt=\"Flower Image\">
                                </a>
                            </div>
                            <div class=\"single-item\">
                                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "hautImage", [], "any", false, false, false, 38))), "html", null, true);
        echo "\"
                                   data-rel=\"lightcase:myCollection\">
                                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "hautImage", [], "any", false, false, false, 40))), "html", null, true);
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
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "getCategorie", [], "any", false, false, false, 50), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "getBoxColor", [], "any", false, false, false, 50), "html", null, true);
        echo "</a></h4>

                        <div class=\"product-price\">
                            ";
        // line 53
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "boxSize", [], "any", false, false, false, 53), "L"))) {
            // line 54
            echo "                            <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 54, $this->source); })()), "getProdcutName", [], "any", false, false, false, 54), "html", null, true);
            echo " Large</span>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 55, $this->source); })()), "boxSize", [], "any", false, false, false, 55), "M"))) {
            // line 56
            echo "                            <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "getProdcutName", [], "any", false, false, false, 56), "html", null, true);
            echo " Medium</span>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "boxSize", [], "any", false, false, false, 57), "S"))) {
            // line 58
            echo "                            <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "getProdcutName", [], "any", false, false, false, 58), "html", null, true);
            echo " Small</span>
                            ";
        } else {
            // line 60
            echo "                            <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "getProdcutName", [], "any", false, false, false, 60), "html", null, true);
            echo " XLarge</span>
                            ";
        }
        // line 62
        echo "                        </div>
                        <div class=\"product-price\">
                            <span id=\"prix\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 64, $this->source); })()), "getPrix", [], "any", false, false, false, 64), "html", null, true);
        echo " DT</span>
                        </div>

                        <p>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "getDescriptionBox", [], "any", false, false, false, 67), "html", null, true);
        echo "</p>
                        <img class=\"freeze_class ff-image-ready\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 68, $this->source); })()), "getImageRoseNumber", [], "any", false, false, false, 68), "html", null, true);
        echo "\" width=\"50\"
                             height=\"50\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "getRoseColor", [], "any", false, false, false, 69), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "getRoseNumber", [], "method", false, false, false, 69), "html", null, true);
        echo " Roses
                        <form action=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPaniers", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
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
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81), "html", null, true);
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
                                    <ul>
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
                                    <div class=\"btn-wrapper\">
                                        <input type=\"submit\" class=\"boxed-btn btn-rounded\" id=\"cart\" value=\"Add to cart\">
                                    </div>

                                </div>
                            </div>
                        </form>
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
        return "product/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 81,  192 => 70,  186 => 69,  182 => 68,  178 => 67,  172 => 64,  168 => 62,  162 => 60,  156 => 58,  154 => 57,  149 => 56,  147 => 55,  142 => 54,  140 => 53,  132 => 50,  119 => 40,  114 => 38,  106 => 33,  101 => 31,  89 => 22,  83 => 19,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
    <!-- Breadcrumb area start -->
    <!-- Breadcrumb area end -->

    <!-- Prodcut details area start -->
    <br>
    <br>
    <div class=\"bloom-product-details-area margin-bottom-110 mobile-mb-30 tab-mb-50 s-laptop-mb-90\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-xl-8 col-lg-7 col-md-12\">
                    <div class=\"product-details-image-gallery mobile-mb-20 tab-mb-60 s-laptop-mb-80\">
                        <div class=\"product-details-small-img-slider \">
                            <div class=\"single-item\">
                                <img src=\"{{ asset('client/img/product/'~product.image) }}\" alt=\"Flower Image\">
                            </div>
                            <div class=\"single-item\">
                                <img src=\"{{ asset('client/img/product/'~product.hautImage) }}\" alt=\"Flower Image\">
                            </div>




                        </div>
                        <div class=\"product-details-large-img-slider \">
                            <div class=\"single-item\">
                                <a href=\"{{ asset('client/img/product/'~product.image) }}\"
                                   data-rel=\"lightcase:myCollection\">
                                    <img src=\"{{ asset('client/img/product/'~product.image) }}\"
                                         alt=\"Flower Image\">
                                </a>
                            </div>
                            <div class=\"single-item\">
                                <a href=\"{{ asset('client/img/product/'~product.hautImage )}}\"
                                   data-rel=\"lightcase:myCollection\">
                                    <img src=\"{{ asset('client/img/product/'~product.hautImage) }}\"
                                         alt=\"Flower Image\">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-5 col-md-12\">
                    <div class=\"product-details-content\">
                        <h4 class=\"product-title\"><a style=\"text-transform: uppercase;\">{{ product.getCategorie }} {{ product.getBoxColor }}</a></h4>

                        <div class=\"product-price\">
                            {% if product.boxSize == \"L\" %}
                            <span>{{ product.getProdcutName }} Large</span>
                            {% elseif product.boxSize == \"M\"%}
                            <span>{{ product.getProdcutName }} Medium</span>
                            {% elseif product.boxSize == \"S\"%}
                            <span>{{ product.getProdcutName }} Small</span>
                            {% else %}
                            <span>{{ product.getProdcutName }} XLarge</span>
                            {% endif %}
                        </div>
                        <div class=\"product-price\">
                            <span id=\"prix\">{{ product.getPrix }} DT</span>
                        </div>

                        <p>{{ product.getDescriptionBox }}</p>
                        <img class=\"freeze_class ff-image-ready\" src=\"{{ product.getImageRoseNumber }}\" width=\"50\"
                             height=\"50\">{{ product.getRoseColor }} , {{  product.getRoseNumber() }} Roses
                        <form action=\"{{ path('addPaniers',{'id': product.id })}}\" method=\"post\" >
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
                                    <input type=\"hidden\" id=\"id\" value={{ product.id }} >
                                    <ul>
                                        <li>
                                            <label class=\"checkbox-item\" >Carte (inclus et gratuite)
                                                <input type=\"checkbox\" id=\"myCheck\" name=\"myCheck\" onclick=\"myFunction()\">
                                                <span class=\"checkmark\"  ></span>
                                            </label>
                                            <label><textarea id=\"txt\" style=\"display:none\" name=\"txt\"></textarea></label>
                                        </li>
                                    </ul>
                                    <ul>
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
                                    <div class=\"btn-wrapper\">
                                        <input type=\"submit\" class=\"boxed-btn btn-rounded\" id=\"cart\" value=\"Add to cart\">
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "product/details.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/product/details.html.twig");
    }
}
