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

/* coffee/template/common/footer.twig */
class __TwigTemplate_fb57b20d7d3d88888ab5de59f4cef43f84bc2b0de9859971233fc019d7d5a090 extends \Twig\Template
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
        echo "<!-- footer -->
<footer class=\"footer\">
    <nav class=\"footer-nav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-12 footer-logo-inner\">
                    <a href=\"#\">
                        <img src=\"catalog/view/theme/coffee/assets/img/logo.png\" alt=\"logo\">
                        <span>CoffeMeet</span>
                    </a>
                </div>
                ";
        // line 12
        if (($context["informations"] ?? null)) {
            // line 13
            echo "                <div class=\"col-md-4 col-6 \">
                    <ul>
                        <li><a href=\"#\">Home</a></li>
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 17
                echo "                        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 17);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 17);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                    </ul>
                </div>
                <div class=\"col-md-4 col-6 footer-nav-main\">
                    <ul>
                        <li><a href=\"reservation.html\">Contacts</a></li>
                        <li><a href=\"#\">Privacy policy</a></li>
                    </ul>
                </div>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </nav>
</footer>
</div>

";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 35
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 35);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 35);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 35);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 38
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script src=\"catalog/view/theme/coffee/assets/js/common.js\"></script>
<script src=\"catalog/view/theme/coffee/assets/js/script.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "coffee/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  112 => 38,  108 => 37,  95 => 35,  91 => 34,  83 => 28,  72 => 19,  61 => 17,  57 => 16,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/footer.twig", "");
    }
}
