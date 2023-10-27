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
class __TwigTemplate_8537dcea5d95e323a51f25df0262c68b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        // line 3
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

        .header {
            background-color: #E74D50;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 40px;
            font-size : 50px;
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

</head>

<body>
    <div class=\"container\">
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
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/home/home.html.twig #}
{# <h1>Your lucky number is {{ number }}</h1> #}
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

        .header {
            background-color: #E74D50;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 40px;
            font-size : 50px;
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

</head>

<body>
    <div class=\"container\">
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
</html>
", "home/home.html.twig", "/var/www/templates/home/home.html.twig");
    }
}
