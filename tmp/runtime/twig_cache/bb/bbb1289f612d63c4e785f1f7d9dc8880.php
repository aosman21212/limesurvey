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

/* /survey/questions/answer/listradio/rows/answer_row.twig */
class __TwigTemplate_0bde5007020455811ff5d05e0c1bbb44 extends Template
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
        // line 12
        echo "
";
        // line 13
        $context["button_size_class"] = ((((twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 13) == "default") || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 13)))) ? ("") : (("btn-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 13), 13, $this->source))));
        // line 14
        $context["max_buttons_row"] = ((((twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 14) == "default") || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 14)))) ? ("col-md-2") : (twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 14)));
        // line 15
        echo "
<!-- answer_row -->
<div id=\"javatbd";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 17, $this->source);
        echo "\" class=\"bootstrap-buttons-div col-12 ";
        echo $this->sandbox->ensureToStringAllowed(($context["max_buttons_row"] ?? null), 17, $this->source);
        echo "\">
    <div class=\"form-check col-12 ";
        // line 18
        if ((($context["checkedState"] ?? null) != "")) {
            echo " active ";
        }
        echo "\">
        <input
            class=\"btn-check visually-hidden button-item\"
            type=\"radio\"
            name=\"";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 22, $this->source);
        echo "\"
            id=\"answer";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 23, $this->source);
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 23, $this->source);
        echo "\"
            value=";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 24, $this->source);
        echo "
            ";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 25, $this->source);
        echo "
        >
        <label class=\"btn btn-primary w-100 ";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["button_size_class"] ?? null), 27, $this->source);
        echo "\" for=\"answer";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 27, $this->source);
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 27, $this->source);
        echo "\"> ";
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null), 27, $this->source));
        echo "
        </label>
    </div>
</div>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  78 => 25,  74 => 24,  69 => 23,  65 => 22,  56 => 18,  50 => 17,  46 => 15,  44 => 14,  42 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row.twig", "C:\\laragon\\www\\najm\\limesurvey\\themes\\question\\bootstrap_buttons\\survey\\questions\\answer\\listradio\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 18);
        static $filters = array();
        static $functions = array("processString" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['processString']
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
