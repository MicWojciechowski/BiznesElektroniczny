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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig */
class __TwigTemplate_d09b3c67c09eb7e982af8777e3cc7ae83b61cc3397ee5b77f0ede31c1c4bf21a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["updateRouteParams"] = $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayPluck(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "record_route_params", []));
        // line 27
        echo "
<div class=\"position-drag-handle js-";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "id", []), "html", null, true);
        echo "-position\"
     data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "id_field", []), [], "array"), "html", null, true);
        echo "\"
     data-position=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "position_field", []), [], "array"), "html", null, true);
        echo "\"
     data-update-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "update_route", []), ($context["updateRouteParams"] ?? $this->getContext($context, "updateRouteParams"))), "html", null, true);
        echo "\"
     data-update-method=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "update_method", []), "html", null, true);
        echo "\"
     data-pagination-offset=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "pagination", []), "offset", []), "html", null, true);
        echo "\"
>
    <i class=\"material-icons\">drag_indicator</i>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 33,  60 => 32,  56 => 31,  52 => 30,  48 => 29,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% set updateRouteParams = record|array_pluck(column.options.record_route_params) %}

<div class=\"position-drag-handle js-{{ grid.id }}-position\"
     data-id=\"{{ record[column.options.id_field] }}\"
     data-position=\"{{ record[column.options.position_field] }}\"
     data-update-url=\"{{ url(column.options.update_route, updateRouteParams) }}\"
     data-update-method=\"{{ column.options.update_method }}\"
     data-pagination-offset=\"{{ grid.pagination.offset }}\"
>
    <i class=\"material-icons\">drag_indicator</i>
</div>
", "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/position_handle.html.twig");
    }
}
