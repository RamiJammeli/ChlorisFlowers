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

/* admin/listCommande.html.twig */
class __TwigTemplate_13e102f8a5f7c1aa85451b36c9f8012b34e65269ba714b327247c0d66a9cf4e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listCommande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listCommande.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listCommande.html.twig", 1);
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
                <h2 class=\"m-0 font-weight-bold\">Liste Commande</h2>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>id Commande</th>
                            <th>Client</th>
                            <th>Date Commande</th>
                            <th>Total en DT</th>

                            <th>Etat</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "                            <tr>
                                <td><a  style=\"color: #42444e\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></td>
                                <td>  ";
            // line 34
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 34))) {
                // line 35
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
                echo "
                                    ";
            } else {
                // line 37
                echo "                                        N/A
                                    ";
            }
            // line 38
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "orderDate", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "totalAchat", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>

                                <td class=\"js-status\">
                                    ";
            // line 43
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 43), "Non traité"))) {
                // line 44
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"  class=\"js-status btn btn-danger btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 44), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 46
$context["item"], "status", [], "any", false, false, false, 46), "En cours"))) {
                // line 47
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"js-status btn btn-warning btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 47), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            } else {
                // line 50
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"js-status btn btn-success btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 50), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            }
            // line 53
            echo "

                                </td>

                                <td class=\"pr-2\">

                                    <a  href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailsCommandeAdmin", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>

                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return "admin/listCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 65,  172 => 59,  164 => 53,  155 => 50,  146 => 47,  144 => 46,  136 => 44,  134 => 43,  128 => 40,  124 => 39,  121 => 38,  117 => 37,  109 => 35,  107 => 34,  103 => 33,  100 => 32,  96 => 31,  68 => 5,  58 => 4,  35 => 1,);
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
                <h2 class=\"m-0 font-weight-bold\">Liste Commande</h2>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>id Commande</th>
                            <th>Client</th>
                            <th>Date Commande</th>
                            <th>Total en DT</th>

                            <th>Etat</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for item in items %}
                            <tr>
                                <td><a  style=\"color: #42444e\">{{ item.id }}</a></td>
                                <td>  {% if item.user is not null %}
                                        {{item.user.nom}}{{ ' ' }}{{ item.user.prenom }}
                                    {% else %}
                                        N/A
                                    {% endif %}</td>
                                <td>{{ item.orderDate|date(\"d/m/Y\") }}</td>
                                <td>{{ item.totalAchat}}</td>

                                <td class=\"js-status\">
                                    {% if item.status==\"Non traité\" %}
                                        <a  href=\"{{  path('change_status', {'idCmd': item.id}) }}\"  class=\"js-status btn btn-danger btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">{{ item.status }}</span>
                                        </a>
                                    {% elseif  item.status==\"En cours\" %}
                                        <a  href=\"{{  path('change_status', {'idCmd': item.id}) }}\" class=\"js-status btn btn-warning btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">{{ item.status }}</span>
                                        </a>
                                    {% else %}
                                        <a  href=\"{{  path('change_status', {'idCmd': item.id}) }}\" class=\"js-status btn btn-success btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">{{ item.status }}</span>
                                        </a>
                                    {% endif %}


                                </td>

                                <td class=\"pr-2\">

                                    <a  href=\"{{ path('detailsCommandeAdmin',{'idCmd': item.id}) }}\"><i class=\"fa fa-eye pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>

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




{% endblock %}", "admin/listCommande.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/admin/listCommande.html.twig");
    }
}
