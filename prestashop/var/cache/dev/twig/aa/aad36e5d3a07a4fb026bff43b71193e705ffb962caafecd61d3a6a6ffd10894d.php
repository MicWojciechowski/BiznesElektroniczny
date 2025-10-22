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

/* @PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig */
class __TwigTemplate_b9c1b7c0af331741ca900c83685d9148cafecd7c37b7efe2e7c4567f5d343f81 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'translatable_choice_widget' => [$this, 'block_translatable_choice_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig"));

        // line 25
        $this->displayBlock('translatable_choice_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_translatable_choice_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_choice_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_choice_widget"));

        // line 26
        echo "  ";
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", 26)->unwrap();
        // line 27
        echo "
  ";
        // line 28
        $context["class"] = (($this->getAttribute(($context["extraVars"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "class", []), "")) : (""));
        // line 29
        echo "  ";
        $context["rowAttributes"] = (($this->getAttribute(($context["extraVars"] ?? null), "row_attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "row_attr", []), [])) : ([]));
        // line 30
        echo "  ";
        $context["attr"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "attr", []);
        // line 31
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-select translatable_choice"))]);
        // line 32
        echo "  <div class=\"form-group row type-choice ";
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowAttributes"] ?? $this->getContext($context, "rowAttributes")));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
  ";
        // line 33
        $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter(($context["extraVars"] ?? $this->getContext($context, "extraVars")), [])) : ([]));
        // line 34
        echo "
  ";
        // line 36
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "choices", []));
        foreach ($context['_seq'] as $context["language"] => $context["choices"]) {
            // line 37
            echo "    <div class=\"col-sm-6\" ";
            if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "default_locale", [], "any", true, true) &&  !($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "default_locale", []) === $context["language"]))) {
                echo "style=\"display: none\"";
            }
            echo ">
      <select class=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", []), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "id", []) . "_") . $context["language"]), "html", null, true);
            echo "\" data-language=\"";
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\">
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["choices"]);
            foreach ($context['_seq'] as $context["choiceValue"] => $context["choiceLabel"]) {
                // line 40
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["choiceValue"], "html", null, true);
                echo "\"
            ";
                // line 41
                if (((array_key_exists("value", $context) && $this->getAttribute(($context["value"] ?? null), $context["language"], [], "array", true, true)) && ($context["choiceValue"] === $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), $context["language"], [], "array")))) {
                    echo " selected=\"selected\"";
                }
                // line 42
                echo "             ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "row_attr", [], "any", false, true), $context["language"], [], "array", false, true), $context["choiceValue"], [], "array", true, true) && twig_test_iterable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "row_attr", []), $context["language"], [], "array"), $context["choiceValue"], [], "array")))) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "row_attr", []), $context["language"], [], "array"), $context["choiceValue"], [], "array"));
                    foreach ($context['_seq'] as $context["optionKey"] => $context["optionAttr"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["optionKey"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["optionAttr"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['optionKey'], $context['optionAttr'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo ">";
                echo twig_escape_filter($this->env, ((( !array_key_exists("choice_translation_domain", $context) || (($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false))) ? ($context["choiceLabel"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["choiceLabel"], [], ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['choiceValue'], $context['choiceLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      </select>
      <input type=\"hidden\" id=\"";
            // line 45
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "id", []) . "_") . $context["language"]) . "_value"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "full_name", []) . "[") . $context["language"]) . "]"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, $context["choices"]), "html", null, true);
            echo "\" />
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language'], $context['choices'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
  ";
        // line 50
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "locales", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "locales", [])))) {
            // line 51
            echo "    <div class=\"col-sm-3\">
      <select name=\"";
            // line 52
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "id", []) . "_language"), "html", null, true);
            echo "\" class=\"custom-select translatable_choice_language\">
        ";
            // line 53
            if (twig_test_iterable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "locales", []))) {
                // line 54
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "locales", []));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 55
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "id_lang", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["language"], "iso_code", []) . " - ") . $this->getAttribute($context["language"], "name", [])), "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        ";
            }
            // line 58
            echo "      </select>
    </div>
  ";
        }
        // line 61
        echo "
  ";
        // line 63
        echo "  ";
        if (array_key_exists("button", $context)) {
            // line 64
            echo "    <div class=\"col-sm-3\">
      <button type=\"button\" ";
            // line 65
            if ($this->getAttribute(($context["button"] ?? null), "id", [], "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "id", []), "html", null, true);
                echo "\"";
            }
            echo " class=\"btn ";
            if ($this->getAttribute(($context["button"] ?? null), "class", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "class", []), "html", null, true);
            } else {
                echo "btn-default";
            }
            echo "\" ";
            if ($this->getAttribute(($context["button"] ?? null), "action", [], "any", true, true)) {
                echo " onclick=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "action", []), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 66
            if ($this->getAttribute(($context["button"] ?? null), "icon", [], "any", true, true)) {
                echo "<i class=\"material-icons\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "icon", []), "html", null, true);
                echo "</i>";
            }
            // line 67
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "label", []), "html", null, true);
            echo "
      </button>
    </div>
  ";
        }
        // line 71
        echo "  </div>";
        // line 73
        $this->displayBlock("form_help", $context, $blocks);
        // line 74
        $this->displayBlock("form_hint", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 74,  252 => 73,  250 => 71,  242 => 67,  236 => 66,  216 => 65,  213 => 64,  210 => 63,  207 => 61,  202 => 58,  199 => 57,  188 => 55,  183 => 54,  181 => 53,  177 => 52,  174 => 51,  171 => 50,  168 => 48,  155 => 45,  152 => 44,  128 => 42,  124 => 41,  119 => 40,  115 => 39,  107 => 38,  100 => 37,  95 => 36,  92 => 34,  90 => 33,  72 => 32,  69 => 31,  66 => 30,  63 => 29,  61 => 28,  58 => 27,  55 => 26,  37 => 25,);
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
{% block translatable_choice_widget %}
  {% import '@PrestaShop/Admin/macros.html.twig' as ps %}

  {% set class = extraVars.class|default('') %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  {% set attr = form.vars.attr %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select translatable_choice')|trim}) %}
  <div class=\"form-group row type-choice {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
  {% set extraVars = extraVars|default({}) %}

  {# options selector #}
  {% for language, choices in form.vars.choices %}
    <div class=\"col-sm-6\" {% if form.vars.default_locale is defined and form.vars.default_locale is not same as(language) %}style=\"display: none\"{% endif %}>
      <select class=\"{{ attr.class }}\" id=\"{{ form.vars.id ~ '_' ~ language }}\" data-language=\"{{ language }}\">
        {% for choiceValue, choiceLabel in choices %}
          <option value=\"{{ choiceValue }}\"
            {% if value is defined and value[language] is defined and choiceValue is same as(value[language]) %} selected=\"selected\"{% endif %}
             {% if form.vars.row_attr[language][choiceValue] is defined and form.vars.row_attr[language][choiceValue] is iterable %}{% for optionKey, optionAttr in form.vars.row_attr[language][choiceValue] %} {{ optionKey }}=\"{{ optionAttr }}\"{% endfor %}{% endif %}>{{ choice_translation_domain is not defined or choice_translation_domain is same as(false) ? choiceLabel : choiceLabel|trans({}, choice_translation_domain) }}</option>
        {% endfor %}
      </select>
      <input type=\"hidden\" id=\"{{ form.vars.id ~ '_' ~ language ~ '_value' }}\" name=\"{{ form.vars.full_name ~ '[' ~ language ~ ']' }}\" value=\"{{ choices|first }}\" />
    </div>
  {% endfor %}

  {# languages selector #}
  {% if form.vars.locales is defined and form.vars.locales is not empty %}
    <div class=\"col-sm-3\">
      <select name=\"{{ form.vars.id ~'_language' }}\" class=\"custom-select translatable_choice_language\">
        {% if form.vars.locales is iterable %}
          {% for language in form.vars.locales %}
            <option value=\"{{ language.id_lang }}\">{{ language.iso_code ~ ' - ' ~ language.name }}</option>
          {% endfor %}
        {% endif %}
      </select>
    </div>
  {% endif %}

  {# extra button#}
  {% if button is defined %}
    <div class=\"col-sm-3\">
      <button type=\"button\" {% if button.id is defined %}id=\"{{ button.id }}\"{% endif %} class=\"btn {% if button.class is defined %}{{ button.class }}{% else %}btn-default{% endif %}\" {% if button.action is defined %} onclick=\"{{ button.action }}\"{% endif %}>
        {% if button.icon is defined %}<i class=\"material-icons\">{{ button.icon }}</i>{% endif %}
        {{ button.label }}
      </button>
    </div>
  {% endif %}
  </div>

  {{- block('form_help') -}}
  {{- block('form_hint') -}}
{% endblock translatable_choice_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/translatable_choice.html.twig");
    }
}
