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

/* security/login.html.twig */
class __TwigTemplate_8c02ffac7c2f7438a1570cc9f31c6604e13277f5ab4afc811905cc2e9eda1cf9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "S'indentifier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <style>
        #user_sexe{
            height: 40px;
        }

        #oublier {
            background: none!important;
            border: none;
            padding: 0!important;
            /*optional*/
            font-family: arial, sans-serif;
            /*input has OS specific font-family*/
            color: #069;
            text-decoration: underline;
            cursor: pointer;
        }

    </style>
    <script>
        function getmail(){
          document.getElementById('mailhidden').value=document.getElementById('inputEmail').value;
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "
    <div class=\"sign-up-area sign-in-area margin-bottom-120 mobile-mb-50 tab-mb-100\">
    <div class=\"container\">
    <div class=\"row custom-gutter\">
        <div class=\"col-xl-3 col-lg-4 col-md-6 order-xl-2\" style=\"margin-left: 10px\">
            <div class=\"sign-up-inner\">
                <div class=\"section-title-area \">

                </div>


                <ul class=\"nav nav-tabs\">
                    ";
        // line 45
        if ((0 === twig_compare((isset($context["errorformInscri"]) || array_key_exists("errorformInscri", $context) ? $context["errorformInscri"] : (function () { throw new RuntimeError('Variable "errorformInscri" does not exist.', 45, $this->source); })()), 0))) {
            // line 46
            echo "                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#identifier\">S'identifier</a></li>
                        <li><a data-toggle=\"tab\" href=\"#inscrire\">S'inscrire</a></li>
                    ";
        } else {
            // line 49
            echo "                        <li ><a data-toggle=\"tab\" href=\"#identifier\">S'identifier</a></li>
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#inscrire\">S'inscrire</a></li>
                    ";
        }
        // line 52
        echo "
                </ul>

                <div class=\"tab-content\">
                    ";
        // line 56
        if ((0 === twig_compare((isset($context["errorformInscri"]) || array_key_exists("errorformInscri", $context) ? $context["errorformInscri"] : (function () { throw new RuntimeError('Variable "errorformInscri" does not exist.', 56, $this->source); })()), 0))) {
            // line 57
            echo "                    <div id=\"identifier\" class=\"tab-pane fade in active\">
                        ";
        } else {
            // line 59
            echo "                        <div id=\"identifier\" class=\"tab-pane fade\">
                            ";
        }
        // line 61
        echo "                            <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"contact-form-box\">
                                ";
        // line 62
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageKey", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageData", [], "any", false, false, false, 63), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 65
        echo "
                                ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) {
            // line 67
            echo "                                    <div class=\"mb-3\">
                                        You are logged in as ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "username", [], "any", false, false, false, 68), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                    </div>
                                ";
        }
        // line 71
        echo "

                                <label for=\"inputEmail\">Email</label>
                                <input type=\"email\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "\" onchange=\"getmail()\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                                <label for=\"inputPassword\">Password</label>
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
                                <div class=\"btn-wrapper\">
                                    <button class=\"boxed-btn\" type=\"submit\">
                                        Sign in
                                    </button>
                                </div>
                                <br>

                                <input type=\"hidden\" name=\"_csrf_token\" class=\"boxed-btn btn-rounded\"
                                       value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                <div class=\"checkbox mb-3\">
                                    <label>
                                        <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                                    </label>
                                </div>



                            </form>

                            <form method=\"post\" action=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sendmail");
        echo "\">
                                <input type=\"hidden\" id=\"mailhidden\" name=\"mailhidden\">
                                <input id=\"oublier\" type=\"submit\" value=\"Mot de passe oublié?\"/>
                            </form>
                            <br/> <br/>

                            <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo " \">Vous n'avez pas de compte ? inscrivez vous ici ..</a>
                        </div>
                        ";
        // line 104
        if ((0 === twig_compare((isset($context["errorformInscri"]) || array_key_exists("errorformInscri", $context) ? $context["errorformInscri"] : (function () { throw new RuntimeError('Variable "errorformInscri" does not exist.', 104, $this->source); })()), 0))) {
            // line 105
            echo "                        <div id=\"inscrire\" class=\"tab-pane fade\">
                            ";
        } else {
            // line 107
            echo "                            <div id=\"inscrire\" class=\"tab-pane fade in active\">
                                ";
        }
        // line 109
        echo "                                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form_group\">
                                    <div class=\"col-md-12 mb-3\">
                                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "nom", [], "any", false, false, false, 112), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form_group\">
                                    <div class=\"col-md-12 mb-3\">
                                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "prenom", [], "any", false, false, false, 117), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form_group\">
                                    <div class=\"col-md-12 mb-3\">
                                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "email", [], "any", false, false, false, 122), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>

                                <div class=\"form_group\">
                                    <div class=\"col-md-12 mb-3\">
                                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "tel", [], "any", false, false, false, 128), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form_group\">
                                    <div class=\"col-md-12 mb-3\">
                                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "adresse", [], "any", false, false, false, 133), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form_group\">
                                    <div class=\"col-md-12 mb-3\">
                                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "sexe", [], "any", false, false, false, 138), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form_group\">
                                    <div class=\"col-md-12 mb-3\">
                                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "password", [], "any", false, false, false, 143), "first", [], "any", false, false, false, 143), 'row', ["attr" => ["class" => "form-control"]]);
        // line 144
        echo "
                                    </div>
                                </div>
                                <div class=\"form_group\">
                                    <div class=\"col-md-12 mb-3\">
                                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "password", [], "any", false, false, false, 149), "second", [], "any", false, false, false, 149), 'row', ["attr" => ["class" => "form-control"]]);
        // line 150
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
        // line 160
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'form_end');
        echo "

                            </div>

                        </div>





                    </div>
                </div>
                <div class=\"col-xl-7 offset-xl-1 col-lg-8 col-md-6\">
                    <div class=\"custom-content-image margin-top-30 mobile-mt-50 tab-mt-50\">
                        <div class=\"img-shape\">
                            <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/login.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 640px\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    document.getElementById('mailhidden').value=document.getElementById('inputEmail').value;
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 175,  342 => 160,  330 => 150,  328 => 149,  321 => 144,  319 => 143,  311 => 138,  303 => 133,  295 => 128,  286 => 122,  278 => 117,  270 => 112,  263 => 109,  259 => 107,  255 => 105,  253 => 104,  248 => 102,  239 => 96,  225 => 85,  211 => 74,  206 => 71,  198 => 68,  195 => 67,  193 => 66,  190 => 65,  184 => 63,  182 => 62,  177 => 61,  173 => 59,  169 => 57,  167 => 56,  161 => 52,  156 => 49,  151 => 46,  149 => 45,  135 => 33,  125 => 32,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S'indentifier{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <style>
        #user_sexe{
            height: 40px;
        }

        #oublier {
            background: none!important;
            border: none;
            padding: 0!important;
            /*optional*/
            font-family: arial, sans-serif;
            /*input has OS specific font-family*/
            color: #069;
            text-decoration: underline;
            cursor: pointer;
        }

    </style>
    <script>
        function getmail(){
          document.getElementById('mailhidden').value=document.getElementById('inputEmail').value;
        }
    </script>
{% endblock %}
{% block body %}

    <div class=\"sign-up-area sign-in-area margin-bottom-120 mobile-mb-50 tab-mb-100\">
    <div class=\"container\">
    <div class=\"row custom-gutter\">
        <div class=\"col-xl-3 col-lg-4 col-md-6 order-xl-2\" style=\"margin-left: 10px\">
            <div class=\"sign-up-inner\">
                <div class=\"section-title-area \">

                </div>


                <ul class=\"nav nav-tabs\">
                    {% if errorformInscri==0 %}
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#identifier\">S'identifier</a></li>
                        <li><a data-toggle=\"tab\" href=\"#inscrire\">S'inscrire</a></li>
                    {% else %}
                        <li ><a data-toggle=\"tab\" href=\"#identifier\">S'identifier</a></li>
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#inscrire\">S'inscrire</a></li>
                    {% endif %}

                </ul>

                <div class=\"tab-content\">
                    {% if errorformInscri==0 %}
                    <div id=\"identifier\" class=\"tab-pane fade in active\">
                        {% else %}
                        <div id=\"identifier\" class=\"tab-pane fade\">
                            {% endif %}
                            <form method=\"post\" action=\"{{ path('app_login') }}\" class=\"contact-form-box\">
                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}

                                {% if app.user %}
                                    <div class=\"mb-3\">
                                        You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                    </div>
                                {% endif %}


                                <label for=\"inputEmail\">Email</label>
                                <input type=\"email\" value=\"{{ last_username }}\" onchange=\"getmail()\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                                <label for=\"inputPassword\">Password</label>
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
                                <div class=\"btn-wrapper\">
                                    <button class=\"boxed-btn\" type=\"submit\">
                                        Sign in
                                    </button>
                                </div>
                                <br>

                                <input type=\"hidden\" name=\"_csrf_token\" class=\"boxed-btn btn-rounded\"
                                       value=\"{{ csrf_token('authenticate') }}\">
                                <div class=\"checkbox mb-3\">
                                    <label>
                                        <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                                    </label>
                                </div>



                            </form>

                            <form method=\"post\" action=\"{{ path('sendmail') }}\">
                                <input type=\"hidden\" id=\"mailhidden\" name=\"mailhidden\">
                                <input id=\"oublier\" type=\"submit\" value=\"Mot de passe oublié?\"/>
                            </form>
                            <br/> <br/>

                            <a href=\"{{ path('registration') }} \">Vous n'avez pas de compte ? inscrivez vous ici ..</a>
                        </div>
                        {% if errorformInscri==0 %}
                        <div id=\"inscrire\" class=\"tab-pane fade\">
                            {% else %}
                            <div id=\"inscrire\" class=\"tab-pane fade in active\">
                                {% endif %}
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





                    </div>
                </div>
                <div class=\"col-xl-7 offset-xl-1 col-lg-8 col-md-6\">
                    <div class=\"custom-content-image margin-top-30 mobile-mt-50 tab-mt-50\">
                        <div class=\"img-shape\">
                            <img src=\"{{ asset('client/img/login.JPG') }}\" alt=\"\" style=\"width: 640px\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    document.getElementById('mailhidden').value=document.getElementById('inputEmail').value;
    </script>
{% endblock %}", "security/login.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\security\\login.html.twig");
    }
}
