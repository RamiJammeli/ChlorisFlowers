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

/* order/panier.html.twig */
class __TwigTemplate_c879492d2fd154ac1d633e6b30c5592b0b36836ee8770d99e3562c67151996b7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <br>
    <div class=\"cart-area margin-bottom-120  mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <!-- shoping-cart-tab-menu -->
                <div class=\"col-xl-8 offset-xl-2\">
                    <div class=\"shoping-cart-tab-menu\">
                        <div class=\"nav\">
                            <a class=\"active show\" data-toggle=\"tab\">Cart</a>
                        </div>
                    </div>
                </div>
                <!-- shoping-cart-tab-info -->
                <div class=\"col-xl-8 offset-xl-2\">
                    <div class=\"shoping-cart-tab-info\">
                        <div class=\"tab-content\">
                            <!-- cart -->
                            <div class=\"tab-pane fade active show\" >
                                <div class=\"shopping-cart-info\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-12\">
                                            <div class=\"shoping-cart-inner\">
                                                <div class=\"shoping-cart-inner-table\">
                                                    <form action=\"#\">
                                                        <div class=\"table-content table-responsive mb-50\">
                                                            <table class=\"text-center\">
                                                                ";
        // line 32
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["items"] ?? null)), 0))) {
            // line 33
            echo "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "                                                                        <tbody>
                                                                        <!-- tr -->
                                                                        <tr class=\"product-position\">
                                                                            <td class=\"cart-product-remove\">
                                                                                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_carte", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 38), "getId", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\"><i
                                                                                            class=\"ti-trash\"></i></a>
                                                                            </td>
                                                                            <td class=\"cart-product-thumbnail\">
                                                                                <img
                                                                                        src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 43), "getImage", [], "any", false, false, false, 43))), "html", null, true);
                echo "\"
                                                                                        alt=\"\">
                                                                            </td>
                                                                            <td class=\"cart-product-title\">
                                                                                <h6 style=\"text-transform: uppercase;font-family:MinionPro-Regular,serif;}\">
                                                                                    ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 48), "getCategorie", [], "any", false, false, false, 48), "html", null, true);
                echo "
                                                                                    <br> ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 49), "getBoxColor", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                                                                </h6>
                                                                            </td>
                                                                            ";
                // line 57
                echo "                                                                            <td class=\"cart-product-title\">
                                                                                <h6 style=\"color: var(--paragraph-color)\">
                                                                                    Carte : ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "carte", [], "any", false, false, false, 59), "html", null, true);
                echo "
                                                                                </h6>
                                                                                <h6 style=\"color: var(--paragraph-color)\">
                                                                                    Commentaire : ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "commentaire", [], "any", false, false, false, 62), "html", null, true);
                echo "
                                                                                </h6>
                                                                            </td>
                                                                            <td class=\"cart-product-multifly\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>

                                                                            <td class=\"cart-product-multifly\">x</td>
                                                                            <td class=\"cart-total-price sum\"
                                                                                style=\"color: #444444\">";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 69), "html", null, true);
                echo "
                                                                                <span> DT</span></td>


                                                                        </tr>
                                                                        <!-- tr -->


                                                                        </tbody>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                                                ";
        }
        // line 80
        echo "                                                            </table>
                                                        </div>
                                                    </form>
                                                    <div class=\"shoppint-cart-total\">
                                                        <div class=\"row\">
                                                            <div class=\"col-xl-6\">
                                                                <div class=\"shopping-cart-coupon\">
                                                                    <p>Enter a promo code</p>
                                                                    <form action=\"#\" class=\"form-input-box\">
                                                                        <input type=\"text\" placeholder=\"HELLOSUMMER\">
                                                                        <button type=\"submit\"><i class=\"ti-check\"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-xl-6 desktop-text-right\">
                                                                <div class=\"shopping-cart-total-inner\">
                                                                    <div class=\" table-responsive mb-50\">
                                                                        <table class=\"text-right\">
                                                                            <tbody>


                                                                            <tr>
                                                                                <td class=\"cart-total-title\"
                                                                                    style=\"font-family: var(--body-font)\">
                                                                                    Total:
                                                                                </td>
                                                                                <td class=\"cart-total-price\"
                                                                                    style=\"font-family: var(--body-font)\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 108), "get", [0 => "total"], "method", false, false, false, 108), "html", null, true);
        echo "
                                                                                    DT
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <!-- shipping -->
                                        <div class=\"shopping-cart-info shipping-info\">
                                            <div class=\"row\">
                                                <div class=\"col-xl-12\">
                                                    <div class=\"shoping-cart-inner shipping-info-inner\">
                                                        <div class=\"row\">
                                                            <div class=\"col-xl-6\">
                                                                <div class=\"shipping-method\">
                                                                    <h4 style=\"text-transform: uppercase\">Méthodes de Livraisons</h4>


                                                                    <ul>
                                                                        <li>
                                                                            <input type=\"radio\" id=\"202\" name=\"livraison\"
                                                                                   style=\"border: 1px solid;\"
                                                                                   value=\"domicile\">
                                                                            <label for=\"202\"> Livraison à domicile (Sur GRAND TUNIS seulement) <br>
                                                                                Frais d'expédition 10 DT </label>

                                                                        </li>
                                                                        <li>
                                                                            <input type=\"radio\" id=\"201\" name=\"livraison\"
                                                                                   value=\"surprise\">
                                                                            <label for=\"201\"> Livraison Surprise
                                                                                <br>Frais d'expédition 10 DT</label>

                                                                        </li>
                                                                        <div class=\"shipping-address\">

                                                                            <form action=\"#\" class=\"contact-form-box\"
                                                                                  id=\"form\" style=\"display:none\">
                                                                                <h6 style=\"\">Donnez nous l'adresse et on
                                                                                    s'occupe du reste !</h6>
                                                                                <label>First name*</label>
                                                                                <input type=\"text\" name=\"firstname\"
                                                                                       placeholder=\"Prenom\" id=\"f_name\">
                                                                                <label>Last name*</label>
                                                                                <input type=\"text\" name=\"lastname\"
                                                                                       placeholder=\"Nom\" id=\"l_name\">
                                                                                <label>Street name*</label>
                                                                                <input type=\"text\" name=\"streetname\"
                                                                                       placeholder=\"Tunis\"
                                                                                       id=\"street-address\">
                                                                                <label>Phone number*</label>
                                                                                <input type=\"text\" name=\"housenumber\"
                                                                                       placeholder=\"22\" id=\"phone\">

                                                                            </form>
                                                                        </div>
                                                                        <li>
                                                                            <input type=\"radio\" id=\"203\" name=\"livraison\"
                                                                                   style=\"border: 1px solid;\"
                                                                                   value=\"atelier\">
                                                                            <label for=\"203\" > Récupérer chez nous <br>
                                                                                Frais d'expédition 0 DT </label>

                                                                        </li>


                                                                    </ul>


                                                                </div>
                                                            </div>

                                                            <div class=\"col-xl-6 col-md-7\">
                                                                <div class=\"shipping-subtotal text-right mobile-mb-30\">
                                                                    <div class=\"shopping-cart-total-inner shipping-subtotal-inner text-center\">
                                                                        <div class=\"table-responsive mb-50\">
                                                                            <table class=\"table\">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>Total:</td>
                                                                                    <td>";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 197), "get", [0 => "total"], "method", false, false, false, 197), "html", null, true);
        echo " DT</td>
                                                                                </tr>
                                                                                <tr>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Shipping and handling:</td>
                                                                                    <td>10 DT</td>
                                                                                </tr>
                                                                                <tr class=\"shipping-subtotal-price\">
                                                                                    <td class=\"cart-total-title\"
                                                                                        style=\"font-family: var(--body-font)\">

                                                                                    </td>


                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class=\"btn-wrapper\">
                                                                                <button class=\"boxed-btn btn-rounded\"
                                                                                        onclick=\"checkout(event)\">Valider
                                                                                    votre Commande
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>


                        </div>
                    </div>


                </div>

            </div>

        </div>
        <!-- Summary -->
    </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "order/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 197,  189 => 108,  159 => 80,  156 => 79,  140 => 69,  133 => 65,  127 => 62,  121 => 59,  117 => 57,  111 => 49,  107 => 48,  99 => 43,  91 => 38,  85 => 34,  80 => 33,  78 => 32,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/panier.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/order/panier.html.twig");
    }
}
