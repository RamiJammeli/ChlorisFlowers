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

/* registration/emailBody.html.twig */
class __TwigTemplate_263939043c241116613dfce7fb847942d6b74935d21ac494278249dd295e5677 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/emailBody.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/emailBody.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <style type=\"text/css\">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*=\"margin: 16px 0;\"] {
            margin: 0 !important;
        }
    </style>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>

</head>

<body style=\"background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;\">
<!-- HIDDEN PREHEADER TEXT -->
<div style=\"display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;\"> We're thrilled to have you here! Get ready to dive into your new account. </div>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
    <!-- LOGO -->
    <tr>
        <td bgcolor=\"#ffdaba\" align=\"center\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                <tr>
                    <td align=\"center\" valign=\"top\" style=\"padding: 40px 10px 40px 10px;\"> </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor=\"#ffdaba\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"center\" valign=\"top\" style=\"padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;\">
                        ";
        // line 125
        if ((0 === twig_compare((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 125, $this->source); })()), "2"))) {
            // line 126
            echo "                        <h1 style=\"font-size: 48px; font-weight: 400; margin: 2;\">Bienvenue Monsieur ";
            echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 126, $this->source); })()), "html", null, true);
            echo "</h1>
                        ";
        } elseif ((0 === twig_compare(        // line 127
(isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 127, $this->source); })()), "1"))) {
            // line 128
            echo "                        <h1 style=\"font-size: 48px; font-weight: 400; margin: 2;\">Bienvenue Madame ";
            echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "</h1>
                        ";
        }
        // line 130
        echo "                        <img src=\"https://i.ibb.co/GT87KFb/logo1.png\" width=\"125\" height=\"120\" style=\"display: block; border: 0px;\" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor=\"#f4f4f4\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\">Nous sommes ravis de vous voir sur notre site. Tout d'abord, vous devez confirmer votre compte. Appuyez simplement sur le bouton ci-dessous.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"center\" style=\"padding: 20px 30px 60px 30px;\">
                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td align=\"center\" style=\"border-radius: 3px;\" bgcolor=\"#ffdaba\"><a href=\"https://www.chloris-flowers.com\" target=\"_blank\" style=\"font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #807b7b; text-decoration: none;  padding: 15px 25px; border-radius: 2px; border: 1px solid #ffdaba; display: inline-block;\">Confirm Account</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> <!-- COPY -->
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 0px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\">Si cela ne fonctionne pas, copiez et collez le lien suivant dans votre navigateur:</p>
                    </td>
                </tr> <!-- COPY -->
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 20px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\"><a href=\"https://www.chloris-flowers.com/\" target=\"_blank\" style=\"color: #d98b58;\">https://www.chloris-flowers.com</a></p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\">Si vous avez des questions, répondez simplement à cet e-mail. Nous serons toujours ravis de vous aider.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\">Merci d’avoir fait confiance à <a href=\"https://www.chloris-flowers.com\"  style=\"color: #d98b58;\"> chloris-flowers.com </a>,<br>Chloris team </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>


</table>
</body>

<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/emailBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 130,  178 => 128,  176 => 127,  171 => 126,  169 => 125,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <style type=\"text/css\">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*=\"margin: 16px 0;\"] {
            margin: 0 !important;
        }
    </style>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>

</head>

<body style=\"background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;\">
<!-- HIDDEN PREHEADER TEXT -->
<div style=\"display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;\"> We're thrilled to have you here! Get ready to dive into your new account. </div>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
    <!-- LOGO -->
    <tr>
        <td bgcolor=\"#ffdaba\" align=\"center\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                <tr>
                    <td align=\"center\" valign=\"top\" style=\"padding: 40px 10px 40px 10px;\"> </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor=\"#ffdaba\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"center\" valign=\"top\" style=\"padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;\">
                        {% if sexe=='2' %}
                        <h1 style=\"font-size: 48px; font-weight: 400; margin: 2;\">Bienvenue Monsieur {{ nom }}</h1>
                        {% elseif sexe=='1' %}
                        <h1 style=\"font-size: 48px; font-weight: 400; margin: 2;\">Bienvenue Madame {{ nom }}</h1>
                        {% endif %}
                        <img src=\"https://i.ibb.co/GT87KFb/logo1.png\" width=\"125\" height=\"120\" style=\"display: block; border: 0px;\" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor=\"#f4f4f4\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\">Nous sommes ravis de vous voir sur notre site. Tout d'abord, vous devez confirmer votre compte. Appuyez simplement sur le bouton ci-dessous.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"center\" style=\"padding: 20px 30px 60px 30px;\">
                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td align=\"center\" style=\"border-radius: 3px;\" bgcolor=\"#ffdaba\"><a href=\"https://www.chloris-flowers.com\" target=\"_blank\" style=\"font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #807b7b; text-decoration: none;  padding: 15px 25px; border-radius: 2px; border: 1px solid #ffdaba; display: inline-block;\">Confirm Account</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> <!-- COPY -->
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 0px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\">Si cela ne fonctionne pas, copiez et collez le lien suivant dans votre navigateur:</p>
                    </td>
                </tr> <!-- COPY -->
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 20px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\"><a href=\"https://www.chloris-flowers.com/\" target=\"_blank\" style=\"color: #d98b58;\">https://www.chloris-flowers.com</a></p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\">Si vous avez des questions, répondez simplement à cet e-mail. Nous serons toujours ravis de vous aider.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
                        <p style=\"margin: 0;\">Merci d’avoir fait confiance à <a href=\"https://www.chloris-flowers.com\"  style=\"color: #d98b58;\"> chloris-flowers.com </a>,<br>Chloris team </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>


</table>
</body>

<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<<<<<<< HEAD
</html>", "registration/emailBody.html.twig", "C:\\Users\\elee\\Documents\\smartleap\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\registration\\emailBody.html.twig");
=======
</html>", "registration/emailBody.html.twig", "C:\\Users\\ramij\\OneDrive\\Documents\\Smartleap2\\ChlorisFlowers\\ChlorisFlowersProd\\templates\\registration\\emailBody.html.twig");
>>>>>>> e7019b5435f71a0de8fadee0035ccae69f560518
    }
}
