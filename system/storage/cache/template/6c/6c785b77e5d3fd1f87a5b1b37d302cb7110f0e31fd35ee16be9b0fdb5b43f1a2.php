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
class __TwigTemplate_d52aa6f3457958017f98e59d846322a293c8ef09ce17464f03dd681490a0fa9d extends \Twig\Template
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
        // line 2
        echo "

";
        // line 8
        echo "

";
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/filter.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#<div class=\"manufacturer-block\">#}


{#    <p class=\"filter-headline\">#}
{#        {% set parts = text_manufacturer|split('') %}#}
{#        {% set trimmedString = parts|slice(0, -1)|join %}#}
{#        {{ trimmedString }}</p>#}


{#    {% for category in categories %}#}
{#        {% if category.children %}#}
{#            {% for child in category.children %}#}
{#                {% if child.category_id == child_id %}#}
{#                    <div class=\"form-check\">#}
{#                        <label for=\"flexCheckDefault\" class=\"form-check-link\">#}
{#                            <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"#}
{#                                   id=\"flexCheckDefault\" checked>#}
{#                            {{ child.name }}#}
{#                        </label>#}
{#                    </div>#}
{#                {% else %}#}
{#                    <div class=\"form-check\">#}
{#                        <label for=\"flexCheckDefault\" class=\"form-check-link\">#}
{#                            <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"#}
{#                                   id=\"flexCheckDefault\">#}
{#                            {{ child.name }}#}
{#                        </label>#}
{#                    </div>#}
{#                {% endif %}#}
{#            {% endfor %}#}
{#        {% endif %}#}
{#    {% endfor %}#}
{#</div>#}
{#<hr>#}
{#<a href=\"#\" class=\"btn btn-outline-secondary\">Search</a>#}", "coffee/template/extension/module/filter.twig", "");
    }
}
