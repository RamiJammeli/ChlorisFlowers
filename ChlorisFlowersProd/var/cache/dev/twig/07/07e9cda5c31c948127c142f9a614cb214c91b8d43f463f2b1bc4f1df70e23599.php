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
class __TwigTemplate_71d09d2bc40fe561845dafa0d7862c220901ebf92170ab2079507a827a39099c extends Template
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
        echo "    <div class=\"bloom-product-details-area margin-bottom-110 mobile-mb-30 tab-mb-50 s-laptop-mb-90\">
    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Details Livraison</h1>
        </div>


";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        <div class=\"row\">

            <div class=\"col-lg-6\">

                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample\">
                        ";
            // line 20
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "typeLivraison", [], "any", false, false, false, 20), "livraisondomicile"))) {
                // line 21
                echo "                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison à Domicile</h6>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 22
$context["item"], "typeLivraison", [], "any", false, false, false, 22), "RecuprerChezNous"))) {
                // line 23
                echo "                            <h6 class=\"m-0 font-weight-bold text-primary\">Récupérer à l'atelier</h6>
                            ";
            } else {
                // line 25
                echo "                                <h6 class=\"m-0 font-weight-bold text-primary\">Livraison Surprise</h6>
                        ";
            }
            // line 27
            echo "
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample\">
                        ";
            // line 31
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "typeLivraison", [], "any", false, false, false, 31), "livraisonSurprise"))) {
                // line 32
                echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lastNameR", [], "any", false, false, false, 33), "html", null, true);
                echo " </p>
                                <strong>Prenom </strong> <p>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nameR", [], "any", false, false, false, 34), "html", null, true);
                echo " </p>
                                <strong>Adresse </strong> <p>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "adressR", [], "any", false, false, false, 35), "html", null, true);
                echo " </p>
                                <strong>Num Tel </strong> <p>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "phoneNumverR", [], "any", false, false, false, 36), "html", null, true);
                echo " </p>
                            </div>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 38
$context["item"], "typeLivraison", [], "any", false, false, false, 38), "livraisondomicile"))) {
                // line 39
                echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 40), "user", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
                echo " </p>
                                <strong>Prenom </strong> <p>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 41), "user", [], "any", false, false, false, 41), "prenom", [], "any", false, false, false, 41), "html", null, true);
                echo " </p>
                                <strong>Adresse </strong> <p>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 42), "user", [], "any", false, false, false, 42), "adresse", [], "any", false, false, false, 42), "html", null, true);
                echo " </p>
                                <strong>Num Tel </strong> <p>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 43), "user", [], "any", false, false, false, 43), "tel", [], "any", false, false, false, 43), "html", null, true);
                echo " </p>
                            </div>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 45
$context["item"], "typeLivraison", [], "any", false, false, false, 45), "RecuprerChezNous"))) {
                // line 46
                echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 47), "user", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
                echo " </p>
                                <strong>Prenom </strong> <p>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 48), "user", [], "any", false, false, false, 48), "prenom", [], "any", false, false, false, 48), "html", null, true);
                echo " </p>
                                <strong>Adresse </strong> <p> </p>
                            </div>
                        ";
            }
            // line 52
            echo "                    </div>
                </div>



            </div>

            <div class=\"col-lg-6\">



                <!-- Collapsable Card Example -->
                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample3\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Image du produit</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample3\">
                        <div class=\"card-body -align-center\">
                            <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 72), "image", [], "any", false, false, false, 72))), "html", null, true);
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
        // line 85
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
        return array (  214 => 85,  195 => 72,  173 => 52,  166 => 48,  162 => 47,  159 => 46,  157 => 45,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  137 => 39,  135 => 38,  130 => 36,  126 => 35,  122 => 34,  118 => 33,  115 => 32,  113 => 31,  107 => 27,  103 => 25,  99 => 23,  97 => 22,  94 => 21,  92 => 20,  83 => 13,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"bloom-product-details-area margin-bottom-110 mobile-mb-30 tab-mb-50 s-laptop-mb-90\">
    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Details Livraison</h1>
        </div>


{% for item in items %}
        <div class=\"row\">

            <div class=\"col-lg-6\">

                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample\">
                        {% if item.typeLivraison==\"livraisondomicile\" %}
                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison à Domicile</h6>
                        {% elseif item.typeLivraison ==\"RecuprerChezNous\" %}
                            <h6 class=\"m-0 font-weight-bold text-primary\">Récupérer à l'atelier</h6>
                            {% else  %}
                                <h6 class=\"m-0 font-weight-bold text-primary\">Livraison Surprise</h6>
                        {% endif %}

                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample\">
                        {% if item.typeLivraison==\"livraisonSurprise\" %}
                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>{{ item.lastNameR}} </p>
                                <strong>Prenom </strong> <p>{{ item.nameR}} </p>
                                <strong>Adresse </strong> <p>{{ item.adressR}} </p>
                                <strong>Num Tel </strong> <p>{{ item.phoneNumverR}} </p>
                            </div>
                        {% elseif item.typeLivraison==\"livraisondomicile\" %}
                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>{{ item.idOrder.user.nom}} </p>
                                <strong>Prenom </strong> <p>{{ item.idOrder.user.prenom}} </p>
                                <strong>Adresse </strong> <p>{{ item.idOrder.user.adresse}} </p>
                                <strong>Num Tel </strong> <p>{{ item.idOrder.user.tel}} </p>
                            </div>
                        {% elseif item.typeLivraison==\"RecuprerChezNous\" %}
                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>{{ item.idOrder.user.nom}} </p>
                                <strong>Prenom </strong> <p>{{ item.idOrder.user.prenom}} </p>
                                <strong>Adresse </strong> <p> </p>
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
                        <h6 class=\"m-0 font-weight-bold text-primary\">Image du produit</h6>
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
{% endblock %}", "order/CommandeDetails.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/order/CommandeDetails.html.twig");
    }
}
