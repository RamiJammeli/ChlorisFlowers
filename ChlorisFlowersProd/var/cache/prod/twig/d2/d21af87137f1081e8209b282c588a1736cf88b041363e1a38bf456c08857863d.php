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
class __TwigTemplate_927338e2858d2c21b7dd3570c4fda0f346decb98b27178ec5224dcbcff777772 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/MesCommandes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <br>
    <br>
    <div class=\"cart-area margin-bottom-120  mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <!-- shoping-cart-tab-menu -->
                <div class=\"col-xl-8 offset-xl-2\">
                    <div class=\"shoping-cart-tab-menu\">
                         <h4>THANK YOU FOR YOUR ORDER,  ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "nom", [], "any", false, false, false, 11), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? null));
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
        return array (  124 => 50,  112 => 44,  107 => 42,  99 => 39,  93 => 36,  89 => 34,  85 => 33,  60 => 11,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/MesCommandes.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/order/MesCommandes.html.twig");
    }
}
