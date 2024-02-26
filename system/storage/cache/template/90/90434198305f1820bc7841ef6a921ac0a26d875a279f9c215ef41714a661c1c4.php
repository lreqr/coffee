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

/* coffee/template/information/contact.twig */
class __TwigTemplate_4edde0d46723ad2fd38e0d38d4dd07bd0f0459108a7dd2e7833e9b6a25756b14 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"container\">
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h3>";
        // line 7
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">

            <div class=\"col-sm-3\"><strong>";
        // line 12
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 14
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 16
        if (($context["geocode"] ?? null)) {
            // line 17
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 19
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 20
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 21
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 23
        if (($context["fax"] ?? null)) {
            // line 24
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 25
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 27
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 29
        if (($context["open"] ?? null)) {
            // line 30
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 31
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 34
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 35
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 36
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 38
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 42
        if (($context["locations"] ?? null)) {
            // line 43
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 46
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 48);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 48);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 50);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 54);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 54);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 54);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 56
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 56);
                echo "</strong><br/>
                  <address>
                  ";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 58);
                echo "
                  </address>
                  ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 61));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 63
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 64
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 65);
                echo "<br/>
                  <br/>
                  ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 69);
                    echo "
                  ";
                }
                // line 71
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 75);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 78
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 80);
                    echo "
                  ";
                }
                // line 82
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "      </div>
      ";
        }
        // line 90
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 92
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 94
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 96
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 97
        if (($context["error_name"] ?? null)) {
            // line 98
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 100
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 103
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 105
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 106
        if (($context["error_email"] ?? null)) {
            // line 107
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 109
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 112
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 114
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 115
        if (($context["error_enquiry"] ?? null)) {
            // line 116
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 118
        echo "            </div>
          </div>
          ";
        // line 120
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 124
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 128
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 129
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 131
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "coffee/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 131,  366 => 129,  362 => 128,  355 => 124,  348 => 120,  344 => 118,  338 => 116,  336 => 115,  332 => 114,  327 => 112,  322 => 109,  316 => 107,  314 => 106,  310 => 105,  305 => 103,  300 => 100,  294 => 98,  292 => 97,  288 => 96,  283 => 94,  278 => 92,  272 => 90,  268 => 88,  257 => 82,  252 => 80,  247 => 79,  244 => 78,  238 => 75,  233 => 74,  231 => 73,  227 => 71,  222 => 69,  217 => 68,  215 => 67,  210 => 65,  206 => 64,  203 => 63,  193 => 61,  191 => 60,  186 => 58,  180 => 56,  170 => 54,  168 => 53,  162 => 50,  155 => 48,  151 => 46,  147 => 45,  141 => 43,  139 => 42,  133 => 38,  128 => 36,  123 => 35,  120 => 34,  114 => 31,  109 => 30,  107 => 29,  103 => 27,  98 => 25,  93 => 24,  91 => 23,  86 => 21,  82 => 20,  79 => 19,  69 => 17,  67 => 16,  62 => 14,  57 => 12,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"container\">
      <h1>{{ heading_title }}</h1>
      <h3>{{ text_location }}</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">

            <div class=\"col-sm-3\"><strong>{{ store }}</strong><br />
              <address>
              {{ address }}
              </address>
              {% if geocode %}
              <a href=\"https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
              {% endif %}
            </div>
            <div class=\"col-sm-3\"><strong>{{ text_telephone }}</strong><br>
              {{ telephone }}<br />
              <br />
              {% if fax %}
              <strong>{{ text_fax }}</strong><br>
              {{ fax }}
              {% endif %}
            </div>
            <div class=\"col-sm-3\">
              {% if open %}
              <strong>{{ text_open }}</strong><br />
              {{ open }}<br />
              <br />
              {% endif %}
              {% if comment %}
              <strong>{{ text_comment }}</strong><br />
              {{ comment }}
              {% endif %}
            </div>
          </div>
        </div>
      </div>
      {% if locations %}
      <h3>{{ text_store }}</h3>
      <div class=\"panel-group\" id=\"accordion\">
        {% for location in locations %}
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location{{ location.location_id }}\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">{{ location.name }} <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location{{ location.location_id }}\">
            <div class=\"panel-body\">
              <div class=\"row\">
                {% if location.image %}
                <div class=\"col-sm-3\"><img src=\"{{ location.image }}\" alt=\"{{ location.name }}\" title=\"{{ location.name }}\" class=\"img-thumbnail\" /></div>
                {% endif %}
                <div class=\"col-sm-3\"><strong>{{ location.name }}</strong><br/>
                  <address>
                  {{ location.address }}
                  </address>
                  {% if location.geocode %}
                  <a href=\"https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
                  {% endif %}
                </div>
                <div class=\"col-sm-3\"> <strong>{{ text_telephone }}</strong><br/>
                  {{ location.telephone }}<br/>
                  <br/>
                  {% if location.fax %}
                  <strong>{{ text_fax }}</strong><br/>
                  {{ location.fax }}
                  {% endif %}
                </div>
                <div class=\"col-sm-3\">
                  {% if location.open %}
                  <strong>{{ text_open }}</strong><br/>
                  {{ location.open }}<br/>
                  <br/>
                  {% endif %}
                  {% if location.comment %}
                  <strong>{{ text_comment }}</strong><br/>
                  {{ location.comment }}
                  {% endif %}
                </div>
              </div>
            </div>
          </div>
        </div>
        {% endfor %}
      </div>
      {% endif %}
      <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>{{ text_contact }}</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" id=\"input-name\" class=\"form-control\" />
              {% if error_name %}
              <div class=\"text-danger\">{{ error_name }}</div>
              {% endif %}
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" class=\"form-control\" />
              {% if error_email %}
              <div class=\"text-danger\">{{ error_email }}</div>
              {% endif %}
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">{{ entry_enquiry }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">{{ enquiry }}</textarea>
              {% if error_enquiry %}
              <div class=\"text-danger\">{{ error_enquiry }}</div>
              {% endif %}
            </div>
          </div>
          {{ captcha }}
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ button_submit }}\" />
          </div>
        </div>
      </form>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "coffee/template/information/contact.twig", "");
    }
}
