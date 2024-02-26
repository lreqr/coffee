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
class __TwigTemplate_343579cdfdf3e2a53585b972d1c0dca88e0ca8d9d3c7dbf4eef5d0c235ce73c3 extends \Twig\Template
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
                    <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    <form action=\"";
        // line 17
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset id=\"account\">
                            <legend>";
        // line 19
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
                            <div class=\"form-group required\"
                                 style=\"display: ";
        // line 21
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                                <label class=\"col-sm-2 control-label\">";
        // line 22
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 24
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 24) == ($context["customer_group_id"] ?? null))) {
                // line 25
                echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 28);
                echo "\"
                                                           checked=\"checked\"/>
                                                    ";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 30);
                echo "</label>
                                            </div>
                                        ";
            } else {
                // line 33
                echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 36);
                echo "\"/>
                                                    ";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 37);
                echo "</label>
                                            </div>
                                        ";
            }
            // line 40
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-firstname\">";
        // line 44
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 46
        echo ($context["firstname"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 47
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\"
                                           class=\"form-control\"/>
                                    ";
        // line 49
        if (($context["error_firstname"] ?? null)) {
            // line 50
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                                    ";
        }
        // line 51
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 54
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 56
        echo ($context["lastname"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 57
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                           id=\"input-lastname\" class=\"form-control\"/>
                                    ";
        // line 59
        if (($context["error_lastname"] ?? null)) {
            // line 60
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                                    ";
        }
        // line 61
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 64
        echo ($context["entry_email"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 66
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                           id=\"input-email\" class=\"form-control\"/>
                                    ";
        // line 68
        if (($context["error_email"] ?? null)) {
            // line 69
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                                    ";
        }
        // line 70
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-telephone\">";
        // line 74
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"tel\" name=\"telephone\" value=\"";
        // line 76
        echo ($context["telephone"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 77
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\"
                                           class=\"form-control\"/>
                                    ";
        // line 79
        if (($context["error_telephone"] ?? null)) {
            // line 80
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                                    ";
        }
        // line 81
        echo " </div>
                            </div>
                            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 84
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 84) == "select")) {
                // line 85
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 87);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 89);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"custom_field[";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 91);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                echo "]\"
                                                    id=\"input-custom-field";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                echo "\"
                                                    class=\"form-control\">
                                                <option value=\"\">";
                // line 94
                echo ($context["text_select"] ?? null);
                echo "</option>


                                                ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 98
                    echo "                                                    ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 98)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98)] ?? null) : null)))) {
                        // line 99
                        echo "



                                                        <option value=\"";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                        echo "\"
                                                                selected=\"selected\">";
                        // line 104
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 104);
                        echo "</option>





                                                    ";
                    } else {
                        // line 111
                        echo "




                                                        <option value=\"";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 116);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 116);
                        echo "</option>





                                                    ";
                    }
                    // line 123
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "

                                            </select>
                                            ";
                // line 127
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)) {
                    // line 128
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 129
                echo "</div>
                                    </div>
                                ";
            }
            // line 132
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 132) == "radio")) {
                // line 133
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 135);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 136);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div> ";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 138));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 139
                    echo "                                                    <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 139) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null)))) {
                        // line 140
                        echo "                                                            <label>
                                                                <input type=\"radio\"
                                                                       name=\"custom_field[";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 142);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                        echo "]\"
                                                                       value=\"";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 143);
                        echo "\"
                                                                       checked=\"checked\"/>
                                                                ";
                        // line 145
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 145);
                        echo "</label>
                                                        ";
                    } else {
                        // line 147
                        echo "                                                            <label>
                                                                <input type=\"radio\"
                                                                       name=\"custom_field[";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 149);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                        echo "]\"
                                                                       value=\"";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 150);
                        echo "\"/>
                                                                ";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 151);
                        echo "</label>
                                                        ";
                    }
                    // line 152
                    echo " </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "</div>
                                            ";
                // line 154
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null)) {
                    // line 155
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 156
                echo "</div>
                                    </div>
                                ";
            }
            // line 159
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 159) == "checkbox")) {
                // line 160
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 162);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div> ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 165));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 166
                    echo "                                                    <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 166), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null)))) {
                        // line 167
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 169);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                        echo "][]\"
                                                                       value=\"";
                        // line 170
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 170);
                        echo "\"
                                                                       checked=\"checked\"/>
                                                                ";
                        // line 172
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 172);
                        echo "</label>
                                                        ";
                    } else {
                        // line 174
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 176);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                        echo "][]\"
                                                                       value=\"";
                        // line 177
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 177);
                        echo "\"/>
                                                                ";
                        // line 178
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 178);
                        echo "</label>
                                                        ";
                    }
                    // line 179
                    echo " </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo " </div>
                                            ";
                // line 181
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181)] ?? null) : null)) {
                    // line 182
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 183
                echo " </div>
                                    </div>
                                ";
            }
            // line 186
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 186) == "text")) {
                // line 187
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 189);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 191
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 191);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\"
                                                   name=\"custom_field[";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 194);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                echo "]\"
                                                   value=\"";
                // line 195
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 195);
                }
                echo "\"
                                                   placeholder=\"";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                echo "\"
                                                   id=\"input-custom-field";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                echo "\"
                                                   class=\"form-control\"/>
                                            ";
                // line 199
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null)) {
                    // line 200
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 201
                echo " </div>
                                    </div>
                                ";
            }
            // line 204
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 204) == "textarea")) {
                // line 205
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 207);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 209);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 212);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 213);
                echo "\"
                                            id=\"input-custom-field";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "\"
                                            class=\"form-control\">";
                // line 215
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 215);
                }
                echo "</textarea>
                                            ";
                // line 216
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216)] ?? null) : null)) {
                    // line 217
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 218
                echo " </div>
                                    </div>
                                ";
            }
            // line 221
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 221) == "file")) {
                // line 222
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 224);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 225
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 225);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <button type=\"button\"
                                                    id=\"button-custom-field";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                echo "\"
                                                    data-loading-text=\"";
                // line 229
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                        class=\"fa fa-upload\"></i> ";
                // line 230
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                            <input type=\"hidden\"
                                                   name=\"custom_field[";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 232);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                echo "]\"
                                                   value=\"";
                // line 233
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                            ";
                // line 234
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null)) {
                    // line 235
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 236
                echo "</div>
                                    </div>
                                ";
            }
            // line 239
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 239) == "date")) {
                // line 240
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                echo "\"
                                         class=\"form-group custom-field\"
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
                                            <div class=\"input-group date\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 248);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                echo "]\"
                                                       value=\"";
                // line 249
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 249);
                }
                echo "\"
                                                       placeholder=\"";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 250);
                echo "\"
                                                       data-date-format=\"YYYY-MM-DD\"
                                                       id=\"input-custom-field";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 257
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257)] ?? null) : null)) {
                    // line 258
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 259
                echo " </div>
                                    </div>
                                ";
            }
            // line 262
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 262) == "time")) {
                // line 263
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 263);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 265);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 267);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group time\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 271
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 271);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                echo "]\"
                                                       value=\"";
                // line 272
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 272);
                }
                echo "\"
                                                       placeholder=\"";
                // line 273
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 273);
                echo "\" data-date-format=\"HH:mm\"
                                                       id=\"input-custom-field";
                // line 274
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 279
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279)] ?? null) : null)) {
                    // line 280
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 281
                echo " </div>
                                    </div>
                                ";
            }
            // line 284
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 284) == "datetime")) {
                // line 285
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 287);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 289
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 289);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 289);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group datetime\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 293
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 293);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 293);
                echo "]\"
                                                       value=\"";
                // line 294
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 294)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 294)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 294);
                }
                echo "\"
                                                       placeholder=\"";
                // line 295
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 295);
                echo "\"
                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                       id=\"input-custom-field";
                // line 297
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 297);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 302
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 302)] ?? null) : null)) {
                    // line 303
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 303)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 304
                echo " </div>
                                    </div>
                                ";
            }
            // line 307
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "                        </fieldset>
                        <fieldset>
                            <legend>";
        // line 310
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 312
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"password\" value=\"";
        // line 314
        echo ($context["password"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 315
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                    ";
        // line 316
        if (($context["error_password"] ?? null)) {
            // line 317
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                                    ";
        }
        // line 318
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 321
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 323
        echo ($context["confirm"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 324
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                                    ";
        // line 325
        if (($context["error_confirm"] ?? null)) {
            // line 326
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                                    ";
        }
        // line 327
        echo " </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>";
        // line 331
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 333
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\"> ";
        // line 334
        if (($context["newsletter"] ?? null)) {
            // line 335
            echo "                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                            ";
            // line 337
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                            ";
            // line 340
            echo ($context["text_no"] ?? null);
            echo "</label>
                                    ";
        } else {
            // line 342
            echo "                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                            ";
            // line 344
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                            ";
            // line 347
            echo ($context["text_no"] ?? null);
            echo "</label>
                                    ";
        }
        // line 348
        echo " </div>
                            </div>
                        </fieldset>
                        ";
        // line 351
        echo ($context["captcha"] ?? null);
        echo "
                        ";
        // line 352
        if (($context["text_agree"] ?? null)) {
            // line 353
            echo "                            <div class=\"buttons\">
                                <div class=\"pull-right\">";
            // line 354
            echo ($context["text_agree"] ?? null);
            echo "
                                    ";
            // line 355
            if (($context["agree"] ?? null)) {
                // line 356
                echo "                                        <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                                    ";
            } else {
                // line 358
                echo "                                        <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                                    ";
            }
            // line 360
            echo "                                    &nbsp;
                                    <input type=\"submit\" value=\"";
            // line 361
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                </div>
                            </div>
                        ";
        } else {
            // line 365
            echo "                            <div class=\"buttons\">
                                <div class=\"pull-right\">
                                    <input type=\"submit\" value=\"";
            // line 367
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                </div>
                            </div>
                        ";
        }
        // line 371
        echo "                    </form>
                    ";
        // line 372
        echo ($context["content_bottom"] ?? null);
        echo "</div>
            </div>
            ";
        // line 374
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
        // line 480
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 485
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 490
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 495
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
        return array (  1194 => 495,  1186 => 490,  1178 => 485,  1170 => 480,  1061 => 374,  1056 => 372,  1053 => 371,  1046 => 367,  1042 => 365,  1035 => 361,  1032 => 360,  1028 => 358,  1024 => 356,  1022 => 355,  1018 => 354,  1015 => 353,  1013 => 352,  1009 => 351,  1004 => 348,  999 => 347,  993 => 344,  989 => 342,  984 => 340,  978 => 337,  974 => 335,  972 => 334,  968 => 333,  963 => 331,  957 => 327,  951 => 326,  949 => 325,  945 => 324,  941 => 323,  936 => 321,  931 => 318,  925 => 317,  923 => 316,  919 => 315,  915 => 314,  910 => 312,  905 => 310,  901 => 308,  895 => 307,  890 => 304,  884 => 303,  882 => 302,  874 => 297,  869 => 295,  861 => 294,  855 => 293,  846 => 289,  841 => 287,  835 => 285,  832 => 284,  827 => 281,  821 => 280,  819 => 279,  811 => 274,  807 => 273,  799 => 272,  793 => 271,  784 => 267,  779 => 265,  773 => 263,  770 => 262,  765 => 259,  759 => 258,  757 => 257,  749 => 252,  744 => 250,  736 => 249,  730 => 248,  721 => 244,  716 => 242,  710 => 240,  707 => 239,  702 => 236,  696 => 235,  694 => 234,  686 => 233,  680 => 232,  675 => 230,  671 => 229,  667 => 228,  661 => 225,  657 => 224,  651 => 222,  648 => 221,  643 => 218,  637 => 217,  635 => 216,  627 => 215,  623 => 214,  619 => 213,  613 => 212,  605 => 209,  600 => 207,  594 => 205,  591 => 204,  586 => 201,  580 => 200,  578 => 199,  573 => 197,  569 => 196,  561 => 195,  555 => 194,  547 => 191,  542 => 189,  536 => 187,  533 => 186,  528 => 183,  522 => 182,  520 => 181,  517 => 180,  510 => 179,  505 => 178,  501 => 177,  495 => 176,  491 => 174,  486 => 172,  481 => 170,  475 => 169,  471 => 167,  468 => 166,  464 => 165,  459 => 163,  455 => 162,  449 => 160,  446 => 159,  441 => 156,  435 => 155,  433 => 154,  430 => 153,  423 => 152,  418 => 151,  414 => 150,  408 => 149,  404 => 147,  399 => 145,  394 => 143,  388 => 142,  384 => 140,  381 => 139,  377 => 138,  372 => 136,  368 => 135,  362 => 133,  359 => 132,  354 => 129,  348 => 128,  346 => 127,  341 => 124,  335 => 123,  323 => 116,  316 => 111,  306 => 104,  302 => 103,  296 => 99,  293 => 98,  289 => 97,  283 => 94,  278 => 92,  272 => 91,  265 => 89,  260 => 87,  254 => 85,  251 => 84,  247 => 83,  243 => 81,  237 => 80,  235 => 79,  230 => 77,  226 => 76,  221 => 74,  215 => 70,  209 => 69,  207 => 68,  200 => 66,  195 => 64,  190 => 61,  184 => 60,  182 => 59,  177 => 57,  173 => 56,  168 => 54,  163 => 51,  157 => 50,  155 => 49,  150 => 47,  146 => 46,  141 => 44,  130 => 40,  124 => 37,  120 => 36,  115 => 33,  109 => 30,  104 => 28,  99 => 25,  96 => 24,  92 => 23,  88 => 22,  80 => 21,  75 => 19,  70 => 17,  66 => 16,  61 => 14,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
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
                    <h1>{{ heading_title }}</h1>
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
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-firstname\">{{ entry_firstname }}</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\"
                                           placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\"
                                           class=\"form-control\"/>
                                    {% if error_firstname %}
                                        <div class=\"text-danger\">{{ error_firstname }}</div>
                                    {% endif %} </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">{{ entry_lastname }}</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\"
                                           placeholder=\"{{ entry_lastname }}\"
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
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-telephone\">{{ entry_telephone }}</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\"
                                           placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\"
                                           class=\"form-control\"/>
                                    {% if error_telephone %}
                                        <div class=\"text-danger\">{{ error_telephone }}</div>
                                    {% endif %} </div>
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
