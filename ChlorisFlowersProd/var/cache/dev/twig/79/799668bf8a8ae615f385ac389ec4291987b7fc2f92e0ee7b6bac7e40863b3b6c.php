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

/* registration/index.html.twig */
class __TwigTemplate_978114f0d48ecff1a9afbe9d135591d30229f9ab9f42039b63cad02e463c7ee5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 2);
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
        echo "    <br>
    <br>
<div class=\"sign-up-area margin-bottom-120 mobile-mb-50 tab-mb-100\">
    <div class=\"container\">
        <div class=\"row custom-gutter\">
            <div class=\"col-xl-3 offset-xl-1 col-lg-4 col-md-6 col-12\">
                <div class=\"sign-up-inner\">
                    <div class=\"section-title-area \">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icon/title.svg"), "html", null, true);
        echo "\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">Rejoingez-nous</h2>
                            </div>
                        </div>
                    </div>
                        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "tel", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "adresse", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "sexe", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control"]]);
        // line 56
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "password", [], "any", false, false, false, 61), "second", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control"]]);
        // line 62
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"btn-wrapper\" style=\"margin-top:5px;\">
                                <button type=\"submit\" class=\"boxed-btn btn-rounded\">
                                    <i class=\"fa fa-btn fa-user\"></i> S'inscrire
                                </button>
                            </div>
                        </div>
                        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
                    </div>

                </div>
            <div class=\"col-xl-7 col-lg-8 col-md-6 col-12\">
                <div class=\"custom-content-image text-right margin-top-30 mobile-mt-50 tab-mt-50\">
                    <div class=\"img-shape\">
                        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/others/signin3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 79,  168 => 72,  156 => 62,  154 => 61,  147 => 56,  145 => 55,  137 => 50,  129 => 45,  121 => 40,  112 => 34,  104 => 29,  96 => 24,  90 => 21,  80 => 14,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/registration/index.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
    <br>
    <br>
<div class=\"sign-up-area margin-bottom-120 mobile-mb-50 tab-mb-100\">
    <div class=\"container\">
        <div class=\"row custom-gutter\">
            <div class=\"col-xl-3 offset-xl-1 col-lg-4 col-md-6 col-12\">
                <div class=\"sign-up-inner\">
                    <div class=\"section-title-area \">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"{{ asset('client/img/icon/title.svg')}}\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">Rejoingez-nous</h2>
                            </div>
                        </div>
                    </div>
                        {{ form_start(form) }}
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.nom, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            {{ form_row(form.prenom, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>

                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.tel, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.adresse, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.sexe, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.password.first, {'attr': {'class':
                                    'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.password.second, {'attr': {'class':
                                    'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"btn-wrapper\" style=\"margin-top:5px;\">
                                <button type=\"submit\" class=\"boxed-btn btn-rounded\">
                                    <i class=\"fa fa-btn fa-user\"></i> S'inscrire
                                </button>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>

                </div>
            <div class=\"col-xl-7 col-lg-8 col-md-6 col-12\">
                <div class=\"custom-content-image text-right margin-top-30 mobile-mt-50 tab-mt-50\">
                    <div class=\"img-shape\">
                        <img src=\"{{ asset('client/img/others/signin3.jpg')}}\" alt=\"\">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "registration/index.html.twig", "C:\\Users\\ramij\\OneDrive\\Documents\\Smartleap2\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\registration\\index.html.twig");
    }
}
