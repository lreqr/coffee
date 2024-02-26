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
class __TwigTemplate_0b3de5e3d28978d49c666a9c2102a325f31745e099634efb6aff015fc7c3a3e9 extends \Twig\Template
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
                echo "  <li class=\"list-inline-item\"><a href=\"#\" data-name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    echo " class=\"active\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 6);
                echo "</a></li>
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
        return array (  69 => 9,  66 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/language.twig", "");
    }
}
