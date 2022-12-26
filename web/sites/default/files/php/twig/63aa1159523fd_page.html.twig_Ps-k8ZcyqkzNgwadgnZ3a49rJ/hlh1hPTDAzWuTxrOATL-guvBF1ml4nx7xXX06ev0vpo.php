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

/* themes/custom/covid_custom_theme/templates/system/page.html.twig */
class __TwigTemplate_727ca7ea77370da6ff61e69bb651ec5e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "
";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 32) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 32))) {
            // line 33
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 84
        echo "
";
        // line 86
        $context["sidebar_first_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 86) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 86))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 88
        echo "
";
        // line 90
        $context["sidebar_second_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 90) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 92
        echo "
";
        // line 94
        $context["content_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 94) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 94))) ? ("col-12 col-lg-6") : ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 94) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 94))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 96
        echo "<div class=\"container\">
  ";
        // line 98
        echo "  <div class=\"website-content-container row\">
      ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 99)) {
            // line 100
            echo "        <div class=\"order-2 order-lg-1 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null), 100, $this->source), "html", null, true);
            echo "\">
          ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 104
        echo "      <div class=\"order-1 order-lg-2 ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 104, $this->source), "html", null, true);
        echo "\">
        ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 107)) {
            // line 108
            echo "        <div class=\"order-3 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null), 108, $this->source), "html", null, true);
            echo "\">
          ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 112
        echo "  </div>
</div>

";
        // line 116
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 no-padding-left\">
        <div class=\"social-icon-holder\">
          ";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_left", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
        echo "
          <ul>
            <li><a href=\"\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>facebook</a></li>
            <li><a href=\"\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>Twitter</a></li>
            <li><a href=\"\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>linkedin</a></li>
            <li><a href=\"\"><i class=\"fa fa-flickr\" aria-hidden=\"true\"></i>flickr</a></li>
            <li><a href=\"\"><i class=\"fa fa-snapchat-square\" aria-hidden=\"true\"></i>snapchat-square</a></li>
            <li><a href=\"\"><i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i>youtube</a></li>
            <li><a href=\"\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>instagram</a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-md-6 align-self-end no-padding-right\">
        <div class=\"footer-logo-img-holder \">
          ";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_right", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
      
    <div class=\"row terms-holder text-uppercase\">
      <div class=\"col-md-12\"><hr></div>
      <div class=\"col-md-7\">Copyright @2022, All rights reserved.</div>
    </div>
  </div>
</footer>
";
    }

    // line 33
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    ";
        // line 35
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["theme"] ?? null), "settings", [], "any", false, false, true, 37), "navbar_inverse", [], "any", false, false, true, 37)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["theme"] ?? null), "settings", [], "any", false, false, true, 38), "navbar_position", [], "any", false, false, true, 38)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 38), "navbar_position", [], "any", false, false, true, 38), 38, $this->source)))) : (($context["container"] ?? null)))];
        // line 41
        echo "    <header>
      <div class=\"top-bar\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>

      <div ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"navbar-header\">
              <div class=\"row position-relative\">
                <div class=\"desktop-show no-padding\">
                  ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"mobile-show\">
                  ";
        // line 62
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 62)) {
            // line 63
            echo "                    <button type=\"button\" class=\"navbar-toggle mobile-menu-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                      <span class=\"sr-only\">";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
                      <span class=\"fa fa-bars\"></span>
                    </button>
                  ";
        }
        // line 68
        echo "                </div>
              </div>
            </div>

            ";
        // line 73
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 73)) {
            // line 74
            echo "              <div id=\"navbar-collapse\" class=\"navbar-collapse navbar-mobile collapse\">
                ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 78
        echo "          </div>
        </div>
      </div>
    </header>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/covid_custom_theme/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 78,  217 => 75,  214 => 74,  211 => 73,  205 => 68,  198 => 64,  195 => 63,  192 => 62,  186 => 58,  177 => 52,  168 => 46,  161 => 41,  159 => 38,  158 => 37,  157 => 35,  155 => 34,  151 => 33,  135 => 135,  118 => 121,  111 => 116,  106 => 112,  100 => 109,  95 => 108,  93 => 107,  88 => 105,  83 => 104,  77 => 101,  72 => 100,  70 => 99,  67 => 98,  64 => 96,  62 => 94,  59 => 92,  57 => 90,  54 => 88,  52 => 86,  49 => 84,  45 => 33,  43 => 32,  40 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header>
      <div class=\"top-bar\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ page.header }}
            </div>
          </div>
        </div>
      </div>

      <div {{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"navbar-header\">
              <div class=\"row position-relative\">
                <div class=\"desktop-show no-padding\">
                  {{ page.navigation_collapsible }}
                </div>
                <div class=\"mobile-show\">
                  {# show bars for mobile device #}
                  {% if page.navigation_collapsible %}
                    <button type=\"button\" class=\"navbar-toggle mobile-menu-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                      <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
                      <span class=\"fa fa-bars\"></span>
                    </button>
                  {% endif %}
                </div>
              </div>
            </div>

            {# Navigation (collapsible) #}
            {% if page.navigation_collapsible %}
              <div id=\"navbar-collapse\" class=\"navbar-collapse navbar-mobile collapse\">
                {{ page.navigation_collapsible }}
              </div>
            {% endif %}
          </div>
        </div>
      </div>
    </header>
  {% endblock %}
{% endif %}

{%
set sidebar_first_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
%}

{%
set sidebar_second_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
%}

{%
set content_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-lg-6' : ((page.sidebar_first or page.sidebar_second) ? 'col-12 col-lg-9' : 'col-12' )
%}
<div class=\"container\">
  {# Content #}
  <div class=\"website-content-container row\">
      {% if page.sidebar_first %}
        <div class=\"order-2 order-lg-1 {{ sidebar_first_classes }}\">
          {{ page.sidebar_first }}
        </div>
      {% endif %}
      <div class=\"order-1 order-lg-2 {{ content_classes }}\">
        {{ page.content }}
      </div>
      {% if page.sidebar_second %}
        <div class=\"order-3 {{ sidebar_second_classes }}\">
          {{ page.sidebar_second }}
        </div>
      {% endif %}
  </div>
</div>

{# footer #}
<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 no-padding-left\">
        <div class=\"social-icon-holder\">
          {{ page.footer_left }}
          <ul>
            <li><a href=\"\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>facebook</a></li>
            <li><a href=\"\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>Twitter</a></li>
            <li><a href=\"\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>linkedin</a></li>
            <li><a href=\"\"><i class=\"fa fa-flickr\" aria-hidden=\"true\"></i>flickr</a></li>
            <li><a href=\"\"><i class=\"fa fa-snapchat-square\" aria-hidden=\"true\"></i>snapchat-square</a></li>
            <li><a href=\"\"><i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i>youtube</a></li>
            <li><a href=\"\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>instagram</a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-md-6 align-self-end no-padding-right\">
        <div class=\"footer-logo-img-holder \">
          {{ page.footer_right }}
        </div>
      </div>
    </div>
      
    <div class=\"row terms-holder text-uppercase\">
      <div class=\"col-md-12\"><hr></div>
      <div class=\"col-md-7\">Copyright @2022, All rights reserved.</div>
    </div>
  </div>
</footer>
", "themes/custom/covid_custom_theme/templates/system/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CovidVaccination/web/themes/custom/covid_custom_theme/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32, "block" => 33, "set" => 86);
        static $filters = array("escape" => 100, "clean_class" => 38, "t" => 64);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 'clean_class', 't'],
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
