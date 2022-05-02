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

/* product.twig */
class __TwigTemplate_228cc5b897bba3923d1bbd2834e1c962ec209f291eb4d7dfc072c35ab8e44aa3 extends \Twig\Template
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
        return "main.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("main.twig", "product.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
    <div class=\"row\">
        <br>
        <br>
        <div class=\"col-lg-3\">
            <h3 class=\"my-4\" style=\"color: red;\">Онлайн-магазин</h3>
            ";
        // line 12
        if ((($context["userid"] ?? null) == null)) {
            // line 13
            echo "                <h6 class=\"my-4\">Для покупок новогодних открыток необходима регистрация на нашем сайте</h6>
            ";
        } else {
            // line 15
            echo "                <h4 class=\"my-4\">Обычный режим</h4>
                <h6 class=\"my-4\">Обычный аккаунт</h6>
            ";
        }
        // line 18
        echo "        </div>
            <div class=\"col-lg-9\">
                <h1 class=\"text-lg-center\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
                <div class=\"card mt-4\">
                    <img class=\"card-img-top img-fluid\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (("img/products/big/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 22)) . ".jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>
                        <h4 class=\"card-title\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 25), "html", null, true);
        echo " руб.</h4>
                        <p class=\"card-text\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
                        <br>
                        <h6>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_count", [], "any", false, false, false, 28), "html", null, true);
        echo " отзывов</h6>
                        <form method=\"post\" action=\"index.php?class=product&method=addToCart&id=";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\"/>
                            <input type=\"hidden\" name=\"hidden_name\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"hidden_price\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 32), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"hidden_id\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\" />
                            <input type=\"submit\" name=\"add_to_cart\" value=\"Купить\" class=\"btn btn-primary mb-2\" />
                        </form>
                    </div>
                    ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 37) == 0)) {
            // line 38
            echo "                        ";
            $context["score"] = "☆ ☆ ☆ ☆ ☆";
            // line 39
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 39) == 1)) {
            // line 40
            echo "                        ";
            $context["score"] = "★ ☆ ☆ ☆ ☆";
            // line 41
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 41) == 2)) {
            // line 42
            echo "                        ";
            $context["score"] = "★ ★ ☆ ☆ ☆";
            // line 43
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 43) == 3)) {
            // line 44
            echo "                        ";
            $context["score"] = "★ ★ ★ ☆ ☆";
            // line 45
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 45) == 4)) {
            // line 46
            echo "                        ";
            $context["score"] = "★ ★ ★ ★ ☆";
            // line 47
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 47) == 5)) {
            // line 48
            echo "                        ";
            $context["score"] = "★ ★ ★ ★ ★";
            // line 49
            echo "                    ";
        }
        // line 50
        echo "                    <div class=\"card-footer\">
                        <span class=\"text-warning\">";
        // line 51
        echo twig_escape_filter($this->env, ($context["score"] ?? null), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>
        <br>
        <br>
    </div>
    </div>
";
    }

    // line 60
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 61,  187 => 60,  174 => 51,  171 => 50,  168 => 49,  165 => 48,  162 => 47,  159 => 46,  156 => 45,  153 => 44,  150 => 43,  147 => 42,  144 => 41,  141 => 40,  138 => 39,  135 => 38,  133 => 37,  126 => 33,  122 => 32,  118 => 31,  113 => 29,  109 => 28,  104 => 26,  100 => 25,  96 => 24,  91 => 22,  86 => 20,  82 => 18,  77 => 15,  73 => 13,  71 => 12,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.twig\" %}
{% block header %}
    {{ parent() }}
{% endblock %}
{% block body %}
    <div class=\"container\">
    <div class=\"row\">
        <br>
        <br>
        <div class=\"col-lg-3\">
            <h3 class=\"my-4\" style=\"color: red;\">Онлайн-магазин</h3>
            {% if userid == NULL %}
                <h6 class=\"my-4\">Для покупок новогодних открыток необходима регистрация на нашем сайте</h6>
            {% else %}
                <h4 class=\"my-4\">Обычный режим</h4>
                <h6 class=\"my-4\">Обычный аккаунт</h6>
            {% endif %}
        </div>
            <div class=\"col-lg-9\">
                <h1 class=\"text-lg-center\">{{ title }}</h1>
                <div class=\"card mt-4\">
                    <img class=\"card-img-top img-fluid\" src=\"{{\"img/products/big/\" ~ product.id ~ \".jpg\"}}\" alt=\"\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">{{product.title}}</h3>
                        <h4 class=\"card-title\">{{product.price}} руб.</h4>
                        <p class=\"card-text\">{{product.description}}</p>
                        <br>
                        <h6>{{product.reviews_count}} отзывов</h6>
                        <form method=\"post\" action=\"index.php?class=product&method=addToCart&id={{product.id}}\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\"/>
                            <input type=\"hidden\" name=\"hidden_name\" value=\"{{product.title}}\" />
                            <input type=\"hidden\" name=\"hidden_price\" value=\"{{product.price}}\" />
                            <input type=\"hidden\" name=\"hidden_id\" value=\"{{product.id}}\" />
                            <input type=\"submit\" name=\"add_to_cart\" value=\"Купить\" class=\"btn btn-primary mb-2\" />
                        </form>
                    </div>
                    {% if      product.reviews_score == 0 %}
                        {% set score = \"☆ ☆ ☆ ☆ ☆\" %}
                    {% elseif  product.reviews_score == 1 %}
                        {% set score = \"★ ☆ ☆ ☆ ☆\" %}
                    {% elseif  product.reviews_score == 2 %}
                        {% set score = \"★ ★ ☆ ☆ ☆\" %}
                    {% elseif  product.reviews_score == 3 %}
                        {% set score = \"★ ★ ★ ☆ ☆\" %}
                    {% elseif  product.reviews_score == 4 %}
                        {% set score = \"★ ★ ★ ★ ☆\" %}
                    {% elseif  product.reviews_score == 5 %}
                        {% set score = \"★ ★ ★ ★ ★\" %}
                    {% endif %}
                    <div class=\"card-footer\">
                        <span class=\"text-warning\">{{score}}</span>
                    </div>
                </div>
            </div>
        <br>
        <br>
    </div>
    </div>
{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}



", "product.twig", "C:\\OpenServer\\domains\\lesson6\\view\\product.twig");
    }
}
