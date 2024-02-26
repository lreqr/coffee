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

/* coffee/template/account/register.twig */
class __TwigTemplate_a2e05839a1d853a678ac838ffe81562ec07cb83f370e7569c35768926c7cc9de extends \Twig\Template
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
 ";
        // line 2
        if (($context["error_warning"] ?? null)) {
            // line 3
            echo "     <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
         ";
            // line 4
            echo ($context["error_warning"] ?? null);
            echo "
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
     </div>
 ";
        }
        // line 8
        echo "<main id=\"account-register\" class=\"main register-page\">
    <div class=\"container\">
        <div class=\"row login-row\">
            <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                <div class=\"login-block-register\">
                    <p>";
        // line 13
        echo ($context["text_account_already"] ?? null);
        echo "<a href=\"\" class=\"register\">Login</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <form action=\"";
        // line 16
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset id=\"account\">
                            <div class=\"login-block-title\">
                                <h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                                <p class=\"under-title\">Welcome to the world of flavor and pleasure!</p>
                            </div>
                            <div class=\"form-group required\"
                                 style=\"display: ";
        // line 23
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                                <label class=\"col-sm-2 control-label\">";
        // line 24
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 26
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 26) == ($context["customer_group_id"] ?? null))) {
                // line 27
                echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 30);
                echo "\" checked=\"checked\"/>
                                                    ";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 31);
                echo "</label>
                                            </div>
                                        ";
            } else {
                // line 34
                echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 37);
                echo "\"/>
                                                    ";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 38);
                echo "</label>
                                            </div>
                                        ";
            }
            // line 41
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                            </div>
                            <div class=\"name-block\">
                                <input type=\"text\" class=\"form-control\" id=\"input-firstname\" placeholder=\"First name\"
                                       aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                                
                                <input type=\"text\" class=\"form-control\" id=\"input-lastname\" placeholder=\"Last name\"
                                       aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                            </div>
                            <div class=\"email-block\">
                                <input type=\"text\" class=\"form-control\" id=\"input-email\" placeholder=\"Email\">
                            </div>
                            <div class=\"telephone-block\">
                                <input type=\"tel\" class=\"form-control\" id=\"input-telephone\" placeholder=\"Phone\">
                            </div>
                            <p>Your password</p>
                            <div class=\"password-block\">
                                <input type=\"password\" class=\"form-control\" id=\"input-password\" placeholder=\"Password\">
                                <input type=\"password\" class=\"form-control\" id=\"input-confirm\"
                                       placeholder=\"Password Confirm\">
                            </div>
                            <div class=\"newsletter-block\">
                                <p>Subscribe</p>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\">
                                    Yes</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\">
                                    No</label>
                                <div class=\"pull-right\">I have read and agree to the <a href=\"#\" class=\"agree\"><b>Privacy
                                            Policy</b></a>
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"agree\" value=\"1\">
                                    &nbsp;
                                    <input type=\"submit\" value=\"Continue\" class=\"btn btn-warning\">
                                </div>

                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
