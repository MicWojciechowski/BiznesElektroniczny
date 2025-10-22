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

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig */
class __TwigTemplate_3b696179bb6bfa6a8e66207aafd3db650cf2d1e7f1e93c57d57f392efdc96db1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !twig_test_empty($this->getAttribute(($context["cmsPageView"] ?? $this->getContext($context, "cmsPageView")), "breadcrumb_tree", []))) {
            // line 27
            echo "  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-block\">
          <nav>
            <ol class=\"breadcrumb\">
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["cmsPageView"] ?? $this->getContext($context, "cmsPageView")), "breadcrumb_tree", []));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 34
                echo "                <li class=\"breadcrumb-item\">
                  ";
                // line 35
                $context["cmsPageRouteParameters"] = [];
                // line 36
                echo "
                  ";
                // line 37
                if (($this->getAttribute($this->getAttribute($context["category"], "cmsPageCategoryId", []), "value", []) != $this->getAttribute(($context["cmsPageView"] ?? $this->getContext($context, "cmsPageView")), "root_category_id", []))) {
                    // line 38
                    echo "                    ";
                    $context["cmsPageRouteParameters"] = ["id_cms_category" => $this->getAttribute($this->getAttribute($context["category"], "cmsPageCategoryId", []), "value", [])];
                    // line 39
                    echo "                  ";
                }
                // line 40
                echo "
                  <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_index", ($context["cmsPageRouteParameters"] ?? $this->getContext($context, "cmsPageRouteParameters"))), "html", null, true);
                echo "\">
                    ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 53
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 53,  86 => 46,  76 => 42,  72 => 41,  69 => 40,  66 => 39,  63 => 38,  61 => 37,  58 => 36,  56 => 35,  53 => 34,  49 => 33,  41 => 27,  39 => 26,  36 => 25,);
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

{% if cmsPageView.breadcrumb_tree is not empty %}
  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-block\">
          <nav>
            <ol class=\"breadcrumb\">
              {% for category in cmsPageView.breadcrumb_tree %}
                <li class=\"breadcrumb-item\">
                  {% set cmsPageRouteParameters = {} %}

                  {% if category.cmsPageCategoryId.value != cmsPageView.root_category_id %}
                    {% set cmsPageRouteParameters = {'id_cms_category' : category.cmsPageCategoryId.value} %}
                  {% endif %}

                  <a href=\"{{ path('admin_cms_pages_index', cmsPageRouteParameters) }}\">
                    {{ category.name }}
                  </a>
                </li>
              {% endfor %}
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
{% endif %}

", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig");
    }
}
