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

/* accueil/index2.html.twig */
class __TwigTemplate_5a76234f10dc8bab5c506f652375e4277575ff515499ce2dcfdf963b760df28c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"slider-area slider-style-1  slider-style-5 margin-bottom-115 mobile-mb-50 tab-mb-80\">
        <div class=\"slider-inner\">
            <div class=\"slider-one-active- slider-two-active\">
                <!-- slide-item -->
                <div class=\"slide-item\">
                    <div class=\"slide-content\">
                        <h1 class=\"slide-title-1 slide-title-1-bg slide-title-1-bg-1 animated\" data-wow-duration=\".5s\" data-wow-delay=\".5s\">SURPRISE</h1>
                        <h2 class=\"slide-title-2 animated\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">Your better half</h2>
                        <div class=\"animated\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.5s\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <span>tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque.</span> </p>
                        </div>
                        <div class=\"btn-wrapper animated\" data-wow-duration=\"2s\" data-wow-delay=\"2s\">
                            <a class=\"boxed-btn btn-rounded\" href=\"shop.html\">Explore now</a>
                        </div>
                        <div class=\"happy-customers animated\" data-wow-duration=\"2.5s\" data-wow-delay=\"2.5s\">


                            <p><span>2039 +</span> happy customers</p>
                        </div>
                    </div>
                    <div class=\"slide-image\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/slide1.png"), "html", null, true);
        echo "\" alt=\"\" >
                    </div>
                </div>
                <!-- slide-item -->
                <div class=\"slide-item\">
                    <div class=\"slide-content\">
                        <h1 class=\"slide-title-1 slide-title-1-bg slide-title-1-bg-4 animated\" data-wow-duration=\".5s\" data-wow-delay=\".5s\">PERFECT</h1>
                        <h2 class=\"slide-title-2 animated\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">Bouquet for her</h2>
                        <div class=\"animated\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.5s\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <span>tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque.</span> </p>
                        </div>
                        <div class=\"btn-wrapper animated\" data-wow-duration=\"2s\" data-wow-delay=\"2s\">
                            <a class=\"boxed-btn btn-rounded\" href=\"shop.html\">Explore now</a>
                        </div>
                        <div class=\"happy-customers animated\" data-wow-duration=\"2.5s\" data-wow-delay=\"2.5s\">
                            <ul>
                                <li><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/customer-1.png"), "html", null, true);
        echo "\" alt=\"Man\"></li>
                                <li><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/customer-2.png"), "html", null, true);
        echo "\" alt=\"Man\"></li>
                                <li><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/customer-3.png"), "html", null, true);
        echo "\" alt=\"Man\"></li>
                            </ul>

                            <p><span>2039 +</span> happy customers</p>
                        </div>
                    </div>
                    <div class=\"slide-image\">
                        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/ben_hussein.png"), "html", null, true);
        echo "\" alt=\"\" >
                    </div>
                </div>
                <!-- slide-item -->
                <div class=\"slide-item\">
                    <div class=\"slide-content\">
                        <h1 class=\"slide-title-1 slide-title-1-bg slide-title-1-bg-1 animated\" data-wow-duration=\".5s\" data-wow-delay=\".5s\">FRESHEST</h1>
                        <h2 class=\"slide-title-2 animated\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">Flowers for you</h2>
                        <div class=\"animated\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.5s\" >
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <span>tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque.</span> </p>
                        </div>
                        <div class=\"btn-wrapper animated\" data-wow-duration=\"2s\" data-wow-delay=\"2s\">
                            <a class=\"boxed-btn btn-rounded\" href=\"shop.html\">Explore now</a>
                        </div>
                        <div class=\"happy-customers animated\" data-wow-duration=\"2.5s\" data-wow-delay=\"2.5s\">
                            <ul>
                                <li><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/customer-1.png"), "html", null, true);
        echo "\" alt=\"Man\"></li>
                                <li><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/customer-2.png"), "html", null, true);
        echo "\" alt=\"Man\"></li>
                                <li><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/customer-3.png"), "html", null, true);
        echo "\" alt=\"Man\"></li>
                            </ul>

                            <p><span>2039 +</span> happy customers</p>
                        </div>
                    </div>
                    <div class=\"slide-image\">
                        <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/slide2.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <!-- slide-item -->
                <div class=\"slide-item\">
                    <div class=\"slide-content\">
                        <h1 class=\"slide-title-1 slide-title-1-bg slide-title-1-bg-1 animated\" data-wow-duration=\".5s\" data-wow-delay=\".5s\">WONDER</h1>
                        <h2 class=\"slide-title-2 animated\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">Your better half</h2>
                        <div class=\"animated\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.5s\" >
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <span>tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque.</span> </p>
                        </div>
                        <div class=\"btn-wrapper animated\" data-wow-duration=\"2s\" data-wow-delay=\"2s\">
                            <a class=\"boxed-btn btn-rounded\" href=\"shop.html\">Explore now</a>
                        </div>
                        <div class=\"happy-customers animated\" data-wow-duration=\"2.5s\" data-wow-delay=\"2.5s\">
                            <ul>
                                <li><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/customer-1.png"), "html", null, true);
        echo "\" alt=\"Man\"></li>
                                <li><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/customer-2.png"), "html", null, true);
        echo "\" alt=\"Man\"></li>
                                <li><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/customer-3.png"), "html", null, true);
        echo "\" alt=\"Man\"></li>
                            </ul>

                            <p><span>2039 +</span> happy customers</p>
                        </div>
                    </div>
                    <div class=\"slide-image\">
                        <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/client/img/slider/slide3.png"), "html", null, true);
        echo "\" alt=\"\">>
                    </div>
                </div>

            </div>
            <div class=\"slider-two-pagination\">
                <span class=\"count\"></span>
                <span class=\"total\"></span>
            </div>
            <!-- <div class=\"slider-three-pagination-2\">
                <span class=\"count\"></span>
                <span class=\"total\"></span>
            </div> -->

            <!-- slider-sticky-icon -->
            <div class=\"slider-sticky-icon\">
                <ul>

                </ul>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "accueil/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 99,  174 => 92,  170 => 91,  166 => 90,  147 => 74,  137 => 67,  133 => 66,  129 => 65,  110 => 49,  100 => 42,  96 => 41,  92 => 40,  73 => 24,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "accueil/index2.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/accueil/index2.html.twig");
    }
}
