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
class __TwigTemplate_dd06f489fb5afacd4049a1b3af20b8e1487ffb9050d955083d4e073a0020bcc0 extends \Twig\Template
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
<section class=\"hero-section\">
    <div class=\"container\">
        <div class=\"hero-section-content\">
            <h1>Roasted coffee best choice</h1>
            <p>The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier.
                given
                an opportunity to sample.</p>
            <a class=\"btn btn-warning\" href=\"";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 9)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 9);
            echo " ";
        }
        echo "\">Buy now</a>
            <a class=\"btn btn-outline-secondary\" href=\"#targetNews\">Read more</a>
        </div>
    </div>
</section>

<div class=\"slideshow swiper-viewport\">
    <div id=\"slideshow";
        // line 16
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide text-center\">";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 18)) {
            echo "<a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 18);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, false, 18);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, false, 18);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            echo "<img src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, false, 18);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, false, 18);
            echo "\" class=\"img-responsive\" />";
        }
        echo "</div>
             </div>
    </div>
    <div class=\"swiper-pagination slideshow";
        // line 21
        echo ($context["module"] ?? null);
        echo "\"></div>
    <div class=\"swiper-pager\">
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
    </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#slideshow";
        // line 28
        echo ($context["module"] ?? null);
        echo "').swiper({
        mode: 'horizontal',
        slidesPerView: 1,
        pagination: '.slideshow";
        // line 31
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
        return array (  102 => 31,  96 => 28,  86 => 21,  66 => 18,  61 => 16,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/slideshow.twig", "");
    }
}
