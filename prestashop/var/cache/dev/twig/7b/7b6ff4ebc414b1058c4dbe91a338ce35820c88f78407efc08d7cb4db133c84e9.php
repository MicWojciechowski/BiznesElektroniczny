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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_a27ada1fdce19d0b0c28bf32153d3e3ae7c755bfa5b885bfa2a8cd8bea4a8da8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["actions"] = $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "actions", []);
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty(($context["actions"] ?? $this->getContext($context, "actions")))) {
            // line 29
            echo "    ";
            $context["inlineActions"] = [];
            // line 30
            echo "    ";
            $context["regularActions"] = [];
            // line 31
            echo "
    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 33
                echo "      ";
                if (($this->getAttribute($this->getAttribute($context["action"], "options", []), "use_inline_display", [], "array") == true)) {
                    // line 34
                    echo "          ";
                    $context["inlineActions"] = twig_array_merge(($context["inlineActions"] ?? $this->getContext($context, "inlineActions")), [0 => $context["action"]]);
                    // line 35
                    echo "        ";
                } else {
                    // line 36
                    echo "          ";
                    $context["regularActions"] = twig_array_merge(($context["regularActions"] ?? $this->getContext($context, "regularActions")), [0 => $context["action"]]);
                    // line 37
                    echo "      ";
                }
                // line 38
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
    <div class=\"btn-group-action text-right\">
      ";
            // line 41
            if ( !twig_test_empty(($context["inlineActions"] ?? $this->getContext($context, "inlineActions")))) {
                // line 42
                echo "        <div class=\"btn-group d-flex justify-content-between text-right\">
          ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["inlineActions"] ?? $this->getContext($context, "inlineActions")));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["inlineAction"]) {
                    // line 44
                    if ($this->getAttribute($context["inlineAction"], "isApplicable", [0 => ($context["record"] ?? $this->getContext($context, "record"))], "method")) {
                        // line 45
                        echo "
              ";
                        // line 46
                        $context["class"] = "dropdown-item inline-dropdown-item";
                        // line 47
                        echo "
              ";
                        // line 48
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["inlineAction"], "type", [])) . ".html.twig"), ["grid" =>                         // line 49
($context["grid"] ?? $this->getContext($context, "grid")), "column" =>                         // line 50
($context["column"] ?? $this->getContext($context, "column")), "attributes" => ["class" =>                         // line 51
($context["class"] ?? $this->getContext($context, "class")), "tooltip_name" => true], "record" =>                         // line 52
($context["record"] ?? $this->getContext($context, "record")), "action" =>                         // line 53
$context["inlineAction"]]);
                        // line 54
                        echo "
            ";
                    }
                    // line 56
                    echo "          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inlineAction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        </div>
      ";
            }
            // line 59
            echo "
      ";
            // line 60
            if ( !twig_test_empty(($context["regularActions"] ?? $this->getContext($context, "regularActions")))) {
                // line 61
                echo "        <div class=\"btn-group\">
          ";
                // line 62
                list($context["skippedActions"], $context["isFirstRendered"]) =                 [0, false];
                // line 63
                echo "
          ";
                // line 65
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["regularActions"] ?? $this->getContext($context, "regularActions")));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 66
                    echo "            ";
                    if ( !($context["isFirstRendered"] ?? $this->getContext($context, "isFirstRendered"))) {
                        // line 67
                        echo "              ";
                        $context["skippedActions"] = (($context["skippedActions"] ?? $this->getContext($context, "skippedActions")) + 1);
                        // line 68
                        echo "            ";
                    }
                    // line 69
                    echo "
            ";
                    // line 70
                    if (($this->getAttribute($context["action"], "isApplicable", [0 => ($context["record"] ?? $this->getContext($context, "record"))], "method") &&  !($context["isFirstRendered"] ?? $this->getContext($context, "isFirstRendered")))) {
                        // line 71
                        echo "              ";
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["grid" =>                         // line 72
($context["grid"] ?? $this->getContext($context, "grid")), "column" =>                         // line 73
($context["column"] ?? $this->getContext($context, "column")), "attributes" => ["class" => "dropdown-item", "tooltip_name" => true], "record" =>                         // line 75
($context["record"] ?? $this->getContext($context, "record")), "action" =>                         // line 76
$context["action"]]);
                        // line 77
                        echo "

              ";
                        // line 79
                        $context["isFirstRendered"] = true;
                        // line 80
                        echo "            ";
                    }
                    // line 81
                    echo "          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "
          ";
                // line 84
                echo "          ";
                if ((twig_length_filter($this->env, ($context["regularActions"] ?? $this->getContext($context, "regularActions"))) > ($context["skippedActions"] ?? $this->getContext($context, "skippedActions")))) {
                    // line 85
                    echo "            <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\"
            >
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              ";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["regularActions"] ?? $this->getContext($context, "regularActions")), ($context["skippedActions"] ?? $this->getContext($context, "skippedActions"))));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        if ($this->getAttribute($context["action"], "isApplicable", [0 => ($context["record"] ?? $this->getContext($context, "record"))], "method")) {
                            // line 94
                            echo "                ";
                            echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["grid" =>                             // line 95
($context["grid"] ?? $this->getContext($context, "grid")), "column" =>                             // line 96
($context["column"] ?? $this->getContext($context, "column")), "attributes" => ["class" => "dropdown-item", "tooltip_name" => false], "record" =>                             // line 98
($context["record"] ?? $this->getContext($context, "record")), "action" =>                             // line 99
$context["action"]]);
                            // line 100
                            echo "
              ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "            </div>
          ";
                }
                // line 104
                echo "        </div>
      ";
            }
            // line 106
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 106,  269 => 104,  265 => 102,  254 => 100,  252 => 99,  251 => 98,  250 => 96,  249 => 95,  247 => 94,  236 => 93,  226 => 85,  223 => 84,  220 => 82,  206 => 81,  203 => 80,  201 => 79,  197 => 77,  195 => 76,  194 => 75,  193 => 73,  192 => 72,  190 => 71,  188 => 70,  185 => 69,  182 => 68,  179 => 67,  176 => 66,  158 => 65,  155 => 63,  153 => 62,  150 => 61,  148 => 60,  145 => 59,  141 => 57,  127 => 56,  123 => 54,  121 => 53,  120 => 52,  119 => 51,  118 => 50,  117 => 49,  116 => 48,  113 => 47,  111 => 46,  108 => 45,  106 => 44,  89 => 43,  86 => 42,  84 => 41,  80 => 39,  74 => 38,  71 => 37,  68 => 36,  65 => 35,  62 => 34,  59 => 33,  55 => 32,  52 => 31,  49 => 30,  46 => 29,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% set actions = column.options.actions %}

