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

/* order/boutonPanier.html.twig */
class __TwigTemplate_75b9eab21c62ab3351c4e88c6705e31bd1413ecec0d5b39863aa1e8ad04d80ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<span class=\"mini-cart-icon header-navbar-active\">
<a  ";
        // line 2
        if ((0 !== twig_compare(($context["articles"] ?? null), 0))) {
            echo "  ";
        } else {
            echo " ";
        }
        echo "  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_Panier");
        echo "\"><i class=\"ti-shopping-cart\"></i>
    <sup>
        ";
        // line 4
        if ((0 === twig_compare(($context["articles"] ?? null), 0))) {
            // line 5
            echo "            0
        ";
        } else {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, ($context["articles"] ?? null), "html", null, true);
            echo "
        ";
        }
        // line 9
        echo "    </sup>
</a>
</span>
";
    }

    public function getTemplateName()
    {
        return "order/boutonPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  57 => 7,  53 => 5,  51 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/boutonPanier.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/order/boutonPanier.html.twig");
    }
}
