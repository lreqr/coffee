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
class __TwigTemplate_f694fbcf033cb5e96788f959c13168488c63348430ffa1f9201f564935675089 extends \Twig\Template
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
                <div class=\"col-md-4 col-6 \">
                    <ul>
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"about.html\">About</a></li>
                        <li><a href=\"#\">Menu</a></li>
                        <li><a href=\"reservation.html\">Reservation</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4 col-6 footer-nav-main\">
                    <ul>
                        <li><a href=\"reservation.html\">Contacts</a></li>
                        <li><a href=\"#\">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</footer>
</div>

";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 33
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 33);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 33);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 33);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 36
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
        return array (  100 => 38,  91 => 36,  87 => 35,  74 => 33,  70 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/footer.twig", "");
    }
}
