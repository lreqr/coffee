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
class __TwigTemplate_d1d1659af867a7238f6640c536e64d0740bc5496e18f130f338abe684822595d extends \Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 3
            echo "<div class=\"manufacturer-block\">


    <p class=\"filter-headline\">";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 6);
            echo "</p>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                echo "<div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">";
                // line 8
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 8), ($context["filter_category"] ?? null))) {
                    // line 9
                    echo "                            <input class=\"form-check-input\" type=\"checkbox\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 9);
                    echo "\" id=\"flexCheckDefault\" checked=\"checked\">
                            ";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 10);
                    echo "
                            ";
                } else {
                    // line 12
                    echo "                            <input class=\"form-check-input\" type=\"checkbox\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 12);
                    echo "\" id=\"flexCheckDefault\">";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 12);
                    echo "
                            ";
                }
                // line 14
                echo "                        </label>
                    </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "



</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "<hr>
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 29));
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
        <button id=\"button-filter\" type=\"button\"  class=\"btn btn-primary\">";
        // line 43
        echo ($context["button_filter"] ?? null);
        echo "</button>
    </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function(element) {
            filter.push(this.value);
        });

        location = '";
        // line 54
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
        return array (  184 => 54,  170 => 43,  166 => 41,  158 => 39,  150 => 37,  145 => 36,  140 => 35,  135 => 33,  130 => 32,  128 => 31,  125 => 30,  119 => 29,  110 => 27,  106 => 26,  100 => 23,  97 => 22,  86 => 16,  79 => 14,  71 => 12,  66 => 10,  61 => 9,  59 => 8,  53 => 7,  49 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for filter_group in filter_groups %}
<div class=\"manufacturer-block\">


    <p class=\"filter-headline\">{{ filter_group.name }}</p>
    {% for filter in filter_group.filter %}<div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">{% if filter.filter_id in filter_category %}
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"{{ filter.filter_id }}\" id=\"flexCheckDefault\" checked=\"checked\">
                            {{ filter.name }}
                            {% else %}
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"{{ filter.filter_id }}\" id=\"flexCheckDefault\">{{ filter.name }}
                            {% endif %}
                        </label>
                    </div>{% endfor %}




</div>
{% endfor %}
<hr>
<button id=\"button-filter\" class=\"btn btn-outline-secondary\">{{ button_filter }}</button>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">{{ heading_title }}</div>
    <div class=\"list-group\"> {% for filter_group in filter_groups %} <a class=\"list-group-item\">{{ filter_group.name }}</a>
            <div class=\"list-group-item\">
                <div id=\"filter-group{{ filter_group.filter_group_id }}\">{% for filter in filter_group.filter %}
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
        <button id=\"button-filter\" type=\"button\"  class=\"btn btn-primary\">{{ button_filter }}</button>
    </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function(element) {
            filter.push(this.value);
        });

        location = '{{ action }}&filter=' + filter.join(',');
    });
    //--></script>
", "coffee/template/extension/module/filter.twig", "");
    }
}
