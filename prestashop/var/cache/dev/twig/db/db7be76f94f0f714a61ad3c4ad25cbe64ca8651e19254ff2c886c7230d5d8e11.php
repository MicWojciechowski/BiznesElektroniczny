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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_5479668be4a880ea90f99807cc3651fa91f627f18615c7c39b95791988768471 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        // line 25
        echo "
<div class=\"card-group\">
  ";
        // line 27
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 27, "1006303623")->display($context);
        // line 49
        echo "
  ";
        // line 50
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 50, "1178801598")->display($context);
        // line 123
        echo "
  ";
        // line 124
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 124, "1161661856")->display($context);
        // line 154
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 154,  50 => 124,  47 => 123,  45 => 50,  42 => 49,  40 => 27,  36 => 25,);
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

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.mail_logo, {}, {'help': headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : '' }) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.invoice_logo, {}, {'help': headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : '' }) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.favicon) }}
          <small class=\"form-text\">
            {{ 'Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!'|trans({'[1]': '<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Design.Help')|raw }}
          </small>
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_5479668be4a880ea90f99807cc3651fa91f627f18615c7c39b95791988768471___1006303623 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 27
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        // line 28
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 28)->unwrap();
        // line 27
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 27);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_card_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        // line 30
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "header_logo_is_restricted_to_shop", []), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_card_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        // line 33
        echo "      <p class=\"logo-card-description\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.", ["%height%" => "40px", "%width%" => "200px"], "Admin.Design.Help"), "html", null, true);
        echo "
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["headerLogoPath"] ?? $this->getContext($context, "headerLogoPath")), "html", null, true);
        echo "\"
          alt=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
          title=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
        >
      </div>

      ";
        // line 46
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "header_logo", []));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 46,  340 => 42,  336 => 41,  332 => 40,  323 => 34,  320 => 33,  311 => 32,  296 => 30,  287 => 29,  276 => 27,  274 => 28,  262 => 27,  52 => 154,  50 => 124,  47 => 123,  45 => 50,  42 => 49,  40 => 27,  36 => 25,);
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

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.mail_logo, {}, {'help': headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : '' }) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.invoice_logo, {}, {'help': headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : '' }) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.favicon) }}
          <small class=\"form-text\">
            {{ 'Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!'|trans({'[1]': '<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Design.Help')|raw }}
          </small>
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_5479668be4a880ea90f99807cc3651fa91f627f18615c7c39b95791988768471___1178801598 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 50
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        // line 51
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 51)->unwrap();
        // line 50
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 50);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_card_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        // line 53
        echo "      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "mail_logo_is_restricted_to_shop", []), 'widget');
        echo "
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "
          </a>
        </li>
        <li class=\"nav-item\">
          ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "invoice_logo_is_restricted_to_shop", []), 'widget');
        echo "
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "
          </a>
        </li>
      </ul>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_card_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        // line 85
        echo "      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear on email headers. If undefined, the header logo will be used.", [], "Admin.Design.Help"), "html", null, true);
        echo "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["mailLogoPath"] ?? $this->getContext($context, "mailLogoPath")), "html", null, true);
        echo "\"
              alt=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
              title=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
            >
          </div>
          <div class=\"input-in-tab\">
            ";
        // line 100
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "mail_logo", []), [], ["help" => (((($context["headerLogoPath"] ?? $this->getContext($context, "headerLogoPath")) == ($context["mailLogoPath"] ?? $this->getContext($context, "mailLogoPath")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning: if no email logo is available, the main logo will be used instead.", [], "Admin.Design.Notification")) : (""))]);
        echo "
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear on invoice headers.", [], "Admin.Design.Help"), "html", null, true);
        echo "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["invoiceLogoPath"] ?? $this->getContext($context, "invoiceLogoPath")), "html", null, true);
        echo "\"
              alt=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
              title=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
            >
          </div>
          <div class=\"input-in-tab\">
            ";
        // line 117
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "invoice_logo", []), [], ["help" => (((($context["headerLogoPath"] ?? $this->getContext($context, "headerLogoPath")) == ($context["invoiceLogoPath"] ?? $this->getContext($context, "invoiceLogoPath")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning: if no invoice logo is available, the main logo will be used instead.", [], "Admin.Design.Help")) : (""))]);
        echo "
          </div>
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 117,  707 => 113,  703 => 112,  699 => 111,  690 => 105,  682 => 100,  675 => 96,  671 => 95,  667 => 94,  658 => 88,  653 => 85,  644 => 84,  629 => 79,  616 => 69,  609 => 65,  596 => 55,  592 => 53,  583 => 52,  572 => 50,  570 => 51,  558 => 50,  347 => 46,  340 => 42,  336 => 41,  332 => 40,  323 => 34,  320 => 33,  311 => 32,  296 => 30,  287 => 29,  276 => 27,  274 => 28,  262 => 27,  52 => 154,  50 => 124,  47 => 123,  45 => 50,  42 => 49,  40 => 27,  36 => 25,);
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

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.mail_logo, {}, {'help': headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : '' }) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.invoice_logo, {}, {'help': headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : '' }) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.favicon) }}
          <small class=\"form-text\">
            {{ 'Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!'|trans({'[1]': '<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Design.Help')|raw }}
          </small>
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_5479668be4a880ea90f99807cc3651fa91f627f18615c7c39b95791988768471___1161661856 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 124
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        // line 125
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 125)->unwrap();
        // line 124
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 124);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_card_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        // line 127
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "favicon_is_restricted_to_shop", []), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favicon", [], "Admin.Design.Feature"), "html", null, true);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_card_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        // line 130
        echo "      <p class=\"logo-card-description\">
        ";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It is the small icon that appears in browser tabs, next to the title.", [], "Admin.Design.Help"), "html", null, true);
        echo "
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"";
        // line 137
        echo twig_escape_filter($this->env, ($context["faviconPath"] ?? $this->getContext($context, "faviconPath")), "html", null, true);
        echo "\"
            alt=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favicon image", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
            title=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favicon image", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          ";
        // line 145
        echo $context["ps"]->getform_widget_with_error($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "favicon", []));
        echo "
          <small class=\"form-text\">
            ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!", ["[1]" => "<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">", "[/1]" => "</a>"], "Admin.Design.Help");
        echo "
          </small>
        </div>
      </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1020 => 147,  1015 => 145,  1006 => 139,  1002 => 138,  998 => 137,  989 => 131,  986 => 130,  977 => 129,  962 => 127,  953 => 126,  942 => 124,  940 => 125,  928 => 124,  714 => 117,  707 => 113,  703 => 112,  699 => 111,  690 => 105,  682 => 100,  675 => 96,  671 => 95,  667 => 94,  658 => 88,  653 => 85,  644 => 84,  629 => 79,  616 => 69,  609 => 65,  596 => 55,  592 => 53,  583 => 52,  572 => 50,  570 => 51,  558 => 50,  347 => 46,  340 => 42,  336 => 41,  332 => 40,  323 => 34,  320 => 33,  311 => 32,  296 => 30,  287 => 29,  276 => 27,  274 => 28,  262 => 27,  52 => 154,  50 => 124,  47 => 123,  45 => 50,  42 => 49,  40 => 27,  36 => 25,);
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

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.mail_logo, {}, {'help': headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : '' }) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.invoice_logo, {}, {'help': headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : '' }) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.favicon) }}
          <small class=\"form-text\">
            {{ 'Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!'|trans({'[1]': '<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Design.Help')|raw }}
          </small>
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}
