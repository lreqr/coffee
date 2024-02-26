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
class __TwigTemplate_68c0609c40effb730a71a283982e7fb76bab6ce01927e55fc9e52c431d423999 extends \Twig\Template
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
<main class=\"main contact-page\">

  <div id=\"information-contact\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"container\">
        <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <h3>";
        // line 8
        echo ($context["text_location"] ?? null);
        echo "</h3>
        <div class=\"panel panel-default\">
          <div class=\"panel-body\">
            <div class=\"row\">

              <div class=\"col-sm-3\"><strong>";
        // line 13
        echo ($context["store"] ?? null);
        echo "</strong><br />
                <address>
                  ";
        // line 15
        echo ($context["address"] ?? null);
        echo "
                </address>
                ";
        // line 17
        if (($context["geocode"] ?? null)) {
            // line 18
            echo "                  <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
                ";
        }
        // line 20
        echo "              </div>
              <div class=\"col-sm-3\"><strong>";
        // line 21
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
                ";
        // line 22
        echo ($context["telephone"] ?? null);
        echo "<br />
                <br />
                
              </div>
            </div>
          </div>
        </div>
        ";
        // line 29
        if (($context["locations"] ?? null)) {
            // line 30
            echo "          <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
          <div class=\"panel-group\" id=\"accordion\">
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 33
                echo "              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 35);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 35);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
                </div>
                <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 37);
                echo "\">
                  <div class=\"panel-body\">
                    <div class=\"row\">
                      ";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "                        <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 41);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 41);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 41);
                    echo "\" class=\"img-thumbnail\" /></div>
                      ";
                }
                // line 43
                echo "                      <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 43);
                echo "</strong><br/>
                        <address>
                          ";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 45);
                echo "
                        </address>
                        ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                          <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 48));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                        ";
                }
                // line 50
                echo "                      </div>
                      <div class=\"col-sm-3\"> <strong>";
                // line 51
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                        ";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 52);
                echo "<br/>
                        <br/>
                        ";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 54)) {
                    // line 55
                    echo "                          <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                          ";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 56);
                    echo "
                        ";
                }
                // line 58
                echo "                      </div>
                      <div class=\"col-sm-3\">
                        ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                          <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                          ";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 62);
                    echo "<br/>
                          <br/>
                        ";
                }
                // line 65
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "                          <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                          ";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 67);
                    echo "
                        ";
                }
                // line 69
                echo "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "          </div>
        ";
        }
        // line 77
        echo "        <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 79
        echo ($context["text_contact"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 81
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 83
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 84
        if (($context["error_name"] ?? null)) {
            // line 85
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 87
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 90
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"";
        // line 92
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                ";
        // line 93
        if (($context["error_email"] ?? null)) {
            // line 94
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                ";
        }
        // line 96
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 99
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 101
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
                ";
        // line 102
        if (($context["error_enquiry"] ?? null)) {
            // line 103
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
                ";
        }
        // line 105
        echo "              </div>
            </div>
            ";
        // line 107
        echo ($context["captcha"] ?? null);
        echo "
          </fieldset>
          <div class=\"buttons\">
            <div class=\"pull-right mt-3\">
              <input class=\"btn btn-warning\" type=\"submit\" value=\"";
        // line 111
        echo ($context["button_submit"] ?? null);
        echo "\" />
            </div>
          </div>
        </form>
        </div>
      </div>
  </div>

</main>
";
        // line 120
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
        return array (  325 => 120,  313 => 111,  306 => 107,  302 => 105,  296 => 103,  294 => 102,  290 => 101,  285 => 99,  280 => 96,  274 => 94,  272 => 93,  268 => 92,  263 => 90,  258 => 87,  252 => 85,  250 => 84,  246 => 83,  241 => 81,  236 => 79,  230 => 77,  226 => 75,  215 => 69,  210 => 67,  205 => 66,  202 => 65,  196 => 62,  191 => 61,  189 => 60,  185 => 58,  180 => 56,  175 => 55,  173 => 54,  168 => 52,  164 => 51,  161 => 50,  151 => 48,  149 => 47,  144 => 45,  138 => 43,  128 => 41,  126 => 40,  120 => 37,  113 => 35,  109 => 33,  105 => 32,  99 => 30,  97 => 29,  87 => 22,  83 => 21,  80 => 20,  70 => 18,  68 => 17,  63 => 15,  58 => 13,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main contact-page\">

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
                  <a href=\"https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
                {% endif %}
              </div>
              <div class=\"col-sm-3\"><strong>{{ text_telephone }}</strong><br>
                {{ telephone }}<br />
                <br />
                
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
            <div class=\"pull-right mt-3\">
              <input class=\"btn btn-warning\" type=\"submit\" value=\"{{ button_submit }}\" />
            </div>
          </div>
        </form>
        </div>
      </div>
  </div>

</main>
{{ footer }}
", "coffee/template/information/contact.twig", "");
    }
}
