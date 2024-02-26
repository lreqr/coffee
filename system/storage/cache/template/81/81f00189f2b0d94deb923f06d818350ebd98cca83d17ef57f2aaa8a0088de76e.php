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
class __TwigTemplate_3e6d4366bae1a99eca1e16fd5c8a193d0abdc3aeb869fc6387c1d4bb63679358 extends \Twig\Template
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
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 16
                echo "                        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 16);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                        <li><a href=\"";
            echo ($context["sitemap"] ?? null);
            echo "\">";
            echo ($context["text_sitemap"] ?? null);
            echo "</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4 col-6 footer-nav-main\">
                    <ul>
                        <li><a href=\"";
            // line 23
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>
                        <li><a href=\"";
            // line 24
            echo ($context["special"] ?? null);
            echo "\">";
            echo ($context["text_special"] ?? null);
            echo "</a></li>
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
        return array (  135 => 40,  126 => 38,  122 => 37,  109 => 35,  105 => 34,  97 => 28,  88 => 24,  82 => 23,  71 => 18,  60 => 16,  56 => 15,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- footer -->
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
                {% if informations %}
                <div class=\"col-md-4 col-6 \">
                    <ul>
                        {% for information in informations %}
                        <li><a href=\"{{ information.href }}\">{{ information.title }}</a></li>
                        {% endfor %}
                        <li><a href=\"{{ sitemap }}\">{{ text_sitemap }}</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4 col-6 footer-nav-main\">
                    <ul>
                        <li><a href=\"{{ contact }}\">{{ text_contact }}</a></li>
                        <li><a href=\"{{ special }}\">{{ text_special }}</a></li>
                    </ul>
                </div>
                {% endif %}
            </div>
        </div>
    </nav>
</footer>
</div>

{% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\" />
{% endfor %}
{% for script in scripts %}
    <script src=\"{{ script }}\" type=\"text/javascript\"></script>
{% endfor %}

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script src=\"catalog/view/theme/coffee/assets/js/common.js\"></script>
<script src=\"catalog/view/theme/coffee/assets/js/script.js\"></script>
</body>
</html>", "coffee/template/common/footer.twig", "");
    }
}
