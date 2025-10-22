<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig */
class __TwigTemplate_e792593b1525f9b4399d2f86666803eec727604947693b0bc46d9d67f3951d51 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute(($context["attributes"] ?? null), "class", [], "any", true, true)) {
            // line 29
            echo "  ";
            $context["class"] = ((($context["class"] ?? $this->getContext($context, "class")) . " ") . $this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "class", []));
        }
        // line 31
        echo "
";
        // line 32
        $context["confirmation_message"] = $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "confirm_message", []);
        // line 33
        if ((($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "confirm_message_type", []) == "dynamic") && $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "dynamic_message_field", []), [], "array", true, true))) {
            // line 34
            echo "  ";
            $context["dynamic_field"] = $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "dynamic_message_field", []), [], "array");
            // line 35
            echo "  ";
            $context["confirmation_message"] = ((array_key_exists("dynamic_field", $context)) ? (_twig_default_filter(($context["dynamic_field"] ?? $this->getContext($context, "dynamic_field")), $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "confirm_message", []))) : ($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "confirm_message", [])));
        }
        // line 37
        echo "
";
        // line 38
        $context["route_params"] = [$this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "route_param_name", []) => $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "route_param_field", []), [], "array")];
        // line 39
        $context["extra_route_params"] = $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "extra_route_params", []);
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extra_route_params"] ?? $this->getContext($context, "extra_route_params")));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 42
            echo "  ";
            $context["route_params"] = twig_array_merge(($context["route_params"] ?? $this->getContext($context, "route_params")), [$context["name"] => ((($this->getAttribute(($context["record"] ?? null), $context["field"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["record"] ?? null), $context["field"], [], "array")))) ? ($this->getAttribute(($context["record"] ?? null), $context["field"], [], "array")) : ($context["field"]))]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
<a class=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", [])), "html", null, true);
        echo "-row-link\"
   href=\"#\"
   data-confirm-message=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["confirmation_message"] ?? $this->getContext($context, "confirmation_message")), "html", null, true);
        echo "\"
   data-url=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "route", []), ($context["route_params"] ?? $this->getContext($context, "route_params"))), "html", null, true);
        echo "\"
   data-method=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "method", []), "html", null, true);
        echo "\"
  ";
        // line 50
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", true, true)) {
            // line 51
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "modal_options", []), "options", []));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 52
                echo "      data-";
                echo twig_escape_filter($this->env, twig_replace_filter($context["attribute"], ["_" => "-"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "  ";
        }
        // line 55
        echo "  ";
        if ($this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "tooltip_name", [])) {
            // line 56
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", []), "html", null, true);
            echo "\"
  ";
        }
        // line 60
        echo ">
  ";
        // line 61
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []))) {
            // line 62
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 64
        echo "  ";
        if ( !$this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "tooltip_name", [])) {
            // line 65
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", []), "html", null, true);
            echo "
  ";
        }
        // line 67
        echo "</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 67,  154 => 65,  151 => 64,  145 => 62,  143 => 61,  140 => 60,  135 => 58,  131 => 56,  128 => 55,  125 => 54,  114 => 52,  109 => 51,  107 => 50,  103 => 49,  99 => 48,  95 => 47,  88 => 45,  85 => 44,  78 => 42,  74 => 41,  71 => 40,  69 => 39,  67 => 38,  64 => 37,  60 => 35,  57 => 34,  55 => 33,  53 => 32,  50 => 31,  46 => 29,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% set class = 'btn tooltip-link js-submit-row-action' %}

{% if attributes.class is defined %}
  {% set class = class ~ ' ' ~ attributes.class %}
{% endif %}

{% set confirmation_message = action.options.confirm_message %}
{% if action.options.confirm_message_type == 'dynamic' and record[action.options.dynamic_message_field] is defined %}
  {% set dynamic_field = record[action.options.dynamic_message_field] %}
  {% set confirmation_message = dynamic_field|default(action.options.confirm_message) %}
{% endif %}

{% set route_params = { (action.options.route_param_name) : (record[action.options.route_param_field]) } %}
{% set extra_route_params = action.options.extra_route_params %}

{% for name, field in extra_route_params %}
  {% set route_params = route_params|merge({ (name) : (record[field] ?? field) }) %}
{% endfor %}

<a class=\"{{ class }} grid-{{ action.name|lower }}-row-link\"
   href=\"#\"
   data-confirm-message=\"{{ confirmation_message }}\"
   data-url=\"{{ path(action.options.route, route_params) }}\"
   data-method=\"{{ action.options.method }}\"
  {% if action.options.modal_options.options is defined %}
    {% for attribute, value in action.options.modal_options.options %}
      data-{{ attribute|replace({'_':'-'}) }}=\"{{ value }}\"
    {% endfor %}
  {% endif %}
  {% if attributes.tooltip_name %}
    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"{{ action.name }}\"
  {% endif %}
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {% if not attributes.tooltip_name %}
    {{ action.name }}
  {% endif %}
</a>
", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/submit.html.twig");
    }
}
