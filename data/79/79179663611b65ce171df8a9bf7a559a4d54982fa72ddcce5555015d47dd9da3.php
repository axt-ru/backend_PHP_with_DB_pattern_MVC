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

/* base.twig */
class __TwigTemplate_2d282678f120dceeb3fa69464871a58124126c56f3269961e5f28bbabb8eb132 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Онлайн-магазин открыток</title>
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/style.css\" />
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/webshop.css\" rel=\"stylesheet\">
</head>
<body>
    <div class=\"wrapper\" id=\"wrapper\">
        <div id=\"header\">
           ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "        </div>
        <div id=\"body\">
           ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
        // line 33
        echo "        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
</body>
</html>";
    }

    // line 16
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "               <p>А это  ! base.twig</p>
           ";
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "               <p>А это боди ! base.twig</p>
           ";
    }

    // line 26
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                <footer class=\"py-5 bg-dark\">
                    <div class=\"container\">
                        <p class=\"m-0 text-left text-white\">Магазин новогодних открыток © 2022 г. </p>
                    </div>
                </footer>
            ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  99 => 26,  94 => 22,  90 => 21,  85 => 17,  81 => 16,  71 => 33,  69 => 26,  65 => 24,  63 => 21,  59 => 19,  57 => 16,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Онлайн-магазин открыток</title>
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/style.css\" />
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/webshop.css\" rel=\"stylesheet\">
</head>
<body>
    <div class=\"wrapper\" id=\"wrapper\">
        <div id=\"header\">
           {% block header %}
               <p>А это  ! base.twig</p>
           {% endblock %}
        </div>
        <div id=\"body\">
           {% block body %}
               <p>А это боди ! base.twig</p>
           {% endblock %}
        </div>
        <div id=\"footer\">
            {% block footer %}
                <footer class=\"py-5 bg-dark\">
                    <div class=\"container\">
                        <p class=\"m-0 text-left text-white\">Магазин новогодних открыток © 2022 г. </p>
                    </div>
                </footer>
            {% endblock %}
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
</body>
</html>", "base.twig", "C:\\OpenServer\\domains\\lesson6\\view\\base.twig");
    }
}
