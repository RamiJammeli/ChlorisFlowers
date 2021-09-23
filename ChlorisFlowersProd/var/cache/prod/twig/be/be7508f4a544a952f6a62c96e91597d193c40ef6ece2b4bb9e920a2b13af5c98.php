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

/* product/collection.html.twig */
class __TwigTemplate_1a875646d9756cdd5a54ba4bf3546bd4615035d410d57ac0d77e21e1323b5667 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/collection.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <br>
    <div class=\"bloom-product-area margin-bottom-120 mobile-mb-50 tab-mb-80\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <!-- shop-options -->
                    <div class=\"shop-options clearfix\">
                        <div class=\"short-by pull-left\">

                        </div>


                    </div>
                </div>
                <!-- product-item -->

                <!-- product-item -->

                <!-- product-item -->

            </div>
            <!-- product-item -->
            <div class=\"tab-pane fade active show\" id=\"bloom_shop_grid_view\">
                <div class=\"shop-grid-view-tab-content-inner\">
                    <div class=\"row custom-gutter\">

                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["i"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                            <div class=\"bloom-gallery-item white col-md-6 col-12 mb-10\">
                                <div class=\"product-item text-center\">
                                    <div class=\"frame\">
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 37)]), "html", null, true);
            echo " \">
                                            <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("client/img/product/" . twig_get_attribute($this->env, $this->source, $context["item"], "imageCategorie", [], "any", false, false, false, 38))), "html", null, true);
            echo "\" alt=\"Flower Image\"></a>
                                    </div>

                                    <div class=\"product-action\">
                                        <ul>
                                            ";
            // line 44
            echo "                                            <li class=\"details-link\"><a style=\"  font-size: 20px;
                                        text-transform: uppercase;\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                    </div>
                </div>
            </div>
            <!-- product-item -->


        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "product/collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 54,  103 => 45,  100 => 44,  92 => 38,  88 => 37,  83 => 34,  79 => 33,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/collection.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/product/collection.html.twig");
    }
}
