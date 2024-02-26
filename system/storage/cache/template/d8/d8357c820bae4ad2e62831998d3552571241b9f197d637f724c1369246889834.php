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

/* coffee/template/extension/module/slideshow.twig */
class __TwigTemplate_48dc0de4afead85cdefa0303b42c8b2a71d30f3fe5747db5f6701759c0029d15 extends \Twig\Template
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
        echo "<!-- hero-section -->
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "    -";
            echo $context["banner"];
            echo "-
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "<section class=\"hero-section\" style=\"background: url('";
        echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, false, 5);
        echo "') center no-repeat;\">
    <div class=\"container\">
        <div class=\"hero-section-content\">
            <h1>Roasted coffee best choice</h1>
            <p>The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier.
                given
                an opportunity to sample.</p>
            <a class=\"btn btn-warning\" href=\"";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 12)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 12);
            echo " ";
        }
        echo "\">Buy now</a>
            <a class=\"btn btn-outline-secondary\" href=\"#targetNews\">Read more</a>
        </div>
    </div>
</section>

<div class=\"slideshow swiper-viewport\">
    <div id=\"slideshow";
        // line 19
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
        <div class=\"swiper-wrapper\"> ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 21
            echo "                <div class=\"swiper-slide text-center\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 21)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 21);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 21);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 21);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 21);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 21);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " </div>
    </div>
    <div class=\"swiper-pagination slideshow";
        // line 24
        echo ($context["module"] ?? null);
        echo "\"></div>
    <div class=\"swiper-pager\">
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
    </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#slideshow";
        // line 31
        echo ($context["module"] ?? null);
        echo "').swiper({
        mode: 'horizontal',
        slidesPerView: 1,
        pagination: '.slideshow";
        // line 34
        echo ($context["module"] ?? null);
        echo "',
        paginationClickable: true,
        nextButton: '.slideshow .swiper-button-next',
        prevButton: '.slideshow .swiper-button-prev',
        spaceBetween: 30,
        autoplay: 2500,
        autoplayDisableOnInteraction: true,
        loop: true
    });
    //--></script>";
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 34,  123 => 31,  113 => 24,  109 => 22,  86 => 21,  82 => 20,  78 => 19,  64 => 12,  53 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/slideshow.twig", "");
    }
}
