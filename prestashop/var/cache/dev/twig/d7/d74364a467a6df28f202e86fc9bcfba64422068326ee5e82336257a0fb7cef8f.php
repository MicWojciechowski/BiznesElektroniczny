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

/* @PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig */
class __TwigTemplate_b12cf84d2fd2e842bb21b3f54257a1f1c9429f418f63229080d6425bf5b35b09 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_pagination' => [$this, 'block_grid_pagination'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('grid_pagination', $context, $blocks);
        // line 48
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_grid_pagination($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_pagination"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_pagination"));

        // line 27
        echo "  ";
        if ((($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "data", []), "records_total", []) > 10) || $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "pagination", []), "offset", []))) {
            // line 28
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
            // line 30
            $context["route_params"] = [];
            // line 31
            echo "
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route_params"], "method"));
            foreach ($context['_seq'] as $context["param_name"] => $context["param_value"]) {
                // line 33
                echo "          ";
                $context["route_params"] = twig_array_merge(($context["route_params"] ?? $this->getContext($context, "route_params")), [$context["param_name"] => $context["param_value"]]);
                // line 34
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['param_name'], $context['param_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
        ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", ["limit" => $this->getAttribute($this->getAttribute(            // line 37
($context["grid"] ?? $this->getContext($context, "grid")), "pagination", []), "limit", []), "offset" => $this->getAttribute($this->getAttribute(            // line 38
($context["grid"] ?? $this->getContext($context, "grid")), "pagination", []), "offset", []), "total" => $this->getAttribute($this->getAttribute(            // line 39
($context["grid"] ?? $this->getContext($context, "grid")), "data", []), "records_total", []), "prefix" => $this->getAttribute(            // line 40
($context["grid"] ?? $this->getContext($context, "grid")), "form_prefix", []), "caller_route" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 41
($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"), "caller_parameters" =>             // line 42
($context["route_params"] ?? $this->getContext($context, "route_params"))]));
            // line 43
            echo "
      </div>
    </div>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 43,  96 => 42,  95 => 41,  94 => 40,  93 => 39,  92 => 38,  91 => 37,  90 => 36,  87 => 35,  81 => 34,  78 => 33,  74 => 32,  71 => 31,  69 => 30,  65 => 28,  62 => 27,  53 => 26,  42 => 48,  40 => 26,  37 => 25,);
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

{% block grid_pagination %}
  {% if grid.data.records_total > 10 or grid.pagination.offset %}
    <div class=\"row\">
      <div class=\"col-md-12\">
        {% set route_params = {} %}

        {% for param_name, param_value in app.request.attributes.get('_route_params') %}
          {% set route_params = route_params|merge({ (param_name) : (param_value) }) %}
        {% endfor %}

        {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination', {
          'limit': grid.pagination.limit,
          'offset': grid.pagination.offset,
          'total': grid.data.records_total,
          'prefix': grid.form_prefix,
          'caller_route': app.request.attributes.get('_route'),
          'caller_parameters': route_params
        })) }}
      </div>
    </div>
  {% endif %}
{% endblock %}

", "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/pagination.html.twig");
    }
}
