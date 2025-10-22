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

/* @PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig */
class __TwigTemplate_9cc7f1877dbf4665533b894b63f76fed6725567cfcecf43e4b3a339ea19b8bbd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig"));

        // line 25
        echo "
<tr class=\"column-filters";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "attributes", []), "is_empty_state", [])) {
            echo " d-none";
        }
        echo "\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "columns", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 28
            echo "    <td>
      ";
            // line 29
            if (($this->getAttribute($context["loop"], "first", []) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "actions", []), "bulk", [])) > 0))) {
                // line 30
                echo "        ";
                echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions_select_all.html.twig", ["grid" => ($context["grid"] ?? $this->getContext($context, "grid"))]);
                echo "
      ";
            }
            // line 32
            echo "
      ";
            // line 33
            if ((twig_length_filter($this->env, $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "filter_form", [])) > 1)) {
                // line 34
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "column_filters", [], "any", false, true), $this->getAttribute($context["column"], "id", []), [], "array", true, true)) {
                    // line 35
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "column_filters", []), $this->getAttribute($context["column"], "id", []), [], "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["filter_name"]) {
                        // line 36
                        echo "            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "filter_form", []), $context["filter_name"], [], "array"), 'widget');
                        echo "
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "      ";
            }
            // line 40
            echo "    </td>
  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  101 => 40,  98 => 39,  95 => 38,  86 => 36,  81 => 35,  78 => 34,  76 => 33,  73 => 32,  67 => 30,  65 => 29,  62 => 28,  45 => 27,  39 => 26,  36 => 25,);
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

<tr class=\"column-filters{% if grid.attributes.is_empty_state %} d-none{% endif %}\">
  {% for column in grid.columns %}
    <td>
      {% if loop.first and grid.actions.bulk|length > 0 %}
        {{ include('@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions_select_all.html.twig', {'grid': grid}) }}
      {% endif %}

      {% if grid.filter_form|length > 1 %}
        {% if grid.column_filters[column.id] is defined %}
          {% for filter_name in grid.column_filters[column.id] %}
            {{ form_widget(grid.filter_form[filter_name]) }}
          {% endfor %}
        {% endif %}
      {% endif %}
    </td>
  {% endfor %}
</tr>
", "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/Table/filters_row.html.twig");
    }
}
