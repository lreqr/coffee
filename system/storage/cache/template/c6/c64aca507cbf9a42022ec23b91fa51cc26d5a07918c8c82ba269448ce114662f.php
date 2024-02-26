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

/* coffee/template/common/column_left.twig */
class __TwigTemplate_0f30448f33154938bfdfe2c428114d54f2e73c2df6815ce7d65ae48de866ca35 extends \Twig\Template
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
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "coffee/template/common/column_left.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% if modules %}#}
{#<aside id=\"column-left\" class=\"col-md-3 col-sm-12 hidden-xs\">#}
{#  {% for module in modules %}#}
{#  {{ module }}#}
{#  {% endfor %}#}
{#</aside>#}
{#{% endif %}#}

", "coffee/template/common/column_left.twig", "");
    }
}
