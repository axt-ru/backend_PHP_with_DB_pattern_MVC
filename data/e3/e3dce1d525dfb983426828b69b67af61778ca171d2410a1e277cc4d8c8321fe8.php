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

/* basket.twig */
class __TwigTemplate_5a987900d4842ed1f2a6d6430a1a94fe58b0d271a9d8e374800c3d7354aae139 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.twig", "basket.twig", 1);
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
        <h1 class=\"my-4\">Онлайн-магазин</h1>
        ";
        // line 12
        if ((($context["userid"] ?? null) == null)) {
            // line 13
            echo "            <h6 class=\"my-4\">Для покупок новогодних открыток необходима регистрация на нашем сайте</h6>
        ";
        } else {
            // line 15
            echo "            <h4 class=\"my-4\">Обычный режим</h4>
            <h6 class=\"my-4\">Обычный аккаунт</h6>
        ";
        }
        // line 18
        echo "    </div>
    <div class=\"col-lg-9\">
        <h1 class=\"my-4\">Корзина</h1>
        <div style=\"clear:both\"></div>
        <br />
        ";
        // line 23
        $context["sum"] = 0;
        // line 24
        echo "        ";
        if (twig_test_empty(($context["products"] ?? null))) {
            // line 25
            echo "
        <tr>
            <td colspan=\"5\" align=\"center\" class=\"my-4\">В корзине пока нет товаров.</td>
        </tr>

        ";
        } elseif ((        // line 30
($context["num"] ?? null) > 1)) {
            // line 31
            echo "        <h3>Подробная информация</h3>
        <div class=\"table-responsive\">
            <div align=\"right\">
                <a href=\"index.php?class=product&method=clearCart&user=";
            // line 34
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\"><b>Очистить корзину</b></a>
            </div>

            <table class=\"table table-bordered\">
                <tr>
                    <th width=\"30%\">Название</th>
                    <th width=\"10%\" align=\"center\">Количество</th>
                    <th width=\"15%\" align=\"center\">Цена</th>
                    <th width=\"25%\" align=\"center\">Всего</th>
                    <th width=\"5%\" align=\"center\">Добавить</th>
                    <th width=\"5%\" align=\"center\">Удалить</th>
                </tr>
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 47
                echo "                <tr>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "good_title", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                    <td align=\"center\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                    <td align=\"center\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50), "html", null, true);
                echo " руб.</td>
                    <td align=\"center\">";
                // line 51
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 51) * twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51)), "html", null, true);
                echo " руб.</td>
                    <td align=\"center\"><a href=\"index.php?class=product&method=addToCart&id=";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_good", [], "any", false, false, false, 52), "html", null, true);
                echo "&user=";
                echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                echo "\"><span class=\"btn btn-primary mb-2\">+</span></a></td>
                    <td align=\"center\"><a href=\"index.php?class=product&method=deleteFromCart&id=";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_good", [], "any", false, false, false, 53), "html", null, true);
                echo "&user=";
                echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                echo "\"><span class=\"btn btn-primary mb-2\">-</span></a></td>
                </tr>
                    ";
                // line 55
                $context["sum"] = (($context["sum"] ?? null) + (twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 55) * twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55)));
                // line 56
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                <tr>
                    <td colspan=\"3\" align=\"right\">Всего</td>
                    <td align=\"center\">";
            // line 59
            echo twig_escape_filter($this->env, ($context["sum"] ?? null), "html", null, true);
            echo " руб.</td>
                    <td></td>
                </tr>
            </table>
            <form action=\"index.php?class=product&method=viewOrder&user=";
            // line 63
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\" method=\"post\" name=\"cart\">
                <div class=\"form-group mt-4 mb-0\">
                    <input type=\"submit\" class=\"btn btn-primary btn-block\" name=\"order\" value=\"Оформить заказ\"/>
                </div>
                <br>
            </form>
        </div>
            ";
        } else {
            // line 71
            echo "                <h3>Подробная информация</h3>
                <div class=\"table-responsive\">
                    <div align=\"right\">
                        <a href=\"index.php?class=product&method=clearCart&user=";
            // line 74
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\"><b>Очистить корзину</b></a>
                    </div>

                    <table class=\"table table-bordered\">
                        <tr>
                            <th width=\"30%\">Название</th>
                            <th width=\"10%\" align=\"center\">Количество</th>
                            <th width=\"15%\" align=\"center\">Цена</th>
                            <th width=\"25%\" align=\"center\">Всего</th>
                            <th width=\"5%\" align=\"center\">Добавить</th>
                            <th width=\"5%\" align=\"center\">Удалить</th>
                        </tr>
                            <tr>
                                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["products"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "good_title", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                                <td align=\"center\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["products"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "amount", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                <td align=\"center\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["products"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "price", [], "any", false, false, false, 89), "html", null, true);
            echo " руб.</td>
                                <td align=\"center\">";
            // line 90
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["products"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "amount", [], "any", false, false, false, 90) * twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["products"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "price", [], "any", false, false, false, 90)), "html", null, true);
            echo " руб.</td>
                                <td align=\"center\"><a href=\"index.php?class=product&method=addToCart&id=";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["products"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "id_good", [], "any", false, false, false, 91), "html", null, true);
            echo "&user=";
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\"><span class=\"btn btn-primary mb-2\">+</span></a></td>
                                <td align=\"center\"><a href=\"index.php?class=product&method=deleteFromCart&id=";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["products"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "id_good", [], "any", false, false, false, 92), "html", null, true);
            echo "&user=";
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\"><span class=\"btn btn-primary mb-2\">-</span></a></td>
                            </tr>
                        <tr>
                            <td colspan=\"3\" align=\"right\">Всего</td>
                            <td align=\"center\">";
            // line 96
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["products"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "amount", [], "any", false, false, false, 96) * twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["products"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null), "price", [], "any", false, false, false, 96)), "html", null, true);
            echo " руб.</td>
                            <td></td>
                        </tr>
                    </table>
                    <form action=\"index.php?class=product&method=viewOrder&user=";
            // line 100
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\" method=\"post\" name=\"cart\">
                        <div class=\"form-group mt-4 mb-0\">
                            <input type=\"submit\" class=\"btn btn-primary btn-block\" name=\"order\" value=\"Оформить заказ\"/>
                        </div>
                        <br>
                    </form>
                </div>
        ";
        }
        // line 108
        echo "    </div>
    </div>
