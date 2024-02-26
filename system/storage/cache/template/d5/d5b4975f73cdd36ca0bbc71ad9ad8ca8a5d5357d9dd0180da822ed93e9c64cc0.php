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
class __TwigTemplate_55404cdbe9c63ad577698dcad7bc0cb0d323bc0c71111348eda33b58d70135de extends \Twig\Template
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
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 9
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 15);
            echo "</a>
              ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 16)) {
                // line 17
                echo "              <ul>
                ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 19
                    echo "                <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 19);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 19);
                    echo "</a>
                  ";
                    // line 20
                    if (twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 20)) {
                        // line 21
                        echo "                  <ul>
                    ";
                        // line 22
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 22));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 23
                            echo "                    <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 23);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 23);
                            echo "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "                  </ul>
                  ";
                    }
                    // line 27
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "              </ul>
              ";
            }
            // line 31
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"";
        // line 37
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 38
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
              <ul>
                <li><a href=\"";
        // line 40
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 41
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 42
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 43
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_history"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 44
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 47
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_cart"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 48
        echo ($context["checkout"] ?? null);
        echo "\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 49
        echo ($context["search"] ?? null);
        echo "\">";
        echo ($context["text_search"] ?? null);
        echo "</a></li>
            <li>";
        // line 50
        echo ($context["text_information"] ?? null);
        echo "
              <ul>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 53
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 53);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 53);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        // line 61
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 62
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 64
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
        return array (  257 => 64,  252 => 62,  248 => 61,  236 => 55,  225 => 53,  221 => 52,  216 => 50,  210 => 49,  204 => 48,  198 => 47,  190 => 44,  184 => 43,  178 => 42,  172 => 41,  166 => 40,  159 => 38,  153 => 37,  147 => 33,  140 => 31,  136 => 29,  129 => 27,  125 => 25,  114 => 23,  110 => 22,  107 => 21,  105 => 20,  98 => 19,  94 => 18,  91 => 17,  89 => 16,  82 => 15,  78 => 14,  71 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"information-sitemap\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
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
