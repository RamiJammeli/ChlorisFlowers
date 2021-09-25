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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prodcutName", [], "any", false, false, false, 24), 'label', ["label" => "Nom du produit"]);
        echo "
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prodcutName", [], "any", false, false, false, 25), 'errors');
        echo "


                                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prodcutName", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "

                                    </div>
                                    <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">


                                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "boxSize", [], "any", false, false, false, 35), 'label', ["label" => "Taille du Box"]);
        echo "
                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "boxSize", [], "any", false, false, false, 36), 'errors');
        echo "


                                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "boxSize", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Taille du box"]]);
        echo "


                                    </div>
                                        <div class=\"col-sm-6\">

                                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "boxColor", [], "any", false, false, false, 45), 'label', ["label" => "Couleur du Box"]);
        echo "
                                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "boxColor", [], "any", false, false, false, 46), 'errors');
        echo "


                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "boxColor", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur du Box"]]);
        echo "
                                    </div>
                                    </div>
                                <div class=\"form-group \">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "descriptionBox", [], "any", false, false, false, 53), 'label', ["label" => "Description du box"]);
        echo "


                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "descriptionBox", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Ecrivez une déscription du box"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "imageFile", [], "any", false, false, false, 60), 'label', ["label" => "Image du produit"]);
        echo "
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "imageFile", [], "any", false, false, false, 61), 'errors');
        echo "

                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "imageFile", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "imageFileHaut", [], "any", false, false, false, 67), 'label', ["label" => "Image haut du produit"]);
        echo "

                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "imageFileHaut", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image haut du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">


                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "roseNumber", [], "any", false, false, false, 76), 'label', ["label" => "Nombre des roses"]);
        echo "
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "roseNumber", [], "any", false, false, false, 77), 'errors');
        echo "


                                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "roseNumber", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nombre des roses"]]);
        echo "

                                </div>
                                    <div class=\"col-sm-6\">



                                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "roseColor", [], "any", false, false, false, 87), 'label', ["label" => "Couleur des roses"]);
        echo "
                                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "roseColor", [], "any", false, false, false, 88), 'errors');
        echo "


                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "roseColor", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur des roses"]]);
        echo "

                                </div>
                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "categorie", [], "any", false, false, false, 96), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Categorie"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "prix", [], "any", false, false, false, 100), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prix"]]);
        echo "

                                </div>

                                <div class=\"form-group \">
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "stock", [], "any", false, false, false, 105), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "stock"]]);
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
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'form_end');
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
        return array (  269 => 124,  247 => 105,  239 => 100,  232 => 96,  224 => 91,  218 => 88,  214 => 87,  204 => 80,  198 => 77,  194 => 76,  184 => 69,  179 => 67,  172 => 63,  167 => 61,  163 => 60,  156 => 56,  150 => 53,  143 => 49,  137 => 46,  133 => 45,  124 => 39,  118 => 36,  114 => 35,  104 => 28,  98 => 25,  94 => 24,  87 => 20,  83 => 19,  68 => 6,  58 => 5,  35 => 2,);
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
                                        {{ form_label(form.prodcutName,\"Nom du produit\") }}
                                        {{ form_errors(form.prodcutName) }}


                                        {{ form_widget(form.prodcutName, {'attr': {'class': 'form-control form-control-user','placeholder':'Nom'}}) }}

                                    </div>
                                    <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">


                                        {{ form_label(form.boxSize,\"Taille du Box\") }}
                                        {{ form_errors(form.boxSize) }}


                                        {{ form_widget(form.boxSize, {'attr': {'class': 'form-control form-control-user','placeholder':'Taille du box'}}) }}


                                    </div>
                                        <div class=\"col-sm-6\">

                                            {{ form_label(form.boxColor,\"Couleur du Box\") }}
                                            {{ form_errors(form.boxColor) }}


                                            {{ form_widget(form.boxColor, {'attr': {'class': 'form-control form-control-user','placeholder':'Couleur du Box'}}) }}
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


                                        {{ form_label(form.roseNumber,\"Nombre des roses\") }}
                                        {{ form_errors(form.roseNumber) }}


                                        {{ form_widget(form.roseNumber, {'attr': {'class': 'form-control form-control-user','placeholder':'Nombre des roses'}}) }}

                                </div>
                                    <div class=\"col-sm-6\">



                                        {{ form_label(form.roseColor,\"Couleur des roses\") }}
                                        {{ form_errors(form.roseColor) }}


                                        {{ form_widget(form.roseColor, {'attr': {'class': 'form-control form-control-user','placeholder':'Couleur des roses'}}) }}

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

", "admin/addProduct.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\admin\\addProduct.html.twig");
    }
}
