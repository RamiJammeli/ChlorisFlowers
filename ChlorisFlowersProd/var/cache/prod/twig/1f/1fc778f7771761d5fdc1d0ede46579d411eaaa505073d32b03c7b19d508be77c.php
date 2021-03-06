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

/* accueil/aboutUs.html.twig */
class __TwigTemplate_eff7e938c425486baec9d180890aa05b56746c724335373ab06868246285f0b5 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "accueil/aboutUs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <br>
    <br>
    <div class=\"about-us-brief-area margin-bottom-60 mobile-mb-30 tab-mb-40\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title-area section-title-width text-center\">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/CF.png"), "html", null, true);
        echo "\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">DERRI??RE LA MARQUE</h2>
                            </div>
                        </div>
                        <p style=\"letter-spacing: 1px;\">Ines Chouchi et Eya khamassi,  deux ing??nieurs agronomes,  elles ont toujours voulu entreprendre. C?????tait pour elles une ??vidence et tout a commenc?? ?? la fin de leurs ??tudes ensemble ?? l'??ge de 25 ans.
                        </p>
                        <p style=\"letter-spacing: 1px;\" >La passion des deux jeunes entrepreneuses pour le design d???emballage et l???expertise dans le domaine de la fleuristerie se sont traduites par le d??veloppement de produits exceptionnels qui ??merveillent les clients.
                            CHLORIS Flowers a commenc?? dans l'appartement de Eya. Au d??but, Ines et Eya ont confectionn?? les bo??tes, arrang?? et livr?? toutes les roses . Au fur et ?? mesure que l'entreprise gagnait en popularit??, elles ont pu embaucher une ??quipe soud??e de personnes inspir??es et cr??atives pour soutenir la marque en pleine croissance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our exclusive service area end -->
    <div class=\"about-us-brief-area margin-bottom-60 mobile-mb-30 tab-mb-40\">
        <div class=\"floating-icon\" id=\"service_info_item\">
            <div class=\"floating-icon__is floating-icon-info\">
                <i class=\"fa fa-phone\"></i>
            </div>
            <!--floating-icon-is-->
            <div class=\"floating-icon__is floating-icon-message\">
                <i class=\"fa fa-envelope\"></i>
            </div>
            <!--floating-icon-is-->
            <div class=\"floating-icon__is floating-icon-location\">
                <i class=\"fa fa-info-circle\"></i>
            </div>
            <!--floating-icon-is-->
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title-area section-title-width text-center\">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/CF.png"), "html", null, true);
        echo "\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">SIGNIFICATION DERRI??RE LE NOM CHLORIS Flowers</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"our-exclusive-services-inner margin-bottom-115 mobile-mb-50 tab-mb-80\">
                <div class=\"row custom-gutter\">
                    <div class=\"col-xl-6 col-lg-12 col-md-12\">
                        <div class=\"our-exclusive-services-brief\">
                            <div class=\"row\">
                                <div class=\"col-xl-6 col-lg-6 col-md-6\">
                                    <div class=\"our-exclusive-services-brief-inner\">

                                    </div>
                                </div>
                                <div class=\"col-xl-6 col-lg-6 col-md-6\">
                                    <div class=\"our-exclusive-services-brief-inner\">
                                        <br><br><br>
                                        <br>
                                        <p>Tout a commenc?? le jour o?? Z??phyr, le Vent de l???Ouest, souffle sur les ??les Fortun??es et aper??oit la nymphe Chloris. Le souffle coup?? par sa beaut??, le dieu est frapp?? en plein c??ur et enl??ve Chloris, l???emmenant dans les airs.
                                            Conscient de son acte, Z??phyr demande en mariage la nymphe pour officialiser leur liaison. Elle accepte et son ??poux divin lui offre trois cadeaux exceptionnels: l???immortalit?? ?? sa beaut??, le pouvoir de faire fleurir les plantes et enfin, il lui cr??e un jardin o?? pousse une fleur magique capable de rendre fertile, m??me une femme st??rile et depuis, Chloris est devenue la d??esse des fleurs.
                                            Quand les jeunes Narcisse, Crocus ou d???autres meurent tragiquement, les dieux appellent la d??esse pour les transformer en fleur qui porte d??sormais leur nom. C???est aussi en tombant sur le corps sans vie d???une nymphe qu???elle a l???id??e de s???en servir pour cr??er la reine des fleurs : la rose.
                                            Cette fleur qui a re??u sa beaut?? ??  l???aide d???Aphrodite, d??esse de l???amour, son d??licieux parfum de Dionysos, dieu du vin. Quant ?? son charme, son ??clat et sa joie, c'??taient gr??ce aux trois Charites, les d??esses de la gr??ce.
                                            Ce mythe est notre source d'inspiration. Moderne et  simple, le nom de la marque indique que, m??me si nous sommes loin de l?????poque de la d??esse des fleurs, nous ne manquons pas ses normes et ses valeurs.
                                            CHLORIS Flowers vous invite ?? partager l???histoire de la d??esse, son symbolisme, son amour ?? Z??phir, son admiration au printemps et d??couvrir son empire des fleurs.


                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-12 col-md-12 \">
                        <div class=\"custom-content-image s-laptop-mb-100 text-center\" >
                            <div class=\"img-shape\" >
                                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/chlorisD.png"), "html", null, true);
        echo "\" alt=\"D??esse Chloris\" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"about-us-brief-area margin-bottom-60 mobile-mb-30 tab-mb-40\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title-area section-title-width text-center\">
                        <div class=\"section-title section-title-2\">
                            <div class=\"icon\">
                                <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/CF.png"), "html", null, true);
        echo "\" alt=\"Bloom\">
                            </div>
                            <div class=\"title-text\">
                                <h2 class=\"title\">DERRI??RE LA MARQUE</h2>
                            </div>
                        </div>
                        <p style=\"letter-spacing: 1px;\">Parce que le bonheur ne se fabrique pas en s??rie, il est artisanal : nox flowerbox sont handmade. Nous attachons tant d'importance ?? l'exp??rience de nos chers clients, nous pr??tons bien s??r attention ?? une production pr??cise ?? la main et ?? chaque petit d??tail avec tous nos produits.
                        </p>
                        <p>
                            <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/about1.jpg"), "html", null, true);
        echo "\">
                        </p>
                        <p style=\"letter-spacing: 1px;\" >Chaque produit de CHLORIS Flowers est une association des bo??tes de cr??ateurs confectionn??es ?? la main et de l???art floral dans un th??me unique.
                            Chaque pi??ce est vraiment un bijou, faite de mat??riaux de haute qualit?? et de beaucoup de d??vouement.
                        </p>
                        <p>
                            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/about2.jpg"), "html", null, true);
        echo "\">
                        </p>
                        <p style=\"letter-spacing: 1px;\" >La fra??cheur des produits est garantie par la proximit?? de l???ensemble des partenaires fournisseurs, leurs valeurs humaines et leur professionnalisme.
                        </p>
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
        return "accueil/aboutUs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 125,  177 => 119,  165 => 110,  147 => 95,  103 => 54,  61 => 15,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "accueil/aboutUs.html.twig", "/home/chloriq/www/ChlorisFlowersProd/templates/accueil/aboutUs.html.twig");
    }
}
