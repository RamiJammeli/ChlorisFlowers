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

/* order/MesCommandes.html.twig */
class __TwigTemplate_1ebf6f8d196441d95c71c1a71281ba2319fd264f560658d3055c7449d2659351 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/MesCommandes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/MesCommandes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/MesCommandes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
    <br>
    <div class=\"cart-area margin-bottom-120  mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <!-- shoping-cart-tab-menu -->
                <div class=\"col-xl-8 offset-xl-2\">
                    <div class=\"shoping-cart-tab-menu\">
                         <h4>NOUS VOUS REMERCIONS POUR VOTRE COMMANDE,  ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "nom", [], "any", false, false, false, 11), "html", null, true);
        echo ".</h4>
                                                <div class=\"shipping-summery-brief\">

                                                </div>
                    </div>
                </div>
                <!-- shoping-cart-tab-info -->
                <div class=\"col-xl-8 offset-xl-2\">
                    <div class=\"shoping-cart-tab-info\">
                        <div class=\"tab-content\">
                            <!-- cart -->
                            <div class=\"tab-pane fade active show\" id=\"bloom_cart_1_1\">
                                <div class=\"shopping-cart-info\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-12\">
                                            <div class=\"shoping-cart-inner\">
                                                <div class=\"shoping-cart-inner-table\">
                                                    <form action=\"#\">
                                                        <div class=\"table-content table-responsive mb-50\">
                                                            <table class=\"text-center\">
                                                                <tbody>
                                                                    <!-- tr -->
                                                                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 34
            echo "                                                                    <tr>
                                                                        <td class=\"cart-product-remove\">
                                                                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailsCommande", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>
                                                                        </td>
                                                                        <td class=\"cart-product-thumbnail\">
                                                                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailsCommande", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">La référence de votre Commande ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</a>
                                                                        </td>
                                                                        <td class=\"cart-product-title\">
                                                                            <h6><a href=\"product-details.html\">Date de la commande ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "orderDate", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true);
            echo "</a></h6>
                                                                        </td>
                                                                        <td class=\"cart-product-price\">Total:";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "totalAchat", [], "any", false, false, false, 44), "html", null, true);
            echo " DT</td>


                                                                    </tr>
                                                                    <!-- tr -->
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shipping -->

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
        return "order/MesCommandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  130 => 44,  125 => 42,  117 => 39,  111 => 36,  107 => 34,  103 => 33,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <br>
    <br>
    <div class=\"cart-area margin-bottom-120  mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <!-- shoping-cart-tab-menu -->
                <div class=\"col-xl-8 offset-xl-2\">
                    <div class=\"shoping-cart-tab-menu\">
                         <h4>NOUS VOUS REMERCIONS POUR VOTRE COMMANDE,  {{ app.user.nom }}.</h4>
                                                <div class=\"shipping-summery-brief\">

                                                </div>
                    </div>
                </div>
                <!-- shoping-cart-tab-info -->
                <div class=\"col-xl-8 offset-xl-2\">
                    <div class=\"shoping-cart-tab-info\">
                        <div class=\"tab-content\">
                            <!-- cart -->
                            <div class=\"tab-pane fade active show\" id=\"bloom_cart_1_1\">
                                <div class=\"shopping-cart-info\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-12\">
                                            <div class=\"shoping-cart-inner\">
                                                <div class=\"shoping-cart-inner-table\">
                                                    <form action=\"#\">
                                                        <div class=\"table-content table-responsive mb-50\">
                                                            <table class=\"text-center\">
                                                                <tbody>
                                                                    <!-- tr -->
                                                                    {% for commande in commandes %}
                                                                    <tr>
                                                                        <td class=\"cart-product-remove\">
                                                                            <a href=\"{{ path('detailsCommande',{'idCmd': commande.id }) }}\"><i class=\"fa fa-eye pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>
                                                                        </td>
                                                                        <td class=\"cart-product-thumbnail\">
                                                                            <a href=\"{{ path('detailsCommande',{'idCmd': commande.id }) }}\">La référence de votre Commande {{ commande.id }}</a>
                                                                        </td>
                                                                        <td class=\"cart-product-title\">
                                                                            <h6><a href=\"product-details.html\">Date de la commande {{ commande.orderDate | date('Y-m-d') }}</a></h6>
                                                                        </td>
                                                                        <td class=\"cart-product-price\">Total:{{ commande.totalAchat }} DT</td>


                                                                    </tr>
                                                                    <!-- tr -->
                                                                    {% endfor %}
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shipping -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "order/MesCommandes.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\order\\MesCommandes.html.twig");
    }
}
