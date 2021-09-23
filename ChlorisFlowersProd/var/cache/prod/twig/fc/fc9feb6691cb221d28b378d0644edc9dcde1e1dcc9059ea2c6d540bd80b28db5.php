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

/* accueil/dimension.html.twig */
class __TwigTemplate_18b31ece62c315224d64ba9496034ceb0abb62903fbdcb28968c9f6499c36fc0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "accueil/dimension.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"blog-area-2  margin-bottom-120 mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">

                    <!-- blog-options -->

                        <div class=\"blog-inner-2 align-items-center \"style=\"padding-left: 10px\">
                            <!-- blog-item-2 -->
                            <div class=\"blog-item-2\">

                                    <a><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/tableaudedimension.jpg"), "html", null, true);
        echo "\" alt=\"Bloom Image\" style=\"height:50%\" ></a>



                            <!-- blog-item-2 -->

                </div>
                        <!-- bloom-pagination start -->

                        <!-- bloom-pagination end -->
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "accueil/dimension.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "accueil/dimension.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/accueil/dimension.html.twig");
    }
}
