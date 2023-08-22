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

/* /survey/questions/answer/listradio/rows/answer_row_noanswer.twig */
class __TwigTemplate_d70699010d78eb03b9a388a1f9e6923e extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
";
        // line 11
        $context["button_size_class"] = ((((twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 11) == "default") || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 11)))) ? ("") : (("btn-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 11), 11, $this->source))));
        // line 12
        $context["max_buttons_row"] = ((((twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 12) == "default") || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 12)))) ? ("col-md-2") : (twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 12)));
        // line 13
        echo "
<!-- answer_row_noanswer -->
<div class=\"bootstrap-buttons-div col-12 ";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(($context["max_buttons_row"] ?? null), 15, $this->source);
        echo "\">
    <div id=\"javatbd";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 16, $this->source);
        echo "\" class=\"form-check col-12 ";
        if ((($context["check_ans"] ?? null) != "")) {
            echo " active ";
        }
        echo " col-12\">
        <input
            class=\"btn-check visually-hidden button-item\"
            type=\"radio\"
            name=\"";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 20, $this->source);
        echo "\"
            id=\"answer";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 21, $this->source);
        echo "\"
            value=\"";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 22, $this->source);
        echo "\"
            ";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["check_ans"] ?? null), 23, $this->source);
        echo "
            />
        <label class=\"btn btn-primary w-100 ";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(($context["button_size_class"] ?? null), 25, $this->source);
        echo "\" for=\"answer";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 25, $this->source);
        echo "\">
            <span class=\"\" aria-hidden=\"true\"></span> ";
        // line 26
        echo gT("No answer");
        echo "
        </label>
    </div>
</div>
<!-- endof answer_row_noanswer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row_noanswer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  82 => 25,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  54 => 16,  50 => 15,  46 => 13,  44 => 12,  42 => 11,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row_noanswer.twig", "C:\\laragon\\www\\najm\\limesurvey\\themes\\question\\bootstrap_buttons\\survey\\questions\\answer\\listradio\\rows\\answer_row_noanswer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 16);
        static $filters = array();
        static $functions = array("gT" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['gT']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
