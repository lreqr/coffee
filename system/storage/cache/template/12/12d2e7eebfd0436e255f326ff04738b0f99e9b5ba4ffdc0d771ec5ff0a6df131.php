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

/* coffee/template/account/edit.twig */
class __TwigTemplate_9b8bd97888069dc80ddf1b4cb4ce63c7dded25595e6cff2a0e5aa58afcda596a extends \Twig\Template
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

<main class=\"main register-page\">

    <div id=\"account-edit\" class=\"container\">
        ";
        // line 6
        if (($context["error_warning"] ?? null)) {
            // line 7
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 8
            echo ($context["error_warning"] ?? null);
            echo "</div>
        ";
        }
        // line 10
        echo "        <div class=\"row login-row\">
            <div id=\"content\"
                 class=\"";
        // line 12
        echo ($context["class"] ?? null);
        echo " col-lg-6 col-md-8 col-sm-10 login-block register-block\">";
        echo ($context["content_top"] ?? null);
        echo "
                <div class=\"login-block-register\">
                    <a href=\"";
        // line 14
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a>
                </div>
                <div class=\"login-block-wrapper\">
                    <div class=\"login-block-title\">
                        <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                        <p>";
        // line 19
        echo ($context["text_your_details"] ?? null);
        echo "</p>
                    </div>
                    <form action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset>
                            <div class=\"row\">
                                ";
        // line 24
        if (($context["error_firstname"] ?? null)) {
            // line 25
            echo "                                    <div class=\"col-sm-6\">
                                        <div class=\"text-danger\">";
            // line 26
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                                    </div>
                                ";
        }
        // line 29
        echo "                                ";
        if (($context["error_lastname"] ?? null)) {
            // line 30
            echo "                                    <div class=\"col-sm-6\">
                                        <div class=\"text-danger\">";
            // line 31
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                                    </div>
                                ";
        }
        // line 34
        echo "                            </div>
                            <div class=\"name-block form-group required\">
                                <input type=\"text\" name=\"firstname\" value=\"";
        // line 36
        echo ($context["firstname"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 37
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                                <input type=\"text\" name=\"lastname\" value=\"";
        // line 38
        echo ($context["lastname"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 39
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                            </div>
                            <div class=\"form-group required\">
                                <div class=\"col-sm-10\">
                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 47
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                           id=\"input-email\" class=\"form-control\"/>
                                    ";
        // line 49
        if (($context["error_email"] ?? null)) {
            // line 50
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                                    ";
        }
        // line 52
        echo "                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <div class=\"col-sm-10\">
                                    <input type=\"tel\" name=\"telephone\" value=\"";
        // line 56
        echo ($context["telephone"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 57
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\"
                                           class=\"form-control\"/>
                                    ";
        // line 59
        if (($context["error_telephone"] ?? null)) {
            // line 60
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                                    ";
        }
        // line 62
        echo "                                </div>
                            </div>
                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 65
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 65) == "select")) {
                // line 66
                echo "                                    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 66)) {
                    echo " required ";
                }
                echo " custom-field\"
                                         data-sort=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 67);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 69);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"custom_field[";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 71);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 71);
                echo "]\"
                                                    id=\"input-custom-field";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                echo "\"
                                                    class=\"form-control\">
                                                <option value=\"\">";
                // line 74
                echo ($context["text_select"] ?? null);
                echo "</option>
                                                ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 76
                    echo "                                                    ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 76) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["account_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76)] ?? null) : null)))) {
                        // line 77
                        echo "                                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 77);
                        echo "\"
                                                                selected=\"selected\">";
                        // line 78
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 78);
                        echo "</option>
                                                    ";
                    } else {
                        // line 80
                        echo "                                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 80);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 80);
                        echo "</option>
                                                    ";
                    }
                    // line 82
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                                            </select>
                                            ";
                // line 84
                if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84)] ?? null) : null)) {
                    // line 85
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 87
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 90
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 90) == "radio")) {
                // line 91
                echo "                                    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 91)) {
                    echo " required ";
                }
                echo " custom-field\"
                                         data-sort=\"";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 92);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 93);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div>
                                                ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 97
                    echo "                                                    <div class=\"radio\">
                                                        ";
                    // line 98
                    if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98) == (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["account_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98)] ?? null) : null)))) {
                        // line 99
                        echo "                                                            <label>
                                                                <input type=\"radio\"
                                                                       name=\"custom_field[";
                        // line 101
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 101);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                        echo "]\"
                                                                       value=\"";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 102);
                        echo "\"
                                                                       checked=\"checked\"/>
                                                                ";
                        // line 104
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 104);
                        echo "</label>
                                                        ";
                    } else {
                        // line 106
                        echo "                                                            <label>
                                                                <input type=\"radio\"
                                                                       name=\"custom_field[";
                        // line 108
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 108);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                        echo "]\"
                                                                       value=\"";
                        // line 109
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                        echo "\"/>
                                                                ";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 110);
                        echo "</label>
                                                        ";
                    }
                    // line 112
                    echo "                                                    </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                                            </div>
                                            ";
                // line 115
                if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["error_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115)] ?? null) : null)) {
                    // line 116
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 118
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 121
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "checkbox")) {
                // line 122
                echo "                                    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 122)) {
                    echo " required ";
                }
                echo " custom-field\"
                                         data-sort=\"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 123);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 124);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div>
                                                ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 127));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 128
                    echo "                                                    <div class=\"checkbox\">
                                                        ";
                    // line 129
                    if (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 129), (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["account_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null)))) {
                        // line 130
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 132
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 132);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                        echo "][]\"
                                                                       value=\"";
                        // line 133
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 133);
                        echo "\"
                                                                       checked=\"checked\"/>
                                                                ";
                        // line 135
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 135);
                        echo "</label>
                                                        ";
                    } else {
                        // line 137
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 139);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                        echo "][]\"
                                                                       value=\"";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        echo "\"/>
                                                                ";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 141);
                        echo "</label>
                                                        ";
                    }
                    // line 143
                    echo "                                                    </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "                                            </div>
                                            ";
                // line 146
                if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null)) {
                    // line 147
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 149
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 152
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 152) == "text")) {
                // line 153
                echo "                                    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 153)) {
                    echo " required ";
                }
                echo " custom-field\"
                                         data-sort=\"";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 154);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\"
                                                   name=\"custom_field[";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 159);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "]\"
                                                   value=\"";
                // line 160
                if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["account_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160)] ?? null) : null)) {
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 160);
                }
                echo "\"
                                                   placeholder=\"";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                echo "\"
                                                   id=\"input-custom-field";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "\"
                                                   class=\"form-control\"/>
                                            ";
                // line 164
                if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["error_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null)) {
                    // line 165
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 167
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 170
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 170) == "textarea")) {
                // line 171
                echo "                                    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 171)) {
                    echo " required ";
                }
                echo " custom-field\"
                                         data-sort=\"";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 172);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 174);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea
                                                    name=\"custom_field[";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 177);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                echo "]\"
                                                    rows=\"5\" placeholder=\"";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 178);
                echo "\"
                                                    id=\"input-custom-field";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                echo "\"
                                                    class=\"form-control\">";
                // line 180
                if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["account_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) {
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["account_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 180);
                }
                echo "</textarea>
                                            ";
                // line 181
                if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["error_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181)] ?? null) : null)) {
                    // line 182
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 184
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 187
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 187) == "file")) {
                // line 188
                echo "                                    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 188)) {
                    echo " required ";
                }
                echo " custom-field\"
                                         data-sort=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 189);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 190);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <button type=\"button\"
                                                    id=\"button-custom-field";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                echo "\"
                                                    data-loading-text=\"";
                // line 194
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                        class=\"fa fa-upload\"></i> ";
                // line 195
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                            <input type=\"hidden\"
                                                   name=\"custom_field[";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 197);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                echo "]\"
                                                   value=\"";
                // line 198
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["code"] ?? null) : null)) {
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["account_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["code"] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                            <span>";
                // line 199
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["account_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["name"] ?? null) : null);
                echo "</span>
                                            ";
                // line 200
                if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["error_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null)) {
                    // line 201
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 203
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 206
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 206) == "date")) {
                // line 207
                echo "                                    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 207)) {
                    echo " required ";
                }
                echo " custom-field\"
                                         data-sort=\"";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 208);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 210);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group date\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 214);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "]\"
                                                       value=\"";
                // line 215
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["account_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null)) {
                    echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["account_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 215);
                }
                echo "\"
                                                       placeholder=\"";
                // line 216
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 216);
                echo "\"
                                                       data-date-format=\"YYYY-MM-DD\"
                                                       id=\"input-custom-field";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 223
                if ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["error_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223)] ?? null) : null)) {
                    // line 224
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 226
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 229
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 229) == "time")) {
                // line 230
                echo "                                    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 230)) {
                    echo " required ";
                }
                echo " custom-field\"
                                         data-sort=\"";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 231);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 233);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group time\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 237
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 237);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                echo "]\"
                                                       value=\"";
                // line 238
                if ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["account_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238)] ?? null) : null)) {
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["account_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 238);
                }
                echo "\"
                                                       placeholder=\"";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 239);
                echo "\" data-date-format=\"HH:mm\"
                                                       id=\"input-custom-field";
                // line 240
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 245
                if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["error_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null)) {
                    // line 246
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 248
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 251
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 251) == "datetime")) {
                // line 252
                echo "                                    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 252)) {
                    echo " required ";
                }
                echo " custom-field\"
                                         data-sort=\"";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 253);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 255);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 255);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group datetime\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 259);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                echo "]\"
                                                       value=\"";
                // line 260
                if ((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["account_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260)] ?? null) : null)) {
                    echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["account_custom_field"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 260);
                }
                echo "\"
                                                       placeholder=\"";
                // line 261
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 261);
                echo "\"
                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                       id=\"input-custom-field";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 263);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 268
                if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["error_custom_field"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268)] ?? null) : null)) {
                    // line 269
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["error_custom_field"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 271
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 274
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "                        </fieldset>
                        <div class=\"buttons clearfix\">
                            <div class=\"pull-right\">
                                <input type=\"submit\" value=\"";
        // line 278
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

<script type=\"text/javascript\"><!--
    // Sort the custom fields
    \$('.form-group[data-sort]').detach().each(function () {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
            \$('.form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('.form-group').length) {
            \$('.form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') == \$('.form-group').length) {
            \$('.form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('.form-group').length) {
            \$('.form-group:first').before(this);
        }
    });
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
                            \$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
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
        // line 364
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 369
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 375
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });
    //--></script>
";
        // line 379
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "coffee/template/account/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  947 => 379,  940 => 375,  931 => 369,  923 => 364,  834 => 278,  829 => 275,  823 => 274,  818 => 271,  812 => 269,  810 => 268,  802 => 263,  797 => 261,  789 => 260,  783 => 259,  774 => 255,  769 => 253,  762 => 252,  759 => 251,  754 => 248,  748 => 246,  746 => 245,  738 => 240,  734 => 239,  726 => 238,  720 => 237,  711 => 233,  706 => 231,  699 => 230,  696 => 229,  691 => 226,  685 => 224,  683 => 223,  675 => 218,  670 => 216,  662 => 215,  656 => 214,  647 => 210,  642 => 208,  635 => 207,  632 => 206,  627 => 203,  621 => 201,  619 => 200,  615 => 199,  608 => 198,  602 => 197,  597 => 195,  593 => 194,  589 => 193,  583 => 190,  579 => 189,  572 => 188,  569 => 187,  564 => 184,  558 => 182,  556 => 181,  548 => 180,  544 => 179,  540 => 178,  534 => 177,  526 => 174,  521 => 172,  514 => 171,  511 => 170,  506 => 167,  500 => 165,  498 => 164,  493 => 162,  489 => 161,  481 => 160,  475 => 159,  467 => 156,  462 => 154,  455 => 153,  452 => 152,  447 => 149,  441 => 147,  439 => 146,  436 => 145,  429 => 143,  424 => 141,  420 => 140,  414 => 139,  410 => 137,  405 => 135,  400 => 133,  394 => 132,  390 => 130,  388 => 129,  385 => 128,  381 => 127,  375 => 124,  371 => 123,  364 => 122,  361 => 121,  356 => 118,  350 => 116,  348 => 115,  345 => 114,  338 => 112,  333 => 110,  329 => 109,  323 => 108,  319 => 106,  314 => 104,  309 => 102,  303 => 101,  299 => 99,  297 => 98,  294 => 97,  290 => 96,  284 => 93,  280 => 92,  273 => 91,  270 => 90,  265 => 87,  259 => 85,  257 => 84,  254 => 83,  248 => 82,  240 => 80,  235 => 78,  230 => 77,  227 => 76,  223 => 75,  219 => 74,  214 => 72,  208 => 71,  201 => 69,  196 => 67,  189 => 66,  186 => 65,  182 => 64,  178 => 62,  172 => 60,  170 => 59,  165 => 57,  161 => 56,  155 => 52,  149 => 50,  147 => 49,  140 => 47,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 34,  107 => 31,  104 => 30,  101 => 29,  95 => 26,  92 => 25,  90 => 24,  84 => 21,  79 => 19,  75 => 18,  66 => 14,  59 => 12,  55 => 10,  50 => 8,  47 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<main class=\"main register-page\">

    <div id=\"account-edit\" class=\"container\">
        {% if error_warning %}
            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
        {% endif %}
        <div class=\"row login-row\">
            <div id=\"content\"
                 class=\"{{ class }} col-lg-6 col-md-8 col-sm-10 login-block register-block\">{{ content_top }}
                <div class=\"login-block-register\">
                    <a href=\"{{ back }}\" class=\"btn btn-default\">{{ button_back }}</a>
                </div>
                <div class=\"login-block-wrapper\">
                    <div class=\"login-block-title\">
                        <h1>{{ heading_title }}</h1>
                        <p>{{ text_your_details }}</p>
                    </div>
                    <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset>
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
                                       placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                                <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\"
                                       placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
                            </div>
                            <div class=\"form-group required\">
                                <div class=\"col-sm-10\">
                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\"
                                           id=\"input-email\" class=\"form-control\"/>
                                    {% if error_email %}
                                        <div class=\"text-danger\">{{ error_email }}</div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <div class=\"col-sm-10\">
                                    <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\"
                                           placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\"
                                           class=\"form-control\"/>
                                    {% if error_telephone %}
                                        <div class=\"text-danger\">{{ error_telephone }}</div>
                                    {% endif %}
                                </div>
                            </div>
                            {% for custom_field in custom_fields %}
                                {% if custom_field.type == 'select' %}
                                    <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\"
                                         data-sort=\"{{ custom_field.sort_order }}\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                    id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                                    class=\"form-control\">
                                                <option value=\"\">{{ text_select }}</option>
                                                {% for custom_field_value in custom_field.custom_field_value %}
                                                    {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}
                                                        <option value=\"{{ custom_field_value.custom_field_value_id }}\"
                                                                selected=\"selected\">{{ custom_field_value.name }}</option>
                                                    {% else %}
                                                        <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                                                    {% endif %}
                                                {% endfor %}
                                            </select>
                                            {% if error_custom_field[custom_field.custom_field_id] %}
                                                <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                                {% if custom_field.type == 'radio' %}
                                    <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\"
                                         data-sort=\"{{ custom_field.sort_order }}\">
                                        <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <div>
                                                {% for custom_field_value in custom_field.custom_field_value %}
                                                    <div class=\"radio\">
                                                        {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}
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
                                                        {% endif %}
                                                    </div>
                                                {% endfor %}
                                            </div>
                                            {% if error_custom_field[custom_field.custom_field_id] %}
                                                <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                                {% if custom_field.type == 'checkbox' %}
                                    <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\"
                                         data-sort=\"{{ custom_field.sort_order }}\">
                                        <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <div>
                                                {% for custom_field_value in custom_field.custom_field_value %}
                                                    <div class=\"checkbox\">
                                                        {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}
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
                                                        {% endif %}
                                                    </div>
                                                {% endfor %}
                                            </div>
                                            {% if error_custom_field[custom_field.custom_field_id] %}
                                                <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                                {% if custom_field.type == 'text' %}
                                    <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\"
                                         data-sort=\"{{ custom_field.sort_order }}\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\"
                                                   name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                   value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                   placeholder=\"{{ custom_field.name }}\"
                                                   id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                                   class=\"form-control\"/>
                                            {% if error_custom_field[custom_field.custom_field_id] %}
                                                <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                                {% if custom_field.type == 'textarea' %}
                                    <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\"
                                         data-sort=\"{{ custom_field.sort_order }}\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <textarea
                                                    name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                    rows=\"5\" placeholder=\"{{ custom_field.name }}\"
                                                    id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                                    class=\"form-control\">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                                            {% if error_custom_field[custom_field.custom_field_id] %}
                                                <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                                {% if custom_field.type == 'file' %}
                                    <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\"
                                         data-sort=\"{{ custom_field.sort_order }}\">
                                        <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <button type=\"button\"
                                                    id=\"button-custom-field{{ custom_field.custom_field_id }}\"
                                                    data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i
                                                        class=\"fa fa-upload\"></i> {{ button_upload }}</button>
                                            <input type=\"hidden\"
                                                   name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                   value=\"{% if account_custom_field[custom_field.custom_field_id]['code'] %}{{ account_custom_field[custom_field.custom_field_id]['code'] }} {% endif %}\"/>
                                            <span>{{ account_custom_field[custom_field.custom_field_id]['name'] }}</span>
                                            {% if error_custom_field[custom_field.custom_field_id] %}
                                                <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                                {% if custom_field.type == 'date' %}
                                    <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\"
                                         data-sort=\"{{ custom_field.sort_order }}\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group date\">
                                                <input type=\"text\"
                                                       name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                       value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                       placeholder=\"{{ custom_field.name }}\"
                                                       data-date-format=\"YYYY-MM-DD\"
                                                       id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            {% if error_custom_field[custom_field.custom_field_id] %}
                                                <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                                {% if custom_field.type == 'time' %}
                                    <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\"
                                         data-sort=\"{{ custom_field.sort_order }}\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group time\">
                                                <input type=\"text\"
                                                       name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                       value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                       placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\"
                                                       id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            {% if error_custom_field[custom_field.custom_field_id] %}
                                                <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                                {% if custom_field.type == 'datetime' %}
                                    <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\"
                                         data-sort=\"{{ custom_field.sort_order }}\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group datetime\">
                                                <input type=\"text\"
                                                       name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                       value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                       placeholder=\"{{ custom_field.name }}\"
                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                       id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            {% if error_custom_field[custom_field.custom_field_id] %}
                                                <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </fieldset>
                        <div class=\"buttons clearfix\">
                            <div class=\"pull-right\">
                                <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

<script type=\"text/javascript\"><!--
    // Sort the custom fields
    \$('.form-group[data-sort]').detach().each(function () {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
            \$('.form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('.form-group').length) {
            \$('.form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') == \$('.form-group').length) {
            \$('.form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('.form-group').length) {
            \$('.form-group:first').before(this);
        }
    });
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
                            \$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
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

    \$('.datetime').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: false
    });
    //--></script>
{{ footer }}
", "coffee/template/account/edit.twig", "");
    }
}
