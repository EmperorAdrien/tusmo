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

/* home/home.html.twig */
class __TwigTemplate_86f78d5c5445a89e2245fb8799327591 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        // line 3
        $this->displayBlock('style', $context, $blocks);
        // line 88
        echo "
</head>
    
";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>TUSMO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #006699;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        a {
            color: black;
            text-decoration: none; /* no underline */
        }

        .container {
            width: 400px;
            background-color: #006699;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        ";
        // line 38
        echo "
        .header {
            background-color: #E74D50;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 40px;
            font-size: 60px; /* Augmentation de la taille */
            text-shadow: 2px 2px 4px #000; /* Effet d'ombre portée */
            letter-spacing: 2px; /* Espacement des lettres */
            font-weight: bold; /* Gras */
            color: #FFF; /* Couleur du texte en blanc pour un contraste */
            font-family: 'Georgia', serif; /* Changement de police */
        }


        .homebutton {
            text-align: center;
            background-color: #FFFFFF;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
            filter: drop-shadow(0px 8px #000000);
            font-size : 30px;
        }

        .homebutton:hover {
            background-color : #009999;
            -webkit-transition: all 0.2s ease-in-out;
        }

        .icons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            width: 80%;
            filter: drop-shadow(0px 8px);
        }

        .icon {
            width: 24px;
            height: 24px;
        }

    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "    <body>
        <div class=\"container\">
            ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94)) {
            // line 95
            echo "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "userIdentifier", [], "any", false, false, false, 96), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                </div>
            ";
        }
        // line 99
        echo "            <div class=\"header\">TUSMO</div>

            <a class=\"homebutton\" href=\"/daily\">DAILY WORD</a>
            <a class=\"homebutton\" href=\"/dailystreak\">DAILY STREAK</a>
            <a class=\"homebutton\" href=\"/solo\">SOLO</a>
            <a class=\"homebutton\" href=\"/multiplayer\">MULTIPLAYER</a>

            <div class=\"icons\">
                <img src=\"path_to_settings_icon.png\" alt=\"Settings\" class=\"icon\">
                <img src=\"path_to_sound_icon.png\" alt=\"Sound\" class=\"icon\">
                <img src=\"path_to_video_icon.png\" alt=\"Video\" class=\"icon\">
                <img src=\"path_to_flag_icon.png\" alt=\"Flag\" class=\"icon\">
            </div>
        </div>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  187 => 99,  179 => 96,  176 => 95,  174 => 94,  170 => 92,  160 => 91,  101 => 38,  72 => 4,  62 => 3,  52 => 91,  47 => 88,  45 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/home/home.html.twig #}
{# <h1>Your lucky number is {{ number }}</h1> #}
{% block style %}
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>TUSMO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #006699;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        a {
            color: black;
            text-decoration: none; /* no underline */
        }

        .container {
            width: 400px;
            background-color: #006699;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        {# .header {
            background-color: #E74D50;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 40px;
            font-size : 50px;
        } #}

        .header {
            background-color: #E74D50;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 40px;
            font-size: 60px; /* Augmentation de la taille */
            text-shadow: 2px 2px 4px #000; /* Effet d'ombre portée */
            letter-spacing: 2px; /* Espacement des lettres */
            font-weight: bold; /* Gras */
            color: #FFF; /* Couleur du texte en blanc pour un contraste */
            font-family: 'Georgia', serif; /* Changement de police */
        }


        .homebutton {
            text-align: center;
            background-color: #FFFFFF;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
            filter: drop-shadow(0px 8px #000000);
            font-size : 30px;
        }

        .homebutton:hover {
            background-color : #009999;
            -webkit-transition: all 0.2s ease-in-out;
        }

        .icons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            width: 80%;
            filter: drop-shadow(0px 8px);
        }

        .icon {
            width: 24px;
            height: 24px;
        }

    </style>
    {% endblock %}

</head>
    
{% block body %}
    <body>
        <div class=\"container\">
            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            {% endif %}
            <div class=\"header\">TUSMO</div>

            <a class=\"homebutton\" href=\"/daily\">DAILY WORD</a>
            <a class=\"homebutton\" href=\"/dailystreak\">DAILY STREAK</a>
            <a class=\"homebutton\" href=\"/solo\">SOLO</a>
            <a class=\"homebutton\" href=\"/multiplayer\">MULTIPLAYER</a>

            <div class=\"icons\">
                <img src=\"path_to_settings_icon.png\" alt=\"Settings\" class=\"icon\">
                <img src=\"path_to_sound_icon.png\" alt=\"Sound\" class=\"icon\">
                <img src=\"path_to_video_icon.png\" alt=\"Video\" class=\"icon\">
                <img src=\"path_to_flag_icon.png\" alt=\"Flag\" class=\"icon\">
            </div>
        </div>
    </body>
{% endblock %}", "home/home.html.twig", "/var/www/templates/home/home.html.twig");
    }
}
