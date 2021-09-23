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

/* product/paginator.html.twig */
class __TwigTemplate_8ba51801b9bcc0034efba391c4ad2375524e19b11eae8b6dbabeed4ab54f8507 extends Template
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
        // line 16
        echo "
";
        // line 17
        if ((1 === twig_compare(($context["pageCount"] ?? null), 1))) {
            // line 18
            echo "    <ul class=\"pagination justify-content-center\">

        ";
            // line 20
            if (array_key_exists("previous", $context)) {
                // line 21
                echo "            <li class=\"page-item\">
                <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page précédente", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
            </li>
        ";
            } else {
                // line 25
                echo "            <li class=\"disabled page-item\">
                <a class=\"page-link\">&laquo;&nbsp;";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page précédente", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 29
            echo "
        ";
            // line 30
            if ((1 === twig_compare(($context["startPage"] ?? null), 1))) {
                // line 31
                echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 34
                if ((0 === twig_compare(($context["startPage"] ?? null), 3))) {
                    // line 35
                    echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((0 !== twig_compare(                // line 38
($context["startPage"] ?? null), 2))) {
                    // line 39
                    echo "                <li class=\"disabled page-item\">
                    <a class=\"page-link\">&hellip;</a>
                </li>
            ";
                }
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "            ";
                if ((0 !== twig_compare($context["page"], ($context["current"] ?? null)))) {
                    // line 47
                    echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 51
                    echo "                <li class=\"active\">
                    <a class=\"page-link\">";
                    // line 52
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 55
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
        ";
            // line 58
            if ((1 === twig_compare(($context["pageCount"] ?? null), ($context["endPage"] ?? null)))) {
                // line 59
                echo "            ";
                if ((1 === twig_compare(($context["pageCount"] ?? null), (($context["endPage"] ?? null) + 1)))) {
                    // line 60
                    echo "                ";
                    if ((1 === twig_compare(($context["pageCount"] ?? null), (($context["endPage"] ?? null) + 2)))) {
                        // line 61
                        echo "                    <li class=\"disabled page-item\">
                        <a class=\"page-link\">&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 65
                        echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 69
                    echo "            ";
                }
                // line 70
                echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 74
            echo "
        ";
            // line 75
            if (array_key_exists("next", $context)) {
                // line 76
                echo "            <li class=\"page-item\">
                <a class=\"page-link\" rel=\"next\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page suivante", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
            </li>
        ";
            } else {
                // line 80
                echo "            <li class=\"disabled page-item\">
                <a class=\"page-link\">";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page suivante", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
            </li>
        ";
            }
            // line 84
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "product/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 84,  200 => 81,  197 => 80,  189 => 77,  186 => 76,  184 => 75,  181 => 74,  173 => 71,  170 => 70,  167 => 69,  159 => 66,  156 => 65,  150 => 61,  147 => 60,  144 => 59,  142 => 58,  139 => 57,  132 => 55,  126 => 52,  123 => 51,  115 => 48,  112 => 47,  109 => 46,  105 => 45,  102 => 44,  99 => 43,  93 => 39,  91 => 38,  86 => 36,  83 => 35,  81 => 34,  76 => 32,  73 => 31,  71 => 30,  68 => 29,  62 => 26,  59 => 25,  51 => 22,  48 => 21,  46 => 20,  42 => 18,  40 => 17,  37 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/paginator.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/product/paginator.html.twig");
    }
}