{% if actions is not empty %}
    {% set inlineActions = [] %}
    {% set regularActions = [] %}

    {% for action in actions %}
      {% if action.options['use_inline_display'] == true %}
          {% set inlineActions = inlineActions|merge([action]) %}
        {% else %}
          {% set regularActions = regularActions|merge([action]) %}
      {% endif %}
    {% endfor %}

    <div class=\"btn-group-action text-right\">
      {% if inlineActions is not empty %}
        <div class=\"btn-group d-flex justify-content-between text-right\">
          {% for inlineAction in inlineActions -%}
            {% if inlineAction.isApplicable(record) %}

              {% set class = 'dropdown-item inline-dropdown-item' %}

              {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~inlineAction.type~'.html.twig', {
                'grid': grid,
                'column': column,
                'attributes': {'class': class, 'tooltip_name': true},
                'record': record,
                'action': inlineAction
              }) }}
            {% endif %}
          {% endfor %}
        </div>
      {% endif %}

      {% if regularActions is not empty %}
        <div class=\"btn-group\">
          {% set skippedActions, isFirstRendered = 0, false %}

          {# Render first item that is not in dropwdown #}
          {% for action in regularActions  %}
            {% if not isFirstRendered %}
              {% set skippedActions = skippedActions + 1 %}
            {% endif %}

            {% if action.isApplicable(record) and not isFirstRendered %}
              {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~action.type~'.html.twig', {
                'grid': grid,
                'column': column,
                'attributes': {'class': 'dropdown-item', 'tooltip_name': true},
                'record': record,
                'action': action
              }) }}

              {% set isFirstRendered = true %}
            {% endif %}
          {% endfor %}

          {# Render remaining items in dropdown #}
          {% if regularActions|length > skippedActions %}
            <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\"
            >
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              {% for action in regularActions|slice(skippedActions) if action.isApplicable(record) %}
                {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~action.type~'.html.twig', {
                  'grid': grid,
                  'column': column,
                  'attributes': {'class': 'dropdown-item', 'tooltip_name': false},
                  'record': record,
                  'action': action
                }) }}
              {% endfor %}
            </div>
          {% endif %}
        </div>
      {% endif %}
    </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/action.html.twig");
    }
}
