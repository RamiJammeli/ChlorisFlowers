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

/* admin/LivraisonDetails.html.twig */
class __TwigTemplate_dc2b21a8e7a9a78ca711916e412307e7934264f0f278e05a46499f98a96bf466 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/LivraisonDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/LivraisonDetails.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/LivraisonDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <!-- Begin Page Content -->
    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Details Livraison</h1>
        </div>



        <div class=\"row\">

            <div class=\"col-lg-6\">

                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample\">
                        ";
        // line 23
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "typeLivraison", [], "any", false, false, false, 23), "livraisonSurpise"))) {
            // line 24
            echo "                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison Surprise</h6>

                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "typeLivraison", [], "any", false, false, false, 26), "livraisondomicile"))) {
            // line 27
            echo "                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison à Domicile</h6>
                            ";
        } else {
            // line 29
            echo "                                <h6 class=\"m-0 font-weight-bold text-primary\">Recupérer à l'atelier</h6>
                        ";
        }
        // line 31
        echo "
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample\">
                        ";
        // line 35
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "typeLivraison", [], "any", false, false, false, 35), "livraisonSurpise"))) {
            // line 36
            echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "lastNameR", [], "any", false, false, false, 37), "html", null, true);
            echo " </p>
                                <strong>Prenom </strong> <p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "nameR", [], "any", false, false, false, 38), "html", null, true);
            echo " </p>
                                <strong>Adresse </strong> <p>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "adressR", [], "any", false, false, false, 39), "html", null, true);
            echo " </p>
                                <strong>Num Tel </strong> <p>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "phoneNumverR", [], "any", false, false, false, 40), "html", null, true);
            echo " </p>
                                <strong>Numéro Expéditeur</strong><p>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "idOrder", [], "any", false, false, false, 41), "user", [], "any", false, false, false, 41), "tel", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                            </div>
                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 43
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "typeLivraison", [], "any", false, false, false, 43), "livraisondomicile"))) {
            // line 44
            echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "idOrder", [], "any", false, false, false, 45), "user", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo " </p>
                                <strong>Prenom </strong> <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "idOrder", [], "any", false, false, false, 46), "user", [], "any", false, false, false, 46), "prenom", [], "any", false, false, false, 46), "html", null, true);
            echo " </p>
                                <strong>Adresse </strong> <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "idOrder", [], "any", false, false, false, 47), "user", [], "any", false, false, false, 47), "adresse", [], "any", false, false, false, 47), "html", null, true);
            echo " </p>
                                <strong>Num Tel </strong> <p>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "idOrder", [], "any", false, false, false, 48), "user", [], "any", false, false, false, 48), "tel", [], "any", false, false, false, 48), "html", null, true);
            echo " </p>
                            </div>
                         ";
        } else {
            // line 51
            echo "                             <div class=\"card-body\">
                                 <strong>Nom </strong> <p>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "idOrder", [], "any", false, false, false, 52), "user", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
            echo " </p>
                                 <strong>Prenom </strong> <p>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "idOrder", [], "any", false, false, false, 53), "user", [], "any", false, false, false, 53), "prenom", [], "any", false, false, false, 53), "html", null, true);
            echo " </p>
                                 <strong>Adresse </strong> <p>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "idOrder", [], "any", false, false, false, 54), "user", [], "any", false, false, false, 54), "adresse", [], "any", false, false, false, 54), "html", null, true);
            echo " </p>
                                 <strong>Num Tel </strong> <p>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "idOrder", [], "any", false, false, false, 55), "user", [], "any", false, false, false, 55), "tel", [], "any", false, false, false, 55), "html", null, true);
            echo " </p>
                             </div>
                        ";
        }
        // line 58
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
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 78, $this->source); })()), "idProduit", [], "any", false, false, false, 78), "image", [], "any", false, false, false, 78))), "html", null, true);
        echo "\" alt=\"rose\" class=\"center\" style=\"height: 255px;display: block;
  margin-left: auto;
  margin-right: auto;
  width: 75%;\">

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/LivraisonDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 78,  180 => 58,  174 => 55,  170 => 54,  166 => 53,  162 => 52,  159 => 51,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  138 => 44,  136 => 43,  131 => 41,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  112 => 36,  110 => 35,  104 => 31,  100 => 29,  96 => 27,  94 => 26,  90 => 24,  88 => 23,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}


{% block body %}

    <!-- Begin Page Content -->
    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Details Livraison</h1>
        </div>



        <div class=\"row\">

            <div class=\"col-lg-6\">

                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample\">
                        {% if item.typeLivraison == \"livraisonSurpise\"%}
                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison Surprise</h6>

                        {% elseif item.typeLivraison == \"livraisondomicile\" %}
                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison à Domicile</h6>
                            {% else %}
                                <h6 class=\"m-0 font-weight-bold text-primary\">Recupérer à l'atelier</h6>
                        {% endif %}

                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample\">
                        {% if item.typeLivraison == \"livraisonSurpise\" %}
                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>{{ item.lastNameR}} </p>
                                <strong>Prenom </strong> <p>{{ item.nameR}} </p>
                                <strong>Adresse </strong> <p>{{ item.adressR}} </p>
                                <strong>Num Tel </strong> <p>{{ item.phoneNumverR}} </p>
                                <strong>Numéro Expéditeur</strong><p>{{ item.idOrder.user.tel}}</p>
                            </div>
                        {% elseif item.typeLivraison==\"livraisondomicile\" %}
                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>{{ item.idOrder.user.nom}} </p>
                                <strong>Prenom </strong> <p>{{ item.idOrder.user.prenom}} </p>
                                <strong>Adresse </strong> <p>{{ item.idOrder.user.adresse}} </p>
                                <strong>Num Tel </strong> <p>{{ item.idOrder.user.tel}} </p>
                            </div>
                         {% else%}
                             <div class=\"card-body\">
                                 <strong>Nom </strong> <p>{{ item.idOrder.user.nom}} </p>
                                 <strong>Prenom </strong> <p>{{ item.idOrder.user.prenom}} </p>
                                 <strong>Adresse </strong> <p>{{ item.idOrder.user.adresse}} </p>
                                 <strong>Num Tel </strong> <p>{{ item.idOrder.user.tel}} </p>
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

    </div>
    <!-- /.container-fluid -->




{% endblock %}", "admin/LivraisonDetails.html.twig", "C:\\Users\\ramij\\OneDrive\\Documents\\Smartleap2\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\admin\\LivraisonDetails.html.twig");
    }
}
