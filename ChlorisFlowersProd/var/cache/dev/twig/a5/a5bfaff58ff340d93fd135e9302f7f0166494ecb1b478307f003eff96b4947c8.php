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
class __TwigTemplate_bb9c04932826e3d0913d3cea9224ea6d0ecbde07dcbdc7a0354d301e15c8984b extends Template
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
            <div class=\"card-header py-3 \" style=\"display: flex;flex-wrap: wrap;\">
                <div class=\"col-sm-12 col-md-6\">
                    <h2 class=\"m-0 font-weight-bold\">Liste Commande</h2>
                </div>
                <div class=\"col-sm-12 col-md-6 pull-right\" style=\"text-align: right;\">
                    <a class=\"btn btn-success\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("downloadcsv");
        echo "\" >Exporter</a>
                </div>
                <h2 class=\"m-0 font-weight-bold\">Liste Commande</h2>
            </div>
            <br>
            <div class=\"row ml-2 mr-2\">

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-4 col-md-4 mb-4\">
                    <div class=\"card border-left-danger shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">Non traité</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["nontraite"]) || array_key_exists("nontraite", $context) ? $context["nontraite"] : (function () { throw new RuntimeError('Variable "nontraite" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-times-circle fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-4 col-md-6 mb-4\">
                    <div class=\"card border-left-warning shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">En cours</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["encours"]) || array_key_exists("encours", $context) ? $context["encours"] : (function () { throw new RuntimeError('Variable "encours" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-exclamation-circle fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-4 col-md-6 mb-4\">
                    <div class=\"card border-left-success shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Livré</div>
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col-auto\">
                                            <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "</div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-check-circle fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 98
            echo "                            <tr>
                                <td><a  style=\"color: #42444e\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "</a></td>
                                <td>  ";
            // line 100
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 100))) {
                // line 101
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 101), "nom", [], "any", false, false, false, 101), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 101), "prenom", [], "any", false, false, false, 101), "html", null, true);
                echo "
                                    ";
            } else {
                // line 103
                echo "                                        N/A
                                    ";
            }
            // line 104
            echo "</td>
                                <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "orderDate", [], "any", false, false, false, 105), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "totalAchat", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>

                                <td class=\"js-status\">
                                    ";
            // line 109
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 109), "Non traité"))) {
                // line 110
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\"  class=\"js-status btn btn-danger btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 110), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 112
$context["item"], "status", [], "any", false, false, false, 112), "En cours"))) {
                // line 113
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                echo "\" class=\"js-status btn btn-warning btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 113), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            } else {
                // line 116
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                echo "\" class=\"js-status btn btn-success btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 116), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            }
            // line 119
            echo "

                                </td>

                                <td class=\"pr-2\">

                                    <a  href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailsCommandeAdmin", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>

                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
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
        return array (  262 => 131,  250 => 125,  242 => 119,  233 => 116,  224 => 113,  222 => 112,  214 => 110,  212 => 109,  206 => 106,  202 => 105,  199 => 104,  195 => 103,  187 => 101,  185 => 100,  181 => 99,  178 => 98,  174 => 97,  142 => 68,  120 => 49,  100 => 32,  83 => 18,  68 => 5,  58 => 4,  35 => 1,);
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
            <div class=\"card-header py-3 \" style=\"display: flex;flex-wrap: wrap;\">
                <div class=\"col-sm-12 col-md-6\">
                    <h2 class=\"m-0 font-weight-bold\">Liste Commande</h2>
                </div>
                <div class=\"col-sm-12 col-md-6 pull-right\" style=\"text-align: right;\">
                    <a class=\"btn btn-success\" href=\"{{ path('downloadcsv') }}\" >Exporter</a>
                </div>
                <h2 class=\"m-0 font-weight-bold\">Liste Commande</h2>
            </div>
            <br>
            <div class=\"row ml-2 mr-2\">

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-4 col-md-4 mb-4\">
                    <div class=\"card border-left-danger shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">Non traité</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ nontraite }}</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-times-circle fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-4 col-md-6 mb-4\">
                    <div class=\"card border-left-warning shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">En cours</div>
                                    <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ encours }}</div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-exclamation-circle fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class=\"col-xl-4 col-md-6 mb-4\">
                    <div class=\"card border-left-success shadow h-100 py-2\">
                        <div class=\"card-body\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col mr-2\">
                                    <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Livré</div>
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col-auto\">
                                            <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{ livre }}</div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"col-auto\">
                                    <i class=\"fas fa-check-circle fa-2x text-gray-300\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                    {% if item.status ==\"Non traité\" %}
                                        <a  href=\"{{  path('change_status', {'idCmd': item.id}) }}\"  class=\"js-status btn btn-danger btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">{{ item.status }}</span>
                                        </a>
                                    {% elseif  item.status ==\"En cours\" %}
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




{% endblock %}", "admin/listCommande.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\admin\\listCommande.html.twig");
    }
}
