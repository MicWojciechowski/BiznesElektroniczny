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

/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_72979555ad598fc51ee035e62b2db17911147463fcd042485a4a469968cfa621 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "actions", []), "grid", [])) > 0)) {
            // line 26
            echo "  ";
            $context["gridActionsButtonId"] = ($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "id", []) . "-grid-actions-button");
            // line 27
            echo "  ";
            $context["gridActionsDropdownMenuId"] = ($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "id", []) . "-grid-actions-dropdown-menu");
            // line 28
            echo "
  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["gridActionsButtonId"] ?? $this->getContext($context, "gridActionsButtonId")), "html", null, true);
            echo "\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
            echo "\"
    >
      <span class=\"sr-only\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
            echo "</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["gridActionsButtonId"] ?? $this->getContext($context, "gridActionsButtonId")), "html", null, true);
            echo "\"
         id=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["gridActionsDropdownMenuId"] ?? $this->getContext($context, "gridActionsDropdownMenuId")), "html", null, true);
            echo "\"
    >
      ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "actions", []), "grid", []));
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
                // line 45
                echo "        ";
                echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Grid/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["action" => $context["action"], "grid" => ($context["grid"] ?? $this->getContext($context, "grid"))]);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </div>

    ";
            // line 49
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 49, "290469252")->display(twig_array_merge($context, ["id" => ($this->getAttribute(            // line 50
($context["grid"] ?? $this->getContext($context, "grid")), "id", []) . "_grid_common_show_query_modal"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg btn-sql-submit"]]]));
            // line 74
            echo "  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 74,  116 => 50,  115 => 49,  111 => 47,  94 => 45,  77 => 44,  72 => 42,  68 => 41,  61 => 37,  56 => 35,  49 => 31,  44 => 28,  41 => 27,  38 => 26,  36 => 25,);
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
{% if grid.actions.grid|length > 0 %}
  {% set gridActionsButtonId = grid.id ~ '-grid-actions-button' %}
  {% set gridActionsDropdownMenuId = grid.id ~ '-grid-actions-dropdown-menu' %}

  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"{{ gridActionsButtonId }}\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ 'Settings'|trans({}, 'Admin.Global') }}\"
    >
      <span class=\"sr-only\">{{ 'Settings'|trans({}, 'Admin.Global') }}</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"{{ gridActionsButtonId }}\"
         id=\"{{ gridActionsDropdownMenuId }}\"
    >
      {% for action in grid.actions.grid %}
        {{ include('@PrestaShop/Admin/Common/Grid/Actions/Grid/'~action.type~'.html.twig', {'action': action, 'grid': grid}) }}
      {% endfor %}
    </div>

    {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
      'id': grid.id ~ '_grid_common_show_query_modal',
      'title': \"SQL query\"|trans({}, 'Admin.Global'),
      'closable': true,
      'actions': [{
        'type': 'button',
        'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
        'value': 'sql_manager',
        'class': 'btn btn-primary btn-lg btn-sql-submit',
      }],
    } %}
      {% block content %}
          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"{{ path('admin_sql_requests_create') }}\"
                  id=\"{{ grid.id ~ '_common_show_query_modal_form' }}\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      {% endblock %}
    {% endembed %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/grid_actions.html.twig");
    }
}


/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_72979555ad598fc51ee035e62b2db17911147463fcd042485a4a469968cfa621___290469252 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 49
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 49);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_sql_requests_create");
        echo "\"
                  id=\"";
        // line 64
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "id", []) . "_common_show_query_modal_form"), "html", null, true);
        echo "\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 64,  284 => 63,  280 => 61,  271 => 60,  249 => 49,  118 => 74,  116 => 50,  115 => 49,  111 => 47,  94 => 45,  77 => 44,  72 => 42,  68 => 41,  61 => 37,  56 => 35,  49 => 31,  44 => 28,  41 => 27,  38 => 26,  36 => 25,);
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
{% if grid.actions.grid|length > 0 %}
  {% set gridActionsButtonId = grid.id ~ '-grid-actions-button' %}
  {% set gridActionsDropdownMenuId = grid.id ~ '-grid-actions-dropdown-menu' %}

  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"{{ gridActionsButtonId }}\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ 'Settings'|trans({}, 'Admin.Global') }}\"
    >
      <span class=\"sr-only\">{{ 'Settings'|trans({}, 'Admin.Global') }}</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"{{ gridActionsButtonId }}\"
         id=\"{{ gridActionsDropdownMenuId }}\"
    >
      {% for action in grid.actions.grid %}
        {{ include('@PrestaShop/Admin/Common/Grid/Actions/Grid/'~action.type~'.html.twig', {'action': action, 'grid': grid}) }}
      {% endfor %}
    </div>

    {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
      'id': grid.id ~ '_grid_common_show_query_modal',
      'title': \"SQL query\"|trans({}, 'Admin.Global'),
      'closable': true,
      'actions': [{
        'type': 'button',
        'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
        'value': 'sql_manager',
        'class': 'btn btn-primary btn-lg btn-sql-submit',
      }],
    } %}
      {% block content %}
          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"{{ path('admin_sql_requests_create') }}\"
                  id=\"{{ grid.id ~ '_common_show_query_modal_form' }}\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      {% endblock %}
    {% endembed %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/grid_actions.html.twig");
    }
}
