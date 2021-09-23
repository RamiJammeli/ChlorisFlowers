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

/* admin/CommandeDetails.html.twig */
class __TwigTemplate_62c1d49a24476b9542fc4f4926ecb6119617fd4fbe951bf78cb7c0c8f0e3f77c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/CommandeDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/CommandeDetails.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/CommandeDetails.html.twig", 1);
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

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h2 class=\"m-0 font-weight-bold\">Details Commande</h2>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Taille Box</th>
                            <th>Couleur Box</th>
                            <th>Couleur Rose</th>
                            <th>Collection</th>
                            <th>Carte</th>
                            <th>Date Livraison</th>
                            <th>Type Livraison</th>

                            <th>Etat</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                            <tr>
                                <td><a >";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 36), "boxSize", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 38), "boxColor", [], "any", false, false, false, 38), "html", null, true);
            echo "
                                </td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 40), "roseColor", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 41), "categorie", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "card", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>

                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "shipdate", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo "</td>
                                ";
            // line 45
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "typeLivraison", [], "any", false, false, false, 45), "livraisondomicile"))) {
                // line 46
                echo "                                    <td>Domicile</td>
                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 47
$context["item"], "typeLivraison", [], "any", false, false, false, 47), "livraisonSurprise"))) {
                // line 48
                echo "                                    <td>Surprise</td>
                                ";
            }
            // line 50
            echo "


                               <td class=\"js-status_detail\">
                                    ";
            // line 54
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 54), "En cours"))) {
                // line 55
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status_detail", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\"  class=\"js-status_detail btn btn-warning btn-icon-split\">  <span style=\"color: white\" class=\"js-status_detail text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 55), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            } else {
                // line 58
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status_detail", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" class=\"js-status_detail btn btn-success btn-icon-split\">  <span style=\"color: white\" class=\"js-status_detail text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 58), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            }
            // line 61
            echo "

                                </td>
                                <td class=\"pr-2\">

                                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailsLivraison", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>

                                </td>


                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        </tbody>
                    </table>
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
        return "admin/CommandeDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 73,  177 => 66,  170 => 61,  161 => 58,  152 => 55,  150 => 54,  144 => 50,  140 => 48,  138 => 47,  135 => 46,  133 => 45,  129 => 44,  124 => 42,  120 => 41,  116 => 40,  111 => 38,  106 => 36,  103 => 35,  99 => 34,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}


{% block body %}

    <!-- Begin Page Content -->
    <div class=\"container-fluid\">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h2 class=\"m-0 font-weight-bold\">Details Commande</h2>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Taille Box</th>
                            <th>Couleur Box</th>
                            <th>Couleur Rose</th>
                            <th>Collection</th>
                            <th>Carte</th>
                            <th>Date Livraison</th>
                            <th>Type Livraison</th>

                            <th>Etat</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for item in items %}
                            <tr>
                                <td><a >{{ item.idProduit.boxSize }}</a></td>
                                <td>
                                    {{ item.idProduit.boxColor }}
                                </td>
                                <td>{{ item.idProduit.roseColor}}</td>
                                <td>{{ item.idProduit.categorie}}</td>
                                <td>{{ item.card}}</td>

                                <td>{{ item.shipdate | date(\"d/m/Y\") }}</td>
                                {% if item.typeLivraison==\"livraisondomicile\" %}
                                    <td>Domicile</td>
                                {% elseif item.typeLivraison==\"livraisonSurprise\" %}
                                    <td>Surprise</td>
                                {% endif %}



                               <td class=\"js-status_detail\">
                                    {% if item.status==\"En cours\" %}
                                        <a  href=\"{{  path('change_status_detail', {'idCmd': item.id}) }}\"  class=\"js-status_detail btn btn-warning btn-icon-split\">  <span style=\"color: white\" class=\"js-status_detail text\">{{ item.status }}</span>
                                        </a>
                                    {% else %}
                                        <a  href=\"{{  path('change_status_detail', {'idCmd': item.id}) }}\" class=\"js-status_detail btn btn-success btn-icon-split\">  <span style=\"color: white\" class=\"js-status_detail text\">{{ item.status }}</span>
                                        </a>
                                    {% endif %}


                                </td>
                                <td class=\"pr-2\">

                                    <a href=\"{{ path('detailsLivraison',{'idCmd': item.id }) }}\"><i class=\"fa fa-eye pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>

                                </td>


                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->




{% endblock %}", "admin/CommandeDetails.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/admin/CommandeDetails.html.twig");
    }
}
