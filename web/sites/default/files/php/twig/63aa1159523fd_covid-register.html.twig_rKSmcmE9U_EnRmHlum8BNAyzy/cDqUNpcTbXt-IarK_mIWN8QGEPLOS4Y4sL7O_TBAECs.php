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

/* modules/custom/covid_custom_module/templates/covid-register.html.twig */
class __TwigTemplate_9af993c1bf31167bc381d5b0a006e0e7 extends \Twig\Template
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
        // line 1
        echo "<div class=\"register-block\">
  ";
        // line 2
        if ( !twig_test_empty(($context["register_link"] ?? null))) {
            // line 3
            echo "  \t<div class=\"btn btn-red\" id=\"covid-register\" covid_nid=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["covid_nid"] ?? null), 3, $this->source), "html", null, true);
            echo "\">Register</div>
  ";
        } elseif ( !twig_test_empty(        // line 4
($context["register_text"] ?? null))) {
            // line 5
            echo "  \t<div class=\"register-text\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["register_text"] ?? null), 5, $this->source));
            echo "</div>
  ";
        }
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/covid_custom_module/templates/covid-register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  51 => 5,  49 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"register-block\">
  {% if register_link is not empty %}
  \t<div class=\"btn btn-red\" id=\"covid-register\" covid_nid=\"{{ covid_nid }}\">Register</div>
  {% elseif register_text is not empty %}
  \t<div class=\"register-text\">{{ register_text|raw }}</div>
  {% endif %}
</div>
", "modules/custom/covid_custom_module/templates/covid-register.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CovidVaccination/web/modules/custom/covid_custom_module/templates/covid-register.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3, "raw" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
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
