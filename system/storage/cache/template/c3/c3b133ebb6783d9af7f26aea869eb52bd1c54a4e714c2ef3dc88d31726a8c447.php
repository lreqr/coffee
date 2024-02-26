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
class __TwigTemplate_b775d745c253bf28d276a63ac4c03e411f9e8067b60a731f924a138eea70b91c extends \Twig\Template
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
<main id=\"account-register\" class=\"main register-page\">
    <div class=\"container\">
        <div class=\"row login-row\">
            <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                <div class=\"login-block-register\">
                    <p>";
        // line 7
        echo ($context["text_account_already"] ?? null);
        echo "<a href=\"\" class=\"register\">Login</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <form action=\"";
        // line 10
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"login-block-title\">
                            <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                            <p class=\"under-title\">Welcome to the world of flavor and pleasure!</p>
                        </div>
                        <div class=\"name-block\">
                            <input type=\"text\" class=\"form-control\" id=\"input-firstname\" placeholder=\"First name\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                            <input type=\"text\" class=\"form-control\" id=\"input-lastname\" placeholder=\"Last name\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
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
                            <input type=\"password\" class=\"form-control\" id=\"input-confirm\" placeholder=\"Password Confirm\">
                        </div>
                        <div class=\"newsletter-block\">
                            <p>Subscribe</p>
                            <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"newsletter\" value=\"1\">
                                Yes</label>
                            <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\">
                                No</label>
                            <div class=\"pull-right\">I have read and agree to the <a href=\"#\" class=\"agree\"><b>Privacy Policy</b></a>
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"agree\" value=\"1\">
                                &nbsp;
                                <input type=\"submit\" value=\"Continue\" class=\"btn btn-warning\">
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
<div id=\"account-register\" class=\"container my-3\">
    ";
        // line 53
        if (($context["error_warning"] ?? null)) {
            // line 54
            echo "        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            ";
            // line 55
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 59
        echo "    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">";
        // line 60
        echo ($context["content_top"] ?? null);
        echo "
            <h1>";
        // line 61
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <p>";
        // line 62
        echo ($context["text_account_already"] ?? null);
        echo "</p>
            <form action=\"";
        // line 63
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset id=\"account\">
                    <legend>";
        // line 65
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\"
                         style=\"display: ";
        // line 67
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                        <label class=\"col-sm-2 control-label\">";
        // line 68
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 70
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 70) == ($context["customer_group_id"] ?? null))) {
                // line 71
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 74);
                echo "\" checked=\"checked\"/>
                                            ";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 75);
                echo "</label>
                                    </div>
                                ";
            } else {
                // line 78
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 81);
                echo "\"/>
                                            ";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 82);
                echo "</label>
                                    </div>
                                ";
            }
            // line 85
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 88
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 90
        echo ($context["firstname"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 91
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                            ";
        // line 92
        if (($context["error_firstname"] ?? null)) {
            // line 93
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 94
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 97
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 99
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                   id=\"input-lastname\" class=\"form-control\"/>
                            ";
        // line 101
        if (($context["error_lastname"] ?? null)) {
            // line 102
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 103
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 106
        echo ($context["entry_email"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"email\" name=\"email\" value=\"";
        // line 108
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                   id=\"input-email\" class=\"form-control\"/>
                            ";
        // line 110
        if (($context["error_email"] ?? null)) {
            // line 111
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 112
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 115
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"tel\" name=\"telephone\" value=\"";
        // line 117
        echo ($context["telephone"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 118
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                            ";
        // line 119
        if (($context["error_telephone"] ?? null)) {
            // line 120
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 121
        echo " </div>
                    </div>
                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 124
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 124) == "select")) {
                // line 125
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 126);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 128);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"custom_field[";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 130);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                echo "]\"
                                            id=\"input-custom-field";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\"
                                            class=\"form-control\">
                                        <option value=\"\">";
                // line 133
                echo ($context["text_select"] ?? null);
                echo "</option>


                                        ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 136));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 137
                    echo "                                            ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 137)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 137) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null)))) {
                        // line 138
                        echo "



                                                <option value=\"";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 142);
                        echo "\"
                                                        selected=\"selected\">";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 143);
                        echo "</option>





                                            ";
                    } else {
                        // line 150
                        echo "




                                                <option value=\"";
                        // line 155
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 155);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 155);
                        echo "</option>





                                            ";
                    }
                    // line 162
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "

                                    </select>
                                    ";
                // line 166
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null)) {
                    // line 167
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 168
                echo "</div>
                            </div>
                        ";
            }
            // line 171
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 171) == "radio")) {
                // line 172
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 173);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 174);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 176));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 177
                    echo "                                            <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 177) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)))) {
                        // line 178
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 180
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 180);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                        echo "]\"
                                                               value=\"";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 181);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 183);
                        echo "</label>
                                                ";
                    } else {
                        // line 185
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 187
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 187);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                        echo "]\"
                                                               value=\"";
                        // line 188
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 188);
                        echo "\"/>
                                                        ";
                        // line 189
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 189);
                        echo "</label>
                                                ";
                    }
                    // line 190
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "</div>
                                    ";
                // line 192
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192)] ?? null) : null)) {
                    // line 193
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 194
                echo "</div>
                            </div>
                        ";
            }
            // line 197
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 197) == "checkbox")) {
                // line 198
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 199);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 200
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 200);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 202));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 203
                    echo "                                            <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 203), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null)))) {
                        // line 204
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 206
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 206);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                        echo "][]\"
                                                               value=\"";
                        // line 207
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 207);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 209
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 209);
                        echo "</label>
                                                ";
                    } else {
                        // line 211
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 213
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 213);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                        echo "][]\"
                                                               value=\"";
                        // line 214
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 214);
                        echo "\"/>
                                                        ";
                        // line 215
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 215);
                        echo "</label>
                                                ";
                    }
                    // line 216
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo " </div>
                                    ";
                // line 218
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null)) {
                    // line 219
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 220
                echo " </div>
                            </div>
                        ";
            }
            // line 223
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 223) == "text")) {
                // line 224
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 225
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 225);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 227);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\"
                                           name=\"custom_field[";
                // line 230
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 230);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                echo "]\"
                                           value=\"";
                // line 231
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 231);
                }
                echo "\"
                                           placeholder=\"";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 232);
                echo "\"
                                           id=\"input-custom-field";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                echo "\"
                                           class=\"form-control\"/>
                                    ";
                // line 235
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235)] ?? null) : null)) {
                    // line 236
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 237
                echo " </div>
                            </div>
                        ";
            }
            // line 240
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 240) == "textarea")) {
                // line 241
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 242);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 244);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 247);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 248);
                echo "\"
                                            id=\"input-custom-field";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249);
                echo "\"
                                            class=\"form-control\">";
                // line 250
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 250);
                }
                echo "</textarea>
                                    ";
                // line 251
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251)] ?? null) : null)) {
                    // line 252
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 253
                echo " </div>
                            </div>
                        ";
            }
            // line 256
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 256) == "file")) {
                // line 257
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 258);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 259);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" id=\"button-custom-field";
                // line 261
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                echo "\"
                                            data-loading-text=\"";
                // line 262
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                class=\"fa fa-upload\"></i> ";
                // line 263
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                    <input type=\"hidden\"
                                           name=\"custom_field[";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 265);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                echo "]\"
                                           value=\"";
                // line 266
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                    ";
                // line 267
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267)] ?? null) : null)) {
                    // line 268
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 269
                echo "</div>
                            </div>
                        ";
            }
            // line 272
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 272) == "date")) {
                // line 273
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 273);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 274
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 274);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 276
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 276);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 276);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 280
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 280);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280);
                echo "]\"
                                               value=\"";
                // line 281
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 281);
                }
                echo "\"
                                               placeholder=\"";
                // line 282
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 282);
                echo "\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-custom-field";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 283);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 288
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 288)] ?? null) : null)) {
                    // line 289
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 289)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 290
                echo " </div>
                            </div>
                        ";
            }
            // line 293
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 293) == "time")) {
                // line 294
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 294);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 295
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 295);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 297
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 297);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 297);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group time\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 301
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 301);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 301);
                echo "]\"
                                               value=\"";
                // line 302
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 302)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 302)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 302);
                }
                echo "\"
                                               placeholder=\"";
                // line 303
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 303);
                echo "\" data-date-format=\"HH:mm\"
                                               id=\"input-custom-field";
                // line 304
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 304);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 309
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 309)] ?? null) : null)) {
                    // line 310
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 310)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 311
                echo " </div>
                            </div>
                        ";
            }
            // line 314
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 314) == "datetime")) {
                // line 315
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 315);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 316
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 316);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 318
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 318);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 318);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group datetime\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 322
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 322);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 322);
                echo "]\"
                                               value=\"";
                // line 323
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 323)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 323)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 323);
                }
                echo "\"
                                               placeholder=\"";
                // line 324
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 324);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                               id=\"input-custom-field";
                // line 325
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 325);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 330
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 330)] ?? null) : null)) {
                    // line 331
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 331)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 332
                echo " </div>
                            </div>
                        ";
            }
            // line 335
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "                </fieldset>
                <fieldset>
                    <legend>";
        // line 338
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 340
        echo ($context["entry_password"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 342
        echo ($context["password"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 343
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                            ";
        // line 344
        if (($context["error_password"] ?? null)) {
            // line 345
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                            ";
        }
        // line 346
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 349
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 351
        echo ($context["confirm"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 352
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                            ";
        // line 353
        if (($context["error_confirm"] ?? null)) {
            // line 354
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                            ";
        }
        // line 355
        echo " </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>";
        // line 359
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 361
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\"> ";
        // line 362
        if (($context["newsletter"] ?? null)) {
            // line 363
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                    ";
            // line 365
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                    ";
            // line 368
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        } else {
            // line 370
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                    ";
            // line 372
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                    ";
            // line 375
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        }
        // line 376
        echo " </div>
                    </div>
                </fieldset>
                ";
        // line 379
        echo ($context["captcha"] ?? null);
        echo "
                ";
        // line 380
        if (($context["text_agree"] ?? null)) {
            // line 381
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">";
            // line 382
            echo ($context["text_agree"] ?? null);
            echo "
                            ";
            // line 383
            if (($context["agree"] ?? null)) {
                // line 384
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                            ";
            } else {
                // line 386
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                            ";
            }
            // line 388
            echo "                            &nbsp;
                            <input type=\"submit\" value=\"";
            // line 389
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        } else {
            // line 393
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">
                            <input type=\"submit\" value=\"";
            // line 395
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        }
        // line 399
        echo "            </form>
            ";
        // line 400
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 401
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
        // line 504
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 509
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 514
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 519
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
        return array (  1229 => 519,  1221 => 514,  1213 => 509,  1205 => 504,  1099 => 401,  1095 => 400,  1092 => 399,  1085 => 395,  1081 => 393,  1074 => 389,  1071 => 388,  1067 => 386,  1063 => 384,  1061 => 383,  1057 => 382,  1054 => 381,  1052 => 380,  1048 => 379,  1043 => 376,  1038 => 375,  1032 => 372,  1028 => 370,  1023 => 368,  1017 => 365,  1013 => 363,  1011 => 362,  1007 => 361,  1002 => 359,  996 => 355,  990 => 354,  988 => 353,  984 => 352,  980 => 351,  975 => 349,  970 => 346,  964 => 345,  962 => 344,  958 => 343,  954 => 342,  949 => 340,  944 => 338,  940 => 336,  934 => 335,  929 => 332,  923 => 331,  921 => 330,  913 => 325,  909 => 324,  901 => 323,  895 => 322,  886 => 318,  881 => 316,  876 => 315,  873 => 314,  868 => 311,  862 => 310,  860 => 309,  852 => 304,  848 => 303,  840 => 302,  834 => 301,  825 => 297,  820 => 295,  815 => 294,  812 => 293,  807 => 290,  801 => 289,  799 => 288,  791 => 283,  787 => 282,  779 => 281,  773 => 280,  764 => 276,  759 => 274,  754 => 273,  751 => 272,  746 => 269,  740 => 268,  738 => 267,  730 => 266,  724 => 265,  719 => 263,  715 => 262,  711 => 261,  706 => 259,  702 => 258,  697 => 257,  694 => 256,  689 => 253,  683 => 252,  681 => 251,  673 => 250,  669 => 249,  665 => 248,  659 => 247,  651 => 244,  646 => 242,  641 => 241,  638 => 240,  633 => 237,  627 => 236,  625 => 235,  620 => 233,  616 => 232,  608 => 231,  602 => 230,  594 => 227,  589 => 225,  584 => 224,  581 => 223,  576 => 220,  570 => 219,  568 => 218,  565 => 217,  558 => 216,  553 => 215,  549 => 214,  543 => 213,  539 => 211,  534 => 209,  529 => 207,  523 => 206,  519 => 204,  516 => 203,  512 => 202,  507 => 200,  503 => 199,  498 => 198,  495 => 197,  490 => 194,  484 => 193,  482 => 192,  479 => 191,  472 => 190,  467 => 189,  463 => 188,  457 => 187,  453 => 185,  448 => 183,  443 => 181,  437 => 180,  433 => 178,  430 => 177,  426 => 176,  421 => 174,  417 => 173,  412 => 172,  409 => 171,  404 => 168,  398 => 167,  396 => 166,  391 => 163,  385 => 162,  373 => 155,  366 => 150,  356 => 143,  352 => 142,  346 => 138,  343 => 137,  339 => 136,  333 => 133,  328 => 131,  322 => 130,  315 => 128,  310 => 126,  305 => 125,  302 => 124,  298 => 123,  294 => 121,  288 => 120,  286 => 119,  282 => 118,  278 => 117,  273 => 115,  268 => 112,  262 => 111,  260 => 110,  253 => 108,  248 => 106,  243 => 103,  237 => 102,  235 => 101,  228 => 99,  223 => 97,  218 => 94,  212 => 93,  210 => 92,  206 => 91,  202 => 90,  197 => 88,  187 => 85,  181 => 82,  177 => 81,  172 => 78,  166 => 75,  162 => 74,  157 => 71,  154 => 70,  150 => 69,  146 => 68,  138 => 67,  133 => 65,  128 => 63,  124 => 62,  120 => 61,  116 => 60,  113 => 59,  106 => 55,  103 => 54,  101 => 53,  57 => 12,  52 => 10,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main id=\"account-register\" class=\"main register-page\">
    <div class=\"container\">
        <div class=\"row login-row\">
            <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                <div class=\"login-block-register\">
                    <p>{{ text_account_already }}<a href=\"\" class=\"register\">Login</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"login-block-title\">
                            <h1>{{ heading_title }}</h1>
                            <p class=\"under-title\">Welcome to the world of flavor and pleasure!</p>
                        </div>
                        <div class=\"name-block\">
                            <input type=\"text\" class=\"form-control\" id=\"input-firstname\" placeholder=\"First name\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                            <input type=\"text\" class=\"form-control\" id=\"input-lastname\" placeholder=\"Last name\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
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
                            <input type=\"password\" class=\"form-control\" id=\"input-confirm\" placeholder=\"Password Confirm\">
                        </div>
                        <div class=\"newsletter-block\">
                            <p>Subscribe</p>
                            <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"newsletter\" value=\"1\">
                                Yes</label>
                            <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\">
                                No</label>
                            <div class=\"pull-right\">I have read and agree to the <a href=\"#\" class=\"agree\"><b>Privacy Policy</b></a>
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"agree\" value=\"1\">
                                &nbsp;
                                <input type=\"submit\" value=\"Continue\" class=\"btn btn-warning\">
                            </div>

                        </div>
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