</div>
";
    }

    // line 112
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "basket.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 113,  266 => 112,  259 => 108,  248 => 100,  241 => 96,  232 => 92,  226 => 91,  222 => 90,  218 => 89,  214 => 88,  210 => 87,  194 => 74,  189 => 71,  178 => 63,  171 => 59,  167 => 57,  161 => 56,  159 => 55,  152 => 53,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  127 => 47,  123 => 46,  108 => 34,  103 => 31,  101 => 30,  94 => 25,  91 => 24,  89 => 23,  82 => 18,  77 => 15,  73 => 13,  71 => 12,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
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
        <h1 class=\"my-4\">Онлайн-магазин</h1>
        {% if userid == NULL %}
            <h6 class=\"my-4\">Для покупок новогодних открыток необходима регистрация на нашем сайте</h6>
        {% else %}
            <h4 class=\"my-4\">Обычный режим</h4>
            <h6 class=\"my-4\">Обычный аккаунт</h6>
        {% endif %}
    </div>
    <div class=\"col-lg-9\">
        <h1 class=\"my-4\">Корзина</h1>
        <div style=\"clear:both\"></div>
        <br />
        {% set sum = 0 %}
        {% if products is empty %}

        <tr>
            <td colspan=\"5\" align=\"center\" class=\"my-4\">В корзине пока нет товаров.</td>
        </tr>

        {% elseif num > 1 %}
        <h3>Подробная информация</h3>
        <div class=\"table-responsive\">
            <div align=\"right\">
                <a href=\"index.php?class=product&method=clearCart&user={{ user }}\"><b>Очистить корзину</b></a>
            </div>

            <table class=\"table table-bordered\">
                <tr>
                    <th width=\"30%\">Название</th>
                    <th width=\"10%\" align=\"center\">Количество</th>
                    <th width=\"15%\" align=\"center\">Цена</th>
                    <th width=\"25%\" align=\"center\">Всего</th>
                    <th width=\"5%\" align=\"center\">Добавить</th>
                    <th width=\"5%\" align=\"center\">Удалить</th>
                </tr>
                {% for product in products %}
                <tr>
                    <td>{{product.good_title}}</td>
                    <td align=\"center\">{{product.amount}}</td>
                    <td align=\"center\">{{product.price}} руб.</td>
                    <td align=\"center\">{{ product.amount * product.price }} руб.</td>
                    <td align=\"center\"><a href=\"index.php?class=product&method=addToCart&id={{ product.id_good }}&user={{ user }}\"><span class=\"btn btn-primary mb-2\">+</span></a></td>
                    <td align=\"center\"><a href=\"index.php?class=product&method=deleteFromCart&id={{ product.id_good }}&user={{ user }}\"><span class=\"btn btn-primary mb-2\">-</span></a></td>
                </tr>
                    {% set sum = sum + product.amount * product.price %}
                {% endfor %}
                <tr>
                    <td colspan=\"3\" align=\"right\">Всего</td>
                    <td align=\"center\">{{sum}} руб.</td>
                    <td></td>
                </tr>
            </table>
            <form action=\"index.php?class=product&method=viewOrder&user={{ user }}\" method=\"post\" name=\"cart\">
                <div class=\"form-group mt-4 mb-0\">
                    <input type=\"submit\" class=\"btn btn-primary btn-block\" name=\"order\" value=\"Оформить заказ\"/>
                </div>
                <br>
            </form>
        </div>
            {% else %}
                <h3>Подробная информация</h3>
                <div class=\"table-responsive\">
                    <div align=\"right\">
                        <a href=\"index.php?class=product&method=clearCart&user={{user}}\"><b>Очистить корзину</b></a>
                    </div>

                    <table class=\"table table-bordered\">
                        <tr>
                            <th width=\"30%\">Название</th>
                            <th width=\"10%\" align=\"center\">Количество</th>
                            <th width=\"15%\" align=\"center\">Цена</th>
                            <th width=\"25%\" align=\"center\">Всего</th>
                            <th width=\"5%\" align=\"center\">Добавить</th>
                            <th width=\"5%\" align=\"center\">Удалить</th>
                        </tr>
                            <tr>
                                <td>{{products[0].good_title}}</td>
                                <td align=\"center\">{{products[0].amount}}</td>
                                <td align=\"center\">{{products[0].price}} руб.</td>
                                <td align=\"center\">{{products[0].amount * products[0].price}} руб.</td>
                                <td align=\"center\"><a href=\"index.php?class=product&method=addToCart&id={{products[0].id_good }}&user={{user}}\"><span class=\"btn btn-primary mb-2\">+</span></a></td>
                                <td align=\"center\"><a href=\"index.php?class=product&method=deleteFromCart&id={{products[0].id_good }}&user={{user}}\"><span class=\"btn btn-primary mb-2\">-</span></a></td>
                            </tr>
                        <tr>
                            <td colspan=\"3\" align=\"right\">Всего</td>
                            <td align=\"center\">{{products[0].amount * products[0].price}} руб.</td>
                            <td></td>
                        </tr>
                    </table>
                    <form action=\"index.php?class=product&method=viewOrder&user={{user}}\" method=\"post\" name=\"cart\">
                        <div class=\"form-group mt-4 mb-0\">
                            <input type=\"submit\" class=\"btn btn-primary btn-block\" name=\"order\" value=\"Оформить заказ\"/>
                        </div>
                        <br>
                    </form>
                </div>
        {% endif %}
    </div>
    </div>
</div>
{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}



", "basket.twig", "C:\\OpenServer\\domains\\lesson6\\view\\basket.twig");
    }
}
