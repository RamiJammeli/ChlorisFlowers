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
class __TwigTemplate_288ea6a87532e61799289bd3488bb4ce6bd5a05f19c055c8ac4024e876c7baf5 extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listCommande.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        // line 26
        echo twig_escape_filter($this->env, ($context["nontraite"] ?? null), "html", null, true);
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
        // line 43
        echo twig_escape_filter($this->env, ($context["encours"] ?? null), "html", null, true);
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
        // line 62
        echo twig_escape_filter($this->env, ($context["livre"] ?? null), "html", null, true);
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
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 92
            echo "                            <tr>
                                <td><a  style=\"color: #42444e\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 93), "html", null, true);
            echo "</a></td>
                                <td>  ";
            // line 94
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 94))) {
                // line 95
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 95), "nom", [], "any", false, false, false, 95), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 95), "prenom", [], "any", false, false, false, 95), "html", null, true);
                echo "
                                    ";
            } else {
                // line 97
                echo "                                        N/A
                                    ";
            }
            // line 98
            echo "</td>
                                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "orderDate", [], "any", false, false, false, 99), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "totalAchat", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>

                                <td class=\"js-status\">
                                    ";
            // line 103
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 103), "Non traité"))) {
                // line 104
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\"  class=\"js-status btn btn-danger btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 104), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 106
$context["item"], "status", [], "any", false, false, false, 106), "En cours"))) {
                // line 107
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\" class=\"js-status btn btn-warning btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 107), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            } else {
                // line 110
                echo "                                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\" class=\"js-status btn btn-success btn-icon-split\">  <span style=\"color: white\" class=\"js-status text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 110), "html", null, true);
                echo "</span>
                                        </a>
                                    ";
            }
            // line 113
            echo "

                                </td>

                                <td class=\"pr-2\">

                                    <a  href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailsCommandeAdmin", ["idCmd" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>

                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- /.container-fluid -->




";
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
        return array (  235 => 125,  223 => 119,  215 => 113,  206 => 110,  197 => 107,  195 => 106,  187 => 104,  185 => 103,  179 => 100,  175 => 99,  172 => 98,  168 => 97,  160 => 95,  158 => 94,  154 => 93,  151 => 92,  147 => 91,  115 => 62,  93 => 43,  73 => 26,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/listCommande.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/admin/listCommande.html.twig");
    }
}
