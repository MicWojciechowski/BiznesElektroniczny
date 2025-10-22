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

/* @PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig */
class __TwigTemplate_b77a34a27611fe16527240caba4847ce3a5b1f4fab253e4739444945cbcea9b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig"));

        // line 25
        echo "
<tr class=\"empty_row\">
  <td colspan=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "columns", [])), "html", null, true);
        echo "\" ";
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "attributes", []), "is_empty_state", [])) {
            echo "class=\"border-0\"";
        }
        echo ">
    ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "attributes", []), "is_empty_state", [])) {
            // line 29
            echo "      ";
            $this->loadTemplate([0 => (("@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/" . $this->getAttribute(            // line 30
($context["grid"] ?? $this->getContext($context, "grid")), "id", [])) . ".html.twig"), 1 => "@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/_default.html.twig"], "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", 29)->display(twig_array_merge($context, ["grid" =>             // line 32
($context["grid"] ?? $this->getContext($context, "grid"))]));
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/_default.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", 35)->display(twig_array_merge($context, ["grid" => ($context["grid"] ?? $this->getContext($context, "grid"))]));
            // line 36
            echo "    ";
        }
        // line 37
        echo "  </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 37,  61 => 36,  58 => 35,  55 => 34,  53 => 32,  52 => 30,  50 => 29,  48 => 28,  40 => 27,  36 => 25,);
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

<tr class=\"empty_row\">
  <td colspan=\"{{ grid.columns|length }}\" {% if grid.attributes.is_empty_state %}class=\"border-0\"{% endif %}>
    {% if grid.attributes.is_empty_state %}
      {% include [
        '@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/'~grid.id~'.html.twig',
        '@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/_default.html.twig'
        ] with {'grid': grid}
      %}
    {% else %}
      {% include '@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/_default.html.twig' with {'grid': grid} %}
    {% endif %}
  </td>
</tr>
", "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/Table/empty_row.html.twig");
    }
}
