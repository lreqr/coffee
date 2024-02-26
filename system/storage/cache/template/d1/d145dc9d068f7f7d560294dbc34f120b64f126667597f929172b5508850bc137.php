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
class __TwigTemplate_0a55b8333c48fa1a0c62fa7f8ad9c9c6103d0ca03d4ffd7a98697822042d8af9 extends \Twig\Template
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
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h3>";
        // line 13
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 17
        if (($context["image"] ?? null)) {
            // line 18
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 20
        echo "            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 22
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 24
        if (($context["geocode"] ?? null)) {
            // line 25
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 27
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 28
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 29
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 31
        if (($context["fax"] ?? null)) {
            // line 32
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 33
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 35
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 37
        if (($context["open"] ?? null)) {
            // line 38
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 39
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 42
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 43
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 44
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 46
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 50
        if (($context["locations"] ?? null)) {
            // line 51
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 54
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 56);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 56);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 58);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 62);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 62);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 62);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 64
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 64);
                echo "</strong><br/>
                  <address>
                  ";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 66);
                echo "
                  </address>
                  ";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 69));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 71
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 72
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 73);
                echo "<br/>
                  <br/>
                  ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 77);
                    echo "
                  ";
                }
                // line 79
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 83);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 86
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 88);
                    echo "
                  ";
                }
                // line 90
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
            // line 96
            echo "      </div>
      ";
        }
        // line 98
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 100
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 102
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 104
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 105
        if (($context["error_name"] ?? null)) {
            // line 106
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 108
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 111
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 113
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 114
        if (($context["error_email"] ?? null)) {
            // line 115
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 117
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 120
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 122
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 123
        if (($context["error_enquiry"] ?? null)) {
            // line 124
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 126
        echo "            </div>
          </div>
          ";
        // line 128
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 132
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 136
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 137
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 139
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
        return array (  411 => 139,  406 => 137,  402 => 136,  395 => 132,  388 => 128,  384 => 126,  378 => 124,  376 => 123,  372 => 122,  367 => 120,  362 => 117,  356 => 115,  354 => 114,  350 => 113,  345 => 111,  340 => 108,  334 => 106,  332 => 105,  328 => 104,  323 => 102,  318 => 100,  312 => 98,  308 => 96,  297 => 90,  292 => 88,  287 => 87,  284 => 86,  278 => 83,  273 => 82,  271 => 81,  267 => 79,  262 => 77,  257 => 76,  255 => 75,  250 => 73,  246 => 72,  243 => 71,  233 => 69,  231 => 68,  226 => 66,  220 => 64,  210 => 62,  208 => 61,  202 => 58,  195 => 56,  191 => 54,  187 => 53,  181 => 51,  179 => 50,  173 => 46,  168 => 44,  163 => 43,  160 => 42,  154 => 39,  149 => 38,  147 => 37,  143 => 35,  138 => 33,  133 => 32,  131 => 31,  126 => 29,  122 => 28,  119 => 27,  109 => 25,  107 => 24,  102 => 22,  96 => 20,  86 => 18,  84 => 17,  77 => 13,  73 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <h3>{{ text_location }}</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            {% if image %}
            <div class=\"col-sm-3\"><img src=\"{{ image }}\" alt=\"{{ store }}\" title=\"{{ store }}\" class=\"img-thumbnail\" /></div>
            {% endif %}
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