<div id=\"account-register\" class=\"container my-3\">
    ";
        // line 87
        if (($context["error_warning"] ?? null)) {
            // line 88
            echo "        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            ";
            // line 89
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 93
        echo "    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">";
        // line 94
        echo ($context["content_top"] ?? null);
        echo "
            <h1>";
        // line 95
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <p>";
        // line 96
        echo ($context["text_account_already"] ?? null);
        echo "</p>
            <form action=\"";
        // line 97
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset id=\"account\">
                    <legend>";
        // line 99
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\"
                         style=\"display: ";
        // line 101
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                        <label class=\"col-sm-2 control-label\">";
        // line 102
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 104
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 104) == ($context["customer_group_id"] ?? null))) {
                // line 105
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 108);
                echo "\" checked=\"checked\"/>
                                            ";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 109);
                echo "</label>
                                    </div>
                                ";
            } else {
                // line 112
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 115);
                echo "\"/>
                                            ";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 116);
                echo "</label>
                                    </div>
                                ";
            }
            // line 119
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 122
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 124
        echo ($context["firstname"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 125
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                            ";
        // line 126
        if (($context["error_firstname"] ?? null)) {
            // line 127
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 128
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 131
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 133
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                   id=\"input-lastname\" class=\"form-control\"/>
                            ";
        // line 135
        if (($context["error_lastname"] ?? null)) {
            // line 136
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 137
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 140
        echo ($context["entry_email"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"email\" name=\"email\" value=\"";
        // line 142
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                   id=\"input-email\" class=\"form-control\"/>
                            ";
        // line 144
        if (($context["error_email"] ?? null)) {
            // line 145
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 146
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 149
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"tel\" name=\"telephone\" value=\"";
        // line 151
        echo ($context["telephone"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 152
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                            ";
        // line 153
        if (($context["error_telephone"] ?? null)) {
            // line 154
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 155
        echo " </div>
                    </div>
                    ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 158
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "select")) {
                // line 159
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 160);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 162);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"custom_field[";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 164);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                echo "]\"
                                            id=\"input-custom-field";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "\"
                                            class=\"form-control\">
                                        <option value=\"\">";
                // line 167
                echo ($context["text_select"] ?? null);
                echo "</option>


                                        ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 170));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 171
                    echo "                                            ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 171)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 171) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171)] ?? null) : null)))) {
                        // line 172
                        echo "



                                                <option value=\"";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 176);
                        echo "\"
                                                        selected=\"selected\">";
                        // line 177
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 177);
                        echo "</option>





                                            ";
                    } else {
                        // line 184
                        echo "




                                                <option value=\"";
                        // line 189
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 189);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 189);
                        echo "</option>





                                            ";
                    }
                    // line 196
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                echo "

                                    </select>
                                    ";
                // line 200
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null)) {
                    // line 201
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 202
                echo "</div>
                            </div>
                        ";
            }
            // line 205
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 205) == "radio")) {
                // line 206
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 207);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 210
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 210));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 211
                    echo "                                            <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 211) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null)))) {
                        // line 212
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 214
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 214);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                        echo "]\"
                                                               value=\"";
                        // line 215
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 215);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 217
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 217);
                        echo "</label>
                                                ";
                    } else {
                        // line 219
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 221
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 221);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                        echo "]\"
                                                               value=\"";
                        // line 222
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 222);
                        echo "\"/>
                                                        ";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 223);
                        echo "</label>
                                                ";
                    }
                    // line 224
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 225
                echo "</div>
                                    ";
                // line 226
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) {
                    // line 227
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 228
                echo "</div>
                            </div>
                        ";
            }
            // line 231
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 231) == "checkbox")) {
                // line 232
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 233);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 234
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 236
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 236));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 237
                    echo "                                            <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 237), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null)))) {
                        // line 238
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 240
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 240);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                        echo "][]\"
                                                               value=\"";
                        // line 241
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 241);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 243
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 243);
                        echo "</label>
                                                ";
                    } else {
                        // line 245
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 247);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                        echo "][]\"
                                                               value=\"";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 248);
                        echo "\"/>
                                                        ";
                        // line 249
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 249);
                        echo "</label>
                                                ";
                    }
                    // line 250
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 251
                echo " </div>
                                    ";
                // line 252
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252)] ?? null) : null)) {
                    // line 253
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 254
                echo " </div>
                            </div>
                        ";
            }
            // line 257
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 257) == "text")) {
                // line 258
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 259);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 261
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 261);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\"
                                           name=\"custom_field[";
                // line 264
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 264);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                echo "]\"
                                           value=\"";
                // line 265
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 265);
                }
                echo "\"
                                           placeholder=\"";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 266);
                echo "\"
                                           id=\"input-custom-field";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267);
                echo "\"
                                           class=\"form-control\"/>
                                    ";
                // line 269
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269)] ?? null) : null)) {
                    // line 270
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 271
                echo " </div>
                            </div>
                        ";
            }
            // line 274
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 274) == "textarea")) {
                // line 275
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 275);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 276
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 276);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 278
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 278);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 281
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 281);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 282
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 282);
                echo "\"
                                            id=\"input-custom-field";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 283);
                echo "\"
                                            class=\"form-control\">";
                // line 284
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 284)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 284)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 284);
                }
                echo "</textarea>
                                    ";
                // line 285
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285)] ?? null) : null)) {
                    // line 286
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 286)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 287
                echo " </div>
                            </div>
                        ";
            }
            // line 290
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 290) == "file")) {
                // line 291
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 291);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 292
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 292);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 293
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 293);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" id=\"button-custom-field";
                // line 295
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 295);
                echo "\"
                                            data-loading-text=\"";
                // line 296
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                class=\"fa fa-upload\"></i> ";
                // line 297
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                    <input type=\"hidden\"
                                           name=\"custom_field[";
                // line 299
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 299);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 299);
                echo "]\"
                                           value=\"";
                // line 300
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 300)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 300)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                    ";
                // line 301
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 301)] ?? null) : null)) {
                    // line 302
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 302)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 303
                echo "</div>
                            </div>
                        ";
            }
            // line 306
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 306) == "date")) {
                // line 307
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 308
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 308);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 310);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 310);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 314
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 314);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 314);
                echo "]\"
                                               value=\"";
                // line 315
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 315)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 315)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 315);
                }
                echo "\"
                                               placeholder=\"";
                // line 316
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 316);
                echo "\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-custom-field";
                // line 317
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 317);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 322
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 322)] ?? null) : null)) {
                    // line 323
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 323)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 324
                echo " </div>
                            </div>
                        ";
            }
            // line 327
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 327) == "time")) {
                // line 328
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 328);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 329
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 329);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 331
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 331);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 331);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group time\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 335
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 335);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 335);
                echo "]\"
                                               value=\"";
                // line 336
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 336)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 336)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 336);
                }
                echo "\"
                                               placeholder=\"";
                // line 337
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 337);
                echo "\" data-date-format=\"HH:mm\"
                                               id=\"input-custom-field";
                // line 338
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 338);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 343
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 343)] ?? null) : null)) {
                    // line 344
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 345
                echo " </div>
                            </div>
                        ";
            }
            // line 348
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 348) == "datetime")) {
                // line 349
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 349);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 350
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 350);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 352
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 352);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 352);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group datetime\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 356
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 356);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 356);
                echo "]\"
                                               value=\"";
                // line 357
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 357)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 357)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 357);
                }
                echo "\"
                                               placeholder=\"";
                // line 358
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 358);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                               id=\"input-custom-field";
                // line 359
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 359);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 364
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364)] ?? null) : null)) {
                    // line 365
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 365)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 366
                echo " </div>
                            </div>
                        ";
            }
            // line 369
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        echo "                </fieldset>
                <fieldset>
                    <legend>";
        // line 372
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 374
        echo ($context["entry_password"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 376
        echo ($context["password"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 377
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                            ";
        // line 378
        if (($context["error_password"] ?? null)) {
            // line 379
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                            ";
        }
        // line 380
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 383
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 385
        echo ($context["confirm"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 386
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                            ";
        // line 387
        if (($context["error_confirm"] ?? null)) {
            // line 388
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                            ";
        }
        // line 389
        echo " </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>";
        // line 393
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 395
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\"> ";
        // line 396
        if (($context["newsletter"] ?? null)) {
            // line 397
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                    ";
            // line 399
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                    ";
            // line 402
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        } else {
            // line 404
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                    ";
            // line 406
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                    ";
            // line 409
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        }
        // line 410
        echo " </div>
                    </div>
                </fieldset>
                ";
        // line 413
        echo ($context["captcha"] ?? null);
        echo "
                ";
        // line 414
        if (($context["text_agree"] ?? null)) {
            // line 415
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">";
            // line 416
            echo ($context["text_agree"] ?? null);
            echo "
                            ";
            // line 417
            if (($context["agree"] ?? null)) {
                // line 418
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                            ";
            } else {
                // line 420
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                            ";
            }
            // line 422
            echo "                            &nbsp;
                            <input type=\"submit\" value=\"";
            // line 423
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        } else {
            // line 427
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">
                            <input type=\"submit\" value=\"";
            // line 429
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        }
        // line 433
        echo "            </form>
            ";
        // line 434
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 435
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
    // Sort the custom fields
    \$('#account .form-group[data-sort]').detach().each(function () {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
            \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
            \$('#account .form-group:first').before(this);
        }
    });

    \$('input[name=\\'customer_group_id\\']').on('change', function () {
        \$.ajax({
            url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
            dataType: 'json',
            success: function (json) {
                \$('.custom-field').hide();
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('#custom-field' + custom_field['custom_field_id']).show();

                    if (custom_field['required']) {
                        \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('input[name=\\'customer_group_id\\']:checked').trigger('change');
    //--></script>
<script type=\"text/javascript\"><!--
    \$('button[id^=\\'button-custom-field\\']').on('click', function () {
        var element = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$(element).button('loading');
                    },
                    complete: function () {
                        \$(element).button('reset');
                    },
                    success: function (json) {
                        \$(element).parent().find('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(element).parent().find('input').val(json['code']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 538
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 543
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 548
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 553
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "coffee/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1309 => 553,  1301 => 548,  1293 => 543,  1285 => 538,  1179 => 435,  1175 => 434,  1172 => 433,  1165 => 429,  1161 => 427,  1154 => 423,  1151 => 422,  1147 => 420,  1143 => 418,  1141 => 417,  1137 => 416,  1134 => 415,  1132 => 414,  1128 => 413,  1123 => 410,  1118 => 409,  1112 => 406,  1108 => 404,  1103 => 402,  1097 => 399,  1093 => 397,  1091 => 396,  1087 => 395,  1082 => 393,  1076 => 389,  1070 => 388,  1068 => 387,  1064 => 386,  1060 => 385,  1055 => 383,  1050 => 380,  1044 => 379,  1042 => 378,  1038 => 377,  1034 => 376,  1029 => 374,  1024 => 372,  1020 => 370,  1014 => 369,  1009 => 366,  1003 => 365,  1001 => 364,  993 => 359,  989 => 358,  981 => 357,  975 => 356,  966 => 352,  961 => 350,  956 => 349,  953 => 348,  948 => 345,  942 => 344,  940 => 343,  932 => 338,  928 => 337,  920 => 336,  914 => 335,  905 => 331,  900 => 329,  895 => 328,  892 => 327,  887 => 324,  881 => 323,  879 => 322,  871 => 317,  867 => 316,  859 => 315,  853 => 314,  844 => 310,  839 => 308,  834 => 307,  831 => 306,  826 => 303,  820 => 302,  818 => 301,  810 => 300,  804 => 299,  799 => 297,  795 => 296,  791 => 295,  786 => 293,  782 => 292,  777 => 291,  774 => 290,  769 => 287,  763 => 286,  761 => 285,  753 => 284,  749 => 283,  745 => 282,  739 => 281,  731 => 278,  726 => 276,  721 => 275,  718 => 274,  713 => 271,  707 => 270,  705 => 269,  700 => 267,  696 => 266,  688 => 265,  682 => 264,  674 => 261,  669 => 259,  664 => 258,  661 => 257,  656 => 254,  650 => 253,  648 => 252,  645 => 251,  638 => 250,  633 => 249,  629 => 248,  623 => 247,  619 => 245,  614 => 243,  609 => 241,  603 => 240,  599 => 238,  596 => 237,  592 => 236,  587 => 234,  583 => 233,  578 => 232,  575 => 231,  570 => 228,  564 => 227,  562 => 226,  559 => 225,  552 => 224,  547 => 223,  543 => 222,  537 => 221,  533 => 219,  528 => 217,  523 => 215,  517 => 214,  513 => 212,  510 => 211,  506 => 210,  501 => 208,  497 => 207,  492 => 206,  489 => 205,  484 => 202,  478 => 201,  476 => 200,  471 => 197,  465 => 196,  453 => 189,  446 => 184,  436 => 177,  432 => 176,  426 => 172,  423 => 171,  419 => 170,  413 => 167,  408 => 165,  402 => 164,  395 => 162,  390 => 160,  385 => 159,  382 => 158,  378 => 157,  374 => 155,  368 => 154,  366 => 153,  362 => 152,  358 => 151,  353 => 149,  348 => 146,  342 => 145,  340 => 144,  333 => 142,  328 => 140,  323 => 137,  317 => 136,  315 => 135,  308 => 133,  303 => 131,  298 => 128,  292 => 127,  290 => 126,  286 => 125,  282 => 124,  277 => 122,  267 => 119,  261 => 116,  257 => 115,  252 => 112,  246 => 109,  242 => 108,  237 => 105,  234 => 104,  230 => 103,  226 => 102,  218 => 101,  213 => 99,  208 => 97,  204 => 96,  200 => 95,  196 => 94,  193 => 93,  186 => 89,  183 => 88,  181 => 87,  128 => 41,  122 => 38,  118 => 37,  113 => 34,  107 => 31,  103 => 30,  98 => 27,  95 => 26,  91 => 25,  87 => 24,  79 => 23,  72 => 19,  66 => 16,  60 => 13,  53 => 8,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
 {% if error_warning %}
     <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
         {{ error_warning }}
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
     </div>
 {% endif %}
<main id=\"account-register\" class=\"main register-page\">
    <div class=\"container\">
        <div class=\"row login-row\">
            <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                <div class=\"login-block-register\">
                    <p>{{ text_account_already }}<a href=\"\" class=\"register\">Login</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset id=\"account\">
                            <div class=\"login-block-title\">
                                <h1>{{ heading_title }}</h1>
                                <p class=\"under-title\">Welcome to the world of flavor and pleasure!</p>
                            </div>
                            <div class=\"form-group required\"
                                 style=\"display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};\">
                                <label class=\"col-sm-2 control-label\">{{ entry_customer_group }}</label>
                                <div class=\"col-sm-10\">{% for customer_group in customer_groups %}
                                        {% if customer_group.customer_group_id == customer_group_id %}
                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\"/>
                                                    {{ customer_group.name }}</label>
                                            </div>
                                        {% else %}
                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"{{ customer_group.customer_group_id }}\"/>
                                                    {{ customer_group.name }}</label>
                                            </div>
                                        {% endif %}
                                    {% endfor %}</div>
                            </div>
                            <div class=\"name-block\">
                                <input type=\"text\" class=\"form-control\" id=\"input-firstname\" placeholder=\"First name\"
                                       aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                                
                                <input type=\"text\" class=\"form-control\" id=\"input-lastname\" placeholder=\"Last name\"
                                       aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                            </div>
                            <div class=\"email-block\">
                                <input type=\"text\" class=\"form-control\" id=\"input-email\" placeholder=\"Email\">
                            </div>
                            <div class=\"telephone-block\">
                                <input type=\"tel\" class=\"form-control\" id=\"input-telephone\" placeholder=\"Phone\">
                            </div>
                            <p>Your password</p>
                            <div class=\"password-block\">
                                <input type=\"password\" class=\"form-control\" id=\"input-password\" placeholder=\"Password\">
                                <input type=\"password\" class=\"form-control\" id=\"input-confirm\"
                                       placeholder=\"Password Confirm\">
                            </div>
                            <div class=\"newsletter-block\">
                                <p>Subscribe</p>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\">
                                    Yes</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\">
                                    No</label>
                                <div class=\"pull-right\">I have read and agree to the <a href=\"#\" class=\"agree\"><b>Privacy
                                            Policy</b></a>
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"agree\" value=\"1\">
                                    &nbsp;
                                    <input type=\"submit\" value=\"Continue\" class=\"btn btn-warning\">
                                </div>

                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
<div id=\"account-register\" class=\"container my-3\">
    {% if error_warning %}
        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            {{ error_warning }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endif %}
    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">{{ content_top }}
            <h1>{{ heading_title }}</h1>
            <p>{{ text_account_already }}</p>
            <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset id=\"account\">
                    <legend>{{ text_your_details }}</legend>
                    <div class=\"form-group required\"
                         style=\"display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};\">
                        <label class=\"col-sm-2 control-label\">{{ entry_customer_group }}</label>
                        <div class=\"col-sm-10\">{% for customer_group in customer_groups %}
                                {% if customer_group.customer_group_id == customer_group_id %}
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\"/>
                                            {{ customer_group.name }}</label>
                                    </div>
                                {% else %}
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"{{ customer_group.customer_group_id }}\"/>
                                            {{ customer_group.name }}</label>
                                    </div>
                                {% endif %}
                            {% endfor %}</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname\">{{ entry_firstname }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\"
                                   placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                            {% if error_firstname %}
                                <div class=\"text-danger\">{{ error_firstname }}</div>
                            {% endif %} </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname\">{{ entry_lastname }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\"
                                   id=\"input-lastname\" class=\"form-control\"/>
                            {% if error_lastname %}
                                <div class=\"text-danger\">{{ error_lastname }}</div>
                            {% endif %} </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\"
                                   id=\"input-email\" class=\"form-control\"/>
                            {% if error_email %}
                                <div class=\"text-danger\">{{ error_email }}</div>
                            {% endif %} </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-telephone\">{{ entry_telephone }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\"
                                   placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                            {% if error_telephone %}
                                <div class=\"text-danger\">{{ error_telephone }}</div>
                            {% endif %} </div>
                    </div>
                    {% for custom_field in custom_fields %}
                        {% if custom_field.type == 'select' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                            id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                            class=\"form-control\">
                                        <option value=\"\">{{ text_select }}</option>


                                        {% for custom_field_value in custom_field.custom_field_value %}
                                            {% if register_custom_field[custom_field.location][custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}




                                                <option value=\"{{ custom_field_value.custom_field_value_id }}\"
                                                        selected=\"selected\">{{ custom_field_value.name }}</option>





                                            {% else %}





                                                <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>





                                            {% endif %}
                                        {% endfor %}


                                    </select>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %}</div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'radio' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div> {% for custom_field_value in custom_field.custom_field_value %}
                                            <div class=\"radio\">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                               value=\"{{ custom_field_value.custom_field_value_id }}\"
                                                               checked=\"checked\"/>
                                                        {{ custom_field_value.name }}</label>
                                                {% else %}
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                               value=\"{{ custom_field_value.custom_field_value_id }}\"/>
                                                        {{ custom_field_value.name }}</label>
                                                {% endif %} </div>
                                        {% endfor %}</div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %}</div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'checkbox' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div> {% for custom_field_value in custom_field.custom_field_value %}
                                            <div class=\"checkbox\">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}
                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\"
                                                               value=\"{{ custom_field_value.custom_field_value_id }}\"
                                                               checked=\"checked\"/>
                                                        {{ custom_field_value.name }}</label>
                                                {% else %}
                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\"
                                                               value=\"{{ custom_field_value.custom_field_value_id }}\"/>
                                                        {{ custom_field_value.name }}</label>
                                                {% endif %} </div>
                                        {% endfor %} </div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'text' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\"
                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                           placeholder=\"{{ custom_field.name }}\"
                                           id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                           class=\"form-control\"/>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'textarea' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                            rows=\"5\" placeholder=\"{{ custom_field.name }}\"
                                            id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                            class=\"form-control\">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'file' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" id=\"button-custom-field{{ custom_field.custom_field_id }}\"
                                            data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i
                                                class=\"fa fa-upload\"></i> {{ button_upload }}</button>
                                    <input type=\"hidden\"
                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}\"/>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %}</div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'date' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\"
                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                               value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                               placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'time' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group time\">
                                        <input type=\"text\"
                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                               value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                               placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\"
                                               id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'datetime' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group datetime\">
                                        <input type=\"text\"
                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                               value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                               placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                               id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </fieldset>
                <fieldset>
                    <legend>{{ text_your_password }}</legend>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-password\">{{ entry_password }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"{{ password }}\"
                                   placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
                            {% if error_password %}
                                <div class=\"text-danger\">{{ error_password }}</div>
                            {% endif %} </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-confirm\">{{ entry_confirm }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\"
                                   placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                            {% if error_confirm %}
                                <div class=\"text-danger\">{{ error_confirm }}</div>
                            {% endif %} </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>{{ text_newsletter }}</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">{{ entry_newsletter }}</label>
                        <div class=\"col-sm-10\"> {% if newsletter %}
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                    {{ text_yes }}</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                    {{ text_no }}</label>
                            {% else %}
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                    {{ text_yes }}</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                    {{ text_no }}</label>
                            {% endif %} </div>
                    </div>
                </fieldset>
                {{ captcha }}
                {% if text_agree %}
                    <div class=\"buttons\">
                        <div class=\"pull-right\">{{ text_agree }}
                            {% if agree %}
                                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                            {% else %}
                                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                            {% endif %}
                            &nbsp;
                            <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                {% else %}
                    <div class=\"buttons\">
                        <div class=\"pull-right\">
                            <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                {% endif %}
            </form>
            {{ content_bottom }}</div>
        {{ column_right }}</div>
</div>
<script type=\"text/javascript\"><!--
    // Sort the custom fields
    \$('#account .form-group[data-sort]').detach().each(function () {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
            \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
            \$('#account .form-group:first').before(this);
        }
    });

    \$('input[name=\\'customer_group_id\\']').on('change', function () {
        \$.ajax({
            url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
            dataType: 'json',
            success: function (json) {
                \$('.custom-field').hide();
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('#custom-field' + custom_field['custom_field_id']).show();

                    if (custom_field['required']) {
                        \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('input[name=\\'customer_group_id\\']:checked').trigger('change');
    //--></script>
<script type=\"text/javascript\"><!--
    \$('button[id^=\\'button-custom-field\\']').on('click', function () {
        var element = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$(element).button('loading');
                    },
                    complete: function () {
                        \$(element).button('reset');
                    },
                    success: function (json) {
                        \$(element).parent().find('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(element).parent().find('input').val(json['code']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '{{ datepicker }}',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: true,
        pickTime: true
    });
    //--></script>
{{ footer }} ", "coffee/template/account/register.twig", "");
    }
}
