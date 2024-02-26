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
class __TwigTemplate_e574c17329601fd0a4b01d8c5a53eec5835a08e2d00c0b4e8679bf3235dff35b extends \Twig\Template
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

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</div>
    <div class=\"list-group\"> ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " <a class=\"list-group-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 27);
            echo "</a>
            <div class=\"list-group-item\">
                <div id=\"filter-group";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 29);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filter_groups"] ?? null), "filter", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 30
                echo "                        <div class=\"checkbox\">
                            <label>";
                // line 31
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 31), ($context["filter_category"] ?? null))) {
                    // line 32
                    echo "                                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 32);
                    echo "\" checked=\"checked\" />
                                    ";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 33);
                    echo "
                                ";
                } else {
                    // line 35
                    echo "                                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 35);
                    echo "\" />
                                    ";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 36);
                    echo "
                                ";
                }
                // line 37
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
    <div class=\"panel-footer text-right\">
        <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 43
        echo ($context["button_filter"] ?? null);
        echo "</button>
    </div>
</div>
";
        // line 46
        echo twig_var_dump($this->env, $context, ...[0 => ($context["filter_groups"] ?? null)]);
        echo "

<script type=\"text/javascript\">
    \$('#button-filter').on('click', function () {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function (element) {
            filter.push(this.value);
        });

        location = '";
        // line 56
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
        return array (  188 => 56,  175 => 46,  169 => 43,  165 => 41,  157 => 39,  149 => 37,  144 => 36,  139 => 35,  134 => 33,  129 => 32,  127 => 31,  124 => 30,  118 => 29,  109 => 27,  105 => 26,  99 => 23,  96 => 22,  88 => 19,  81 => 17,  76 => 15,  70 => 13,  65 => 11,  59 => 9,  57 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
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

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">{{ heading_title }}</div>
    <div class=\"list-group\"> {% for filter_group in filter_groups %} <a class=\"list-group-item\">{{ filter_group.name }}</a>
            <div class=\"list-group-item\">
                <div id=\"filter-group{{ filter_group.filter_group_id }}\">{% for filter in filter_groups.filter %}
                        <div class=\"checkbox\">
                            <label>{% if filter.filter_id in filter_category %}
                                    <input type=\"checkbox\" name=\"filter[]\" value=\"{{ filter.filter_id }}\" checked=\"checked\" />
                                    {{ filter.name }}
                                {% else %}
                                    <input type=\"checkbox\" name=\"filter[]\" value=\"{{ filter.filter_id }}\" />
                                    {{ filter.name }}
                                {% endif %}</label>
                        </div>
                    {% endfor %}</div>
            </div>
        {% endfor %}</div>
    <div class=\"panel-footer text-right\">
        <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">{{ button_filter }}</button>
    </div>
</div>
{{ dump(filter_groups) }}

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
