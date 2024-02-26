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

/* coffee/template/extension/module/filter.twig */
class __TwigTemplate_ac986791bc7a777a8e3d1f39ad4513809b3e356bf669a833d26a74040ba55469 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 2
            echo "    <div class=\"manufacturer-block\">


        <p class=\"filter-headline\">";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 5);
            echo "</p>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 7
                echo "            <div class=\"form-check\">
            <label for=\"flexCheckDefault\" class=\"form-check-link\">";
                // line 8
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 8), ($context["filter_category"] ?? null))) {
                    // line 9
                    echo "                    <input class=\"form-check-input\" type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 9);
                    echo "\"
                           id=\"flexCheckDefault\" checked=\"checked\">
                    ";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 11);
                    echo "
                ";
                } else {
                    // line 13
                    echo "                    <input class=\"form-check-input\" type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 13);
                    echo "\"
                           id=\"flexCheckDefault\">
                    ";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 15);
                    echo "
                ";
                }
                // line 17
                echo "            </label>
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
    <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
<button id=\"button-filter\" class=\"btn btn-outline-secondary\">";
        // line 23
        echo ($context["button_filter"] ?? null);
        echo "</button>




<script type=\"text/javascript\">
    \$('#button-filter').on('click', function () {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function (element) {
            filter.push(this.value);
        });

        location = '";
        // line 36
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
    });
    //--></script>
";
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  99 => 23,  96 => 22,  88 => 19,  81 => 17,  76 => 15,  70 => 13,  65 => 11,  59 => 9,  57 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for filter_group in filter_groups %}
    <div class=\"manufacturer-block\">


        <p class=\"filter-headline\">{{ filter_group.name }}</p>
        {% for filter in filter_group.filter %}
            <div class=\"form-check\">
            <label for=\"flexCheckDefault\" class=\"form-check-link\">{% if filter.filter_id in filter_category %}
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"filter[]\" value=\"{{ filter.filter_id }}\"
                           id=\"flexCheckDefault\" checked=\"checked\">
                    {{ filter.name }}
                {% else %}
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"filter[]\" value=\"{{ filter.filter_id }}\"
                           id=\"flexCheckDefault\">
                    {{ filter.name }}
                {% endif %}
            </label>
            </div>{% endfor %}
    </div>
    <hr>
{% endfor %}

<button id=\"button-filter\" class=\"btn btn-outline-secondary\">{{ button_filter }}</button>




<script type=\"text/javascript\">
    \$('#button-filter').on('click', function () {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function (element) {
            filter.push(this.value);
        });

        location = '{{ action }}&filter=' + filter.join(',');
    });
    //--></script>
", "coffee/template/extension/module/filter.twig", "");
    }
}
