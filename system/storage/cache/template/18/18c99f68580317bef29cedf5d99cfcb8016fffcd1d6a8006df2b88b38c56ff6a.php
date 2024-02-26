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
class __TwigTemplate_18918d9cb61bc85d4b905f1cf033668df0a47be72459e6c8db916b1dec3b0366 extends \Twig\Template
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
                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 9);
            echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\" checked>
                            ";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 11);
            echo "
                        </label>
                    </div>

                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 17);
            echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\">
                            ";
            // line 19
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 19);
            echo "
                        </label>
                    </div>



</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<hr>
<button id=\"button-filter\" class=\"btn btn-outline-secondary\">";
        // line 28
        echo ($context["button_filter"] ?? null);
        echo "</button>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 31
        echo ($context["heading_title"] ?? null);
        echo "</div>
    <div class=\"list-group\"> ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " <a class=\"list-group-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 32);
            echo "</a>
            <div class=\"list-group-item\">
                <div id=\"filter-group";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 34);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 35
                echo "                        <div class=\"checkbox\">
                            <label>";
                // line 36
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 36), ($context["filter_category"] ?? null))) {
                    // line 37
                    echo "                                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 37);
                    echo "\" checked=\"checked\" />
                                    ";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 38);
                    echo "
                                ";
                } else {
                    // line 40
                    echo "                                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 40);
                    echo "\" />
                                    ";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 41);
                    echo "
                                ";
                }
                // line 42
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>
    <div class=\"panel-footer text-right\">
        <button id=\"button-filter\" type=\"button\"  class=\"btn btn-primary\">";
        // line 48
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
        // line 59
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
        return array (  175 => 59,  161 => 48,  157 => 46,  149 => 44,  141 => 42,  136 => 41,  131 => 40,  126 => 38,  121 => 37,  119 => 36,  116 => 35,  110 => 34,  101 => 32,  97 => 31,  91 => 28,  88 => 27,  74 => 19,  69 => 17,  60 => 11,  55 => 9,  49 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for filter_group in filter_groups %}
<div class=\"manufacturer-block\">


    <p class=\"filter-headline\">{{ filter_group.name }}</p>
                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\" checked>
                            {{ child.name }}
                        </label>
                    </div>

                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\">
                            {{ child.name }}
                        </label>
                    </div>



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
