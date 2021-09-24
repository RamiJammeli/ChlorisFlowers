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

/* admin/addProduct.html.twig */
class __TwigTemplate_5f59de1294a51cfcb670e9b607a81cc7a4658d4f530553e02f88d3dc720cb7e5 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addProduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addProduct.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/addProduct.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
        <h1 class=\"h3 text-gray-800 pl-5\" >Ajout produit</h1>


        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-9 pl-5\">
                        <div class=\"p-5\">
                            <div class=\"text-gray-200 pl-5\">
                            </div>
                            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "_token", [], "any", false, false, false, 20), 'row');
        echo "

                            <form class=\"user\">
                                    <div class=\"form-group \">
                                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prodcutName", [], "any", false, false, false, 24), 'label', ["label" => "Product name"]);
        echo "
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prodcutName", [], "any", false, false, false, 25), 'errors');
        echo "


                                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prodcutName", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom du produit"]]);
        echo "

                                    </div>
                                    <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "boxSize", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Taille du box"]]);
        echo "

                                    </div>
                                        <div class=\"col-sm-6\">
                                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "boxColor", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur du box"]]);
        echo "
                                    </div>
                                    </div>
                                <div class=\"form-group \">
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "descriptionBox", [], "any", false, false, false, 41), 'label', ["label" => "Description du box"]);
        echo "


                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "descriptionBox", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Ecrivez une déscription du box"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "imageFile", [], "any", false, false, false, 48), 'label', ["label" => "Image du produit"]);
        echo "
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "imageFile", [], "any", false, false, false, 49), 'errors');
        echo "

                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "imageFile", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "imageFileHaut", [], "any", false, false, false, 55), 'label', ["label" => "Image haut du produit"]);
        echo "

                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "imageFileHaut", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image haut du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">

                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "roseNumber", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nombre des roses"]]);
        echo "

                                </div>
                                    <div class=\"col-sm-6\">

                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "roseColor", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur des roses"]]);
        echo "

                                </div>
                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "categorie", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Categorie"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "prix", [], "any", false, false, false, 77), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prix"]]);
        echo "

                                </div>

                                <div class=\"form-group \">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "stock", [], "any", false, false, false, 82), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "stock"]]);
        echo "

                                </div>







                                <button type=\"submit\"
                                        class=\"btn btn-primary btn-user btn-block add-button\" style=\"background-color: #f9efed; border-color: #f9efed; color: #5a5c69;\"
                                        onmouseover=\"this.style.background='#f3bcb1';this.style.color='white';\"
                                onmouseleave=\"this.style.background='#f9efed';this.style.color='#5a5c69';\">
                                    Ajouter produit
                                </button>
                                <hr>

                            </form>
                            ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
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
        return "admin/addProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 101,  200 => 82,  192 => 77,  185 => 73,  177 => 68,  169 => 63,  160 => 57,  155 => 55,  148 => 51,  143 => 49,  139 => 48,  132 => 44,  126 => 41,  119 => 37,  112 => 33,  104 => 28,  98 => 25,  94 => 24,  87 => 20,  83 => 19,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'baseAdmin.html.twig' %}


{% block body %}

    <div class=\"container\">
        <h1 class=\"h3 text-gray-800 pl-5\" >Ajout produit</h1>


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
                                    Ajouter produit
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

", "admin/addProduct.html.twig", "C:\\Users\\ramij\\OneDrive\\Documents\\Smartleap2\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\admin\\addProduct.html.twig");
    }
}
