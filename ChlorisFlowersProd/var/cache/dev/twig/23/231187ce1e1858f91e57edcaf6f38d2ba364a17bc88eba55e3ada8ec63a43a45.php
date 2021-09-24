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

/* order/CommandeDetails.html.twig */
class __TwigTemplate_c64fa6b8ce821a98b9901d109b3ace6dcf15d6e27b3f5d75b45ff7a9fb17d6cd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/CommandeDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/CommandeDetails.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/CommandeDetails.html.twig", 1);
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
    <div class=\"bloom-product-details-area margin-bottom-110 mobile-mb-30 tab-mb-50 s-laptop-mb-90\">
    <div class=\"container\">
        <div class=\"section-title-area \">
            <div class=\"section-title section-title-2\">
                <div class=\"icon\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                </div>
                <div class=\"title-text\">
                    <h2 class=\"title\">Détails de votre commande</h2>
                </div>
            </div>
        </div>
        <!-- Page Heading -->



";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "        <div class=\"row\">

            <div class=\"col-lg-6\">

                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample\">
                        ";
            // line 29
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "typeLivraison", [], "any", false, false, false, 29), "livraisondomicile"))) {
                // line 30
                echo "                            <h6 class=\"m-0 font-weight-bold product-title\">Livraison à Domicile</h6>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 31
$context["item"], "typeLivraison", [], "any", false, false, false, 31), "RecuprerChezNous"))) {
                // line 32
                echo "                            <h6 class=\"m-0 font-weight-bold product-title\">Récupérer à l'atelier</h6>
                            ";
            } else {
                // line 34
                echo "                                <h6 class=\"m-0 font-weight-bold product-title\">Livraison Surprise</h6>
                        ";
            }
            // line 36
            echo "
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample\">
                        ";
            // line 40
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "typeLivraison", [], "any", false, false, false, 40), "livraisondomicile"))) {
                // line 41
                echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 42), "user", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
                echo " </p>
                                <strong>Prenom </strong> <p>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 43), "user", [], "any", false, false, false, 43), "prenom", [], "any", false, false, false, 43), "html", null, true);
                echo " </p>
                                <strong>Adresse </strong> <p>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 44), "user", [], "any", false, false, false, 44), "adresse", [], "any", false, false, false, 44), "html", null, true);
                echo " </p>
                                <strong>Num Tel </strong> <p>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 45), "user", [], "any", false, false, false, 45), "tel", [], "any", false, false, false, 45), "html", null, true);
                echo " </p>
                            </div>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 47
$context["item"], "typeLivraison", [], "any", false, false, false, 47), "RecuprerChezNous"))) {
                // line 48
                echo "
                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 50), "user", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
                echo " </p>
                                <strong>Prenom </strong> <p>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 51), "user", [], "any", false, false, false, 51), "prenom", [], "any", false, false, false, 51), "html", null, true);
                echo " </p>
                                <strong>Adresse </strong> <p>14 Rue Voltaire, franceville el omrane </p>
                            </div>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 54
