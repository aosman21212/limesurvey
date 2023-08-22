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

/* ./subviews/header/nav_bar.twig */
class __TwigTemplate_e9846bf72d904866cfb5cfea83027d63 extends Template
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
        // line 19
        echo "<!-- Bootstrap Navigation Bar -->
<div id=\"survey-nav\" class=\"navbar fixed-top\">
    <div class=\"container-fluid col-xl-8\">
        ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 22), "brandlogo", [], "any", false, false, true, 22) == "on")) {
            // line 23
            echo "            <div class=\"navbar-brand logo-container d-none d-md-block\">
                ";
            // line 24
            echo LS_Twig_Extension::image($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 24), "brandlogofile", [], "any", false, false, true, 24), 24, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 24), 24, $this->source), ["class" => "logo img-fluid"]);
            echo "
            </div>
        ";
        }
        // line 27
        echo "        <div id=\"navbar-menu\" class=\"dropdown ms-auto ls-no-js-hidden\">
            ";
        // line 28
        if ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 28), "load", [], "any", false, false, true, 28), "show", [], "any", false, false, true, 28) == "Y") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 29), "save", [], "any", false, false, true, 29), "show", [], "any", false, false, true, 29) == "Y")) || (((twig_get_attribute($this->env, $this->source,         // line 30
($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 30) == true) || (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 30) == null)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 31), "showclearall", [], "any", false, false, true, 31) == "on"))) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 32), "bShow", [], "any", false, false, true, 32) == true)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 33), "show", [], "any", false, false, true, 33) == true))) {
            // line 34
            echo "                <div id=\"navbar-toggler\" class=\"navbar-toggler\" data-bs-toggle=\"dropdown\"
                     data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                    <span class=\"ri-more-fill\"></span>
                </div>
                <ul id=\"main-dropdown\" class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbar-toggler\">
                    ";
            // line 39
            echo twig_include($this->env, $context, "./subviews/navigation/language_changer_top_menu.twig");
            echo "
                    ";
            // line 40
            if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 40), "load", [], "any", false, false, true, 40), "show", [], "any", false, false, true, 40) == "Y") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 41), "save", [], "any", false, false, true, 41), "show", [], "any", false, false, true, 41) == "Y")) || (((twig_get_attribute($this->env, $this->source,             // line 42
($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 42) == true) || (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 42) == null)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 43
($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 43), "showclearall", [], "any", false, false, true, 43) == "on"))) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 44
($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 44), "bShow", [], "any", false, false, true, 44) == true))) {
                // line 45
                echo "                        <li class=\"dropdown-header text-uppercase\">";
                echo gT("Survey options");
                echo "</li>
                    ";
            }
            // line 47
            echo "                    ";
            echo twig_include($this->env, $context, "./subviews/navigation/save_links.twig");
            echo "
                    ";
            // line 48
            echo twig_include($this->env, $context, "./subviews/navigation/question_index_menu.twig");
            echo "
                    ";
            // line 49
            echo twig_include($this->env, $context, "./subviews/navigation/clearall_links.twig");
            echo "
                </ul>
            ";
        }
        // line 52
        echo "        </div>
        <ul id=\"back-content\" class=\"d-none\"></ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "./subviews/header/nav_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 52,  97 => 49,  93 => 48,  88 => 47,  82 => 45,  80 => 44,  79 => 43,  78 => 42,  77 => 41,  76 => 40,  72 => 39,  65 => 34,  63 => 33,  62 => 32,  61 => 31,  60 => 30,  59 => 29,  58 => 28,  55 => 27,  49 => 24,  46 => 23,  44 => 22,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/nav_bar.twig", "C:\\laragon\\www\\najm\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\header\\nav_bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array();
        static $functions = array("image" => 24, "include" => 39, "gT" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['image', 'include', 'gT']
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
