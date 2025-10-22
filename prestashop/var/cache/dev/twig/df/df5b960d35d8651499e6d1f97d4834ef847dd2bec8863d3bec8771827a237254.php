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

/* @PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig */
class __TwigTemplate_2c9ab1331ab8ae5a0265dd83a6361c06f4b21ba6ae368d653766df811584e4ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 29
        echo "  ";
        ob_start();
        // line 30
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
  ";
        // line 34
        ob_start();
        // line 35
        echo "    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        ";
        // line 41
        $context["commandsCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "executedCommands", []));
        // line 42
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        if ((($context["commandsCount"] ?? $this->getContext($context, "commandsCount")) > 0)) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\">
          ";
        // line 43
        echo twig_escape_filter($this->env, ($context["commandsCount"] ?? $this->getContext($context, "commandsCount")), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        ";
        // line 48
        $context["queriesCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "executedQueries", []));
        // line 49
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        if ((($context["queriesCount"] ?? $this->getContext($context, "queriesCount")) > 0)) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\">
          ";
        // line 50
        echo twig_escape_filter($this->env, ($context["queriesCount"] ?? $this->getContext($context, "queriesCount")), "html", null, true);
        echo "
        </span>
      </div>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
  ";
        // line 56
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 60
        echo "  <span class=\"label\">
    <span class=\"icon\">";
        // line 61
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
    <strong>Commands / Queries</strong>
  </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 67
        echo "  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        ";
        // line 79
        if ( !twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "executedCommands", []))) {
            // line 80
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "executedCommands", []));
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 81
                echo "            <tr>
              <td class=\"text-small\">";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "command", []), "html", null, true);
                echo "</td>
              <td class=\"text-small\">";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "command_handler", []), "html", null, true);
                echo "</td>
              <td class=\"text-small\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["command"], "trace", []), "file", []), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["command"], "trace", []), "line", []), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        ";
        } else {
            // line 88
            echo "          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        ";
        }
        // line 92
        echo "      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      ";
        // line 106
        if ( !twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "executedQueries", []))) {
            // line 107
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "executedQueries", []));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 108
                echo "          <tr>
            <td class=\"text-small\">";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "query", []), "html", null, true);
                echo "</td>
            <td class=\"text-small\">";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "query_handler", []), "html", null, true);
                echo "</td>
            <td class=\"text-small\">";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "trace", []), "file", []), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "trace", []), "line", []), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "      ";
        } else {
            // line 115
            echo "        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      ";
        }
        // line 119
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 119,  273 => 115,  270 => 114,  259 => 111,  255 => 110,  251 => 109,  248 => 108,  243 => 107,  241 => 106,  225 => 92,  219 => 88,  216 => 87,  205 => 84,  201 => 83,  197 => 82,  194 => 81,  189 => 80,  187 => 79,  173 => 67,  164 => 66,  150 => 61,  147 => 60,  138 => 59,  126 => 56,  123 => 55,  115 => 50,  106 => 49,  104 => 48,  96 => 43,  87 => 42,  85 => 41,  77 => 35,  75 => 34,  72 => 33,  65 => 30,  62 => 29,  53 => 28,  31 => 26,);
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

{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
  {% set icon %}
    {{ include('@WebProfiler/Icon/request.svg') }}
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  {% endset %}

  {% set text %}
    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        {% set commandsCount = collector.executedCommands|length %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{% if commandsCount > 0 %}green{% else %}red{% endif %}\">
          {{ commandsCount }}
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        {% set queriesCount = collector.executedQueries|length %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{% if queriesCount > 0 %}green{% else %}red{% endif %}\">
          {{ queriesCount }}
        </span>
      </div>
    </div>
  {% endset %}

  {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
  <span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/request.svg') }}</span>
    <strong>Commands / Queries</strong>
  </span>
{% endblock %}

{% block panel %}
  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        {% if collector.executedCommands is not empty %}
          {% for command in collector.executedCommands %}
            <tr>
              <td class=\"text-small\">{{ command.command }}</td>
              <td class=\"text-small\">{{ command.command_handler }}</td>
              <td class=\"text-small\">{{ command.trace.file }}:{{ command.trace.line }}</td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        {% endif %}
      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      {% if collector.executedQueries is not empty %}
        {% for query in collector.executedQueries %}
          <tr>
            <td class=\"text-small\">{{ query.query }}</td>
            <td class=\"text-small\">{{ query.query_handler }}</td>
            <td class=\"text-small\">{{ query.trace.file }}:{{ query.trace.line }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      {% endif %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/commands_and_queries.html.twig");
    }
}
