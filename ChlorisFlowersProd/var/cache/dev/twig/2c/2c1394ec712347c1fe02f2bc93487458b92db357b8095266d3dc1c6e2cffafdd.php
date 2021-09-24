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

/* product/collection.html.twig */
class __TwigTemplate_262759a13950648f4e48f2c9e51ed953fe817365ecc2f5d4c370714850eb3113 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/collection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/collection.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/collection.html.twig", 1);
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
    <br>
    <div class=\"bloom-product-area margin-bottom-120 mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <!-- shop-options -->
                    <div class=\"shop-options clearfix\">
                        <div class=\"short-by pull-left\">

                        </div>


                    </div>
                </div>
                <!-- product-item -->

                <!-- product-item -->

                <!-- product-item -->

            </div>
            <!-- product-item -->
            <div class=\"tab-pane fade active show\" id=\"bloom_shop_grid_view\">
                <div class=\"shop-grid-view-tab-content-inner\">
                    <div class=\"row custom-gutter\">

                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                            <div class=\"bloom-gallery-item white col-md-6 col-12 mb-10\">
                                <div class=\"product-item text-center\">
                                    <div class=\"frame\">
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 37)]), "html", null, true);
            echo " \">
                                            <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, $context["item"], "imageCategorie", [], "any", false, false, false, 38))), "html", null, true);
            echo "\" alt=\"Flower Image\"></a>
                                    </div>

                                    <div class=\"product-action\">
                                        <ul>
                                            ";
            // line 44
            echo "                                            <li class=\"details-link\"><a style=\"  font-size: 20px;
                                        text-transform: uppercase;\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                    </div>
                </div>
            </div>
            <!-- product-item -->


        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  121 => 45,  118 => 44,  110 => 38,  106 => 37,  101 => 34,  97 => 33,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}

    <br>
    <div class=\"bloom-product-area margin-bottom-120 mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <!-- shop-options -->
                    <div class=\"shop-options clearfix\">
                        <div class=\"short-by pull-left\">

                        </div>


                    </div>
                </div>
                <!-- product-item -->

                <!-- product-item -->

                <!-- product-item -->

            </div>
            <!-- product-item -->
            <div class=\"tab-pane fade active show\" id=\"bloom_shop_grid_view\">
                <div class=\"shop-grid-view-tab-content-inner\">
                    <div class=\"row custom-gutter\">

                        {% for item in i %}
                            <div class=\"bloom-gallery-item white col-md-6 col-12 mb-10\">
                                <div class=\"product-item text-center\">
                                    <div class=\"frame\">
                                        <a href=\"{{ path('Listproduct',{ 'categorie' : item.categorie }) }} \">
                                            <img src=\"{{ asset('client/img/product/'~item.imageCategorie) }}\" alt=\"Flower Image\"></a>
                                    </div>

                                    <div class=\"product-action\">
                                        <ul>
                                            {#  <li><a href=\"{{ path('addPanier',{'id': item.id,'categorie': item.categorie}) }}\" >ADD TO CART</a></li>#}
                                            <li class=\"details-link\"><a style=\"  font-size: 20px;
                                        text-transform: uppercase;\" href=\"{{ path('Listproduct',{ 'categorie' : item.categorie }) }}\" >{{ item.categorie }}</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>

                        {% endfor %}

                    </div>
                </div>
            </div>
            <!-- product-item -->


        </div>
    </div>

{% endblock %}", "product/collection.html.twig", "C:\\Users\\ramij\\OneDrive\\Documents\\Smartleap2\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\product\\collection.html.twig");
    }
}
