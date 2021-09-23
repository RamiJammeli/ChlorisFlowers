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
class __TwigTemplate_af4c1b39ad2a8d2fa8bd69da32980b22d56da4fbe33161ae8739e71eba8b8632 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/CommandeDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <br>
    <br>
    <div class=\"bloom-product-details-area margin-bottom-110 mobile-mb-30 tab-mb-50 s-laptop-mb-90\">
    <div class=\"container\">
        <div class=\"section-title-area \">
            <div class=\"section-title section-title-2\">
                <div class=\"icon\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                </div>
                <div class=\"title-text\">
                    <h2 class=\"title\">Détails de votre commande</h2>
                </div>
            </div>
        </div>
        <!-- Page Heading -->



";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "        <div class=\"row\">

            <div class=\"col-lg-6\">

                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample\">
                        ";
            // line 29
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "typeLivraison", [], "any", false, false, false, 29), "livraisondomicile"))) {
                // line 30
                echo "                            <h6 class=\"m-0 font-weight-bold product-title\">Livraison à Domicile</h6>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 31
$context["item"], "typeLivraison", [], "any", false, false, false, 31), "RecuprerChezNous"))) {
                // line 32
                echo "                            <h6 class=\"m-0 font-weight-bold product-title\">Récupérer à l'atelier</h6>
                            ";
            } else {
                // line 34
                echo "                                <h6 class=\"m-0 font-weight-bold product-title\">Livraison Surprise</h6>
                        ";
            }
            // line 36
            echo "
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample\">
                        ";
            // line 40
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "typeLivraison", [], "any", false, false, false, 40), "livraisondomicile"))) {
                // line 41
                echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 42), "user", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
                echo " </p>
                                <strong>Prenom </strong> <p>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 43), "user", [], "any", false, false, false, 43), "prenom", [], "any", false, false, false, 43), "html", null, true);
                echo " </p>
                                <strong>Adresse </strong> <p>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 44), "user", [], "any", false, false, false, 44), "adresse", [], "any", false, false, false, 44), "html", null, true);
                echo " </p>
                                <strong>Num Tel </strong> <p>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 45), "user", [], "any", false, false, false, 45), "tel", [], "any", false, false, false, 45), "html", null, true);
                echo " </p>
                            </div>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 47
$context["item"], "typeLivraison", [], "any", false, false, false, 47), "RecuprerChezNous"))) {
                // line 48
                echo "
                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 50), "user", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
                echo " </p>
                                <strong>Prenom </strong> <p>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idOrder", [], "any", false, false, false, 51), "user", [], "any", false, false, false, 51), "prenom", [], "any", false, false, false, 51), "html", null, true);
                echo " </p>
                                <strong>Adresse </strong> <p>14 Rue Voltaire, franceville el omrane </p>
                            </div>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 54
$context["item"], "typeLivraison", [], "any", false, false, false, 54), "livraisonSurpise"))) {
                // line 55
                echo "                            <div class=\"card-body\">
                                <strong>Nom </strong> <p>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lastNameR", [], "any", false, false, false, 56), "html", null, true);
                echo " </p>
                                <strong>Prenom </strong> <p>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nameR", [], "any", false, false, false, 57), "html", null, true);
                echo " </p>
                                <strong>Adresse </strong> <p>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "adressR", [], "any", false, false, false, 58), "html", null, true);
                echo " </p>
                                <strong>Num Tel </strong> <p>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "phoneNumverR", [], "any", false, false, false, 59), "html", null, true);
                echo " </p>
                            </div>

                        ";
            }
            // line 63
            echo "                    </div>
                </div>



            </div>

            <div class=\"col-lg-6\">



                <!-- Collapsable Card Example -->
                <div class=\"card shadow mb-4\">
                    <!-- Card Header - Accordion -->
                    <a href=\"#collapseCardExample3\" class=\"d-block card-header py-3\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseCardExample3\">
                        <h6 class=\"m-0 font-weight-bold product-title\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 78), "getprodcutName", [], "any", false, false, false, 78), "html", null, true);
            echo "</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class=\"collapse show\" id=\"collapseCardExample3\">
                        <div class=\"card-body -align-center\">
                            <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 83), "image", [], "any", false, false, false, 83))), "html", null, true);
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
        // line 96
        echo "    </div>
    </div>
";
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
        return array (  213 => 96,  194 => 83,  186 => 78,  169 => 63,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  147 => 55,  145 => 54,  139 => 51,  135 => 50,  131 => 48,  129 => 47,  124 => 45,  120 => 44,  116 => 43,  112 => 42,  109 => 41,  107 => 40,  101 => 36,  97 => 34,  93 => 32,  91 => 31,  88 => 30,  86 => 29,  77 => 22,  73 => 21,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/CommandeDetails.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/order/CommandeDetails.html.twig");
    }
}
