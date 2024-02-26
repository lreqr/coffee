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

/* coffee/template/product/category.twig */
class __TwigTemplate_45b22b72e727417b6ba579ca2d4a253c946bdb223636524a9821920dc8eaf402 extends \Twig\Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo "

<main class=\"main menu-page\">

    <section class=\"filter-product-section\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-12\">
                    <h1 class=\"page-title\">
                        ";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "
                    </h1>
                </div>
            </div>

            <div class=\"row\">";
        // line 17
        echo ($context["column_left"] ?? null);
        echo "

                <div class=\"col-lg-9 col-md-8\">
                    <div class=\"row\">

                        <div class=\"col-sm-4\">
                            <div class=\"input-group mb-3\">
                                <label class=\"input-group-text sort-by\" for=\"input-sort\">";
        // line 24
        echo ($context["text_sort"] ?? null);
        echo "</label>
                                <select class=\"form-select sort-by\" id=\"input-sort\">
                                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 27
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 27) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                // line 28
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 28);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 28);
                echo "</option>
                                        ";
            } else {
                // line 30
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 30);
                echo "</option>
                                        ";
            }
            // line 32
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class=\"row\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 41
            echo "                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 44);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
            echo "\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
            echo "</a></h3>
                                    <div class=\"product-bottom\">
                                        ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49)) {
                // line 50
                echo "                                            <div class=\"product-price\">
                                                ";
                // line 51
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                                                    <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52);
                    echo "</span>
                                                ";
                } else {
                    // line 54
                    echo "                                                    <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 54);
                    echo "</span>
                                                    <small>";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                    echo "</small>
                                                ";
                }
                // line 57
                echo "                                            </div>
                                        ";
            }
            // line 59
            echo "                                        <div class=\"product-actions\">
                                            <a href=\"#\" onclick=\"wishlist.add('";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
            echo "');\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" onclick=\"return cart.add('";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 61);
            echo "');\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                    </div>
                    <div class=\"nav-pagination\">
                        <nav aria-label=\"Page navigation example\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                        <span aria-hidden=\"true\">⇽</span>
                                    </a>
                                </li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                        <span aria-hidden=\"true\">⇾</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>

        </div>

    </section>

</main>

";
        // line 280
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 280,  186 => 250,  172 => 61,  168 => 60,  165 => 59,  161 => 57,  156 => 55,  151 => 54,  145 => 52,  143 => 51,  140 => 50,  138 => 49,  131 => 47,  121 => 44,  116 => 41,  112 => 40,  103 => 33,  97 => 32,  89 => 30,  81 => 28,  78 => 27,  74 => 26,  69 => 24,  59 => 17,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/product/category.twig", "");
    }
}
