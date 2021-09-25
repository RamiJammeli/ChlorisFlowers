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
class __TwigTemplate_2d83c4fa86e1487a3d0052d0667bab9ae3db88d60bc1b4ab6933d974ee54465b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/panier.html.twig", 1);
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
        echo "    <br>
    <div class=\"cart-area margin-bottom-120  mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <!-- shoping-cart-tab-menu -->
                <div class=\"col-xl-8 offset-xl-2\">
                    <div class=\"shoping-cart-tab-menu\">
                        <div class=\"nav\">
                            <a class=\"active show\" data-toggle=\"tab\">Panier</a>
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
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 32, $this->source); })())), 0))) {
            // line 33
            echo "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 33, $this->source); })()));
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
                                                                    <p>Entrer un code promo</p>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "session", [], "any", false, false, false, 108), "get", [0 => "total"], "method", false, false, false, 108), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "session", [], "any", false, false, false, 197), "get", [0 => "total"], "method", false, false, false, 197), "html", null, true);
        echo " DT</td>
                                                                                </tr>
                                                                                <tr>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Frais d'expédition:</td>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  299 => 197,  207 => 108,  177 => 80,  174 => 79,  158 => 69,  151 => 65,  145 => 62,  139 => 59,  135 => 57,  129 => 49,  125 => 48,  117 => 43,  109 => 38,  103 => 34,  98 => 33,  96 => 32,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
    <br>
    <div class=\"cart-area margin-bottom-120  mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <!-- shoping-cart-tab-menu -->
                <div class=\"col-xl-8 offset-xl-2\">
                    <div class=\"shoping-cart-tab-menu\">
                        <div class=\"nav\">
                            <a class=\"active show\" data-toggle=\"tab\">Panier</a>
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
                                                                {% if items |length > 0 %}
                                                                    {% for item in items %}
                                                                        <tbody>
                                                                        <!-- tr -->
                                                                        <tr class=\"product-position\">
                                                                            <td class=\"cart-product-remove\">
                                                                                <a href=\"{{ path('remove_carte',{'id': item.produits.getId}) }}\"><i
                                                                                            class=\"ti-trash\"></i></a>
                                                                            </td>
                                                                            <td class=\"cart-product-thumbnail\">
                                                                                <img
                                                                                        src=\"{{ asset('client/img/product/'~item.produits.getImage) }}\"
                                                                                        alt=\"\">
                                                                            </td>
                                                                            <td class=\"cart-product-title\">
                                                                                <h6 style=\"text-transform: uppercase;font-family:MinionPro-Regular,serif;}\">
                                                                                    {{ item.produits.getCategorie }}
                                                                                    <br> {{ item.produits.getBoxColor }}
                                                                                </h6>
                                                                            </td>
                                                                            {# <td class=\"cart-product-title\">
                                                                                <h6>
                                                                                    <a href=\"product-details.html\">{{ item.produits.getProdcutName }} </a>
                                                                                </h6>
                                                                            </td> #}
                                                                            <td class=\"cart-product-title\">
                                                                                <h6 style=\"color: var(--paragraph-color)\">
                                                                                    Carte : {{ item.carte }}
                                                                                </h6>
                                                                                <h6 style=\"color: var(--paragraph-color)\">
                                                                                    Commentaire : {{ item.commentaire }}
                                                                                </h6>
                                                                            </td>
                                                                            <td class=\"cart-product-multifly\">{{ item.quantity }}</td>

                                                                            <td class=\"cart-product-multifly\">x</td>
                                                                            <td class=\"cart-total-price sum\"
                                                                                style=\"color: #444444\">{{ item.price }}
                                                                                <span> DT</span></td>


                                                                        </tr>
                                                                        <!-- tr -->


                                                                        </tbody>
                                                                    {% endfor %}
                                                                {% endif %}
                                                            </table>
                                                        </div>
                                                    </form>
                                                    <div class=\"shoppint-cart-total\">
                                                        <div class=\"row\">
                                                            <div class=\"col-xl-6\">
                                                                <div class=\"shopping-cart-coupon\">
                                                                    <p>Entrer un code promo</p>
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
                                                                                    style=\"font-family: var(--body-font)\">{{ app.session.get('total') }}
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
                                                                                    <td>{{ app.session.get('total') }} DT</td>
                                                                                </tr>
                                                                                <tr>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Frais d'expédition:</td>
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


{% endblock %}", "order/panier.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\order\\panier.html.twig");
    }
}
