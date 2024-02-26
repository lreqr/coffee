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

/* coffee/template/account/wishlist.twig */
class __TwigTemplate_d22cda0d0201fcd4bfe4f4c4ed78bfa346d57a1e1567d39c4e1ff09370da01ff extends \Twig\Template
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
<div id=\"account-wishlist\" class=\"container\">
  ";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            echo "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
      ";
            // line 5
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        // line 9
        echo "  <div class=\"row\">
    <div id=\"content\" class=\"";
        // line 10
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 12
        if (($context["products"] ?? null)) {
            // line 13
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <tbody>
          ";
            // line 16
            echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
            echo "
          ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "            <tr>
              <td class=\"text-center\">";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                    echo "\" /></a>";
                }
                echo "</td>
              <td class=\"text-left\"><a href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                echo "</a></td>
              <td class=\"text-left\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 21);
                echo "</td>
              <td class=\"text-right\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 22);
                echo "</td>
              <td class=\"text-right\">";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                  <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25);
                        echo "
                    ";
                    } else {
                        // line 26
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26);
                        echo "</s> ";
                    }
                    echo " </div>
                ";
                }
                // line 27
                echo "</td>
              <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 28);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                <a href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 29);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 37
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 39
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 40
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 42
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 43
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 45
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 45,  181 => 43,  177 => 42,  170 => 40,  167 => 39,  161 => 37,  154 => 32,  143 => 29,  137 => 28,  134 => 27,  124 => 26,  118 => 25,  115 => 24,  113 => 23,  109 => 22,  105 => 21,  99 => 20,  85 => 19,  82 => 18,  78 => 17,  74 => 16,  69 => 13,  67 => 12,  63 => 11,  57 => 10,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-wishlist\" class=\"container\">
  {% if success %}
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
      {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  {% endif %}
  <div class=\"row\">
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h2>{{ heading_title }}</h2>
      {% if products %}
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <tbody>
          {{ dump(products) }}
          {% for product in products %}
            <tr>
              <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" /></a>{% endif %}</td>
              <td class=\"text-left\"><a href=\"{{ product.href }}\">{{ product.name }}</a></td>
              <td class=\"text-left\">{{ product.model }}</td>
              <td class=\"text-right\">{{ product.stock }}</td>
              <td class=\"text-right\">{% if product.price %}
                  <div class=\"price\"> {% if not product.special %}
                      {{ product.price }}
                    {% else %} <b>{{ product.special }}</b> <s>{{ product.price }}</s> {% endif %} </div>
                {% endif %}</td>
              <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" data-toggle=\"tooltip\" title=\"{{ button_cart }}\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                <a href=\"{{ product.remove }}\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
            </tr>
          {% endfor %}
            </tbody>
          
        </table>
      </div>
      {% else %}
      <p>{{ text_empty }}</p>
      {% endif %}
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "coffee/template/account/wishlist.twig", "");
    }
}
