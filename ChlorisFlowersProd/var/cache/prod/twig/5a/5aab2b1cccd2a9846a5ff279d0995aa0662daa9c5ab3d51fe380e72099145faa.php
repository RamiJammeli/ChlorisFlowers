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
class __TwigTemplate_55976d5ddb0dfe47dd7cc4639df3a5c795b84790f1e191c61f7cb366d1bbdaaf extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/LivraisonDetails.html.twig", 1);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "typeLivraison", [], "any", false, false, false, 23), "livraisonSurpise"))) {
            // line 24
            echo "                            <h6 class=\"m-0 font-weight-bold text-primary\">Livraison Surprise</h6>

                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 26
($context["item"] ?? null), "typeLivraison", [], "any", false, false, false, 26), "livraisondomicile"))) {
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "typeLivraison", [], "any", false, false, false, 35), "livraisonSurpise"))) {
            // line 36
            echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "lastNameR", [], "any", false, false, false, 37), "html", null, true);
            echo " </p>
                                <strong>Prenom </strong> <p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "nameR", [], "any", false, false, false, 38), "html", null, true);
            echo " </p>
                                <strong>Adresse </strong> <p>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "adressR", [], "any", false, false, false, 39), "html", null, true);
            echo " </p>
                                <strong>Num Tel </strong> <p>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "phoneNumverR", [], "any", false, false, false, 40), "html", null, true);
            echo " </p>
                                <strong>Numéro Expéditeur</strong><p>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idOrder", [], "any", false, false, false, 41), "user", [], "any", false, false, false, 41), "tel", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                            </div>
                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 43
($context["item"] ?? null), "typeLivraison", [], "any", false, false, false, 43), "livraisondomicile"))) {
            // line 44
            echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idOrder", [], "any", false, false, false, 45), "user", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo " </p>
                                <strong>Prenom </strong> <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idOrder", [], "any", false, false, false, 46), "user", [], "any", false, false, false, 46), "prenom", [], "any", false, false, false, 46), "html", null, true);
            echo " </p>
                                <strong>Adresse </strong> <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idOrder", [], "any", false, false, false, 47), "user", [], "any", false, false, false, 47), "adresse", [], "any", false, false, false, 47), "html", null, true);
            echo " </p>
                                <strong>Num Tel </strong> <p>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idOrder", [], "any", false, false, false, 48), "user", [], "any", false, false, false, 48), "tel", [], "any", false, false, false, 48), "html", null, true);
            echo " </p>
                            </div>
                         ";
        } else {
            // line 51
            echo "                             <div class=\"card-body\">
                                 <strong>Nom </strong> <p>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idOrder", [], "any", false, false, false, 52), "user", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
            echo " </p>
                                 <strong>Prenom </strong> <p>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idOrder", [], "any", false, false, false, 53), "user", [], "any", false, false, false, 53), "prenom", [], "any", false, false, false, 53), "html", null, true);
            echo " </p>
                                 <strong>Adresse </strong> <p>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idOrder", [], "any", false, false, false, 54), "user", [], "any", false, false, false, 54), "adresse", [], "any", false, false, false, 54), "html", null, true);
            echo " </p>
                                 <strong>Num Tel </strong> <p>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idOrder", [], "any", false, false, false, 55), "user", [], "any", false, false, false, 55), "tel", [], "any", false, false, false, 55), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idProduit", [], "any", false, false, false, 78), "image", [], "any", false, false, false, 78))), "html", null, true);
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
        return array (  184 => 78,  162 => 58,  156 => 55,  152 => 54,  148 => 53,  144 => 52,  141 => 51,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  120 => 44,  118 => 43,  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  94 => 36,  92 => 35,  86 => 31,  82 => 29,  78 => 27,  76 => 26,  72 => 24,  70 => 23,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/LivraisonDetails.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/admin/LivraisonDetails.html.twig");
    }
}
