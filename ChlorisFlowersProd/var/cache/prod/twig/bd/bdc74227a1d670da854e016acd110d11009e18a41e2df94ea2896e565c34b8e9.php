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

/* admin/listProduct.html.twig */
class __TwigTemplate_58e237e009e9381b07652cc0d3e0a069c2a64e4dc6049a76b35adcf210a25d49 extends Template
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
        // line 2
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listProduct.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <!-- Begin Page Content -->
    <!-- Begin Page Content -->

    <!-- Begin Page Content -->
    <div class=\"container-fluid\">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h2 class=\"m-0 font-weight-bold\">Liste Produit</h2>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                                <tr>
                                    <th>Nom produit</th>
                                    <th>Taille</th>
                                    <th>Couleur Box</th>
                                    <th>Nombre roses</th>
                                    <th>Couleur roses</th>
                                    <th>Stock </th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "                                <tr>
                                    <td><a  href=\"\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" data-whatever=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prodcutName", [], "any", false, false, false, 39), "html", null, true);
            echo "\" style=\"color: #42444e\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getProdcutName", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getBoxSize", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getBoxColor", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getRoseNumber", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getRoseColor", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getStock", [], "any", false, false, false, 44), "html", null, true);
            echo " </td>
                                    <td><img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 45))), "html", null, true);
            echo "\" alt=\"rose\" width=\"80\"></td>
                                    <td class=\"js-status_produit\">
                                        ";
            // line 47
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 47), "Valide"))) {
                // line 48
                echo "                                            <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status_produit", ["idProduit" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\"  class=\"js-status_produit btn btn-success btn-icon-split\">  <span style=\"color: white\" class=\"js-status_produit text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 48), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            } else {
                // line 51
                echo "                                            <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_status_produit", ["idProduit" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"js-status_produit btn btn-danger btn-icon-split\">  <span style=\"color: white\" class=\"js-status_produit text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 51), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            }
            // line 54
            echo "

                                    </td>
                                    <td class=\"pr-2\">

                                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ProductAdminedit", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit pr-2\" style=\"font-size:20px;color:#efa2a9\"></i></a>
                                        <a> <i class=\"fa fa-trash\" style=\"font-size:20px;color:#efa2a9\"></i></a>

                                    </td>

                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>

    <!-- Modal -->
";
        // line 95
        echo "    <!-- /.container-fluid -->




";
    }

    public function getTemplateName()
    {
        return "admin/listProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 95,  161 => 66,  148 => 59,  141 => 54,  132 => 51,  123 => 48,  121 => 47,  116 => 45,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  90 => 39,  87 => 38,  83 => 37,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/listProduct.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/admin/listProduct.html.twig");
    }
}
