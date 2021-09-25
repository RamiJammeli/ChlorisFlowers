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
class __TwigTemplate_c02b83bddb65320802a1f7c0603639034dcbd8582b5384bdfc135c05d5ce3d4d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  202 => 99,  192 => 92,  188 => 91,  184 => 90,  165 => 74,  155 => 67,  151 => 66,  147 => 65,  128 => 49,  118 => 42,  114 => 41,  110 => 40,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"slider-area slider-style-1  slider-style-5 margin-bottom-115 mobile-mb-50 tab-mb-80\">
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
                        <img src=\"{{ asset('build/client/img/slider/slide1.png') }}\" alt=\"\" >
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
                                <li><img src=\"{{ asset('build/client/img/slider/customer-1.png') }}\" alt=\"Man\"></li>
                                <li><img src=\"{{ asset('build/client/img/slider/customer-2.png') }}\" alt=\"Man\"></li>
                                <li><img src=\"{{ asset('build/client/img/slider/customer-3.png') }}\" alt=\"Man\"></li>
                            </ul>

                            <p><span>2039 +</span> happy customers</p>
                        </div>
                    </div>
                    <div class=\"slide-image\">
                        <img src=\"{{ asset('build/client/img/slider/ben_hussein.png') }}\" alt=\"\" >
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
                                <li><img src=\"{{ asset('build/client/img/slider/customer-1.png') }}\" alt=\"Man\"></li>
                                <li><img src=\"{{ asset('build/client/img/slider/customer-2.png') }}\" alt=\"Man\"></li>
                                <li><img src=\"{{ asset('build/client/img/slider/customer-3.png') }}\" alt=\"Man\"></li>
                            </ul>

                            <p><span>2039 +</span> happy customers</p>
                        </div>
                    </div>
                    <div class=\"slide-image\">
                        <img src=\"{{ asset('build/client/img/slider/slide2.png') }}\" alt=\"\">
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
                                <li><img src=\"{{ asset('build/client/img/slider/customer-1.png') }}\" alt=\"Man\"></li>
                                <li><img src=\"{{ asset('build/client/img/slider/customer-2.png') }}\" alt=\"Man\"></li>
                                <li><img src=\"{{ asset('build/client/img/slider/customer-3.png') }}\" alt=\"Man\"></li>
                            </ul>

                            <p><span>2039 +</span> happy customers</p>
                        </div>
                    </div>
                    <div class=\"slide-image\">
                        <img src=\"{{ asset('build/client/img/slider/slide3.png') }}\" alt=\"\">>
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
{% endblock %}", "accueil/index2.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\accueil\\index2.html.twig");
    }
}
