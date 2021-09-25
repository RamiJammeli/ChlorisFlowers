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

/* accueil/index.html.twig */
class __TwigTemplate_f655522a8b571e9fd350fe34283381b3ba49f3e8a8f42fbb599c9c61139eda42 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"slider-area slider-style-1 margin-bottom-115 mobile-mb-50 tab-mb-80 slider-style-7-color\">
        <div class=\"slider-inner\">
            <div class=\"slider-one-active\">
                <!-- slide-item -->
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/slider/slideone.png"), "html", null, true);
        echo "\" alt=\"\" >
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/slider/slidetwo.png"), "html", null, true);
        echo "\" alt=\"\" >
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/slider/slidethree.png"), "html", null, true);
        echo "\" alt=\"\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/slider/slide3.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <!-- slide-item -->
        </div>
        <!-- slider-sticky-icon -->
        <div class=\"slider-sticky-icon\">
            <ul>

            </ul>
        </div>
    </div>

    <!-- Slider area end -->
    <!-- Our exclusive service area start -->
    <div class=\"our-exclusive-services-area sidebar-sticky-icon-area margin-bottom-115 mobile-mb-50 tab-mb-80\">
        <!-- sidebar-sticky -->
        <div class=\"floating-icon\" id=\"service_info_item\">
            <div class=\"floating-icon__is floating-icon-info\">
                <i class=\"fa fa-phone\"></i>
            </div>
            <!--floating-icon-is-->
            <div class=\"floating-icon__is floating-icon-message\">
                <i class=\"fa fa-envelope\"></i>
            </div>
            <!--floating-icon-is-->
            <div class=\"floating-icon__is floating-icon-location\">
                <i class=\"fa fa-info-circle\"></i>
            </div>
            <!--floating-icon-is-->
        </div>


    </div>
    <!-- Our exclusive service area end -->

    <!-- Product area start -->
    
    <!-- Product area end -->

    <!-- Custom content area start -->
    <div class=\"gallery-area margin-bottom-120 mobile-mb-50 tab-mb-80\">
        <div class=\"section-title-area text-center mobile-text-left\">
            <div class=\"section-title section-title-2\">
                <div class=\"icon\">
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                </div>
                <div class=\"title-text\">
                    <h2 class=\"title\">Notre Collection</h2>
                </div>
            </div>
        </div>
        <div class=\"container\">
                <!-- gallery-item -->
    <div class=\"tab-pane fade active show\" id=\"bloom_shop_grid_view\">
    <div class=\"shop-grid-view-tab-content-inner\">
        <div class=\"row custom-gutter\">
                <div class=\"bloom-gallery-item red col-md-6 col-12 mb-10\">
                    <div class=\"product-item text-center\">

                            <div class=\"frame\">
                            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/product/CLASSIC.jpg"), "html", null, true);
        echo "\" data-rel=\"lightcase:myCollection\"></a>
                                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/product/CLASSIC.jpg"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                            </div>

                                    <div class=\"product-action\">
                                        <ul>
                                            <li class=\"details-link\">  <a style=\"text-transform: uppercase\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => "the classic collection"]);
        echo "  \">the classic collection</a></li>
                                    </ul>
                                    </div>

                        </div>
                    </div>

                <div class=\"bloom-gallery-item red col-md-6 col-12 mb-10\">
                    <div class=\"product-item text-center\">
                        <div class=\"frame\">
                            <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/product/BB.jpg"), "html", null, true);
        echo "\" data-rel=\"lightcase:myCollection\">
                                <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/product/BB.jpg"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                            </a>
                        </div>
                    <div class=\"product-action\">
                        <ul>
                            <li class=\"details-link\">  <a style=\"text-transform: uppercase\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => "the bird collection"]);
        echo " \">the bird collection</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            <div class=\"bloom-gallery-item red col-md-6 col-12 mb-10\">
                <div class=\"product-item text-center\">

                    <div class=\"frame\">
                        <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/product/CollectionMarbre.jpeg"), "html", null, true);
        echo "\" data-rel=\"lightcase:myCollection\"></a>
                        <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/product/CollectionMarbre.jpeg"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                    </div>

                    <div class=\"product-action\">
                        <ul>
                            <li class=\"details-link\">   <a style=\"text-transform: uppercase\" href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => "the marble collection"]);
        echo " \">the marble collection</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class=\"bloom-gallery-item red col-md-6 col-12 mb-10\">
                <div class=\"product-item text-center\">

                    <div class=\"frame\">
                        <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/product/JETEE.jpg"), "html", null, true);
        echo "\" data-rel=\"lightcase:myCollection\"></a>
                        <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/product/JETEE.jpg"), "html", null, true);
        echo "\" alt=\"Flower Image\">
                    </div>

                    <div class=\"product-action\">
                        <ul>
                            <li class=\"details-link\">   <a style=\"text-transform: uppercase\" href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Listproduct", ["categorie" => "The Blooming Bride"]);
        echo " \">The Blooming Bride</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
        </div>
    </div>





    <!-- Custom content area end -->

    <!-- Service area start -->

    <!-- Service area end -->

    <!-- Testimonial area start -->

    <!-- Testimonial area end -->

    <!-- Latest blog area start -->

    <!-- Latest blog area end -->

    <!-- Newsletter area start -->

    <!-- Newsletter area end -->

    <!-- Instagram area start -->
    <div class=\"instagram-area\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <div class=\"section-title-area  text-center mobile-text-left\">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">Suivez-nous sur instagram</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"instafeed instagram-inner \" data-limit=\"5\" data-resolution=\"standard_resolution\">
            <ul id=\"instagram_feed\">
                <li><a href=\"https://www.instagram.com/chloris.flowers/?hl=fr\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/instagram/hey1.jpg"), "html", null, true);
        echo "\" alt=\"Flower Image\"></a></li>
            </ul>
            <ul id=\"instagram_feed\">
                <li><a href=\"https://www.instagram.com/chloris.flowers/?hl=fr\"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/instagram/hey2.jpg"), "html", null, true);
        echo "\" alt=\"Flower Image\"></a></li>
            </ul>
        </div>
    </div>
    <!-- Instagram area end -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 183,  300 => 180,  285 => 168,  239 => 125,  231 => 120,  227 => 119,  214 => 109,  206 => 104,  202 => 103,  190 => 94,  182 => 89,  178 => 88,  165 => 78,  157 => 73,  153 => 72,  134 => 56,  87 => 12,  83 => 11,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
{% block body %}

    <div class=\"slider-area slider-style-1 margin-bottom-115 mobile-mb-50 tab-mb-80 slider-style-7-color\">
        <div class=\"slider-inner\">
            <div class=\"slider-one-active\">
                <!-- slide-item -->
                <img src=\"{{ asset('client/img/slider/slideone.png') }}\" alt=\"\" >
                <img src=\"{{ asset('client/img/slider/slidetwo.png') }}\" alt=\"\" >
                <img src=\"{{ asset('client/img/slider/slidethree.png') }}\" alt=\"\">
                <img src=\"{{ asset('client/img/slider/slide3.png') }}\" alt=\"\">
            </div>
            <!-- slide-item -->
        </div>
        <!-- slider-sticky-icon -->
        <div class=\"slider-sticky-icon\">
            <ul>

            </ul>
        </div>
    </div>

    <!-- Slider area end -->
    <!-- Our exclusive service area start -->
    <div class=\"our-exclusive-services-area sidebar-sticky-icon-area margin-bottom-115 mobile-mb-50 tab-mb-80\">
        <!-- sidebar-sticky -->
        <div class=\"floating-icon\" id=\"service_info_item\">
            <div class=\"floating-icon__is floating-icon-info\">
                <i class=\"fa fa-phone\"></i>
            </div>
            <!--floating-icon-is-->
            <div class=\"floating-icon__is floating-icon-message\">
                <i class=\"fa fa-envelope\"></i>
            </div>
            <!--floating-icon-is-->
            <div class=\"floating-icon__is floating-icon-location\">
                <i class=\"fa fa-info-circle\"></i>
            </div>
            <!--floating-icon-is-->
        </div>


    </div>
    <!-- Our exclusive service area end -->

    <!-- Product area start -->
    
    <!-- Product area end -->

    <!-- Custom content area start -->
    <div class=\"gallery-area margin-bottom-120 mobile-mb-50 tab-mb-80\">
        <div class=\"section-title-area text-center mobile-text-left\">
            <div class=\"section-title section-title-2\">
                <div class=\"icon\">
                    <img src=\"{{ asset('client/img/icon/title.svg')}}\" alt=\"Bloom\">
                </div>
                <div class=\"title-text\">
                    <h2 class=\"title\">Notre Collection</h2>
                </div>
            </div>
        </div>
        <div class=\"container\">
                <!-- gallery-item -->
    <div class=\"tab-pane fade active show\" id=\"bloom_shop_grid_view\">
    <div class=\"shop-grid-view-tab-content-inner\">
        <div class=\"row custom-gutter\">
                <div class=\"bloom-gallery-item red col-md-6 col-12 mb-10\">
                    <div class=\"product-item text-center\">

                            <div class=\"frame\">
                            <a href=\"{{ asset('client/img/product/CLASSIC.jpg') }}\" data-rel=\"lightcase:myCollection\"></a>
                                <img src=\"{{ asset('client/img/product/CLASSIC.jpg') }}\" alt=\"Flower Image\">
                            </div>

                                    <div class=\"product-action\">
                                        <ul>
                                            <li class=\"details-link\">  <a style=\"text-transform: uppercase\" href=\"{{ path('Listproduct',{ 'categorie' : 'the classic collection' }) }}  \">the classic collection</a></li>
                                    </ul>
                                    </div>

                        </div>
                    </div>

                <div class=\"bloom-gallery-item red col-md-6 col-12 mb-10\">
                    <div class=\"product-item text-center\">
                        <div class=\"frame\">
                            <a href=\"{{ asset('client/img/product/BB.jpg') }}\" data-rel=\"lightcase:myCollection\">
                                <img src=\"{{ asset('client/img/product/BB.jpg') }}\" alt=\"Flower Image\">
                            </a>
                        </div>
                    <div class=\"product-action\">
                        <ul>
                            <li class=\"details-link\">  <a style=\"text-transform: uppercase\" href=\"{{ path('Listproduct',{ 'categorie' : 'the bird collection' }) }} \">the bird collection</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            <div class=\"bloom-gallery-item red col-md-6 col-12 mb-10\">
                <div class=\"product-item text-center\">

                    <div class=\"frame\">
                        <a href=\"{{ asset('client/img/product/CollectionMarbre.jpeg') }}\" data-rel=\"lightcase:myCollection\"></a>
                        <img src=\"{{ asset('client/img/product/CollectionMarbre.jpeg') }}\" alt=\"Flower Image\">
                    </div>

                    <div class=\"product-action\">
                        <ul>
                            <li class=\"details-link\">   <a style=\"text-transform: uppercase\" href=\"{{ path('Listproduct',{ 'categorie' : 'the marble collection' }) }} \">the marble collection</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class=\"bloom-gallery-item red col-md-6 col-12 mb-10\">
                <div class=\"product-item text-center\">

                    <div class=\"frame\">
                        <a href=\"{{ asset('client/img/product/JETEE.jpg') }}\" data-rel=\"lightcase:myCollection\"></a>
                        <img src=\"{{ asset('client/img/product/JETEE.jpg') }}\" alt=\"Flower Image\">
                    </div>

                    <div class=\"product-action\">
                        <ul>
                            <li class=\"details-link\">   <a style=\"text-transform: uppercase\" href=\"{{ path('Listproduct',{ 'categorie' : 'The Blooming Bride' }) }} \">The Blooming Bride</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
        </div>
    </div>





    <!-- Custom content area end -->

    <!-- Service area start -->

    <!-- Service area end -->

    <!-- Testimonial area start -->

    <!-- Testimonial area end -->

    <!-- Latest blog area start -->

    <!-- Latest blog area end -->

    <!-- Newsletter area start -->

    <!-- Newsletter area end -->

    <!-- Instagram area start -->
    <div class=\"instagram-area\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <div class=\"section-title-area  text-center mobile-text-left\">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"{{ asset( 'client/img/icon/title.svg')}}\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">Suivez-nous sur instagram</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"instafeed instagram-inner \" data-limit=\"5\" data-resolution=\"standard_resolution\">
            <ul id=\"instagram_feed\">
                <li><a href=\"https://www.instagram.com/chloris.flowers/?hl=fr\"><img src=\"{{ asset('client/img/instagram/hey1.jpg') }}\" alt=\"Flower Image\"></a></li>
            </ul>
            <ul id=\"instagram_feed\">
                <li><a href=\"https://www.instagram.com/chloris.flowers/?hl=fr\"><img src=\"{{ asset('client/img/instagram/hey2.jpg') }}\" alt=\"Flower Image\"></a></li>
            </ul>
        </div>
    </div>
    <!-- Instagram area end -->

{% endblock %}", "accueil/index.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\accueil\\index.html.twig");
    }
}
