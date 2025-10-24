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

/* @PrestaShop/Admin/Improve/Design/Cms/index.html.twig */
class __TwigTemplate_4a814a3f6700650df375498d38c4f9e2633c44ccd12a7d7a4e804612819f16c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'cms_page_category_breadcrumb' => [$this, 'block_cms_page_category_breadcrumb'],
            'cms_category_grid' => [$this, 'block_cms_category_grid'],
            'cms_grid' => [$this, 'block_cms_grid'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig"));

        // line 28
        $context["layoutHeaderToolbarBtn"] = ["add_cms_category" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_category_create", ["id_cms_category" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 30
($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "id_cms_category"], "method")]), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new page category", [], "Admin.Design.Help"), "icon" => "add_circle_outline"], "add_cms_page" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_create", ["id_cms_category" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 35
($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "id_cms_category"], "method")]), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new page", [], "Admin.Design.Help"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "
  <div class=\"row\">
    <div class=\"col-sm\">
      ";
        // line 46
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 46)->display($context);
        // line 47
        echo "    </div>
  </div>

  ";
        // line 50
        $this->displayBlock('cms_page_category_breadcrumb', $context, $blocks);
        // line 53
        echo "
  ";
        // line 54
        $this->displayBlock('cms_category_grid', $context, $blocks);
        // line 68
        echo "
  ";
        // line 69
        $this->displayBlock('cms_grid', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_cms_page_category_breadcrumb($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_page_category_breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_page_category_breadcrumb"));

        // line 51
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 51)->display($context);
        // line 52
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_cms_category_grid($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_category_grid"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_category_grid"));

        // line 55
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 57
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 57, "253493157")->display(twig_array_merge($context, ["grid" => ($context["cmsCategoryGrid"] ?? $this->getContext($context, "cmsCategoryGrid"))]));
        // line 65
        echo "      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_cms_grid($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_grid"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_grid"));

        // line 70
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 72
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 72)->display(twig_array_merge($context, ["grid" => ($context["cmsGrid"] ?? $this->getContext($context, "cmsGrid"))]));
        // line 73
        echo "      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/cms_page.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 81,  191 => 80,  186 => 79,  177 => 78,  165 => 73,  163 => 72,  159 => 70,  150 => 69,  138 => 65,  136 => 57,  132 => 55,  123 => 54,  113 => 52,  110 => 51,  101 => 50,  91 => 69,  88 => 68,  86 => 54,  83 => 53,  81 => 50,  76 => 47,  74 => 46,  69 => 43,  60 => 42,  49 => 26,  47 => 35,  46 => 30,  45 => 28,  33 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% set layoutHeaderToolbarBtn = {
  add_cms_category: {
    href: path('admin_cms_pages_category_create', {'id_cms_category' : app.request.query.get('id_cms_category')}),
    desc: 'Add new page category'|trans({}, 'Admin.Design.Help'),
    icon: 'add_circle_outline',
  },
  add_cms_page: {
    href: path('admin_cms_pages_create', {'id_cms_category' : app.request.query.get('id_cms_category')}),
    desc: 'Add new page'|trans({}, 'Admin.Design.Help'),
    icon: 'add_circle_outline',
  }
}
%}

{% block content %}

  <div class=\"row\">
    <div class=\"col-sm\">
      {% include '@PrestaShop/Admin/Improve/Design/Cms/Blocks/showcase_card.html.twig' %}
    </div>
  </div>

  {% block cms_page_category_breadcrumb %}
    {% include '@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig' %}
  {% endblock %}

  {% block cms_category_grid %}
    <div class=\"row\">
      <div class=\"col\">
        {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': cmsCategoryGrid} %}

            {% block grid_panel_footer %}
              {% if app.request.query.get('id_cms_category') and app.request.query.get('id_cms_category') != cmsPageView.root_category_id %}
                {% include '@PrestaShop/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig' %}
              {% endif %}
            {% endblock %}
        {% endembed %}
      </div>
    </div>
  {% endblock %}

  {% block cms_grid %}
    <div class=\"row\">
      <div class=\"col\">
        {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': cmsGrid} %}
      </div>
    </div>
  {% endblock %}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/new-theme/public/cms_page.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Cms/index.html.twig */
class __TwigTemplate_4a814a3f6700650df375498d38c4f9e2633c44ccd12a7d7a4e804612819f16c6___253493157 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 57
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 57);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_grid_panel_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_panel_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_panel_footer"));

        // line 60
        echo "              ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "id_cms_category"], "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "id_cms_category"], "method") != $this->getAttribute(($context["cmsPageView"] ?? $this->getContext($context, "cmsPageView")), "root_category_id", [])))) {
            // line 61
            echo "                ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 61)->display($context);
            // line 62
            echo "              ";
        }
        // line 63
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 63,  370 => 62,  367 => 61,  364 => 60,  355 => 59,  333 => 57,  195 => 81,  191 => 80,  186 => 79,  177 => 78,  165 => 73,  163 => 72,  159 => 70,  150 => 69,  138 => 65,  136 => 57,  132 => 55,  123 => 54,  113 => 52,  110 => 51,  101 => 50,  91 => 69,  88 => 68,  86 => 54,  83 => 53,  81 => 50,  76 => 47,  74 => 46,  69 => 43,  60 => 42,  49 => 26,  47 => 35,  46 => 30,  45 => 28,  33 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% set layoutHeaderToolbarBtn = {
  add_cms_category: {
    href: path('admin_cms_pages_category_create', {'id_cms_category' : app.request.query.get('id_cms_category')}),
    desc: 'Add new page category'|trans({}, 'Admin.Design.Help'),
    icon: 'add_circle_outline',
  },
  add_cms_page: {
    href: path('admin_cms_pages_create', {'id_cms_category' : app.request.query.get('id_cms_category')}),
    desc: 'Add new page'|trans({}, 'Admin.Design.Help'),
    icon: 'add_circle_outline',
  }
}
%}

{% block content %}

  <div class=\"row\">
    <div class=\"col-sm\">
      {% include '@PrestaShop/Admin/Improve/Design/Cms/Blocks/showcase_card.html.twig' %}
    </div>
  </div>

  {% block cms_page_category_breadcrumb %}
    {% include '@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig' %}
  {% endblock %}

  {% block cms_category_grid %}
    <div class=\"row\">
      <div class=\"col\">
        {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': cmsCategoryGrid} %}

            {% block grid_panel_footer %}
              {% if app.request.query.get('id_cms_category') and app.request.query.get('id_cms_category') != cmsPageView.root_category_id %}
                {% include '@PrestaShop/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig' %}
              {% endif %}
            {% endblock %}
        {% endembed %}
      </div>
    </div>
  {% endblock %}

  {% block cms_grid %}
    <div class=\"row\">
      <div class=\"col\">
        {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': cmsGrid} %}
      </div>
    </div>
  {% endblock %}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/new-theme/public/cms_page.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/index.html.twig");
    }
}
