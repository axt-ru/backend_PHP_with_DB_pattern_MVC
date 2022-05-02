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

/* catalog.twig */
class __TwigTemplate_ced9a739a0053fbf6afbe1d842075c1321e0e8185db8f4ed0ca6fcd9449d4ff4 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.twig", "catalog.twig", 1);
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
        echo "<div class=\"container\">
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
        <h2 class=\"text-lg-center\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
    <div class=\"row\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 23
            echo "            <div class=\"col-lg-4 col-md-6 mb-4\">
                <div class=\"card h-100\">
                    <a href=\"index.php?class=product&method=viewItem&id=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, (("img/products/small/" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 25)) . ".jpg"), "html", null, true);
            echo "\" alt=\"\" width=\"100\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27), "html", null, true);
            echo " руб.</h4>
                        <a href=\"index.php?class=product&method=viewItem&id=";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</a>
                        <p>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "short_description", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                        <br>
                        <h6>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "reviews_count", [], "any", false, false, false, 31), "html", null, true);
            echo " отзывов</h6>
                        <form method=\"post\" action=\"index.php?class=product&method=addToCart&id=";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\"/>
                            <input type=\"hidden\" name=\"hidden_name\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo "\" />
                            <input type=\"hidden\" name=\"hidden_price\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35), "html", null, true);
            echo "\" />
                            <input type=\"hidden\" name=\"hidden_id\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" />
                            <input type=\"submit\" name=\"add_to_cart\" value=\"Купить\" class=\"btn btn-primary mb-2\" />
                        </form>
                    </div>
                    ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 40) == 0)) {
                // line 41
                echo "                        ";
                $context["score"] = "☆ ☆ ☆ ☆ ☆";
                // line 42
                echo "                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 42) == 1)) {
                // line 43
                echo "                        ";
                $context["score"] = "★ ☆ ☆ ☆ ☆";
                // line 44
                echo "                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 44) == 2)) {
                // line 45
                echo "                        ";
                $context["score"] = "★ ★ ☆ ☆ ☆";
                // line 46
                echo "                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 46) == 3)) {
                // line 47
                echo "                        ";
                $context["score"] = "★ ★ ★ ☆ ☆";
                // line 48
                echo "                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 48) == 4)) {
                // line 49
                echo "                        ";
                $context["score"] = "★ ★ ★ ★ ☆";
                // line 50
                echo "                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 50) == 5)) {
                // line 51
                echo "                        ";
                $context["score"] = "★ ★ ★ ★ ★";
                // line 52
                echo "                    ";
            }
            // line 53
            echo "                    <div class=\"card-footer\">
                        <span class=\"text-warning\">";
            // line 54
            echo twig_escape_filter($this->env, ($context["score"] ?? null), "html", null, true);
            echo "</span>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </div>
    </div>
    </div>
</div>
";
    }

    // line 64
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 65,  205 => 64,  197 => 59,  186 => 54,  183 => 53,  180 => 52,  177 => 51,  174 => 50,  171 => 49,  168 => 48,  165 => 47,  162 => 46,  159 => 45,  156 => 44,  153 => 43,  150 => 42,  147 => 41,  145 => 40,  138 => 36,  134 => 35,  130 => 34,  125 => 32,  121 => 31,  116 => 29,  110 => 28,  106 => 27,  99 => 25,  95 => 23,  91 => 22,  86 => 20,  82 => 18,  77 => 15,  73 => 13,  71 => 12,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
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
        <h2 class=\"text-lg-center\">{{ title }}</h2>
    <div class=\"row\">
        {% for product in products %}
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <div class=\"card h-100\">
                    <a href=\"index.php?class=product&method=viewItem&id={{product.id}}\"><img class=\"card-img-top\" src=\"{{\"img/products/small/\" ~ product.id ~ \".jpg\"}}\" alt=\"\" width=\"100\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{product.price}} руб.</h4>
                        <a href=\"index.php?class=product&method=viewItem&id={{product.id}}\">{{product.title}}</a>
                        <p>{{product.short_description}}</p>
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
        {% endfor %}
    </div>
    </div>
    </div>
</div>
{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}



", "catalog.twig", "C:\\OpenServer\\domains\\lesson6\\view\\catalog.twig");
    }
}
