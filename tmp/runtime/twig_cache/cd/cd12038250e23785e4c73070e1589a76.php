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

/* /survey/questions/answer/listradio/answer.twig */
class __TwigTemplate_bffa1de3ec04c13dbcab4cee775f0d0c extends Template
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
        // line 9
        echo "
<!-- List Radio -->
<!-- answer -->
";
        // line 12
        echo $this->sandbox->ensureToStringAllowed(($context["sTimer"] ?? null), 12, $this->source);
        echo "
<div class=\"container-fluid\">
    <div class=\"row ";
        // line 14
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 14, $this->source);
        echo " \" data-bs-toggle=\"buttons\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 14, $this->source);
        echo "\">
    ";
        // line 16
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(($context["sRows"] ?? null), 16, $this->source);
        echo "

    ";
        // line 19
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 19), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 20
($context["name"] ?? null), 20, $this->source)), "disabled" => true]], "method", false, false, true, 19), 19, $this->source);
        // line 23
        echo "
    </div>
    ";
        // line 26
        echo "    <div class=\"row row-cols-lg-auto align-items-center mb-3 ls-js-hidden answer-item\" id=\"div";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 26, $this->source);
        echo "other\">
        <label for=\"answer";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 27, $this->source);
        echo "othertext\" class=\"col-form-label\" id=\"label-id-";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 27, $this->source);
        echo "\">";
        echo $this->sandbox->ensureToStringAllowed(($context["othertext"] ?? null), 27, $this->source);
        echo "</label>
        <div class=\"col-12\">
            <input
            type=\"text\"
            class=\"form-control ";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null), 31, $this->source);
        echo " input-sm\"
            id=\"answer";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 32, $this->source);
        echo "othertext\"
            name=\"";
        // line 33
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 33, $this->source);
        echo "other\"
            >
        </div>
    </div>
</div>
<script>doBootstrapRadioOther();</script>

<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  89 => 32,  85 => 31,  74 => 27,  69 => 26,  65 => 23,  63 => 20,  61 => 19,  55 => 16,  49 => 14,  44 => 12,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/answer.twig", "C:\\laragon\\www\\najm\\limesurvey\\themes\\question\\bootstrap_buttons\\survey\\questions\\answer\\listradio\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
