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
class __TwigTemplate_12f24ce9f019f20306cba62c9375bcee71a54b784c167f7837c42c26228fdfd4 extends \Twig\Template
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
        echo twig_var_dump($this->env, $context, ...[0 => ($context["modules"] ?? null)]);
        echo "
";
        // line 2
        if (($context["modules"] ?? null)) {
            // line 3
            echo "
<aside id=\"column-left\" class=\"col-sm-3 hidden-xs\">
  ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 6
                echo "  ";
                echo $context["module"];
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "coffee/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  51 => 6,  47 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ dump(modules) }}
{% if modules %}

<aside id=\"column-left\" class=\"col-sm-3 hidden-xs\">
  {% for module in modules %}
  {{ module }}
  {% endfor %}
</aside>
{% endif %}
", "coffee/template/common/column_left.twig", "");
    }
}
