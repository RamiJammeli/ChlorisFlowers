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

/* admin/editProduct.html.twig */
class __TwigTemplate_32557ed350425064e5dbeeccbab93f826baee8511b2335329e9533de484d5b30 extends Template
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
        // line 3
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editProduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editProduct.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/editProduct.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container\">
        <h1 class=\"h3 text-gray-800 pl-5\" >Modifier produit</h1>


        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-9 pl-5\">
                        <div class=\"p-5\">
                            <div class=\"text-gray-200 pl-5\">
                            </div>
                            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "_token", [], "any", false, false, false, 21), 'row');
        echo "

                            <form class=\"user\">
                                <div class=\"form-group \">
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prodcutName", [], "any", false, false, false, 25), 'label', ["label" => "Product name"]);
        echo "
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prodcutName", [], "any", false, false, false, 26), 'errors');
        echo "


                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prodcutName", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "boxSize", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Taille du box"]]);
        echo "

                                    </div>
                                    <div class=\"col-sm-6\">
                                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "boxColor", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur du box"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "descriptionBox", [], "any", false, false, false, 42), 'label', ["label" => "Description du box"]);
        echo "


                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "descriptionBox", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Ecrivez une déscription du box"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "imageFile", [], "any", false, false, false, 49), 'label', ["label" => "Image du produit"]);
        echo "
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "imageFile", [], "any", false, false, false, 50), 'errors');
        echo "

                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "imageFile", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "imageFileHaut", [], "any", false, false, false, 56), 'label', ["label" => "Image haut du produit"]);
        echo "

                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "imageFileHaut", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image haut du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">

                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "roseNumber", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nombre des roses"]]);
        echo "

                                    </div>
                                    <div class=\"col-sm-6\">

                                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "roseColor", [], "any", false, false, false, 69), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur des roses"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "categorie", [], "any", false, false, false, 74), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Categorie"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "prix", [], "any", false, false, false, 78), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prix"]]);
        echo "

                                </div>

                                <div class=\"form-group \">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "stock", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "stock"]]);
        echo "

                                </div>







                                <button type=\"submit\"
                                        class=\"btn btn-primary btn-user btn-block add-button\" style=\"background-color: #f9efed; border-color: #f9efed; color: #5a5c69;\"
                                        onmouseover=\"this.style.background='#f3bcb1';this.style.color='white';\"
                                        onmouseleave=\"this.style.background='#f9efed';this.style.color='#5a5c69';\">
                                    Modifier produit
                                </button>
                                <hr>

                            </form>
                            ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        echo "



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
        return "admin/editProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 102,  200 => 83,  192 => 78,  185 => 74,  177 => 69,  169 => 64,  160 => 58,  155 => 56,  148 => 52,  143 => 50,  139 => 49,  132 => 45,  126 => 42,  119 => 38,  112 => 34,  104 => 29,  98 => 26,  94 => 25,  87 => 21,  83 => 20,  68 => 7,  58 => 6,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'baseAdmin.html.twig' %}


{% block body %}

    <div class=\"container\">
        <h1 class=\"h3 text-gray-800 pl-5\" >Modifier produit</h1>


        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-9 pl-5\">
                        <div class=\"p-5\">
                            <div class=\"text-gray-200 pl-5\">
                            </div>
                            {{ form_start(form) }}
                            {{ form_row(form._token) }}

                            <form class=\"user\">
                                <div class=\"form-group \">
                                    {{ form_label(form.prodcutName,\"Product name\") }}
                                    {{ form_errors(form.prodcutName) }}


                                    {{ form_widget(form.prodcutName, {'attr': {'class': 'form-control form-control-user','placeholder':'Nom du produit'}}) }}

                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">
                                        {{ form_row(form.boxSize, {'attr': {'class': 'form-control form-control-user','placeholder':'Taille du box'}}) }}

                                    </div>
                                    <div class=\"col-sm-6\">
                                        {{ form_row(form.boxColor, {'attr': {'class': 'form-control form-control-user','placeholder':'Couleur du box'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    {{ form_label(form.descriptionBox,\"Description du box\") }}


                                    {{ form_widget(form.descriptionBox, {'attr': {'class': 'form-control form-control-user','placeholder':'Ecrivez une déscription du box'}}) }}

                                </div>
                                <div class=\"form-group \">
                                    {{ form_label(form.imageFile,\"Image du produit\") }}
                                    {{ form_errors(form.imageFile) }}

                                    {{ form_widget(form.imageFile, {'attr': {'class': 'form-control form-control-user','placeholder':'Image du produit'}}) }}

                                </div>
                                <div class=\"form-group \">
                                    {{ form_label(form.imageFileHaut,\"Image haut du produit\") }}

                                    {{ form_widget(form.imageFileHaut, {'attr': {'class': 'form-control form-control-user','placeholder':'Image haut du produit'}}) }}

                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">

                                        {{ form_row(form.roseNumber, {'attr': {'class': 'form-control form-control-user','placeholder':'Nombre des roses'}}) }}

                                    </div>
                                    <div class=\"col-sm-6\">

                                        {{ form_row(form.roseColor, {'attr': {'class': 'form-control form-control-user','placeholder':'Couleur des roses'}}) }}

                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    {{ form_row(form.categorie, {'attr': {'class': 'form-control form-control-user','placeholder':'Categorie'}}) }}

                                </div>
                                <div class=\"form-group \">
                                    {{ form_row(form.prix, {'attr': {'class': 'form-control form-control-user','placeholder':'Prix'}}) }}

                                </div>

                                <div class=\"form-group \">
                                    {{ form_row(form.stock, {'attr': {'class': 'form-control form-control-user','placeholder':'stock'}}) }}

                                </div>







                                <button type=\"submit\"
                                        class=\"btn btn-primary btn-user btn-block add-button\" style=\"background-color: #f9efed; border-color: #f9efed; color: #5a5c69;\"
                                        onmouseover=\"this.style.background='#f3bcb1';this.style.color='white';\"
                                        onmouseleave=\"this.style.background='#f9efed';this.style.color='#5a5c69';\">
                                    Modifier produit
                                </button>
                                <hr>

                            </form>
                            {{ form_end(form) }}



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





{% endblock %}
", "admin/editProduct.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\admin\\editProduct.html.twig");
    }
}
