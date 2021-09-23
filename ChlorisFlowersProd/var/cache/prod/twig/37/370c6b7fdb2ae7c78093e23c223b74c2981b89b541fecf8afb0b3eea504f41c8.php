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
class __TwigTemplate_ea9abf02c3e3757d6036349f0da3e49f444956e8923943a58a87e33ab7966183 extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/editProduct.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 21), 'row');
        echo "

                            <form class=\"user\">
                                <div class=\"form-group \">
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prodcutName", [], "any", false, false, false, 25), 'label', ["label" => "Product name"]);
        echo "
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prodcutName", [], "any", false, false, false, 26), 'errors');
        echo "


                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prodcutName", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "boxSize", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Taille du box"]]);
        echo "

                                    </div>
                                    <div class=\"col-sm-6\">
                                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "boxColor", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur du box"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descriptionBox", [], "any", false, false, false, 42), 'label', ["label" => "Description du box"]);
        echo "


                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descriptionBox", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Ecrivez une déscription du box"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 49), 'label', ["label" => "Image du produit"]);
        echo "
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 50), 'errors');
        echo "

                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFileHaut", [], "any", false, false, false, 56), 'label', ["label" => "Image haut du produit"]);
        echo "

                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFileHaut", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image haut du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">

                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "roseNumber", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nombre des roses"]]);
        echo "

                                    </div>
                                    <div class=\"col-sm-6\">

                                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "roseColor", [], "any", false, false, false, 69), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur des roses"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 74), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Categorie"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 78), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prix"]]);
        echo "

                                </div>

                                <div class=\"form-group \">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "stock", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "stock"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "



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
        return "admin/editProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 102,  182 => 83,  174 => 78,  167 => 74,  159 => 69,  151 => 64,  142 => 58,  137 => 56,  130 => 52,  125 => 50,  121 => 49,  114 => 45,  108 => 42,  101 => 38,  94 => 34,  86 => 29,  80 => 26,  76 => 25,  69 => 21,  65 => 20,  50 => 7,  46 => 6,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/editProduct.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/admin/editProduct.html.twig");
    }
}
