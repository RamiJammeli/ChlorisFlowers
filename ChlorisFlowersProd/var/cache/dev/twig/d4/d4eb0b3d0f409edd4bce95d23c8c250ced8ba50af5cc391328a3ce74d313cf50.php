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
class __TwigTemplate_bf43855324d3bbcabbae2deb5de5c587d3baad356f843bd9d8a19976af593254 extends Template
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "typeLivraison", [], "any", false, false, false, 23), "livraisondomicile"))) {
            // line 24
            echo "                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison à Domicile</h6>
                        ";
        } else {
            // line 26
            echo "                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison Surprise</h6>
                        ";
        }
        // line 28
        echo "
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample\">
                        ";
        // line 32
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 32, $this->source); })()), "typeLivraison", [], "any", false, false, false, 32), "livraisonSurprise"))) {
            // line 33
            echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "lastNameR", [], "any", false, false, false, 34), "html", null, true);
            echo " </p>
                                <strong>Prenom </strong> <p>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "nameR", [], "any", false, false, false, 35), "html", null, true);
            echo " </p>
                                <strong>Adresse </strong> <p>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "adressR", [], "any", false, false, false, 36), "html", null, true);
            echo " </p>
                                <strong>Num Tel </strong> <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "phoneNumverR", [], "any", false, false, false, 37), "html", null, true);
            echo " </p>
                            </div>
                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "typeLivraison", [], "any", false, false, false, 39), "livraisondomicile"))) {
            // line 40
            echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "idOrder", [], "any", false, false, false, 41), "user", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
            echo " </p>
                                <strong>Prenom </strong> <p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "idOrder", [], "any", false, false, false, 42), "user", [], "any", false, false, false, 42), "prenom", [], "any", false, false, false, 42), "html", null, true);
            echo " </p>
                                <strong>Adresse </strong> <p>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "idOrder", [], "any", false, false, false, 43), "user", [], "any", false, false, false, 43), "adresse", [], "any", false, false, false, 43), "html", null, true);
            echo " </p>
                                <strong>Num Tel </strong> <p>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "idOrder", [], "any", false, false, false, 44), "user", [], "any", false, false, false, 44), "tel", [], "any", false, false, false, 44), "html", null, true);
            echo " </p>
                            </div>
                        ";
        }
        // line 47
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
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 67, $this->source); })()), "idProduit", [], "any", false, false, false, 67), "image", [], "any", false, false, false, 67))), "html", null, true);
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
        return array (  171 => 67,  149 => 47,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  128 => 40,  126 => 39,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  106 => 33,  104 => 32,  98 => 28,  94 => 26,  90 => 24,  88 => 23,  68 => 5,  58 => 4,  35 => 1,);
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
                        {% if item.typeLivraison==\"livraisondomicile\" %}
                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison à Domicile</h6>
                        {% else %}
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




{% endblock %}", "admin/LivraisonDetails.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/admin/LivraisonDetails.html.twig");
    }
}
