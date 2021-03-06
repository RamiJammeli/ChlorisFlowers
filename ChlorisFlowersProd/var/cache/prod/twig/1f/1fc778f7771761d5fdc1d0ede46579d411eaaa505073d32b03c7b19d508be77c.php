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
                                <h2 class=\"title\">DERRIÉRE LA MARQUE</h2>
                            </div>
                        </div>
                        <p style=\"letter-spacing: 1px;\">Ines Chouchi et Eya khamassi,  deux ingénieurs agronomes,  elles ont toujours voulu entreprendre. C’était pour elles une évidence et tout a commencé à la fin de leurs études ensemble à l'âge de 25 ans.
                        </p>
                        <p style=\"letter-spacing: 1px;\" >La passion des deux jeunes entrepreneuses pour le design d’emballage et l’expertise dans le domaine de la fleuristerie se sont traduites par le développement de produits exceptionnels qui émerveillent les clients.
                            CHLORIS Flowers a commencé dans l'appartement de Eya. Au début, Ines et Eya ont confectionné les boîtes, arrangé et livré toutes les roses . Au fur et à mesure que l'entreprise gagnait en popularité, elles ont pu embaucher une équipe soudée de personnes inspirées et créatives pour soutenir la marque en pleine croissance.
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
                                <h2 class=\"title\">SIGNIFICATION DERRIÈRE LE NOM CHLORIS Flowers</h2>
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
                                        <p>Tout a commencé le jour où Zéphyr, le Vent de l’Ouest, souffle sur les îles Fortunées et aperçoit la nymphe Chloris. Le souffle coupé par sa beauté, le dieu est frappé en plein cœur et enlève Chloris, l’emmenant dans les airs.
                                            Conscient de son acte, Zéphyr demande en mariage la nymphe pour officialiser leur liaison. Elle accepte et son époux divin lui offre trois cadeaux exceptionnels: l’immortalité à sa beauté, le pouvoir de faire fleurir les plantes et enfin, il lui crée un jardin où pousse une fleur magique capable de rendre fertile, même une femme stérile et depuis, Chloris est devenue la déesse des fleurs.
                                            Quand les jeunes Narcisse, Crocus ou d’autres meurent tragiquement, les dieux appellent la déesse pour les transformer en fleur qui porte désormais leur nom. C’est aussi en tombant sur le corps sans vie d’une nymphe qu’elle a l’idée de s’en servir pour créer la reine des fleurs : la rose.
                                            Cette fleur qui a reçu sa beauté à  l’aide d’Aphrodite, déesse de l’amour, son délicieux parfum de Dionysos, dieu du vin. Quant à son charme, son éclat et sa joie, c'étaient grâce aux trois Charites, les déesses de la grâce.
                                            Ce mythe est notre source d'inspiration. Moderne et  simple, le nom de la marque indique que, même si nous sommes loin de l’époque de la déesse des fleurs, nous ne manquons pas ses normes et ses valeurs.
                                            CHLORIS Flowers vous invite à partager l’histoire de la déesse, son symbolisme, son amour à Zéphir, son admiration au printemps et découvrir son empire des fleurs.


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
        echo "\" alt=\"Déesse Chloris\" >
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
                                <h2 class=\"title\">DERRIÉRE LA MARQUE</h2>
                            </div>
                        </div>
                        <p style=\"letter-spacing: 1px;\">Parce que le bonheur ne se fabrique pas en série, il est artisanal : nox flowerbox sont handmade. Nous attachons tant d'importance à l'expérience de nos chers clients, nous prêtons bien sûr attention à une production précise à la main et à chaque petit détail avec tous nos produits.
                        </p>
                        <p>
                            <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/about1.jpg"), "html", null, true);
        echo "\">
                        </p>
                        <p style=\"letter-spacing: 1px;\" >Chaque produit de CHLORIS Flowers est une association des boîtes de créateurs confectionnées à la main et de l’art floral dans un thème unique.
                            Chaque pièce est vraiment un bijou, faite de matériaux de haute qualité et de beaucoup de dévouement.
                        </p>
                        <p>
                            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/about2.jpg"), "html", null, true);
        echo "\">
                        </p>
                        <p style=\"letter-spacing: 1px;\" >La fraîcheur des produits est garantie par la proximité de l’ensemble des partenaires fournisseurs, leurs valeurs humaines et leur professionnalisme.
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
