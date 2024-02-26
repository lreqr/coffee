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
class __TwigTemplate_54cddb29e306c2ba7265de2cf8dd1339eb3efe480872d2e99c7276c2fd9c2f19 extends \Twig\Template
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
        echo "111111
<div class=\"carousel swiper-viewport\">
  <div id=\"carousel";
        // line 3
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"swiper-slide text-center\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>
  </div>
  <div class=\"swiper-pagination carousel";
        // line 8
        echo ($context["module"] ?? null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#carousel";
        // line 15
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 5,
\tpagination: '.carousel";
        // line 18
        echo ($context["module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.carousel .swiper-button-next',
    prevButton: '.carousel .swiper-button-prev',
\tautoplay: 2500,
\tloop: true
});
--></script>";
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
        return array (  92 => 18,  86 => 15,  76 => 8,  72 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("111111
<div class=\"carousel swiper-viewport\">
  <div id=\"carousel{{ module }}\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">{% for banner in banners %}
      <div class=\"swiper-slide text-center\">{% if banner.link %}<a href=\"{{ banner.link }}\"><img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-responsive\" /></a>{% else %}<img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-responsive\" />{% endif %}</div>
      {% endfor %}</div>
  </div>
  <div class=\"swiper-pagination carousel{{ module }}\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#carousel{{ module }}').swiper({
\tmode: 'horizontal',
\tslidesPerView: 5,
\tpagination: '.carousel{{ module }}',
\tpaginationClickable: true,
\tnextButton: '.carousel .swiper-button-next',
    prevButton: '.carousel .swiper-button-prev',
\tautoplay: 2500,
\tloop: true
});
--></script>", "coffee/template/extension/module/carousel.twig", "");
    }
}
