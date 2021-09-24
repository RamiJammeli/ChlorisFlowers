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

/* registration/profil.html.twig */
class __TwigTemplate_a6c2b8987f2d6d6c241435da9c0f7cfb5f67d736daaca883ee1fa16b558c2d65 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/profil.html.twig", 2);
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
        echo "    <!-- Breadcrumb area start -->
    <div class=\"breadcrumb-area breadcrumb-style-2\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-inner text-left\">
                        <h1 class=\"page-title\">Mon Profil</h1>
                        <!-- <ul class=\"page-list\">
                            <li><a href=\"#\">Home</a></li>
                            <li>Shop</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->

    <!-- My account area start -->
    <div class=\"my-account-area margin-bottom-115 mobile-mb-50 tab-mb-80\">
        <div class=\"container-fluid pr-0\">
            <div class=\"row custom-gutter\">
                <!-- my-account-details -->
                <div class=\"col-xl-2 offset-xl-1 col-md-3 col-sm-12\">
                    <div class=\"my-account-tab-menu\">
                        <div class=\"nav\">
                            <a class=\"active show\" data-toggle=\"tab\" href=\"#my_account_1_1\">Mes détails</a>

                        </div>
                    </div>
                </div>
                <div class=\"col-xl-9 col-md-9 col-sm-12\">
                    <div class=\"my-account-tab-info\">
                        <div class=\"tab-content\">
                            <!-- my-account-details-info -->
                            <div class=\"tab-pane fade active show\" id=\"my_account_1_1\">
                                <div class=\"my-account-details-info\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"section-title-area text-left\">
                                                <div class=\"section-title section-title-2\">
                                                    <div class=\"icon\">
                                                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                                                    </div>
                                                    <div class=\"title-text\">
                                                        <h2 class=\"title\">Mes détails</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-6 col-sm-6 col-12\">
                                            <div class=\"my-account-details-info-form\">
                                                    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_start');
        echo "
                                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "flashbag", [], "any", false, false, false, 58), "get", [0 => "modification"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            echo "                                                        <div class=\"alert alert-success\">
                                                            ";
            // line 60
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                                        </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "nom", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "prenom", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "tel", [], "any", false, false, false, 69), 'row', ["attr" => ["class" => "form-control"]]);
        echo "


                                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "adresse", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control"]]);
        echo "


                                                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "sexe", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control"]]);
        echo "



                                                    <div class=\"form-group\">
                                                        <div class=\"btn-wrapper\" style=\"margin-top:5px;\">
                                                            <button type=\"submit\" class=\"boxed-btn btn-rounded\">
                                                                <i class=\"fa fa-btn fa-user\"></i> Modifier
                                                            </button>
                                                        </div>
                                                    </div>
                                                    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- my-address-info -->
                            <div class=\"tab-pane fade\" id=\"my_account_1_2\">
                                <div class=\"my-account-details-info my-address-info\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"section-title-area text-left\">
                                                <div class=\"section-title section-title-2\">
                                                    <div class=\"icon\">
                                                        <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-6 col-sm-6 col-12\">
                                            <div class=\"my-account-details-info-form\">
                                                <form action=\"#\" class=\"contact-form-box\">
                                                    <label>Street name*</label>
                                                    <input type=\"text\" name=\"streetname\" placeholder=\"Edwards street\">
                                                    <label>House number*</label>
                                                    <input type=\"text\" name=\"housenumber\" placeholder=\"22\">
                                                    <label>State*</label>
                                                    <input type=\"text\" name=\"state\" placeholder=\"Valley Pitot\">
                                                    <label>City*</label>
                                                    <input type=\"text\" name=\"city\" placeholder=\"Port Louis\">
                                                    <label>Country*</label>
                                                    <input type=\"text\" name=\"cuntry\" placeholder=\"Mauritius\">
                                                    <label>Postal code*</label>
                                                    <input type=\"text\" name=\"postalcode\" placeholder=\"12345\">
                                                    <div class=\"btn-wrapper\">
                                                        <button class=\"boxed-btn btn-rounded\" type=\"submit\">Save settings</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My account area end -->

    <!-- Instagram area start -->
    <div class=\"instagram-area\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <div class=\"section-title-area text-center mobile-text-left\">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">Follow us on instagram</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"instafeed instagram-inner \" data-limit=\"5\" data-resolution=\"standard_resolution\">
            <ul id=\"instagram_feed\"></ul>
        </div>
    </div>
    <!-- Instagram area end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 149,  205 => 100,  188 => 86,  174 => 75,  168 => 72,  162 => 69,  157 => 67,  152 => 65,  146 => 63,  137 => 60,  134 => 59,  130 => 58,  126 => 57,  112 => 46,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/registration/index.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
    <!-- Breadcrumb area start -->
    <div class=\"breadcrumb-area breadcrumb-style-2\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-inner text-left\">
                        <h1 class=\"page-title\">Mon Profil</h1>
                        <!-- <ul class=\"page-list\">
                            <li><a href=\"#\">Home</a></li>
                            <li>Shop</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->

    <!-- My account area start -->
    <div class=\"my-account-area margin-bottom-115 mobile-mb-50 tab-mb-80\">
        <div class=\"container-fluid pr-0\">
            <div class=\"row custom-gutter\">
                <!-- my-account-details -->
                <div class=\"col-xl-2 offset-xl-1 col-md-3 col-sm-12\">
                    <div class=\"my-account-tab-menu\">
                        <div class=\"nav\">
                            <a class=\"active show\" data-toggle=\"tab\" href=\"#my_account_1_1\">Mes détails</a>

                        </div>
                    </div>
                </div>
                <div class=\"col-xl-9 col-md-9 col-sm-12\">
                    <div class=\"my-account-tab-info\">
                        <div class=\"tab-content\">
                            <!-- my-account-details-info -->
                            <div class=\"tab-pane fade active show\" id=\"my_account_1_1\">
                                <div class=\"my-account-details-info\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"section-title-area text-left\">
                                                <div class=\"section-title section-title-2\">
                                                    <div class=\"icon\">
                                                        <img src=\"{{ asset('client/img/icon/title.svg') }}\" alt=\"Bloom\">
                                                    </div>
                                                    <div class=\"title-text\">
                                                        <h2 class=\"title\">Mes détails</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-6 col-sm-6 col-12\">
                                            <div class=\"my-account-details-info-form\">
                                                    {{ form_start(form) }}
                                                    {% for message in app.session.flashbag.get('modification') %}
                                                        <div class=\"alert alert-success\">
                                                            {{ message }}
                                                        </div>
                                                    {% endfor %}
                                                            {{ form_row(form.nom, {'attr': {'class': 'form-control'}}) }}

                                                            {{ form_row(form.prenom, {'attr': {'class': 'form-control'}}) }}

                                                            {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}

                                                            {{ form_row(form.tel, {'attr': {'class': 'form-control'}}) }}


                                                            {{ form_row(form.adresse, {'attr': {'class': 'form-control'}}) }}


                                                            {{ form_row(form.sexe, {'attr': {'class': 'form-control'}}) }}



                                                    <div class=\"form-group\">
                                                        <div class=\"btn-wrapper\" style=\"margin-top:5px;\">
                                                            <button type=\"submit\" class=\"boxed-btn btn-rounded\">
                                                                <i class=\"fa fa-btn fa-user\"></i> Modifier
                                                            </button>
                                                        </div>
                                                    </div>
                                                    {{ form_end(form) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- my-address-info -->
                            <div class=\"tab-pane fade\" id=\"my_account_1_2\">
                                <div class=\"my-account-details-info my-address-info\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"section-title-area text-left\">
                                                <div class=\"section-title section-title-2\">
                                                    <div class=\"icon\">
                                                        <img src=\"{{ asset('client/img/icon/title.svg') }}\" alt=\"Bloom\">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-6 col-sm-6 col-12\">
                                            <div class=\"my-account-details-info-form\">
                                                <form action=\"#\" class=\"contact-form-box\">
                                                    <label>Street name*</label>
                                                    <input type=\"text\" name=\"streetname\" placeholder=\"Edwards street\">
                                                    <label>House number*</label>
                                                    <input type=\"text\" name=\"housenumber\" placeholder=\"22\">
                                                    <label>State*</label>
                                                    <input type=\"text\" name=\"state\" placeholder=\"Valley Pitot\">
                                                    <label>City*</label>
                                                    <input type=\"text\" name=\"city\" placeholder=\"Port Louis\">
                                                    <label>Country*</label>
                                                    <input type=\"text\" name=\"cuntry\" placeholder=\"Mauritius\">
                                                    <label>Postal code*</label>
                                                    <input type=\"text\" name=\"postalcode\" placeholder=\"12345\">
                                                    <div class=\"btn-wrapper\">
                                                        <button class=\"boxed-btn btn-rounded\" type=\"submit\">Save settings</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My account area end -->

    <!-- Instagram area start -->
    <div class=\"instagram-area\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-md-12\">
                    <div class=\"section-title-area text-center mobile-text-left\">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"{{ asset('client/img/icon/title.svg') }}\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">Follow us on instagram</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"instafeed instagram-inner \" data-limit=\"5\" data-resolution=\"standard_resolution\">
            <ul id=\"instagram_feed\"></ul>
        </div>
    </div>
    <!-- Instagram area end -->
{% endblock %}
", "registration/profil.html.twig", "C:\\Users\\ramij\\OneDrive\\Documents\\Smartleap2\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\registration\\profil.html.twig");
    }
}
