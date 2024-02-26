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

/* default/template/information/sitemap.twig */
class __TwigTemplate_476d576e6701a2684ced41f5c9dbab690f02b740a1edc59982785d63860362eb extends \Twig\Template
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
<div id=\"information-sitemap\" class=\"container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 4
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 10
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 10);
            echo "</a>
              ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 11)) {
                // line 12
                echo "              <ul>
                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 14
                    echo "                <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 14);
                    echo "</a>
                  ";
                    // line 15
                    if (twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 15)) {
                        // line 16
                        echo "                  <ul>
                    ";
                        // line 17
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 17));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 18
                            echo "                    <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 18);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 18);
                            echo "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 20
                        echo "                  </ul>
                  ";
                    }
                    // line 22
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "              </ul>
              ";
            }
            // line 26
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"";
        // line 32
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 33
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
              <ul>
                <li><a href=\"";
        // line 35
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 36
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 37
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 38
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_history"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 39
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 42
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_cart"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 43
        echo ($context["checkout"] ?? null);
        echo "\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 44
        echo ($context["search"] ?? null);
        echo "\">";
        echo ($context["text_search"] ?? null);
        echo "</a></li>
            <li>";
        // line 45
        echo ($context["text_information"] ?? null);
        echo "
              <ul>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 48
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 48);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 48);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                <li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      ";
        // line 56
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 57
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 59
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 59,  233 => 57,  229 => 56,  217 => 50,  206 => 48,  202 => 47,  197 => 45,  191 => 44,  185 => 43,  179 => 42,  171 => 39,  165 => 38,  159 => 37,  153 => 36,  147 => 35,  140 => 33,  134 => 32,  128 => 28,  121 => 26,  117 => 24,  110 => 22,  106 => 20,  95 => 18,  91 => 17,  88 => 16,  86 => 15,  79 => 14,  75 => 13,  72 => 12,  70 => 11,  63 => 10,  59 => 9,  52 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"information-sitemap\" class=\"container\">
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            {% for category_1 in categories %}
            <li><a href=\"{{ category_1.href }}\">{{ category_1.name }}</a>
              {% if category_1.children %}
              <ul>
                {% for category_2 in category_1.children %}
                <li><a href=\"{{ category_2.href }}\">{{ category_2.name }}</a>
                  {% if category_2.children %}
                  <ul>
                    {% for category_3 in category_2.children %}
                    <li><a href=\"{{ category_3.href }}\">{{ category_3.name }}</a></li>
                    {% endfor %}
                  </ul>
                  {% endif %}
                </li>
                {% endfor %}
              </ul>
              {% endif %}
            </li>
            {% endfor %}
          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"{{ special }}\">{{ text_special }}</a></li>
            <li><a href=\"{{ account }}\">{{ text_account }}</a>
              <ul>
                <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
                <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
                <li><a href=\"{{ address }}\">{{ text_address }}</a></li>
                <li><a href=\"{{ history }}\">{{ text_history }}</a></li>
                <li><a href=\"{{ download }}\">{{ text_download }}</a></li>
              </ul>
            </li>
            <li><a href=\"{{ history }}\">{{ text_cart }}</a></li>
            <li><a href=\"{{ checkout }}\">{{ text_checkout }}</a></li>
            <li><a href=\"{{ search }}\">{{ text_search }}</a></li>
            <li>{{ text_information }}
              <ul>
                {% for information in informations %}
                <li><a href=\"{{ information.href }}\">{{ information.title }}</a></li>
                {% endfor %}
                <li><a href=\"{{ contact }}\">{{ text_contact }}</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "default/template/information/sitemap.twig", "");
    }
}
