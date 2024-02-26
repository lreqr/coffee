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
class __TwigTemplate_141761b9de23a146d39b55d201e0f5bda033d11518cf8e82b67e030ccc137486 extends \Twig\Template
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
                <img src=\"";
        // line 6
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banners"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "image", [], "any", false, false, false, 6);
        echo "catalog/view/theme/coffee/assets/img/banner.jpg\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banners"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "title", [], "any", false, false, false, 6);
        echo "\">
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
        return array (  107 => 34,  101 => 30,  78 => 29,  74 => 28,  70 => 27,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/banner.twig", "");
    }
}
