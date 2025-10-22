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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig */
class __TwigTemplate_7d489f2be9639e9a7391d9871a8bae986c3cb1245a560b794dbfad1adbe08b77 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'layouts_configuration' => [$this, 'block_layouts_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('layouts_configuration', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layouts_configuration($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layouts_configuration"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layouts_configuration"));

        // line 27
        echo "  <div class=\"col-12 layout-configuration\">
    <div class=\"inner-content\">
      <div class=\"float-left\">
        <div class=\"d-inline-block layout-logo\">
          <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/pages/themes/icon_layouts.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure your page layouts", [], "Admin.Design.Feature"), "html", null, true);
        echo "\">
        </div>
        <div class=\"d-inline-block\">
          <span class=\"title\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure your page layouts", [], "Admin.Design.Feature"), "html", null, true);
        echo "</span>
          <p class=\"mb-0 description\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Each page can use a different layout, choose it among the layouts bundled in your theme.", [], "Admin.Design.Feature"), "html", null, true);
        echo "</p>
        </div>
      </div>
      <div class=\"float-right\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_customize_layouts");
        echo "\"
          class=\"btn btn-tertiary choose-layouts-button\"
        >
          ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose layouts", [], "Admin.Design.Feature"), "html", null, true);
        echo "
        </a>

        ";
        // line 45
        if (($context["isDevModeOn"] ?? $this->getContext($context, "isDevModeOn"))) {
            // line 46
            echo "          <button class=\"btn btn-tertiary-outline js-reset-theme-layouts-btn\"
            type=\"button\"
            data-submit-url=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_reset_layouts", ["themeName" => $this->getAttribute(($context["currentlyUsedTheme"] ?? $this->getContext($context, "currentlyUsedTheme")), "name", [])]), "html", null, true);
            echo "\"
            data-csrf-token=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reset-theme-layouts"), "html", null, true);
            echo "\"
          >
            <i class=\"material-icons\">settings_backup_restore</i>
            ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset to defaults", [], "Admin.Design.Feature"), "html", null, true);
            echo "
          </button>
        ";
        }
        // line 55
        echo "      </div>
      <div class=\"clearfix\"></div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 55,  111 => 52,  105 => 49,  101 => 48,  97 => 46,  95 => 45,  89 => 42,  83 => 39,  76 => 35,  72 => 34,  64 => 31,  58 => 27,  40 => 26,  37 => 25,);
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

{% block layouts_configuration %}
  <div class=\"col-12 layout-configuration\">
    <div class=\"inner-content\">
      <div class=\"float-left\">
        <div class=\"d-inline-block layout-logo\">
          <img src=\"{{ asset('themes/new-theme/public/pages/themes/icon_layouts.png') }}\" alt=\"{{ 'Configure your page layouts'|trans({}, 'Admin.Design.Feature') }}\">
        </div>
        <div class=\"d-inline-block\">
          <span class=\"title\">{{ 'Configure your page layouts'|trans({}, 'Admin.Design.Feature') }}</span>
          <p class=\"mb-0 description\">{{ 'Each page can use a different layout, choose it among the layouts bundled in your theme.'|trans({}, 'Admin.Design.Feature') }}</p>
        </div>
      </div>
      <div class=\"float-right\">
        <a href=\"{{ path('admin_theme_customize_layouts') }}\"
          class=\"btn btn-tertiary choose-layouts-button\"
        >
          {{ 'Choose layouts'|trans({}, 'Admin.Design.Feature') }}
        </a>

        {% if isDevModeOn %}
          <button class=\"btn btn-tertiary-outline js-reset-theme-layouts-btn\"
            type=\"button\"
            data-submit-url=\"{{ path('admin_themes_reset_layouts', {'themeName': currentlyUsedTheme.name}) }}\"
            data-csrf-token=\"{{ csrf_token('reset-theme-layouts') }}\"
          >
            <i class=\"material-icons\">settings_backup_restore</i>
            {{ 'Reset to defaults'|trans({}, 'Admin.Design.Feature') }}
          </button>
        {% endif %}
      </div>
      <div class=\"clearfix\"></div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig");
    }
}