$context["item"], "typeLivraison", [], "any", false, false, false, 54), "livraisonSurpise"))) {
                // line 55
                echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lastNameR", [], "any", false, false, false, 56), "html", null, true);
                echo " </p>
                                <strong>Prenom </strong> <p>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nameR", [], "any", false, false, false, 57), "html", null, true);
                echo " </p>
                                <strong>Adresse </strong> <p>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "adressR", [], "any", false, false, false, 58), "html", null, true);
                echo " </p>
                                <strong>Num Tel </strong> <p>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "phoneNumverR", [], "any", false, false, false, 59), "html", null, true);
                echo " </p>
                            </div>

                        ";
            }
            // line 63
            echo "                    </div>
                </div>



            </div>

            <div class=\"col-lg-6\">



                <!-- Collapsable Card Example -->
                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample3\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample3\">
                        <h6 class=\"m-0 font-weight-bold product-title\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 78), "getprodcutName", [], "any", false, false, false, 78), "html", null, true);
            echo "</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample3\">
                        <div class=\"card-body -align-center\">
                            <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 83), "image", [], "any", false, false, false, 83))), "html", null, true);
            echo "\" alt=\"rose\" class=\"center\" style=\"height: 255px;display: block;
  margin-left: auto;
  margin-right: auto;
  width: 75%;\">

                        </div>
                    </div>
                </div>

            </div>

        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/CommandeDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 96,  212 => 83,  204 => 78,  187 => 63,  180 => 59,  176 => 58,  172 => 57,  168 => 56,  165 => 55,  163 => 54,  157 => 51,  153 => 50,  149 => 48,  147 => 47,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  127 => 41,  125 => 40,  119 => 36,  115 => 34,  111 => 32,  109 => 31,  106 => 30,  104 => 29,  95 => 22,  91 => 21,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <br>
    <br>
    <div class=\"bloom-product-details-area margin-bottom-110 mobile-mb-30 tab-mb-50 s-laptop-mb-90\">
    <div class=\"container\">
        <div class=\"section-title-area \">
            <div class=\"section-title section-title-2\">
                <div class=\"icon\">
                    <img src=\"{{ asset(\"client/img/icon/title.svg\")}}\" alt=\"Bloom\">
                </div>
                <div class=\"title-text\">
                    <h2 class=\"title\">Détails de votre commande</h2>
                </div>
            </div>
        </div>
        <!-- Page Heading -->



{% for item in items %}
        <div class=\"row\">

            <div class=\"col-lg-6\">

                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample\">
                        {% if item.typeLivraison==\"livraisondomicile\" %}
                            <h6 class=\"m-0 font-weight-bold product-title\">Livraison à Domicile</h6>
                        {% elseif item.typeLivraison ==\"RecuprerChezNous\" %}
                            <h6 class=\"m-0 font-weight-bold product-title\">Récupérer à l'atelier</h6>
                            {% else  %}
                                <h6 class=\"m-0 font-weight-bold product-title\">Livraison Surprise</h6>
                        {% endif %}

                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample\">
                        {% if  item.typeLivraison==\"livraisondomicile\" %}
                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>{{ item.idOrder.user.nom}} </p>
                                <strong>Prenom </strong> <p>{{ item.idOrder.user.prenom}} </p>
                                <strong>Adresse </strong> <p>{{ item.idOrder.user.adresse}} </p>
                                <strong>Num Tel </strong> <p>{{ item.idOrder.user.tel}} </p>
                            </div>
                        {% elseif  item.typeLivraison==\"RecuprerChezNous\"%}

                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>{{ item.idOrder.user.nom}} </p>
                                <strong>Prenom </strong> <p>{{ item.idOrder.user.prenom}} </p>
                                <strong>Adresse </strong> <p>14 Rue Voltaire, franceville el omrane </p>
                            </div>
                        {% elseif  item.typeLivraison == \"livraisonSurpise\"%}
                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>{{ item.lastNameR}} </p>
                                <strong>Prenom </strong> <p>{{ item.nameR}} </p>
                                <strong>Adresse </strong> <p>{{ item.adressR}} </p>
                                <strong>Num Tel </strong> <p>{{ item.phoneNumverR}} </p>
                            </div>

                        {% endif %}
                    </div>
                </div>



            </div>

            <div class=\"col-lg-6\">



                <!-- Collapsable Card Example -->
                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample3\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample3\">
                        <h6 class=\"m-0 font-weight-bold product-title\">{{ item.idProduit.getprodcutName}}</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample3\">
                        <div class=\"card-body -align-center\">
                            <img src=\"{{ asset('client/img/product/'~item.idProduit.image) }}\" alt=\"rose\" class=\"center\" style=\"height: 255px;display: block;
  margin-left: auto;
  margin-right: auto;
  width: 75%;\">

                        </div>
                    </div>
                </div>

            </div>

        </div>
{% endfor %}
    </div>
    </div>
{% endblock %}", "order/CommandeDetails.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\order\\CommandeDetails.html.twig");
    }
}
