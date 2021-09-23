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
class __TwigTemplate_195fc8ba88a32d91a3ad98148c4a070e6a5085eeef87e951d449a08719ea301d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/profil.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 58), "flashbag", [], "any", false, false, false, 58), "get", [0 => "modification"], "method", false, false, false, 58));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 69), 'row', ["attr" => ["class" => "form-control"]]);
        echo "


                                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control"]]);
        echo "


                                                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sexe", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  239 => 149,  187 => 100,  170 => 86,  156 => 75,  150 => 72,  144 => 69,  139 => 67,  134 => 65,  128 => 63,  119 => 60,  116 => 59,  112 => 58,  108 => 57,  94 => 46,  50 => 4,  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/profil.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/registration/profil.html.twig");
    }
}
