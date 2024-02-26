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
class __TwigTemplate_f764d19c66ecac2071d508f372c15eb945ce0b86f56d20b3e663622ab8544802 extends \Twig\Template
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
                                ";
        // line 46
        if (($context["error_firstname"] ?? null)) {
            // line 47
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                                ";
        }
        // line 48
        echo " </div>
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
        // line 89
        if (($context["error_warning"] ?? null)) {
            // line 90
            echo "        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            ";
            // line 91
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 95
        echo "    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">";
        // line 96
        echo ($context["content_top"] ?? null);
        echo "
            <h1>";
        // line 97
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <p>";
        // line 98
        echo ($context["text_account_already"] ?? null);
        echo "</p>
            <form action=\"";
        // line 99
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset id=\"account\">
                    <legend>";
        // line 101
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\"
                         style=\"display: ";
        // line 103
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                        <label class=\"col-sm-2 control-label\">";
        // line 104
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 106
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 106) == ($context["customer_group_id"] ?? null))) {
                // line 107
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 110);
                echo "\" checked=\"checked\"/>
                                            ";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 111);
                echo "</label>
                                    </div>
                                ";
            } else {
                // line 114
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 117);
                echo "\"/>
                                            ";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 118);
                echo "</label>
                                    </div>
                                ";
            }
            // line 121
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 124
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 126
        echo ($context["firstname"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 127
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                            ";
        // line 128
        if (($context["error_firstname"] ?? null)) {
            // line 129
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 130
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 133
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 135
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                   id=\"input-lastname\" class=\"form-control\"/>
                            ";
        // line 137
        if (($context["error_lastname"] ?? null)) {
            // line 138
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 139
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 142
        echo ($context["entry_email"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"email\" name=\"email\" value=\"";
        // line 144
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                   id=\"input-email\" class=\"form-control\"/>
                            ";
        // line 146
        if (($context["error_email"] ?? null)) {
            // line 147
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 148
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 151
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"tel\" name=\"telephone\" value=\"";
        // line 153
        echo ($context["telephone"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 154
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                            ";
        // line 155
        if (($context["error_telephone"] ?? null)) {
            // line 156
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 157
        echo " </div>
                    </div>
                    ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 160
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 160) == "select")) {
                // line 161
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 162);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"custom_field[";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 166);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                echo "]\"
                                            id=\"input-custom-field";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "\"
                                            class=\"form-control\">
                                        <option value=\"\">";
                // line 169
                echo ($context["text_select"] ?? null);
                echo "</option>


                                        ";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 172));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 173
                    echo "                                            ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 173)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 173) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null)))) {
                        // line 174
                        echo "



                                                <option value=\"";
                        // line 178
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 178);
                        echo "\"
                                                        selected=\"selected\">";
                        // line 179
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 179);
                        echo "</option>





                                            ";
                    } else {
                        // line 186
                        echo "




                                                <option value=\"";
                        // line 191
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 191);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 191);
                        echo "</option>





                                            ";
                    }
                    // line 198
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 199
                echo "

                                    </select>
                                    ";
                // line 202
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null)) {
                    // line 203
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 204
                echo "</div>
                            </div>
                        ";
            }
            // line 207
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 207) == "radio")) {
                // line 208
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 209);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 210);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 212
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 212));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 213
                    echo "                                            <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 213) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null)))) {
                        // line 214
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 216
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 216);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216);
                        echo "]\"
                                                               value=\"";
                        // line 217
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 217);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 219
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 219);
                        echo "</label>
                                                ";
                    } else {
                        // line 221
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 223);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                        echo "]\"
                                                               value=\"";
                        // line 224
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 224);
                        echo "\"/>
                                                        ";
                        // line 225
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 225);
                        echo "</label>
                                                ";
                    }
                    // line 226
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "</div>
                                    ";
                // line 228
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) {
                    // line 229
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 230
                echo "</div>
                            </div>
                        ";
            }
            // line 233
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 233) == "checkbox")) {
                // line 234
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 235);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 236);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 238
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 238));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 239
                    echo "                                            <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 239), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239)] ?? null) : null)))) {
                        // line 240
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 242
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 242);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                        echo "][]\"
                                                               value=\"";
                        // line 243
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 243);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 245);
                        echo "</label>
                                                ";
                    } else {
                        // line 247
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 249
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 249);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249);
                        echo "][]\"
                                                               value=\"";
                        // line 250
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 250);
                        echo "\"/>
                                                        ";
                        // line 251
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 251);
                        echo "</label>
                                                ";
                    }
                    // line 252
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo " </div>
                                    ";
                // line 254
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254)] ?? null) : null)) {
                    // line 255
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 255)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 256
                echo " </div>
                            </div>
                        ";
            }
            // line 259
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 259) == "text")) {
                // line 260
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 261
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 261);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 263);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 263);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\"
                                           name=\"custom_field[";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 266);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                echo "]\"
                                           value=\"";
                // line 267
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 267);
                }
                echo "\"
                                           placeholder=\"";
                // line 268
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 268);
                echo "\"
                                           id=\"input-custom-field";
                // line 269
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269);
                echo "\"
                                           class=\"form-control\"/>
                                    ";
                // line 271
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271)] ?? null) : null)) {
                    // line 272
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 273
                echo " </div>
                            </div>
                        ";
            }
            // line 276
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 276) == "textarea")) {
                // line 277
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 278
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 278);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 280
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 280);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 283);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 283);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 284
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 284);
                echo "\"
                                            id=\"input-custom-field";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285);
                echo "\"
                                            class=\"form-control\">";
                // line 286
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 286)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 286)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 286);
                }
                echo "</textarea>
                                    ";
                // line 287
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287)] ?? null) : null)) {
                    // line 288
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 288)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 289
                echo " </div>
                            </div>
                        ";
            }
            // line 292
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 292) == "file")) {
                // line 293
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 293);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 294
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 294);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 295
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 295);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" id=\"button-custom-field";
                // line 297
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 297);
                echo "\"
                                            data-loading-text=\"";
                // line 298
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                class=\"fa fa-upload\"></i> ";
                // line 299
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                    <input type=\"hidden\"
                                           name=\"custom_field[";
                // line 301
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 301);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 301);
                echo "]\"
                                           value=\"";
                // line 302
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 302)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 302)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                    ";
                // line 303
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 303)] ?? null) : null)) {
                    // line 304
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 304)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 305
                echo "</div>
                            </div>
                        ";
            }
            // line 308
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 308) == "date")) {
                // line 309
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 309);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 310);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 312
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 312);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 312);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 316
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 316);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 316);
                echo "]\"
                                               value=\"";
                // line 317
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 317)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 317)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 317);
                }
                echo "\"
                                               placeholder=\"";
                // line 318
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 318);
                echo "\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-custom-field";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 319);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 324
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 324)] ?? null) : null)) {
                    // line 325
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 325)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 326
                echo " </div>
                            </div>
                        ";
            }
            // line 329
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 329) == "time")) {
                // line 330
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 330);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 331
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 331);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 333
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 333);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 333);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group time\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 337
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 337);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 337);
                echo "]\"
                                               value=\"";
                // line 338
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 338)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 338)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 338);
                }
                echo "\"
                                               placeholder=\"";
                // line 339
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 339);
                echo "\" data-date-format=\"HH:mm\"
                                               id=\"input-custom-field";
                // line 340
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 340);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 345
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 345)] ?? null) : null)) {
                    // line 346
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 346)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 347
                echo " </div>
                            </div>
                        ";
            }
            // line 350
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 350) == "datetime")) {
                // line 351
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 351);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 352
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 352);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 354
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 354);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 354);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group datetime\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 358
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 358);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358);
                echo "]\"
                                               value=\"";
                // line 359
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 359)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 359)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 359);
                }
                echo "\"
                                               placeholder=\"";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 360);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                               id=\"input-custom-field";
                // line 361
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 361);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 366
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 366)] ?? null) : null)) {
                    // line 367
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 367)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 368
                echo " </div>
                            </div>
                        ";
            }
            // line 371
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "                </fieldset>
                <fieldset>
                    <legend>";
        // line 374
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 376
        echo ($context["entry_password"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 378
        echo ($context["password"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 379
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                            ";
        // line 380
        if (($context["error_password"] ?? null)) {
            // line 381
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                            ";
        }
        // line 382
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 385
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 387
        echo ($context["confirm"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 388
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                            ";
        // line 389
        if (($context["error_confirm"] ?? null)) {
            // line 390
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                            ";
        }
        // line 391
        echo " </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>";
        // line 395
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 397
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\"> ";
        // line 398
        if (($context["newsletter"] ?? null)) {
            // line 399
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                    ";
            // line 401
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                    ";
            // line 404
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        } else {
            // line 406
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                    ";
            // line 408
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                    ";
            // line 411
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        }
        // line 412
        echo " </div>
                    </div>
                </fieldset>
                ";
        // line 415
        echo ($context["captcha"] ?? null);
        echo "
                ";
        // line 416
        if (($context["text_agree"] ?? null)) {
            // line 417
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">";
            // line 418
            echo ($context["text_agree"] ?? null);
            echo "
                            ";
            // line 419
            if (($context["agree"] ?? null)) {
                // line 420
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                            ";
            } else {
                // line 422
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                            ";
            }
            // line 424
            echo "                            &nbsp;
                            <input type=\"submit\" value=\"";
            // line 425
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        } else {
            // line 429
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">
                            <input type=\"submit\" value=\"";
            // line 431
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        }
        // line 435
        echo "            </form>
            ";
        // line 436
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 437
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
        // line 540
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 545
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 550
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 555
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
        return array (  1319 => 555,  1311 => 550,  1303 => 545,  1295 => 540,  1189 => 437,  1185 => 436,  1182 => 435,  1175 => 431,  1171 => 429,  1164 => 425,  1161 => 424,  1157 => 422,  1153 => 420,  1151 => 419,  1147 => 418,  1144 => 417,  1142 => 416,  1138 => 415,  1133 => 412,  1128 => 411,  1122 => 408,  1118 => 406,  1113 => 404,  1107 => 401,  1103 => 399,  1101 => 398,  1097 => 397,  1092 => 395,  1086 => 391,  1080 => 390,  1078 => 389,  1074 => 388,  1070 => 387,  1065 => 385,  1060 => 382,  1054 => 381,  1052 => 380,  1048 => 379,  1044 => 378,  1039 => 376,  1034 => 374,  1030 => 372,  1024 => 371,  1019 => 368,  1013 => 367,  1011 => 366,  1003 => 361,  999 => 360,  991 => 359,  985 => 358,  976 => 354,  971 => 352,  966 => 351,  963 => 350,  958 => 347,  952 => 346,  950 => 345,  942 => 340,  938 => 339,  930 => 338,  924 => 337,  915 => 333,  910 => 331,  905 => 330,  902 => 329,  897 => 326,  891 => 325,  889 => 324,  881 => 319,  877 => 318,  869 => 317,  863 => 316,  854 => 312,  849 => 310,  844 => 309,  841 => 308,  836 => 305,  830 => 304,  828 => 303,  820 => 302,  814 => 301,  809 => 299,  805 => 298,  801 => 297,  796 => 295,  792 => 294,  787 => 293,  784 => 292,  779 => 289,  773 => 288,  771 => 287,  763 => 286,  759 => 285,  755 => 284,  749 => 283,  741 => 280,  736 => 278,  731 => 277,  728 => 276,  723 => 273,  717 => 272,  715 => 271,  710 => 269,  706 => 268,  698 => 267,  692 => 266,  684 => 263,  679 => 261,  674 => 260,  671 => 259,  666 => 256,  660 => 255,  658 => 254,  655 => 253,  648 => 252,  643 => 251,  639 => 250,  633 => 249,  629 => 247,  624 => 245,  619 => 243,  613 => 242,  609 => 240,  606 => 239,  602 => 238,  597 => 236,  593 => 235,  588 => 234,  585 => 233,  580 => 230,  574 => 229,  572 => 228,  569 => 227,  562 => 226,  557 => 225,  553 => 224,  547 => 223,  543 => 221,  538 => 219,  533 => 217,  527 => 216,  523 => 214,  520 => 213,  516 => 212,  511 => 210,  507 => 209,  502 => 208,  499 => 207,  494 => 204,  488 => 203,  486 => 202,  481 => 199,  475 => 198,  463 => 191,  456 => 186,  446 => 179,  442 => 178,  436 => 174,  433 => 173,  429 => 172,  423 => 169,  418 => 167,  412 => 166,  405 => 164,  400 => 162,  395 => 161,  392 => 160,  388 => 159,  384 => 157,  378 => 156,  376 => 155,  372 => 154,  368 => 153,  363 => 151,  358 => 148,  352 => 147,  350 => 146,  343 => 144,  338 => 142,  333 => 139,  327 => 138,  325 => 137,  318 => 135,  313 => 133,  308 => 130,  302 => 129,  300 => 128,  296 => 127,  292 => 126,  287 => 124,  277 => 121,  271 => 118,  267 => 117,  262 => 114,  256 => 111,  252 => 110,  247 => 107,  244 => 106,  240 => 105,  236 => 104,  228 => 103,  223 => 101,  218 => 99,  214 => 98,  210 => 97,  206 => 96,  203 => 95,  196 => 91,  193 => 90,  191 => 89,  148 => 48,  142 => 47,  140 => 46,  128 => 41,  122 => 38,  118 => 37,  113 => 34,  107 => 31,  103 => 30,  98 => 27,  95 => 26,  91 => 25,  87 => 24,  79 => 23,  72 => 19,  66 => 16,  60 => 13,  53 => 8,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
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
                                {% if error_firstname %}
                                    <div class=\"text-danger\">{{ error_firstname }}</div>
                                {% endif %} </div>
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
