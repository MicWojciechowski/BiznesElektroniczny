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

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig */
class __TwigTemplate_7a95ade12d21db052167ca40e0cdc8c592db9fde5267d32430c1b5926f413226 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig"));

        // line 25
        echo "
<button id=\"";
        // line 26
        echo twig_escape_filter($this->env, sprintf("%s_grid_bulk_action_%s", $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "id", []), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "id", [])), "html", null, true);
        echo "\"
        class=\"dropdown-item js-bulk-action-submit-btn\"
        type=\"button\"
        data-form-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "submit_route", []), $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "route_params", [])), "html", null, true);
        echo "\"
        data-form-method=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "submit_method", []), "html", null, true);
        echo "\"
        data-confirm-message=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "confirm_message", []), "html", null, true);
        echo "\"
        ";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "modal_options", [])) {
            // line 33
            echo "        data-close-button-label=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", false, true), "close_button_label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", false, true), "close_button_label", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"))), "html", null, true);
            echo "\"
        data-confirm-title=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "modal_options", []), "options", []), "title", []), "html", null, true);
            echo "\"
        data-confirm-button-class=\"";
            // line 35
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", false, true), "confirm_button_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", false, true), "confirm_button_class", []), "btn-primary")) : ("btn-primary")), "html", null, true);
            echo "\"
        data-confirm-button-label=\"";
            // line 36
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", false, true), "confirm_button_label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", false, true), "confirm_button_label", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm", [], "Admin.Actions"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm", [], "Admin.Actions"))), "html", null, true);
            echo "\"
        ";
        }
        // line 38
        echo ">
  ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", []), "html", null, true);
        echo "
</button>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 39,  77 => 38,  72 => 36,  68 => 35,  64 => 34,  59 => 33,  57 => 32,  53 => 31,  49 => 30,  45 => 29,  39 => 26,  36 => 25,);
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

<button id=\"{{ '%s_grid_bulk_action_%s'|format(grid.id, action.id) }}\"
        class=\"dropdown-item js-bulk-action-submit-btn\"
        type=\"button\"
        data-form-url=\"{{ path(action.options.submit_route, action.options.route_params) }}\"
        data-form-method=\"{{ action.options.submit_method }}\"
        data-confirm-message=\"{{ action.options.confirm_message }}\"
        {% if action.options.modal_options %}
        data-close-button-label=\"{{ action.options.modal_options.options.close_button_label|default('Close'|trans({}, 'Admin.Actions')) }}\"
        data-confirm-title=\"{{ action.options.modal_options.options.title }}\"
        data-confirm-button-class=\"{{ action.options.modal_options.options.confirm_button_class|default('btn-primary') }}\"
        data-confirm-button-label=\"{{ action.options.modal_options.options.confirm_button_label|default('Confirm'|trans({}, 'Admin.Actions')) }}\"
        {% endif %}
>
  {{ action.name }}
</button>
", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Bulk/submit.html.twig");
    }
}
