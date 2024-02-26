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
class __TwigTemplate_8afb45b1f19c663fb4713fd55104d6e5b2a2ebe04aa92bb0cdc8f8a3dd94d17d extends \Twig\Template
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
<div id=\"account-register\" class=\"container my-3\">
    ";
        // line 3
        if (($context["error_warning"] ?? null)) {
            // line 4
            echo "        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            ";
            // line 5
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 9
        echo "    <main class=\"main register-page\">
        <div class=\"container\">
            <div class=\"row login-row\">
                <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                    <div class=\"login-block-register\">
                        <p>";
        // line 14
        echo ($context["text_account_already"] ?? null);
        echo "</p>
                    </div>
                    <div class=\"login-block-wrapper\">
                        <div class=\"login-block-title\">
                            <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                            <p class=\"under-title\">";
        // line 19
        echo ($context["text_your_details"] ?? null);
        echo "</p>
                        </div>
                        <form action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                            <fieldset id=\"account\">
                                <div class=\"form-group required\"
                                     style=\"display: ";
        // line 24
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 25
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 27
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 27) == ($context["customer_group_id"] ?? null))) {
                // line 28
                echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\" name=\"customer_group_id\"
                                                               value=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 31);
                echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 33);
                echo "</label>
                                                </div>
                                            ";
            } else {
                // line 36
                echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\" name=\"customer_group_id\"
                                                               value=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 39);
                echo "\"/>
                                                        ";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 40);
                echo "</label>
                                                </div>
                                            ";
            }
            // line 43
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                                </div>
                                <div class=\"row\">
                                    ";
        // line 46
        if (($context["error_firstname"] ?? null)) {
            // line 47
            echo "                                        <div class=\"col-sm-6\">
                                            <div class=\"text-danger\">";
            // line 48
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                                        </div>
                                    ";
        }
        // line 51
        echo "                                    ";
        if (($context["error_lastname"] ?? null)) {
            // line 52
            echo "                                        <div class=\"col-sm-6\">
                                            <div class=\"text-danger\">";
            // line 53
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                                        </div>
                                    ";
        }
        // line 56
        echo "                                </div>
                                <div class=\"name-block form-group required\">
                                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 58
        echo ($context["firstname"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 59
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\"
                                           class=\"form-control\"/>
                                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 61
        echo ($context["lastname"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 62
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                           id=\"input-lastname\" class=\"form-control\"/>
                                </div>
                                <div class=\"row\">
                                    ";
        // line 66
        if (($context["error_email"] ?? null)) {
            // line 67
            echo "                                        <div class=\"col-sm-12\">
                                        <div class=\"text-danger\">";
            // line 68
            echo ($context["error_email"] ?? null);
            echo "</div>
                                        </div>
                                    ";
        }
        // line 71
        echo "                                </div>
                                <div class=\"email-block form-group required\">
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 73
        echo ($context["email"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 74
        echo ($context["entry_email"] ?? null);
        echo "\"
                                           id=\"input-email\" class=\"form-control\"/>
                                </div>
                                <div class=\"row\">
                                    ";
        // line 78
        if (($context["error_telephone"] ?? null)) {
            // line 79
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                                    ";
        }
        // line 81
        echo "                                </div>
                                <div class=\"telephone-block form-group required\">
                                    <input type=\"tel\" name=\"telephone\" value=\"";
        // line 83
        echo ($context["telephone"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 84
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\"
                                           class=\"form-control\"/>
                                </div>
                                <div class=\"\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-telephone\">";
        // line 89
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">

                                         </div>
                                </div>
                                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 95
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 95) == "select")) {
                // line 96
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 98);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 100);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"custom_field[";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 102);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                echo "]\"
                                                        id=\"input-custom-field";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                echo "\"
                                                        class=\"form-control\">
                                                    <option value=\"\">";
                // line 105
                echo ($context["text_select"] ?? null);
                echo "</option>


                                                    ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 108));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 109
                    echo "                                                        ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 109)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109)] ?? null) : null)))) {
                        // line 110
                        echo "



                                                            <option value=\"";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                        echo "\"
                                                                    selected=\"selected\">";
                        // line 115
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 115);
                        echo "</option>





                                                        ";
                    } else {
                        // line 122
                        echo "




                                                            <option value=\"";
                        // line 127
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 127);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 127);
                        echo "</option>





                                                        ";
                    }
                    // line 134
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "

                                                </select>
                                                ";
                // line 138
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)) {
                    // line 139
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 140
                echo "</div>
                                        </div>
                                    ";
            }
            // line 143
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 143) == "radio")) {
                // line 144
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 146);
                echo "\">
                                            <label class=\"col-sm-2 control-label\">";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <div> ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 149));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 150
                    echo "                                                        <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 150) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150)] ?? null) : null)))) {
                        // line 151
                        echo "                                                                <label>
                                                                    <input type=\"radio\"
                                                                           name=\"custom_field[";
                        // line 153
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 153);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                        echo "]\"
                                                                           value=\"";
                        // line 154
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 154);
                        echo "\"
                                                                           checked=\"checked\"/>
                                                                    ";
                        // line 156
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 156);
                        echo "</label>
                                                            ";
                    } else {
                        // line 158
                        echo "                                                                <label>
                                                                    <input type=\"radio\"
                                                                           name=\"custom_field[";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 160);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                        echo "]\"
                                                                           value=\"";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 161);
                        echo "\"/>
                                                                    ";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 162);
                        echo "</label>
                                                            ";
                    }
                    // line 163
                    echo " </div>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "</div>
                                                ";
                // line 165
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null)) {
                    // line 166
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 167
                echo "</div>
                                        </div>
                                    ";
            }
            // line 170
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 170) == "checkbox")) {
                // line 171
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                echo "\"
                                             class=\"form-group custom-field\"
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
                    echo "                                                        <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 177), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)))) {
                        // line 178
                        echo "                                                                <label>
                                                                    <input type=\"checkbox\"
                                                                           name=\"custom_field[";
                        // line 180
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 180);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                        echo "][]\"
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
                        echo "                                                                <label>
                                                                    <input type=\"checkbox\"
                                                                           name=\"custom_field[";
                        // line 187
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 187);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                        echo "][]\"
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
                echo " </div>
                                                ";
                // line 192
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192)] ?? null) : null)) {
                    // line 193
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 194
                echo " </div>
                                        </div>
                                    ";
            }
            // line 197
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 197) == "text")) {
                // line 198
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 200
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 200);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 202);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 205);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                echo "]\"
                                                       value=\"";
                // line 206
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 206);
                }
                echo "\"
                                                       placeholder=\"";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 207);
                echo "\"
                                                       id=\"input-custom-field";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                echo "\"
                                                       class=\"form-control\"/>
                                                ";
                // line 210
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null)) {
                    // line 211
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 212
                echo " </div>
                                        </div>
                                    ";
            }
            // line 215
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 215) == "textarea")) {
                // line 216
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 218);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 220);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 223);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 224);
                echo "\"
                                            id=\"input-custom-field";
                // line 225
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                echo "\"
                                            class=\"form-control\">";
                // line 226
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 226);
                }
                echo "</textarea>
                                                ";
                // line 227
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null)) {
                    // line 228
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 229
                echo " </div>
                                        </div>
                                    ";
            }
            // line 232
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 232) == "file")) {
                // line 233
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 235);
                echo "\">
                                            <label class=\"col-sm-2 control-label\">";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 236);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <button type=\"button\"
                                                        id=\"button-custom-field";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                echo "\"
                                                        data-loading-text=\"";
                // line 240
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\">
                                                    <i
                                                            class=\"fa fa-upload\"></i> ";
                // line 242
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                                <input type=\"hidden\"
                                                       name=\"custom_field[";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 244);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244);
                echo "]\"
                                                       value=\"";
                // line 245
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                                ";
                // line 246
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246)] ?? null) : null)) {
                    // line 247
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 248
                echo "</div>
                                        </div>
                                    ";
            }
            // line 251
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 251) == "date")) {
                // line 252
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 254);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 256);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[";
                // line 260
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 260);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260);
                echo "]\"
                                                           value=\"";
                // line 261
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 261);
                }
                echo "\"
                                                           placeholder=\"";
                // line 262
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 262);
                echo "\"
                                                           data-date-format=\"YYYY-MM-DD\"
                                                           id=\"input-custom-field";
                // line 264
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                echo "\"
                                                           class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                                ";
                // line 269
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269)] ?? null) : null)) {
                    // line 270
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 271
                echo " </div>
                                        </div>
                                    ";
            }
            // line 274
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 274) == "time")) {
                // line 275
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 275);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 277
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 277);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 279
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 279);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group time\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 283);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 283);
                echo "]\"
                                                           value=\"";
                // line 284
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 284)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 284)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 284);
                }
                echo "\"
                                                           placeholder=\"";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 285);
                echo "\"
                                                           data-date-format=\"HH:mm\"
                                                           id=\"input-custom-field";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287);
                echo "\"
                                                           class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                                ";
                // line 292
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 292)] ?? null) : null)) {
                    // line 293
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 293)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 294
                echo " </div>
                                        </div>
                                    ";
            }
            // line 297
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 297) == "datetime")) {
                // line 298
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 298);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 300
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 300);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 302
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 302);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 302);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group datetime\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[";
                // line 306
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 306);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 306);
                echo "]\"
                                                           value=\"";
                // line 307
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 307);
                }
                echo "\"
                                                           placeholder=\"";
                // line 308
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 308);
                echo "\"
                                                           data-date-format=\"YYYY-MM-DD HH:mm\"
                                                           id=\"input-custom-field";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 310);
                echo "\"
                                                           class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                                ";
                // line 315
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 315)] ?? null) : null)) {
                    // line 316
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 316)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 317
                echo " </div>
                                        </div>
                                    ";
            }
            // line 320
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 323
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-password\">";
        // line 326
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" name=\"password\" value=\"";
        // line 328
        echo ($context["password"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 329
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\"
                                               class=\"form-control\"/>
                                        ";
        // line 331
        if (($context["error_password"] ?? null)) {
            // line 332
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                                        ";
        }
        // line 333
        echo " </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-confirm\">";
        // line 337
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" name=\"confirm\" value=\"";
        // line 339
        echo ($context["confirm"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 340
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\"
                                               class=\"form-control\"/>
                                        ";
        // line 342
        if (($context["error_confirm"] ?? null)) {
            // line 343
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                                        ";
        }
        // line 344
        echo " </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 348
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 350
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\"> ";
        // line 351
        if (($context["newsletter"] ?? null)) {
            // line 352
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                                ";
            // line 354
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                                ";
            // line 357
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        ";
        } else {
            // line 359
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                                ";
            // line 361
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                                ";
            // line 364
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        ";
        }
        // line 365
        echo " </div>
                                </div>
                            </fieldset>
                            ";
        // line 368
        echo ($context["captcha"] ?? null);
        echo "
                            ";
        // line 369
        if (($context["text_agree"] ?? null)) {
            // line 370
            echo "                                <div class=\"buttons\">
                                    <div class=\"pull-right\">";
            // line 371
            echo ($context["text_agree"] ?? null);
            echo "
                                        ";
            // line 372
            if (($context["agree"] ?? null)) {
                // line 373
                echo "                                            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                                        ";
            } else {
                // line 375
                echo "                                            <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                                        ";
            }
            // line 377
            echo "                                        &nbsp;
                                        <input type=\"submit\" value=\"";
            // line 378
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                    </div>
                                </div>
                            ";
        } else {
            // line 382
            echo "                                <div class=\"buttons\">
                                    <div class=\"pull-right\">
                                        <input type=\"submit\" value=\"";
            // line 384
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                    </div>
                                </div>
                            ";
        }
        // line 388
        echo "                        </form>
                    </div>
                </div>
            </div>
            ";
        // line 392
        echo ($context["column_right"] ?? null);
        echo "</div>


    </main>
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
        // line 498
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 503
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 508
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 513
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
        return array (  1199 => 513,  1191 => 508,  1183 => 503,  1175 => 498,  1066 => 392,  1060 => 388,  1053 => 384,  1049 => 382,  1042 => 378,  1039 => 377,  1035 => 375,  1031 => 373,  1029 => 372,  1025 => 371,  1022 => 370,  1020 => 369,  1016 => 368,  1011 => 365,  1006 => 364,  1000 => 361,  996 => 359,  991 => 357,  985 => 354,  981 => 352,  979 => 351,  975 => 350,  970 => 348,  964 => 344,  958 => 343,  956 => 342,  951 => 340,  947 => 339,  942 => 337,  936 => 333,  930 => 332,  928 => 331,  923 => 329,  919 => 328,  914 => 326,  908 => 323,  904 => 321,  898 => 320,  893 => 317,  887 => 316,  885 => 315,  877 => 310,  872 => 308,  864 => 307,  858 => 306,  849 => 302,  844 => 300,  838 => 298,  835 => 297,  830 => 294,  824 => 293,  822 => 292,  814 => 287,  809 => 285,  801 => 284,  795 => 283,  786 => 279,  781 => 277,  775 => 275,  772 => 274,  767 => 271,  761 => 270,  759 => 269,  751 => 264,  746 => 262,  738 => 261,  732 => 260,  723 => 256,  718 => 254,  712 => 252,  709 => 251,  704 => 248,  698 => 247,  696 => 246,  688 => 245,  682 => 244,  677 => 242,  672 => 240,  668 => 239,  662 => 236,  658 => 235,  652 => 233,  649 => 232,  644 => 229,  638 => 228,  636 => 227,  628 => 226,  624 => 225,  620 => 224,  614 => 223,  606 => 220,  601 => 218,  595 => 216,  592 => 215,  587 => 212,  581 => 211,  579 => 210,  574 => 208,  570 => 207,  562 => 206,  556 => 205,  548 => 202,  543 => 200,  537 => 198,  534 => 197,  529 => 194,  523 => 193,  521 => 192,  518 => 191,  511 => 190,  506 => 189,  502 => 188,  496 => 187,  492 => 185,  487 => 183,  482 => 181,  476 => 180,  472 => 178,  469 => 177,  465 => 176,  460 => 174,  456 => 173,  450 => 171,  447 => 170,  442 => 167,  436 => 166,  434 => 165,  431 => 164,  424 => 163,  419 => 162,  415 => 161,  409 => 160,  405 => 158,  400 => 156,  395 => 154,  389 => 153,  385 => 151,  382 => 150,  378 => 149,  373 => 147,  369 => 146,  363 => 144,  360 => 143,  355 => 140,  349 => 139,  347 => 138,  342 => 135,  336 => 134,  324 => 127,  317 => 122,  307 => 115,  303 => 114,  297 => 110,  294 => 109,  290 => 108,  284 => 105,  279 => 103,  273 => 102,  266 => 100,  261 => 98,  255 => 96,  252 => 95,  248 => 94,  240 => 89,  232 => 84,  228 => 83,  224 => 81,  218 => 79,  216 => 78,  209 => 74,  205 => 73,  201 => 71,  195 => 68,  192 => 67,  190 => 66,  183 => 62,  179 => 61,  174 => 59,  170 => 58,  166 => 56,  160 => 53,  157 => 52,  154 => 51,  148 => 48,  145 => 47,  143 => 46,  133 => 43,  127 => 40,  123 => 39,  118 => 36,  112 => 33,  107 => 31,  102 => 28,  99 => 27,  95 => 26,  91 => 25,  83 => 24,  77 => 21,  72 => 19,  68 => 18,  61 => 14,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-register\" class=\"container my-3\">
    {% if error_warning %}
        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            {{ error_warning }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endif %}
    <main class=\"main register-page\">
        <div class=\"container\">
            <div class=\"row login-row\">
                <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                    <div class=\"login-block-register\">
                        <p>{{ text_account_already }}</p>
                    </div>
                    <div class=\"login-block-wrapper\">
                        <div class=\"login-block-title\">
                            <h1>{{ heading_title }}</h1>
                            <p class=\"under-title\">{{ text_your_details }}</p>
                        </div>
                        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                            <fieldset id=\"account\">
                                <div class=\"form-group required\"
                                     style=\"display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};\">
                                    <label class=\"col-sm-2 control-label\">{{ entry_customer_group }}</label>
                                    <div class=\"col-sm-10\">{% for customer_group in customer_groups %}
                                            {% if customer_group.customer_group_id == customer_group_id %}
                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\" name=\"customer_group_id\"
                                                               value=\"{{ customer_group.customer_group_id }}\"
                                                               checked=\"checked\"/>
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
                                <div class=\"row\">
                                    {% if error_firstname %}
                                        <div class=\"col-sm-6\">
                                            <div class=\"text-danger\">{{ error_firstname }}</div>
                                        </div>
                                    {% endif %}
                                    {% if error_lastname %}
                                        <div class=\"col-sm-6\">
                                            <div class=\"text-danger\">{{ error_lastname }}</div>
                                        </div>
                                    {% endif %}
                                </div>
                                <div class=\"name-block form-group required\">
                                    <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\"
                                           placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\"
                                           class=\"form-control\"/>
                                    <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\"
                                           placeholder=\"{{ entry_lastname }}\"
                                           id=\"input-lastname\" class=\"form-control\"/>
                                </div>
                                <div class=\"row\">
                                    {% if error_email %}
                                        <div class=\"col-sm-12\">
                                        <div class=\"text-danger\">{{ error_email }}</div>
                                        </div>
                                    {% endif %}
                                </div>
                                <div class=\"email-block form-group required\">
                                    <input type=\"email\" name=\"email\" value=\"{{ email }}\"
                                           placeholder=\"{{ entry_email }}\"
                                           id=\"input-email\" class=\"form-control\"/>
                                </div>
                                <div class=\"row\">
                                    {% if error_telephone %}
                                        <div class=\"text-danger\">{{ error_telephone }}</div>
                                    {% endif %}
                                </div>
                                <div class=\"telephone-block form-group required\">
                                    <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\"
                                           placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\"
                                           class=\"form-control\"/>
                                </div>
                                <div class=\"\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-telephone\">{{ entry_telephone }}</label>
                                    <div class=\"col-sm-10\">

                                         </div>
                                </div>
                                {% for custom_field in custom_fields %}
                                    {% if custom_field.type == 'select' %}
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"{{ custom_field.sort_order }}\">
                                            <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                            <div class=\"col-sm-10\">
                                                <button type=\"button\"
                                                        id=\"button-custom-field{{ custom_field.custom_field_id }}\"
                                                        data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\">
                                                    <i
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"{{ custom_field.sort_order }}\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                           placeholder=\"{{ custom_field.name }}\"
                                                           data-date-format=\"YYYY-MM-DD\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"{{ custom_field.sort_order }}\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group time\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                           placeholder=\"{{ custom_field.name }}\"
                                                           data-date-format=\"HH:mm\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"{{ custom_field.sort_order }}\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group datetime\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                           placeholder=\"{{ custom_field.name }}\"
                                                           data-date-format=\"YYYY-MM-DD HH:mm\"
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
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-password\">{{ entry_password }}</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" name=\"password\" value=\"{{ password }}\"
                                               placeholder=\"{{ entry_password }}\" id=\"input-password\"
                                               class=\"form-control\"/>
                                        {% if error_password %}
                                            <div class=\"text-danger\">{{ error_password }}</div>
                                        {% endif %} </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-confirm\">{{ entry_confirm }}</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\"
                                               placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\"
                                               class=\"form-control\"/>
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
                    </div>
                </div>
            </div>
            {{ column_right }}</div>


    </main>
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
