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

/* coffee/template/common/language.twig */
class __TwigTemplate_a45b47ce7d4a7a89218e5c6ae9bf361f2e3bd8d1896cc180159e98c71b267e99 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "
<form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
<ul class=\"languages list-inline m-0\">
  ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "  <li class=\"list-inline-item\"><button href=\"#\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    echo " class=\"active\" ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6);
                echo "</button></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 9
            echo ($context["redirect"] ?? null);
            echo "\" />
</ul>
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "coffee/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  64 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/language.twig", "");
    }
}
