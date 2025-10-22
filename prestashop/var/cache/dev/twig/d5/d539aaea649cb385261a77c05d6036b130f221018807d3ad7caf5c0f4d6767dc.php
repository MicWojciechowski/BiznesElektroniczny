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

/* @PrestaShop/Admin/Common/Grid/Blocks/table.html.twig */
class __TwigTemplate_9d9ed94a312f3aea43c9cde370b7562714f40ee7d4c9aeebe6dc098a79b011a7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_table_head' => [$this, 'block_grid_table_head'],
            'grid_table_body' => [$this, 'block_grid_table_body'],
            'grid_table_footer' => [$this, 'block_grid_table_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig"));

        // line 25
        echo "
";
        // line 26
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminGridTableBefore", ["grid" =>         // line 27
($context["grid"] ?? $this->getContext($context, "grid")), "legacy_controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_legacy_controller"], "method"), "controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 29
($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_controller"], "method")]);
        // line 31
        echo "

";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "filter_form", []), 'form_start', ["attr" => ["id" => ($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "id", []) . "_filter_form"), "class" => "table-responsive"]]);
        echo "

<table class=\"grid-table js-grid-table table ";
        // line 35
        if ($this->env->getExtension('PrestaShopBundle\Twig\Extension\GridExtension')->isOrderingColumn(($context["grid"] ?? $this->getContext($context, "grid")))) {
            echo "grid-ordering-column";
        }
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "attributes", []), "is_empty_state", [])) {
            echo "border-0";
        }
        echo "\"
       id=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "id", []), "html", null, true);
        echo "_grid_table\"
       data-query=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "data", []), "query", []), "html", null, true);
        echo "\"
>
  <thead class=\"thead-default\">
  ";
        // line 40
        $this->displayBlock('grid_table_head', $context, $blocks);
        // line 46
        echo "  </thead>
  <tbody>
  ";
        // line 48
        $this->displayBlock('grid_table_body', $context, $blocks);
        // line 63
        echo "  </tbody>
  ";
        // line 64
        $this->displayBlock('grid_table_footer', $context, $blocks);
        // line 65
        echo "</table>

";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "filter_form", []), 'form_end');
        echo "

";
        // line 69
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminGridTableAfter", ["grid" =>         // line 70
($context["grid"] ?? $this->getContext($context, "grid")), "legacy_controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 71
($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_legacy_controller"], "method"), "controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 72
($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_controller"], "method")]);
        // line 74
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_grid_table_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_head"));

        // line 41
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig", ["grid" => ($context["grid"] ?? $this->getContext($context, "grid"))]);
        echo "
    ";
        // line 42
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "actions", []), "bulk", [])) > 0) || (twig_length_filter($this->env, $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "filter_form", [])) > 1))) {
            // line 43
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", ["grid" => ($context["grid"] ?? $this->getContext($context, "grid"))]);
            echo "
    ";
        }
        // line 45
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_grid_table_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_body"));

        // line 49
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "data", []), "records", []))) {
            // line 50
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "data", []), "records", []));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 51
                echo "        <tr>
          ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "columns", []));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 53
                    echo "            <td class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "type", []), "html", null, true);
                    echo "-type column-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "id", []), "html", null, true);
                    if (($this->getAttribute($this->getAttribute($context["column"], "options", [], "any", false, true), "clickable", [], "any", true, true) && $this->getAttribute($this->getAttribute($context["column"], "options", []), "clickable", []))) {
                        echo " clickable";
                    }
                    echo "\">
              ";
                    // line 54
                    echo $this->env->getExtension('PrestaShopBundle\Twig\Extension\GridExtension')->renderColumnContent($context["record"], $context["column"], ($context["grid"] ?? $this->getContext($context, "grid")));
                    echo "
            </td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", ["grid" => ($context["grid"] ?? $this->getContext($context, "grid"))]);
            echo "
    ";
        }
        // line 62
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_grid_table_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 64,  205 => 62,  199 => 60,  196 => 59,  189 => 57,  180 => 54,  170 => 53,  166 => 52,  163 => 51,  158 => 50,  155 => 49,  146 => 48,  136 => 45,  130 => 43,  128 => 42,  123 => 41,  114 => 40,  103 => 74,  101 => 72,  100 => 71,  99 => 70,  98 => 69,  93 => 67,  89 => 65,  87 => 64,  84 => 63,  82 => 48,  78 => 46,  76 => 40,  70 => 37,  66 => 36,  56 => 35,  51 => 33,  47 => 31,  45 => 29,  44 => 28,  43 => 27,  42 => 26,  39 => 25,);
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

{{ renderhook('displayAdminGridTableBefore', {
    'grid': grid,
    'legacy_controller': app.request.attributes.get('_legacy_controller'),
    'controller': app.request.attributes.get('_controller')
  })
}}

{{ form_start(grid.filter_form, {'attr': {'id': grid.id ~ '_filter_form', 'class': 'table-responsive'}}) }}

<table class=\"grid-table js-grid-table table {% if is_ordering_column(grid) %}grid-ordering-column{% endif %} {% if grid.attributes.is_empty_state %}border-0{% endif %}\"
       id=\"{{ grid.id }}_grid_table\"
       data-query=\"{{ grid.data.query }}\"
>
  <thead class=\"thead-default\">
  {% block grid_table_head %}
    {{ include('@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig', {'grid': grid}) }}
    {% if grid.actions.bulk|length > 0 or grid.filter_form|length > 1 %}
      {{ include('@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig', {'grid': grid}) }}
    {% endif %}
  {% endblock %}
  </thead>
  <tbody>
  {% block grid_table_body %}
    {% if grid.data.records is not empty %}
      {% for record in grid.data.records %}
        <tr>
          {% for column in grid.columns %}
            <td class=\"{{ column.type }}-type column-{{ column.id }}{% if column.options.clickable is defined and column.options.clickable %} clickable{% endif %}\">
              {{ column_content(record, column, grid) }}
            </td>
          {% endfor %}
        </tr>
      {% endfor %}
    {% else %}
      {{ include('@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig', {'grid': grid}) }}
    {% endif %}
  {% endblock %}
  </tbody>
  {% block grid_table_footer %}{% endblock %}
</table>

{{ form_end(grid.filter_form) }}

{{ renderhook('displayAdminGridTableAfter', {
      'grid': grid,
      'legacy_controller': app.request.attributes.get('_legacy_controller'),
      'controller': app.request.attributes.get('_controller')
    })
}}
", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/table.html.twig");
    }
}
