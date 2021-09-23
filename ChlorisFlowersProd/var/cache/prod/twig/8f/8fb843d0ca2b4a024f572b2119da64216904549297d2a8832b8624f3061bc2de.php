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
class __TwigTemplate_c3efb52c83b174e25198c3bd09f1a87b70b262bea84a48fb3c1b26afae66922a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sexe", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control"]]);
        // line 56
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 61), "second", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  160 => 79,  150 => 72,  138 => 62,  136 => 61,  129 => 56,  127 => 55,  119 => 50,  111 => 45,  103 => 40,  94 => 34,  86 => 29,  78 => 24,  72 => 21,  62 => 14,  50 => 4,  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/index.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/registration/index.html.twig");
    }
}
