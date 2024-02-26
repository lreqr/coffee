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

/* coffee/template/extension/module/banner.twig */
class __TwigTemplate_e708cde338f6edbaa9ec3901675a56910e1d6ca61ae2838f3be58c175d0b8424 extends \Twig\Template
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
        echo "<!-- banner-section -->
<section class=\"banner-section\">
    <div class=\"container\">
        <div class=\"banner-section-inner\">
            <div class=\"banner-section-img\">
                <img src=\"catalog/view/theme/coffee/assets/img/banner.jpg\" alt=\"banner\">
            </div>
            <div class=\"banner-section-content\">
                <h2>Roasted Coffee</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                    suffered
                    alteration in some form, by injected humour, or randomised words which don't look even
                    slightly
                    believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    isn't
                    anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
                    the Internet
                    tend to repeat predefined chunks as necessary, making this the first true generator on
                    the
                    Internet.</p>
            </div>
        </div>
    </div>
</section>

<div class=\"swiper-viewport\">
    <div id=\"banner";
        // line 27
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
        <div class=\"swiper-wrapper\">";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 29
            echo "                <div class=\"swiper-slide\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 29)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 29);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 29);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 29);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 29);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 29);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
    </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#banner";
        // line 34
        echo ($context["module"] ?? null);
        echo "').swiper({
        effect: 'fade',
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    --></script>";
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  96 => 30,  73 => 29,  69 => 28,  65 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/banner.twig", "");
    }
}
