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
class __TwigTemplate_745cdef4e431c25fc9088e191133c9d279447b7faeb47fefddeb220590e4e9b7 extends \Twig\Template
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
        if (($context["modules"] ?? null)) {
            // line 2
            echo "    ";
            echo twig_var_dump($this->env, $context, ...[0 => ($context["modules"] ?? null)]);
            echo "
<aside id=\"column-left\" class=\"col-sm-3 hidden-xs\">
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 5
                echo "  ";
                echo $context["module"];
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
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
        return array (  58 => 7,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if modules %}
    {{ dump(modules) }}
<aside id=\"column-left\" class=\"col-sm-3 hidden-xs\">
  {% for module in modules %}
  {{ module }}
  {% endfor %}
</aside>
{% endif %}
", "coffee/template/common/column_left.twig", "");
    }
}
