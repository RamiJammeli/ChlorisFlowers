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
class __TwigTemplate_cf60fc0f35704129db57f5db5074dc444624642c68cd9a303cdb6d7fc985e58e extends Template
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
                            <th>Stock </th>
                            <th>Carte</th>
                            <th>Commentaire</th>
                            <th> Macaron Personnalisé</th>
                            <th>Quantité </th>
                            <th>Date Livraison</th>
                            <th>Type Livraison</th>

                            <th>Etat</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "                            <tr>
                                <td><a >";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 40), "boxSize", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 42), "boxColor", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                </td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 44), "roseColor", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 45), "categorie", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 46), "stock", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "card", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "commentaire", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                <th>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "macaronPersonnalise", [], "any", false, false, false, 49), "html", null, true);
            echo "</th>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>

                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "shipdate", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
            echo "</td>
                                ";
            // line 53
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "typeLivraison", [], "any", false, false, false, 53), "livraisondomicile"))) {
                // line 54
                echo "                                    <td>Domicile</td>
                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 55
$context["item"], "typeLivraison", [], "any", false, false, false, 55), "livraisonSurpise"))) {
                // line 56
                echo "                                    <td>Surprise</td>
                                ";
            } else {
                // line 58
                echo "                                    <td>A l'atelier</td>
                                ";
            }
            // line 60
            echo "


                               <td class=\"js-status_detail\">
                                    ";
            // line 64
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 64), "En cours"))) {
                // line 65
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status_detail", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\"  class=\"js-status_detail btn btn-warning btn-icon-split\">  <span style=\"color: white\" class=\"js-status_detail text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 65), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            } else {
                // line 68
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status_detail", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\" class=\"js-status_detail btn btn-success btn-icon-split\">  <span style=\"color: white\" class=\"js-status_detail text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 68), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            }
            // line 71
            echo "

                                </td>
                                <td class=\"pr-2\">

                                    <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailsLivraison", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>

                                </td>


                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
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
        return array (  214 => 83,  201 => 76,  194 => 71,  185 => 68,  176 => 65,  174 => 64,  168 => 60,  164 => 58,  160 => 56,  158 => 55,  155 => 54,  153 => 53,  149 => 52,  144 => 50,  140 => 49,  136 => 48,  132 => 47,  128 => 46,  124 => 45,  120 => 44,  115 => 42,  110 => 40,  107 => 39,  103 => 38,  68 => 5,  58 => 4,  35 => 1,);
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
                            <th>Stock </th>
                            <th>Carte</th>
                            <th>Commentaire</th>
                            <th> Macaron Personnalisé</th>
                            <th>Quantité </th>
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
                                <td>{{ item.idProduit.stock}}</td>
                                <td>{{ item.card}}</td>
                                <td>{{ item.commentaire}}</td>
                                <th>{{item.macaronPersonnalise}}</th>
                                <td>{{item.quantite}}</td>

                                <td>{{ item.shipdate | date(\"d/m/Y\") }}</td>
                                {% if item.typeLivraison==\"livraisondomicile\" %}
                                    <td>Domicile</td>
                                {% elseif item.typeLivraison == \"livraisonSurpise\" %}
                                    <td>Surprise</td>
                                {% else %}
                                    <td>A l'atelier</td>
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




{% endblock %}", "admin/CommandeDetails.html.twig", "C:\\Users\\ramij\\OneDrive\\Documents\\Smartleap2\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\admin\\CommandeDetails.html.twig");
    }
}
