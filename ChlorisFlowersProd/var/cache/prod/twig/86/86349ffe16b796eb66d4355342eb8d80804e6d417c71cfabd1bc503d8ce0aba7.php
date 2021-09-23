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
class __TwigTemplate_703ef12b1e5027330fb7fd585d2f512f68835cc808a28953e6ddf040042b8cc8 extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/addProduct.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 20), 'row');
        echo "

                            <form class=\"user\">
                                    <div class=\"form-group \">
                                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prodcutName", [], "any", false, false, false, 24), 'label', ["label" => "Product name"]);
        echo "
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prodcutName", [], "any", false, false, false, 25), 'errors');
        echo "


                                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prodcutName", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom du produit"]]);
        echo "

                                    </div>
                                    <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "boxSize", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Taille du box"]]);
        echo "

                                    </div>
                                        <div class=\"col-sm-6\">
                                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "boxColor", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur du box"]]);
        echo "
                                    </div>
                                    </div>
                                <div class=\"form-group \">
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descriptionBox", [], "any", false, false, false, 41), 'label', ["label" => "Description du box"]);
        echo "


                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descriptionBox", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Ecrivez une déscription du box"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 48), 'label', ["label" => "Image du produit"]);
        echo "
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 49), 'errors');
        echo "

                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFileHaut", [], "any", false, false, false, 55), 'label', ["label" => "Image haut du produit"]);
        echo "

                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFileHaut", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image haut du produit"]]);
        echo "

                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-sm-0\">

                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "roseNumber", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nombre des roses"]]);
        echo "

                                </div>
                                    <div class=\"col-sm-6\">

                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "roseColor", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Couleur des roses"]]);
        echo "

                                </div>
                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Categorie"]]);
        echo "

                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 77), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prix"]]);
        echo "

                                </div>

                                <div class=\"form-group \">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "stock", [], "any", false, false, false, 82), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "stock"]]);
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
        return "admin/addProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 101,  182 => 82,  174 => 77,  167 => 73,  159 => 68,  151 => 63,  142 => 57,  137 => 55,  130 => 51,  125 => 49,  121 => 48,  114 => 44,  108 => 41,  101 => 37,  94 => 33,  86 => 28,  80 => 25,  76 => 24,  69 => 20,  65 => 19,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/addProduct.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/admin/addProduct.html.twig");
    }
}
