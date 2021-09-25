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

/* security/resetpassword.html.twig */
class __TwigTemplate_dff366d49af6d3bfa4063bb193aff596901e1416f652a2caf26eb7b61756ce7f extends Template
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
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/resetpassword.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/resetpassword.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/resetpassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Changer Mot de passe";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <style>
        .pass_show{position: relative}

        .pass_show .ptxt {

            position: absolute;

            top: 50%;

            right: 10px;

            z-index: 1;

            color: #f3a199;

            margin-top: -10px;

            cursor: pointer;

            transition: .3s ease all;


        }
        ::placeholder{
            font-size: 0.5em;
        }

        .pass_show .ptxt:hover{color: #333333;}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "
<div class=\"container d-flex justify-content-center\" style=\"margin-top:82px;margin-bottom: 82px\">
    <div class=\"row\">
        <div>
           <form method=\"post\" action=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetpassword");
        echo "\">

               <input type=\"hidden\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\" name=\"idu\">

               <label ><b>Nouveau mot de passe</b></label>
            <div class=\"form-group pass_show\">
                <input type=\"password\"  class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"New Password\">
            </div>
               <label><b>Confirmer mot de passe</b></label>
            <div class=\"form-group pass_show\">
                   <input type=\"password\" class=\"form-control\" id=\"confirm\" placeholder=\"Confirm Password\">
               </div>
               <div class=\"form-group btn-wrapper \">
                   <input type=\"submit\" id=\"btnConfirm\" class=\"form-control boxed-btn\" value=\"Confirmer\">
               </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 63
        echo "

<script>
    function verifpassword(){
        if(document.getElementById('password').value!=\"\" && document.getElementById('confirm').value!=\"\" && document.getElementById('password').value==document.getElementById('confirm').value ){
            return true;
        }else{
            return false;
        }
    }



    \$(document).ready(function(){
        \$('.pass_show').append('<span class=\"ptxt\">Show</span>');
        \$('#btnConfirm').attr('disabled','disabled');

        \$(\"#password\").keyup(function () {
            if(verifpassword()){
                \$('#btnConfirm').removeAttr('disabled');
            }else{
                \$('#btnConfirm').attr('disabled','disabled');
            }
        })

        \$(\"#confirm\").keyup(function () {
            if(verifpassword()){
                \$('#btnConfirm').removeAttr('disabled');
            }else{
                \$('#btnConfirm').attr('disabled','disabled');
            }
        })

    });




    \$(document).on('click','.pass_show .ptxt', function(){

        \$(this).text(\$(this).text() == \"Show\" ? \"Hide\" : \"Show\");

        \$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; });

    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/resetpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 63,  181 => 62,  153 => 44,  148 => 42,  142 => 38,  132 => 37,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Changer Mot de passe{% endblock %}
{% block stylesheets %}
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <style>
        .pass_show{position: relative}

        .pass_show .ptxt {

            position: absolute;

            top: 50%;

            right: 10px;

            z-index: 1;

            color: #f3a199;

            margin-top: -10px;

            cursor: pointer;

            transition: .3s ease all;


        }
        ::placeholder{
            font-size: 0.5em;
        }

        .pass_show .ptxt:hover{color: #333333;}
    </style>
{% endblock %}
{% block body %}

<div class=\"container d-flex justify-content-center\" style=\"margin-top:82px;margin-bottom: 82px\">
    <div class=\"row\">
        <div>
           <form method=\"post\" action=\"{{ path('resetpassword')  }}\">

               <input type=\"hidden\" value=\"{{ id }}\" name=\"idu\">

               <label ><b>Nouveau mot de passe</b></label>
            <div class=\"form-group pass_show\">
                <input type=\"password\"  class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"New Password\">
            </div>
               <label><b>Confirmer mot de passe</b></label>
            <div class=\"form-group pass_show\">
                   <input type=\"password\" class=\"form-control\" id=\"confirm\" placeholder=\"Confirm Password\">
               </div>
               <div class=\"form-group btn-wrapper \">
                   <input type=\"submit\" id=\"btnConfirm\" class=\"form-control boxed-btn\" value=\"Confirmer\">
               </div>
           </form>
        </div>
    </div>
</div>
{% endblock %}
{% block script %}


<script>
    function verifpassword(){
        if(document.getElementById('password').value!=\"\" && document.getElementById('confirm').value!=\"\" && document.getElementById('password').value==document.getElementById('confirm').value ){
            return true;
        }else{
            return false;
        }
    }



    \$(document).ready(function(){
        \$('.pass_show').append('<span class=\"ptxt\">Show</span>');
        \$('#btnConfirm').attr('disabled','disabled');

        \$(\"#password\").keyup(function () {
            if(verifpassword()){
                \$('#btnConfirm').removeAttr('disabled');
            }else{
                \$('#btnConfirm').attr('disabled','disabled');
            }
        })

        \$(\"#confirm\").keyup(function () {
            if(verifpassword()){
                \$('#btnConfirm').removeAttr('disabled');
            }else{
                \$('#btnConfirm').attr('disabled','disabled');
            }
        })

    });




    \$(document).on('click','.pass_show .ptxt', function(){

        \$(this).text(\$(this).text() == \"Show\" ? \"Hide\" : \"Show\");

        \$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; });

    });
</script>
{% endblock %}
", "security/resetpassword.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\security\\resetpassword.html.twig");
    }
}
