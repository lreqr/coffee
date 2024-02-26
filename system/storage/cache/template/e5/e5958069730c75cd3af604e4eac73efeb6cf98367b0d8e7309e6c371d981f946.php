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
class __TwigTemplate_b5850dffa9bd2bf7813ec89a63588d6b2e01093356daf4f7f5e7fffd102581ff extends \Twig\Template
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
                echo "\"
                                                           checked=\"checked\"/>
                                                    ";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 32);
                echo "</label>
                                            </div>
                                        ";
            } else {
                // line 35
                echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 38);
                echo "\"/>
                                                    ";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 39);
                echo "</label>
                                            </div>
                                        ";
            }
            // line 42
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    ";
        // line 46
        if (($context["error_firstname"] ?? null)) {
            // line 47
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                                    ";
        }
        // line 49
        echo "                                </div>
                                <div class=\"col-sm-6\">
                                    ";
        // line 51
        if (($context["error_firstname"] ?? null)) {
            // line 52
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                                    ";
        }
        // line 54
        echo "                                </div>
                            </div>
                            <div class=\"name-block\">
                                <input type=\"text\" name=\"firstname\" value=\"";
        // line 57
        echo ($context["firstname"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 58
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\">

                                <input type=\"text\" name=\"lastname\" value=\"";
        // line 60
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                       id=\"input-lastname\" class=\"form-control\">
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    ";
        // line 65
        if (($context["error_email"] ?? null)) {
            // line 66
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                                    ";
        }
        // line 68
        echo "                                </div>
                            </div>
                            <div class=\"email-block\">
                                <input type=\"email\" name=\"email\" value=\"";
        // line 71
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                       id=\"input-email\" class=\"form-control\">
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    ";
        // line 76
        if (($context["error_telephone"] ?? null)) {
            // line 77
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                                    ";
        }
        // line 79
        echo "                                </div>
                            </div>
                            <div class=\"telephone-block\">
                                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 82
        echo ($context["telephone"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 83
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\">
                            </div>
                            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 86
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 86) == "select")) {
                // line 87
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                echo "\" class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 88);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 90);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"custom_field[";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 92);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                echo "]\"
                                                    id=\"input-custom-field";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                echo "\"
                                                    class=\"form-control\">
                                                <option value=\"\">";
                // line 95
                echo ($context["text_select"] ?? null);
                echo "</option>


                                                ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 99
                    echo "                                                    ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 99)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99)] ?? null) : null)))) {
                        // line 100
                        echo "



                                                        <option value=\"";
                        // line 104
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 104);
                        echo "\"
                                                                selected=\"selected\">";
                        // line 105
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 105);
                        echo "</option>





                                                    ";
                    } else {
                        // line 112
                        echo "




                                                        <option value=\"";
                        // line 117
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 117);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 117);
                        echo "</option>





                                                    ";
                    }
                    // line 124
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "

                                            </select>
                                            ";
                // line 128
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)) {
                    // line 129
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 130
                echo "</div>
                                    </div>
                                ";
            }
            // line 133
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "radio")) {
                // line 134
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                echo "\" class=\"form-group custom-field\"
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
                echo "\" class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 161);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 162);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div> ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 164));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 165
                    echo "                                                    <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 165), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null)))) {
                        // line 166
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 168
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 168);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                        echo "][]\"
                                                                       value=\"";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 169);
                        echo "\"
                                                                       checked=\"checked\"/>
                                                                ";
                        // line 171
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 171);
                        echo "</label>
                                                        ";
                    } else {
                        // line 173
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 175
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 175);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                        echo "][]\"
                                                                       value=\"";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 176);
                        echo "\"/>
                                                                ";
                        // line 177
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 177);
                        echo "</label>
                                                        ";
                    }
                    // line 178
                    echo " </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo " </div>
                                            ";
                // line 180
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) {
                    // line 181
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 182
                echo " </div>
                                    </div>
                                ";
            }
            // line 185
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 185) == "text")) {
                // line 186
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                echo "\" class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 187);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 189);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\"
                                                   name=\"custom_field[";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 192);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                echo "]\"
                                                   value=\"";
                // line 193
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 193);
                }
                echo "\"
                                                   placeholder=\"";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 194);
                echo "\"
                                                   id=\"input-custom-field";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\"
                                                   class=\"form-control\"/>
                                            ";
                // line 197
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null)) {
                    // line 198
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 199
                echo " </div>
                                    </div>
                                ";
            }
            // line 202
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 202) == "textarea")) {
                // line 203
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                echo "\" class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 204);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 209);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 210);
                echo "\"
                                            id=\"input-custom-field";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                echo "\"
                                            class=\"form-control\">";
                // line 212
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 212);
                }
                echo "</textarea>
                                            ";
                // line 213
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null)) {
                    // line 214
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 215
                echo " </div>
                                    </div>
                                ";
            }
            // line 218
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 218) == "file")) {
                // line 219
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                echo "\" class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 220);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 221
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 221);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <button type=\"button\" id=\"button-custom-field";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                echo "\"
                                                    data-loading-text=\"";
                // line 224
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                        class=\"fa fa-upload\"></i> ";
                // line 225
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                            <input type=\"hidden\"
                                                   name=\"custom_field[";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 227);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                echo "]\"
                                                   value=\"";
                // line 228
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                            ";
                // line 229
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229)] ?? null) : null)) {
                    // line 230
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 231
                echo "</div>
                                    </div>
                                ";
            }
            // line 234
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 234) == "date")) {
                // line 235
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235);
                echo "\" class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 236);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 238);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group date\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 242);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                echo "]\"
                                                       value=\"";
                // line 243
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 243);
                }
                echo "\"
                                                       placeholder=\"";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 244);
                echo "\" data-date-format=\"YYYY-MM-DD\"
                                                       id=\"input-custom-field";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 250
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250)] ?? null) : null)) {
                    // line 251
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 252
                echo " </div>
                                    </div>
                                ";
            }
            // line 255
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 255) == "time")) {
                // line 256
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                echo "\" class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 257
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 257);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 259);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group time\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 263);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 263);
                echo "]\"
                                                       value=\"";
                // line 264
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 264);
                }
                echo "\"
                                                       placeholder=\"";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 265);
                echo "\" data-date-format=\"HH:mm\"
                                                       id=\"input-custom-field";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 271
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271)] ?? null) : null)) {
                    // line 272
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 273
                echo " </div>
                                    </div>
                                ";
            }
            // line 276
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 276) == "datetime")) {
                // line 277
                echo "                                    <div id=\"custom-field";
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
                                            <div class=\"input-group datetime\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 284
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 284);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 284);
                echo "]\"
                                                       value=\"";
                // line 285
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 285);
                }
                echo "\"
                                                       placeholder=\"";
                // line 286
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 286);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
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
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 292)] ?? null) : null)) {
                    // line 293
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 293)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 294
                echo " </div>
                                    </div>
                                ";
            }
            // line 297
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "                            <p>";
        echo ($context["text_your_password"] ?? null);
        echo "</p>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    ";
        // line 301
        if (($context["error_password"] ?? null)) {
            // line 302
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                                    ";
        }
        // line 304
        echo "                                </div>
                            </div>
                            <div class=\"password-block\">
                                <input type=\"password\" name=\"password\" value=\"";
        // line 307
        echo ($context["password"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 308
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\">
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
        // line 337
        if (($context["error_warning"] ?? null)) {
            // line 338
            echo "        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            ";
            // line 339
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 343
        echo "    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">";
        // line 344
        echo ($context["content_top"] ?? null);
        echo "
            <h1>";
        // line 345
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <p>";
        // line 346
        echo ($context["text_account_already"] ?? null);
        echo "</p>
            <form action=\"";
        // line 347
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset id=\"account\">
                    <legend>";
        // line 349
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\"
                         style=\"display: ";
        // line 351
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                        <label class=\"col-sm-2 control-label\">";
        // line 352
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 354
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 354) == ($context["customer_group_id"] ?? null))) {
                // line 355
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 358
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 358);
                echo "\" checked=\"checked\"/>
                                            ";
                // line 359
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 359);
                echo "</label>
                                    </div>
                                ";
            } else {
                // line 362
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 365
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 365);
                echo "\"/>
                                            ";
                // line 366
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 366);
                echo "</label>
                                    </div>
                                ";
            }
            // line 369
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 372
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 374
        echo ($context["firstname"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 375
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                            ";
        // line 376
        if (($context["error_firstname"] ?? null)) {
            // line 377
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 378
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 381
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 383
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                   id=\"input-lastname\" class=\"form-control\"/>
                            ";
        // line 385
        if (($context["error_lastname"] ?? null)) {
            // line 386
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 387
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 390
        echo ($context["entry_email"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"email\" name=\"email\" value=\"";
        // line 392
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                   id=\"input-email\" class=\"form-control\"/>
                            ";
        // line 394
        if (($context["error_email"] ?? null)) {
            // line 395
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 396
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 399
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"tel\" name=\"telephone\" value=\"";
        // line 401
        echo ($context["telephone"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 402
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                            ";
        // line 403
        if (($context["error_telephone"] ?? null)) {
            // line 404
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 405
        echo " </div>
                    </div>
                    ";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 408
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 408) == "select")) {
                // line 409
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 409);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 410
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 410);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 412
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 412);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 412);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"custom_field[";
                // line 414
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 414);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 414);
                echo "]\"
                                            id=\"input-custom-field";
                // line 415
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                echo "\"
                                            class=\"form-control\">
                                        <option value=\"\">";
                // line 417
                echo ($context["text_select"] ?? null);
                echo "</option>


                                        ";
                // line 420
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 420));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 421
                    echo "                                            ";
                    if (((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["register_custom_field"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 421)] ?? null) : null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 421) == (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["register_custom_field"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421)] ?? null) : null)))) {
                        // line 422
                        echo "



                                                <option value=\"";
                        // line 426
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 426);
                        echo "\"
                                                        selected=\"selected\">";
                        // line 427
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 427);
                        echo "</option>





                                            ";
                    } else {
                        // line 434
                        echo "




                                                <option value=\"";
                        // line 439
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 439);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 439);
                        echo "</option>





                                            ";
                    }
                    // line 446
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 447
                echo "

                                    </select>
                                    ";
                // line 450
                if ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["error_custom_field"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 450)] ?? null) : null)) {
                    // line 451
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["error_custom_field"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 451)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 452
                echo "</div>
                            </div>
                        ";
            }
            // line 455
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 455) == "radio")) {
                // line 456
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 456);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 457
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 457);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 458
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 458);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 460
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 460));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 461
                    echo "                                            <div class=\"radio\">";
                    if (((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["register_custom_field"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 461)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 461) == (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["register_custom_field"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 461)] ?? null) : null)))) {
                        // line 462
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 464
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 464);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 464);
                        echo "]\"
                                                               value=\"";
                        // line 465
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 465);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 467
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 467);
                        echo "</label>
                                                ";
                    } else {
                        // line 469
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 471
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 471);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 471);
                        echo "]\"
                                                               value=\"";
                        // line 472
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 472);
                        echo "\"/>
                                                        ";
                        // line 473
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 473);
                        echo "</label>
                                                ";
                    }
                    // line 474
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 475
                echo "</div>
                                    ";
                // line 476
                if ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 476)] ?? null) : null)) {
                    // line 477
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["error_custom_field"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 477)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 478
                echo "</div>
                            </div>
                        ";
            }
            // line 481
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 481) == "checkbox")) {
                // line 482
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 482);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 483
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 483);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 484
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 484);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 486
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 486));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 487
                    echo "                                            <div class=\"checkbox\">";
                    if (((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["register_custom_field"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 487)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 487), (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 487)] ?? null) : null)))) {
                        // line 488
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 490
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 490);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 490);
                        echo "][]\"
                                                               value=\"";
                        // line 491
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 491);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 493
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 493);
                        echo "</label>
                                                ";
                    } else {
                        // line 495
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 497
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 497);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 497);
                        echo "][]\"
                                                               value=\"";
                        // line 498
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 498);
                        echo "\"/>
                                                        ";
                        // line 499
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 499);
                        echo "</label>
                                                ";
                    }
                    // line 500
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 501
                echo " </div>
                                    ";
                // line 502
                if ((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["error_custom_field"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 502)] ?? null) : null)) {
                    // line 503
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["error_custom_field"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 503)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 504
                echo " </div>
                            </div>
                        ";
            }
            // line 507
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 507) == "text")) {
                // line 508
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 509
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 509);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 511
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 511);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 511);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\"
                                           name=\"custom_field[";
                // line 514
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 514);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 514);
                echo "]\"
                                           value=\"";
                // line 515
                if ((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["register_custom_field"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 515)] ?? null) : null)) {
                    echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["register_custom_field"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 515)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 515);
                }
                echo "\"
                                           placeholder=\"";
                // line 516
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 516);
                echo "\"
                                           id=\"input-custom-field";
                // line 517
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517);
                echo "\"
                                           class=\"form-control\"/>
                                    ";
                // line 519
                if ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["error_custom_field"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 519)] ?? null) : null)) {
                    // line 520
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["error_custom_field"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 520)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 521
                echo " </div>
                            </div>
                        ";
            }
            // line 524
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 524) == "textarea")) {
                // line 525
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 525);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 526
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 526);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 528
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 528);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 528);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 531
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 531);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 531);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 532
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 532);
                echo "\"
                                            id=\"input-custom-field";
                // line 533
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 533);
                echo "\"
                                            class=\"form-control\">";
                // line 534
                if ((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["register_custom_field"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 534)] ?? null) : null)) {
                    echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["register_custom_field"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 534)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 534);
                }
                echo "</textarea>
                                    ";
                // line 535
                if ((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 535)] ?? null) : null)) {
                    // line 536
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["error_custom_field"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 537
                echo " </div>
                            </div>
                        ";
            }
            // line 540
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 540) == "file")) {
                // line 541
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 541);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 542
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 542);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 543
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 543);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" id=\"button-custom-field";
                // line 545
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 545);
                echo "\"
                                            data-loading-text=\"";
                // line 546
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                class=\"fa fa-upload\"></i> ";
                // line 547
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                    <input type=\"hidden\"
                                           name=\"custom_field[";
                // line 549
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 549);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549);
                echo "]\"
                                           value=\"";
                // line 550
                if ((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["register_custom_field"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["register_custom_field"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                    ";
                // line 551
                if ((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 551)] ?? null) : null)) {
                    // line 552
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["error_custom_field"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 552)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 553
                echo "</div>
                            </div>
                        ";
            }
            // line 556
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 556) == "date")) {
                // line 557
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 557);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 558
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 558);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 560
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 560);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 560);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 564
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 564);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 564);
                echo "]\"
                                               value=\"";
                // line 565
                if ((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["register_custom_field"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565)] ?? null) : null)) {
                    echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["register_custom_field"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 565);
                }
                echo "\"
                                               placeholder=\"";
                // line 566
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 566);
                echo "\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-custom-field";
                // line 567
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 572
                if ((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["error_custom_field"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 572)] ?? null) : null)) {
                    // line 573
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["error_custom_field"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 574
                echo " </div>
                            </div>
                        ";
            }
            // line 577
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 577) == "time")) {
                // line 578
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 578);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 579
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 579);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 581
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 581);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 581);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group time\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 585
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 585);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 585);
                echo "]\"
                                               value=\"";
                // line 586
                if ((($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["register_custom_field"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586)] ?? null) : null)) {
                    echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["register_custom_field"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 586);
                }
                echo "\"
                                               placeholder=\"";
                // line 587
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 587);
                echo "\" data-date-format=\"HH:mm\"
                                               id=\"input-custom-field";
                // line 588
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 588);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 593
                if ((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["error_custom_field"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 593)] ?? null) : null)) {
                    // line 594
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["error_custom_field"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 594)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 595
                echo " </div>
                            </div>
                        ";
            }
            // line 598
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 598) == "datetime")) {
                // line 599
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 599);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 600
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 600);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 602
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 602);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group datetime\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 606
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 606);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 606);
                echo "]\"
                                               value=\"";
                // line 607
                if ((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["register_custom_field"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 607)] ?? null) : null)) {
                    echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["register_custom_field"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 607)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 607);
                }
                echo "\"
                                               placeholder=\"";
                // line 608
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 608);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                               id=\"input-custom-field";
                // line 609
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 609);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 614
                if ((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 614)] ?? null) : null)) {
                    // line 615
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["error_custom_field"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 615)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 616
                echo " </div>
                            </div>
                        ";
            }
            // line 619
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 620
        echo "                </fieldset>
                <fieldset>
                    <legend>";
        // line 622
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 624
        echo ($context["entry_password"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 626
        echo ($context["password"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 627
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                            ";
        // line 628
        if (($context["error_password"] ?? null)) {
            // line 629
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                            ";
        }
        // line 630
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 633
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 635
        echo ($context["confirm"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 636
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                            ";
        // line 637
        if (($context["error_confirm"] ?? null)) {
            // line 638
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                            ";
        }
        // line 639
        echo " </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>";
        // line 643
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 645
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\"> ";
        // line 646
        if (($context["newsletter"] ?? null)) {
            // line 647
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                    ";
            // line 649
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                    ";
            // line 652
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        } else {
            // line 654
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                    ";
            // line 656
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                    ";
            // line 659
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        }
        // line 660
        echo " </div>
                    </div>
                </fieldset>
                ";
        // line 663
        echo ($context["captcha"] ?? null);
        echo "
                ";
        // line 664
        if (($context["text_agree"] ?? null)) {
            // line 665
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">";
            // line 666
            echo ($context["text_agree"] ?? null);
            echo "
                            ";
            // line 667
            if (($context["agree"] ?? null)) {
                // line 668
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                            ";
            } else {
                // line 670
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                            ";
            }
            // line 672
            echo "                            &nbsp;
                            <input type=\"submit\" value=\"";
            // line 673
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        } else {
            // line 677
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">
                            <input type=\"submit\" value=\"";
            // line 679
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        }
        // line 683
        echo "            </form>
            ";
        // line 684
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 685
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
        // line 788
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 793
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 798
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 803
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
        return array (  2055 => 803,  2047 => 798,  2039 => 793,  2031 => 788,  1925 => 685,  1921 => 684,  1918 => 683,  1911 => 679,  1907 => 677,  1900 => 673,  1897 => 672,  1893 => 670,  1889 => 668,  1887 => 667,  1883 => 666,  1880 => 665,  1878 => 664,  1874 => 663,  1869 => 660,  1864 => 659,  1858 => 656,  1854 => 654,  1849 => 652,  1843 => 649,  1839 => 647,  1837 => 646,  1833 => 645,  1828 => 643,  1822 => 639,  1816 => 638,  1814 => 637,  1810 => 636,  1806 => 635,  1801 => 633,  1796 => 630,  1790 => 629,  1788 => 628,  1784 => 627,  1780 => 626,  1775 => 624,  1770 => 622,  1766 => 620,  1760 => 619,  1755 => 616,  1749 => 615,  1747 => 614,  1739 => 609,  1735 => 608,  1727 => 607,  1721 => 606,  1712 => 602,  1707 => 600,  1702 => 599,  1699 => 598,  1694 => 595,  1688 => 594,  1686 => 593,  1678 => 588,  1674 => 587,  1666 => 586,  1660 => 585,  1651 => 581,  1646 => 579,  1641 => 578,  1638 => 577,  1633 => 574,  1627 => 573,  1625 => 572,  1617 => 567,  1613 => 566,  1605 => 565,  1599 => 564,  1590 => 560,  1585 => 558,  1580 => 557,  1577 => 556,  1572 => 553,  1566 => 552,  1564 => 551,  1556 => 550,  1550 => 549,  1545 => 547,  1541 => 546,  1537 => 545,  1532 => 543,  1528 => 542,  1523 => 541,  1520 => 540,  1515 => 537,  1509 => 536,  1507 => 535,  1499 => 534,  1495 => 533,  1491 => 532,  1485 => 531,  1477 => 528,  1472 => 526,  1467 => 525,  1464 => 524,  1459 => 521,  1453 => 520,  1451 => 519,  1446 => 517,  1442 => 516,  1434 => 515,  1428 => 514,  1420 => 511,  1415 => 509,  1410 => 508,  1407 => 507,  1402 => 504,  1396 => 503,  1394 => 502,  1391 => 501,  1384 => 500,  1379 => 499,  1375 => 498,  1369 => 497,  1365 => 495,  1360 => 493,  1355 => 491,  1349 => 490,  1345 => 488,  1342 => 487,  1338 => 486,  1333 => 484,  1329 => 483,  1324 => 482,  1321 => 481,  1316 => 478,  1310 => 477,  1308 => 476,  1305 => 475,  1298 => 474,  1293 => 473,  1289 => 472,  1283 => 471,  1279 => 469,  1274 => 467,  1269 => 465,  1263 => 464,  1259 => 462,  1256 => 461,  1252 => 460,  1247 => 458,  1243 => 457,  1238 => 456,  1235 => 455,  1230 => 452,  1224 => 451,  1222 => 450,  1217 => 447,  1211 => 446,  1199 => 439,  1192 => 434,  1182 => 427,  1178 => 426,  1172 => 422,  1169 => 421,  1165 => 420,  1159 => 417,  1154 => 415,  1148 => 414,  1141 => 412,  1136 => 410,  1131 => 409,  1128 => 408,  1124 => 407,  1120 => 405,  1114 => 404,  1112 => 403,  1108 => 402,  1104 => 401,  1099 => 399,  1094 => 396,  1088 => 395,  1086 => 394,  1079 => 392,  1074 => 390,  1069 => 387,  1063 => 386,  1061 => 385,  1054 => 383,  1049 => 381,  1044 => 378,  1038 => 377,  1036 => 376,  1032 => 375,  1028 => 374,  1023 => 372,  1013 => 369,  1007 => 366,  1003 => 365,  998 => 362,  992 => 359,  988 => 358,  983 => 355,  980 => 354,  976 => 353,  972 => 352,  964 => 351,  959 => 349,  954 => 347,  950 => 346,  946 => 345,  942 => 344,  939 => 343,  932 => 339,  929 => 338,  927 => 337,  895 => 308,  891 => 307,  886 => 304,  880 => 302,  878 => 301,  871 => 298,  865 => 297,  860 => 294,  854 => 293,  852 => 292,  844 => 287,  840 => 286,  832 => 285,  826 => 284,  817 => 280,  812 => 278,  807 => 277,  804 => 276,  799 => 273,  793 => 272,  791 => 271,  783 => 266,  779 => 265,  771 => 264,  765 => 263,  756 => 259,  751 => 257,  746 => 256,  743 => 255,  738 => 252,  732 => 251,  730 => 250,  722 => 245,  718 => 244,  710 => 243,  704 => 242,  695 => 238,  690 => 236,  685 => 235,  682 => 234,  677 => 231,  671 => 230,  669 => 229,  661 => 228,  655 => 227,  650 => 225,  646 => 224,  642 => 223,  637 => 221,  633 => 220,  628 => 219,  625 => 218,  620 => 215,  614 => 214,  612 => 213,  604 => 212,  600 => 211,  596 => 210,  590 => 209,  582 => 206,  577 => 204,  572 => 203,  569 => 202,  564 => 199,  558 => 198,  556 => 197,  551 => 195,  547 => 194,  539 => 193,  533 => 192,  525 => 189,  520 => 187,  515 => 186,  512 => 185,  507 => 182,  501 => 181,  499 => 180,  496 => 179,  489 => 178,  484 => 177,  480 => 176,  474 => 175,  470 => 173,  465 => 171,  460 => 169,  454 => 168,  450 => 166,  447 => 165,  443 => 164,  438 => 162,  434 => 161,  429 => 160,  426 => 159,  421 => 156,  415 => 155,  413 => 154,  410 => 153,  403 => 152,  398 => 151,  394 => 150,  388 => 149,  384 => 147,  379 => 145,  374 => 143,  368 => 142,  364 => 140,  361 => 139,  357 => 138,  352 => 136,  348 => 135,  343 => 134,  340 => 133,  335 => 130,  329 => 129,  327 => 128,  322 => 125,  316 => 124,  304 => 117,  297 => 112,  287 => 105,  283 => 104,  277 => 100,  274 => 99,  270 => 98,  264 => 95,  259 => 93,  253 => 92,  246 => 90,  241 => 88,  236 => 87,  233 => 86,  229 => 85,  224 => 83,  220 => 82,  215 => 79,  209 => 77,  207 => 76,  197 => 71,  192 => 68,  186 => 66,  184 => 65,  174 => 60,  169 => 58,  165 => 57,  160 => 54,  154 => 52,  152 => 51,  148 => 49,  142 => 47,  140 => 46,  129 => 42,  123 => 39,  119 => 38,  114 => 35,  108 => 32,  103 => 30,  98 => 27,  95 => 26,  91 => 25,  87 => 24,  79 => 23,  72 => 19,  66 => 16,  60 => 13,  53 => 8,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
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
                                <div class=\"col-sm-6\">
                                    {% if error_firstname %}
                                        <div class=\"text-danger\">{{ error_firstname }}</div>
                                    {% endif %}
                                </div>
                                <div class=\"col-sm-6\">
                                    {% if error_firstname %}
                                        <div class=\"text-danger\">{{ error_lastname }}</div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"name-block\">
                                <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\"
                                       placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\">

                                <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\"
                                       id=\"input-lastname\" class=\"form-control\">
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    {% if error_email %}
                                        <div class=\"text-danger\">{{ error_email }}</div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"email-block\">
                                <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\"
                                       id=\"input-email\" class=\"form-control\">
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    {% if error_telephone %}
                                        <div class=\"text-danger\">{{ error_telephone }}</div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"telephone-block\">
                                <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\"
                                       placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\">
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
                            <p>{{ text_your_password }}</p>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    {% if error_password %}
                                        <div class=\"text-danger\">{{ error_password }}</div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"password-block\">
                                <input type=\"password\" name=\"password\" value=\"{{ password }}\"
                                       placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\">
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
