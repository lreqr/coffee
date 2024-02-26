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

/* coffee/template/extension/module/carousel.twig */
class __TwigTemplate_990a82370da5876b52d2936c8f5f5545a71b50fa93521ff4bf83302a0b924de0 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 2
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 2)) {
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 2);
            } else {
                echo " catalog/view/theme/coffee/assets/img/no-image.png ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for banner in banners %}
      {% if banner.link %}{{ banner.image }}{% else %} catalog/view/theme/coffee/assets/img/no-image.png {% endif %}
{% endfor %}", "coffee/template/extension/module/carousel.twig", "");
    }
}
