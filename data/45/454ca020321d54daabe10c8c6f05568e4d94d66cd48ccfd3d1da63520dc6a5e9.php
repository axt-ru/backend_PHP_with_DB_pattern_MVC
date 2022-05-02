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

/* main.twig */
class __TwigTemplate_acf12de86875d9fcfe139af8fbb641789612f00d82628d15e69918da7bb5270e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "main.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" style=\"font-style: oblique;\" href=\"index.php\">Магазин новогодних открыток</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"menu\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=catalog&method=viewCatalog\">Главная
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=catalog&method=viewCatalog\">Каталог открыток</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 20
        if ((($context["user"] ?? null) == true)) {
            // line 21
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=getUser\">Личный кабинет</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=logout\">Выйти (";
            // line 25
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo ")</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t";
        if ((($context["user"] ?? null) == false)) {
            // line 29
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=login\">Войти</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=regUser\">Регистрация</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=product&method=viewBasket\">Корзина</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
";
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "\t<div id=\"body\">
\t    ";
        // line 46
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "
\t</div>
";
    }

    // line 50
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  121 => 50,  114 => 46,  111 => 45,  107 => 44,  96 => 36,  87 => 29,  84 => 28,  78 => 25,  72 => 21,  70 => 20,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block header %}
\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" style=\"font-style: oblique;\" href=\"index.php\">Магазин новогодних открыток</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"menu\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=catalog&method=viewCatalog\">Главная
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=catalog&method=viewCatalog\">Каталог открыток</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if user == true %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=getUser\">Личный кабинет</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=logout\">Выйти ({{user}})</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if user == false %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=login\">Войти</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=regUser\">Регистрация</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=product&method=viewBasket\">Корзина</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
{% endblock %}
{% block body %}
\t<div id=\"body\">
\t    {{text}}
\t</div>
{% endblock %}
        
{% block footer %}
\t{{ parent() }}
{% endblock %}
", "main.twig", "C:\\OpenServer\\domains\\lesson6\\view\\main.twig");
    }
}
