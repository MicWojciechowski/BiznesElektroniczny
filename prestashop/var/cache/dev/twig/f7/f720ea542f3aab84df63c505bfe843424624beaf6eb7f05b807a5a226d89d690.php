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

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_d8a2535075c6de1ac4b0c1c665e7c2fa210738a0b402f0c686450935a3e53fb7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 50
        echo "
";
        // line 58
        echo "
";
        // line 71
        echo "
";
        // line 89
        echo "
";
        // line 96
        echo "
";
        // line 126
        echo "
";
        // line 241
        echo "
 ";
        // line 288
        echo "
";
        // line 307
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 26
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? $this->getContext($context, "name")), 'label', ["label_attr" => ["tooltip" => ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter(($context["placement"] ?? $this->getContext($context, "placement")), "top")) : ("top"))]]);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "check"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "check"));

            // line 30
            echo "  ";
            (((array_key_exists("variable", $context) && (twig_length_filter($this->env, ($context["variable"] ?? $this->getContext($context, "variable"))) > 0))) ? (print (twig_escape_filter($this->env, ($context["variable"] ?? $this->getContext($context, "variable")), "html", null, true))) : (print (false)));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter(($context["position"] ?? $this->getContext($context, "position")), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "</i>
  </span>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getinfotip($__text__ = null, $__use_raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "use_raw" => $__use_raw__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "infotip"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "infotip"));

            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            if (($context["use_raw"] ?? $this->getContext($context, "use_raw"))) {
                // line 43
                echo "      ";
                echo ($context["text"] ?? $this->getContext($context, "text"));
                echo "
    ";
            } else {
                // line 45
                echo "      ";
                echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
                echo "
    ";
            }
            // line 47
            echo "  </p>
</div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warningtip"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 52
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 54
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getlabel_with_help($__label__ = null, $__help__ = null, $__class__ = "", $__for__ = "", $__isRequired__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "help" => $__help__,
            "class" => $__class__,
            "for" => $__for__,
            "isRequired" => $__isRequired__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_with_help"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 60
            echo "<label";
            if ( !twig_test_empty(($context["for"] ?? $this->getContext($context, "for")))) {
                echo " for=\"";
                echo twig_escape_filter($this->env, ($context["for"] ?? $this->getContext($context, "for")), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-control-label ";
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
            echo "\">
  ";
            // line 61
            if (($context["isRequired"] ?? $this->getContext($context, "isRequired"))) {
                // line 62
                echo "    <span class=\"text-danger\">*</span>
  ";
            }
            // line 64
            echo "
  ";
            // line 65
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
  ";
            // line 66
            echo twig_include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => ($context["help"] ?? $this->getContext($context, "help"))]);
            echo "
</label>

<p class=\"sr-only\">";
            // line 69
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "</p>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 73
    public function getsortable_column_header($__title__ = null, $__sortColumnName__ = null, $__orderBy__ = null, $__sortOrder__ = null, $__prefix__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "sortColumnName" => $__sortColumnName__,
            "orderBy" => $__orderBy__,
            "sortOrder" => $__sortOrder__,
            "prefix" => $__prefix__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            // line 74
            echo "  ";
            list($context["sortOrder"], $context["orderBy"], $context["prefix"]) =             [((array_key_exists("sortOrder", $context)) ? (_twig_default_filter(($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")))) : ("")), ((array_key_exists("prefix", $context)) ? (_twig_default_filter(($context["prefix"] ?? $this->getContext($context, "prefix")), "")) : (""))];
            // line 75
            echo "  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 77
            echo twig_escape_filter($this->env, ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")), "html", null, true);
            echo "\"
      data-sort-prefix=\"";
            // line 78
            echo twig_escape_filter($this->env, ($context["prefix"] ?? $this->getContext($context, "prefix")), "html", null, true);
            echo "\"
      ";
            // line 79
            if ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")))) {
                // line 80
                echo "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 81
                echo (((($context["sortOrder"] ?? $this->getContext($context, "sortOrder")) == "desc")) ? ("desc") : ("asc"));
                echo "\"
      ";
            }
            // line 83
            echo "    >
      <span role=\"columnheader\">";
            // line 84
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", [], "Admin.Actions"), "html", null, true);
            echo "\"></span>
    </div>
  </th>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 91
    public function getimport_file_sample($__label__ = null, $__filename__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "filename" => $__filename__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "import_file_sample"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "import_file_sample"));

            // line 92
            echo "    <a id=\"download-sample-";
            echo twig_escape_filter($this->env, ($context["filename"] ?? $this->getContext($context, "filename")), "html", null, true);
            echo "-file-link\" class=\"list-group-item list-group-item-action\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_sample_download", ["sampleName" => ($context["filename"] ?? $this->getContext($context, "filename"))]), "html", null, true);
            echo "\">
        ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
    </a>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 106
    public function getform_widget_with_error($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_widget_with_error"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_widget_with_error"));

            // line 107
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 107)->unwrap();
            // line 108
            echo "
  ";
            // line 109
            $context["vars"] = ((array_key_exists("vars", $context)) ? (_twig_default_filter(($context["vars"] ?? $this->getContext($context, "vars")), [])) : ([]));
            // line 110
            echo "  ";
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter(($context["extraVars"] ?? $this->getContext($context, "extraVars")), [])) : ([]));
            // line 111
            echo "  ";
            $context["attr"] = (($this->getAttribute(($context["vars"] ?? null), "attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["vars"] ?? null), "attr", []), [])) : ([]));
            // line 112
            echo "  ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["class" => (($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", [])) : (""))]);
            // line 113
            echo "  ";
            $context["vars"] = twig_array_merge(($context["vars"] ?? $this->getContext($context, "vars")), ["attr" => ($context["attr"] ?? $this->getContext($context, "attr"))]);
            // line 114
            echo "
  ";
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            echo "

  ";
            // line 117
            if (($this->getAttribute(($context["extraVars"] ?? null), "help", [], "any", true, true) && $this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "help", []))) {
                // line 118
                echo "      <small class=\"form-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "help", []), "html", null, true);
                echo "</small>
    ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 119
($context["form"] ?? null), "vars", [], "any", false, true), "help", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "help", []))) {
                // line 120
                echo "      <small class=\"form-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "help", []), "html", null, true);
                echo "</small>
  ";
            }
            // line 122
            echo "
  ";
            // line 123
            echo $context["self"]->getform_error_with_popover(($context["form"] ?? $this->getContext($context, "form")));
            echo "

";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 136
    public function getform_error_with_popover($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_error_with_popover"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_error_with_popover"));

            // line 137
            echo "  ";
            $context["errors"] = [];
            // line 138
            echo "
  ";
            // line 139
            if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "valid", [], "any", true, true) &&  !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "valid", []))) {
                // line 140
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "errors", []));
                foreach ($context['_seq'] as $context["_key"] => $context["parentError"]) {
                    // line 141
                    echo "      ";
                    $context["errors"] = twig_array_merge(($context["errors"] ?? $this->getContext($context, "errors")), [0 => $this->getAttribute($context["parentError"], "message", [])]);
                    // line 142
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parentError'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "
    ";
                // line 145
                echo "  ";
            }
            // line 146
            echo "
  ";
            // line 147
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 148
                echo "    ";
                // line 149
                echo "    ";
                $context["errorPopover"] = null;
                // line 150
                echo "
    ";
                // line 151
                if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 1)) {
                    // line 152
                    echo "      ";
                    $context["popoverContainer"] = ("popover-error-container-" . $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "id", []));
                    // line 153
                    echo "      <div class=\"";
                    echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? $this->getContext($context, "popoverContainer")), "html", null, true);
                    echo "\"></div>


      ";
                    // line 156
                    if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "errors_by_locale", [], "any", true, true)) {
                        // line 157
                        echo "          ";
                        $context["popoverErrors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "errors_by_locale", []);
                        // line 158
                        echo "
          ";
                        // line 160
                        echo "          ";
                        $context["translatableErrors"] = [];
                        // line 161
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["popoverErrors"] ?? $this->getContext($context, "popoverErrors")));
                        foreach ($context['_seq'] as $context["_key"] => $context["translatableError"]) {
                            // line 162
                            echo "            ";
                            $context["translatableErrors"] = twig_array_merge(($context["translatableErrors"] ?? $this->getContext($context, "translatableErrors")), [0 => $this->getAttribute($context["translatableError"], "error_message", [])]);
                            // line 163
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translatableError'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 164
                        echo "
          ";
                        // line 166
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 167
                            echo "            ";
                            if (!twig_in_filter($context["error"], ($context["translatableErrors"] ?? $this->getContext($context, "translatableErrors")))) {
                                // line 168
                                echo "              ";
                                $context["popoverErrors"] = twig_array_merge(($context["popoverErrors"] ?? $this->getContext($context, "popoverErrors")), [0 => $context["error"]]);
                                // line 169
                                echo "            ";
                            }
                            // line 170
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 171
                        echo "
        ";
                    } else {
                        // line 173
                        echo "          ";
                        $context["popoverErrors"] = ($context["errors"] ?? $this->getContext($context, "errors"));
                        // line 174
                        echo "      ";
                    }
                    // line 175
                    echo "
      ";
                    // line 176
                    $context["errorMessages"] = [];
                    // line 177
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["popoverErrors"] ?? $this->getContext($context, "popoverErrors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 178
                        echo "        ";
                        $context["errorMessage"] = $context["popoverError"];
                        // line 179
                        echo "
        ";
                        // line 180
                        if (($this->getAttribute($context["popoverError"], "error_message", [], "any", true, true) && $this->getAttribute($context["popoverError"], "locale_name", [], "any", true, true))) {
                            // line 181
                            echo "          ";
                            $context["errorMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%error_message% - Language: %language_name%", ["%error_message%" => $this->getAttribute($context["popoverError"], "error_message", []), "%language_name%" => $this->getAttribute($context["popoverError"], "locale_name", [])], "Admin.Notifications.Error");
                            // line 182
                            echo "        ";
                        }
                        // line 183
                        echo "
        ";
                        // line 184
                        $context["errorMessages"] = twig_array_merge(($context["errorMessages"] ?? $this->getContext($context, "errorMessages")), [0 => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage"))]);
                        // line 185
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popoverError'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 186
                    echo "
      ";
                    // line 187
                    ob_start();
                    // line 188
                    echo "        <div class=\"popover-error-list\">
          <ul>
            ";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errorMessages"] ?? $this->getContext($context, "errorMessages")));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 191
                        echo "              <li class=\"text-danger\">
                ";
                        // line 192
                        echo twig_escape_filter($this->env, $context["popoverError"], "html", null, true);
                        echo "
              </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popoverError'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "          </ul>
        </div>
      ";
                    $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 198
                    echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "id", []), "html", null, true);
                    echo "\">
        ";
                    // line 200
                    echo twig_escape_filter($this->env, ($context["popoverErrorContent"] ?? $this->getContext($context, "popoverErrorContent")), "html", null, true);
                    echo "
      </template>

      ";
                    // line 203
                    ob_start();
                    // line 204
                    echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                    // line 206
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "id", []), "html", null, true);
                    echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                    // line 210
                    echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? $this->getContext($context, "popoverContainer")), "html", null, true);
                    echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>";
                    // line 212
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("%count% errors", twig_length_filter($this->env, ($context["popoverErrors"] ?? $this->getContext($context, "popoverErrors"))), [], "Admin.Global"), "html", null, true);
                    echo "</u>
        </span>
      ";
                    $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 215
                    echo "
    ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 216
($context["form"] ?? null), "vars", [], "any", false, true), "error_by_locale", [], "any", true, true)) {
                    // line 217
                    echo "      ";
                    $context["errorByLocale"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%error_message% - Language: %language_name%", ["%error_message%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "error_by_locale", []), "error_message", []), "%language_name%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "error_by_locale", []), "locale_name", [])], "Admin.Notifications.Error");
                    // line 218
                    echo "      ";
                    $context["errors"] = [0 => ($context["errorByLocale"] ?? $this->getContext($context, "errorByLocale"))];
                    // line 219
                    echo "    ";
                }
                // line 220
                echo "
    <div class=\"invalid-feedback-container\">
      ";
                // line 222
                if ( !(null === ($context["errorPopover"] ?? $this->getContext($context, "errorPopover")))) {
                    // line 223
                    echo "        <div class=\"text-danger\">
          ";
                    // line 224
                    echo twig_escape_filter($this->env, ($context["errorPopover"] ?? $this->getContext($context, "errorPopover")), "html", null, true);
                    echo "
        </div>
      ";
                } else {
                    // line 227
                    echo "        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          ";
                    // line 231
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 232
                        echo "            <div class=\"text-danger\">
              ";
                        // line 233
                        echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                        echo "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "        </div>
      ";
                }
                // line 238
                echo "    </div>
  ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 248
    public function getform_group_row($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_group_row"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_group_row"));

            // line 249
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 249)->unwrap();
            // line 250
            echo "
  ";
            // line 251
            $context["class"] = (($this->getAttribute(($context["extraVars"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "class", []), "")) : (""));
            // line 252
            echo "  ";
            $context["inputType"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "block_prefixes", [], "any", false, true), 1, [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "block_prefixes", [], "any", false, true), 1, []), "text")) : ("text"));
            // line 253
            echo "  ";
            $context["rowAttributes"] = (($this->getAttribute(($context["extraVars"] ?? null), "row_attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "row_attr", []), [])) : ([]));
            // line 254
            echo "  <div class=\"form-group row type-";
            echo twig_escape_filter($this->env, ($context["inputType"] ?? $this->getContext($context, "inputType")), "html", null, true);
            echo " ";
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
            // line 255
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter(($context["extraVars"] ?? $this->getContext($context, "extraVars")), [])) : ([]));
            // line 256
            echo "
    ";
            // line 258
            echo "    ";
            $context["labelOnTop"] = false;
            // line 259
            echo "
    ";
            // line 260
            if ($this->getAttribute(($context["extraVars"] ?? null), "label_on_top", [], "any", true, true)) {
                // line 261
                echo "      ";
                $context["labelOnTop"] = $this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "label_on_top", []);
                // line 262
                echo "    ";
            }
            // line 263
            echo "
    ";
            // line 264
            if ($this->getAttribute(($context["extraVars"] ?? null), "label", [], "any", true, true)) {
                // line 265
                echo "      ";
                $context["isRequired"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", []), false)) : (false));
                // line 266
                echo "
      ";
                // line 267
                if ($this->getAttribute(($context["extraVars"] ?? null), "required", [], "any", true, true)) {
                    // line 268
                    echo "        ";
                    $context["isRequired"] = $this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "required", []);
                    // line 269
                    echo "      ";
                }
                // line 270
                echo "
      <label for=\"";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "id", []), "html", null, true);
                echo "\" class=\"form-control-label ";
                echo ((($context["labelOnTop"] ?? $this->getContext($context, "labelOnTop"))) ? ("label-on-top col-12") : (""));
                echo "\">
        ";
                // line 272
                if (($context["isRequired"] ?? $this->getContext($context, "isRequired"))) {
                    // line 273
                    echo "          <span class=\"text-danger\">*</span>
        ";
                }
                // line 275
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "label", []), "html", null, true);
                echo "

        ";
                // line 277
                if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "label_attr", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "label_attr", [], "any", false, true), "popover", [], "array", true, true))) {
                    // line 278
                    echo "          ";
                    echo twig_include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "label_attr", []), "popover", [], "array")]);
                    echo "
        ";
                }
                // line 280
                echo "      </label>
    ";
            }
            // line 282
            echo "
    <div class=\"";
            // line 283
            echo ((($context["labelOnTop"] ?? $this->getContext($context, "labelOnTop"))) ? ("col-12") : ("col-sm"));
            echo "\">
      ";
            // line 284
            echo $context["self"]->getform_widget_with_error(($context["form"] ?? $this->getContext($context, "form")), ($context["vars"] ?? $this->getContext($context, "vars")), ($context["extraVars"] ?? $this->getContext($context, "extraVars")));
            echo "
    </div>
  </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 289
    public function getmultistore_switch($__form__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "multistore_switch"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "multistore_switch"));

            // line 290
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 290)->unwrap();
            // line 291
            echo "  ";
            if ($this->getAttribute(($context["form"] ?? null), "shop_restriction_switch", [], "any", true, true)) {
                // line 292
                echo "    ";
                ob_start();
                // line 293
                echo "      <strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                echo "</strong> <br>
      ";
                // line 294
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.", ["%yes_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", [], "Admin.Global"), "%no_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", [], "Admin.Global")], "Admin.Design.Help"), "html", null, true);
                echo " <br>
      ";
                // line 295
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.", [], "Admin.Design.Help"), "html", null, true);
                echo "
    ";
                $context["defaultLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 297
                echo "
    ";
                // line 298
                if ( !$this->getAttribute(($context["extraVars"] ?? null), "help", [], "any", true, true)) {
                    // line 299
                    echo "      ";
                    $context["extraVars"] = twig_array_merge(($context["extraVars"] ?? $this->getContext($context, "extraVars")), ["help" => ($context["defaultLabel"] ?? $this->getContext($context, "defaultLabel"))]);
                    // line 300
                    echo "    ";
                }
                // line 301
                echo "
    ";
                // line 302
                $context["vars"] = ["attr" => ["class" => "js-multi-store-restriction-switch"]];
                // line 303
                echo "
    ";
                // line 304
                echo $context["self"]->getform_group_row($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shop_restriction_switch", []), ($context["vars"] ?? $this->getContext($context, "vars")), ($context["extraVars"] ?? $this->getContext($context, "extraVars")));
                echo "
  ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 308
    public function getlanguage_dependant_select($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "language_dependant_select"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "language_dependant_select"));

            // line 309
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 309)->unwrap();
            // line 310
            echo "
  ";
            // line 311
            $context["class"] = (($this->getAttribute(($context["extraVars"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "class", []), "")) : (""));
            // line 312
            echo "  ";
            $context["inputType"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "block_prefixes", [], "any", false, true), 1, [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "block_prefixes", [], "any", false, true), 1, []), "text")) : ("text"));
            // line 313
            echo "  ";
            $context["rowAttributes"] = (($this->getAttribute(($context["extraVars"] ?? null), "row_attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "row_attr", []), [])) : ([]));
            // line 314
            echo "  ";
            $context["attr"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "attr", []);
            // line 315
            echo "  ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " language_dependant_select"))]);
            // line 316
            echo "  <div class=\"form-group row type-";
            echo twig_escape_filter($this->env, ($context["inputType"] ?? $this->getContext($context, "inputType")), "html", null, true);
            echo " ";
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
            // line 317
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter(($context["extraVars"] ?? $this->getContext($context, "extraVars")), [])) : ([]));
            // line 318
            echo "
  ";
            // line 320
            echo "  ";
            $context["labelOnTop"] = false;
            // line 321
            echo "
  ";
            // line 322
            if ($this->getAttribute(($context["extraVars"] ?? null), "label_on_top", [], "any", true, true)) {
                // line 323
                echo "    ";
                $context["labelOnTop"] = $this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "label_on_top", []);
                // line 324
                echo "  ";
            }
            // line 325
            echo "
  ";
            // line 326
            if ($this->getAttribute(($context["extraVars"] ?? null), "label", [], "any", true, true)) {
                // line 327
                echo "    ";
                $context["isRequired"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", []), false)) : (false));
                // line 328
                echo "
    ";
                // line 329
                if ($this->getAttribute(($context["extraVars"] ?? null), "required", [], "any", true, true)) {
                    // line 330
                    echo "      ";
                    $context["isRequired"] = $this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "required", []);
                    // line 331
                    echo "    ";
                }
                // line 332
                echo "
    <label for=\"";
                // line 333
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "id", []), "html", null, true);
                echo "\" class=\"form-control-label ";
                echo ((($context["labelOnTop"] ?? $this->getContext($context, "labelOnTop"))) ? ("label-on-top col-12") : (""));
                echo "\">
      ";
                // line 334
                if (($context["isRequired"] ?? $this->getContext($context, "isRequired"))) {
                    // line 335
                    echo "        <span class=\"text-danger\">*</span>
      ";
                }
                // line 337
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "label", []), "html", null, true);
                echo "
    </label>
  ";
            }
            // line 340
            echo "
  <div class=\"";
            // line 341
            echo "col-sm-5";
            echo "\">
    ";
            // line 342
            echo $context["self"]->getform_widget_with_error(($context["form"] ?? $this->getContext($context, "form")), ["attr" => ($context["attr"] ?? $this->getContext($context, "attr"))], ($context["extraVars"] ?? $this->getContext($context, "extraVars")));
            echo "
  </div>
  ";
            // line 344
            if (($this->getAttribute(($context["extraVars"] ?? null), "languages", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "languages", [])))) {
                // line 345
                echo "  <div class=\"";
                echo "col-sm-3";
                echo "\">
    <select name=\"";
                // line 346
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "id", []) . "_language"), "html", null, true);
                echo "\" class=\"custom-select language_dependant_select_language\">
    ";
                // line 347
                if (twig_test_iterable($this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "languages", []))) {
                    // line 348
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["extraVars"] ?? $this->getContext($context, "extraVars")), "languages", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 349
                        echo "        <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "id", []), "html", null, true);
                        echo "\">";
                        echo $this->getAttribute($context["language"], "value", []);
                        echo "</option>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 351
                    echo "    ";
                }
                // line 352
                echo "    </select>
  </div>
  ";
            }
            // line 355
            echo "  </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1338 => 355,  1333 => 352,  1330 => 351,  1319 => 349,  1314 => 348,  1312 => 347,  1308 => 346,  1303 => 345,  1301 => 344,  1296 => 342,  1292 => 341,  1289 => 340,  1282 => 337,  1278 => 335,  1276 => 334,  1270 => 333,  1267 => 332,  1264 => 331,  1261 => 330,  1259 => 329,  1256 => 328,  1253 => 327,  1251 => 326,  1248 => 325,  1245 => 324,  1242 => 323,  1240 => 322,  1237 => 321,  1234 => 320,  1231 => 318,  1229 => 317,  1209 => 316,  1206 => 315,  1203 => 314,  1200 => 313,  1197 => 312,  1195 => 311,  1192 => 310,  1189 => 309,  1169 => 308,  1145 => 304,  1142 => 303,  1140 => 302,  1137 => 301,  1134 => 300,  1131 => 299,  1129 => 298,  1126 => 297,  1121 => 295,  1117 => 294,  1112 => 293,  1109 => 292,  1106 => 291,  1103 => 290,  1084 => 289,  1059 => 284,  1055 => 283,  1052 => 282,  1048 => 280,  1042 => 278,  1040 => 277,  1034 => 275,  1030 => 273,  1028 => 272,  1022 => 271,  1019 => 270,  1016 => 269,  1013 => 268,  1011 => 267,  1008 => 266,  1005 => 265,  1003 => 264,  1000 => 263,  997 => 262,  994 => 261,  992 => 260,  989 => 259,  986 => 258,  983 => 256,  981 => 255,  961 => 254,  958 => 253,  955 => 252,  953 => 251,  950 => 250,  947 => 249,  927 => 248,  904 => 238,  900 => 236,  891 => 233,  888 => 232,  884 => 231,  878 => 227,  872 => 224,  869 => 223,  867 => 222,  863 => 220,  860 => 219,  857 => 218,  854 => 217,  852 => 216,  849 => 215,  843 => 212,  838 => 210,  831 => 206,  827 => 204,  825 => 203,  819 => 200,  815 => 199,  812 => 198,  807 => 195,  798 => 192,  795 => 191,  791 => 190,  787 => 188,  785 => 187,  782 => 186,  776 => 185,  774 => 184,  771 => 183,  768 => 182,  765 => 181,  763 => 180,  760 => 179,  757 => 178,  752 => 177,  750 => 176,  747 => 175,  744 => 174,  741 => 173,  737 => 171,  731 => 170,  728 => 169,  725 => 168,  722 => 167,  717 => 166,  714 => 164,  708 => 163,  705 => 162,  700 => 161,  697 => 160,  694 => 158,  691 => 157,  689 => 156,  682 => 153,  679 => 152,  677 => 151,  674 => 150,  671 => 149,  669 => 148,  667 => 147,  664 => 146,  661 => 145,  658 => 143,  652 => 142,  649 => 141,  644 => 140,  642 => 139,  639 => 138,  636 => 137,  618 => 136,  594 => 123,  591 => 122,  585 => 120,  583 => 119,  578 => 118,  576 => 117,  571 => 115,  568 => 114,  565 => 113,  562 => 112,  559 => 111,  556 => 110,  554 => 109,  551 => 108,  548 => 107,  528 => 106,  504 => 93,  497 => 92,  478 => 91,  453 => 85,  449 => 84,  446 => 83,  441 => 81,  438 => 80,  436 => 79,  432 => 78,  428 => 77,  424 => 75,  421 => 74,  399 => 73,  376 => 69,  370 => 66,  366 => 65,  363 => 64,  359 => 62,  357 => 61,  346 => 60,  324 => 59,  299 => 54,  295 => 52,  277 => 51,  254 => 47,  248 => 45,  242 => 43,  240 => 42,  236 => 40,  217 => 39,  193 => 35,  186 => 34,  166 => 33,  142 => 30,  124 => 29,  100 => 26,  80 => 25,  69 => 307,  66 => 288,  63 => 241,  60 => 126,  57 => 96,  54 => 89,  51 => 71,  48 => 58,  45 => 50,  42 => 38,  39 => 32,  36 => 28,);
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
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {'label_attr': {'tooltip': tooltip, 'tooltip_placement': placement|default('top')}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default('top') }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text, use_raw = false)%}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {%  if use_raw %}
      {{ text|raw}}
    {% else %}
      {{ text }}
    {% endif %}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text)%}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help, class = '', for = '', isRequired = false) %}
<label{% if for is not empty %} for=\"{{ for }}\"{% endif %} class=\"form-control-label {{ class }}\">
  {% if isRequired %}
    <span class=\"text-danger\">*</span>
  {% endif %}

  {{ label }}
  {{ include('@Common/HelpBox/helpbox.html.twig', {'content': help}) }}
</label>

<p class=\"sr-only\">{{ help }}</p>
{% endmacro %}

{# Table column headers with sorting indicators #}
{% macro sortable_column_header(title, sortColumnName, orderBy, sortOrder, prefix) %}
  {% set sortOrder, orderBy, prefix = sortOrder|default(''), orderBy|default, prefix|default('') %}
  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"{{ sortColumnName }}\"
      data-sort-prefix=\"{{ prefix }}\"
      {% if orderBy == sortColumnName %}
        data-sort-is-current=\"true\"
        data-sort-direction=\"{{ sortOrder == 'desc' ? 'desc' : 'asc' }}\"
      {% endif %}
    >
      <span role=\"columnheader\">{{ title }}</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"{{ 'Sort by'|trans({}, 'Admin.Actions') }}\"></span>
    </div>
  </th>
{% endmacro %}

{# Show link to import file sample #}
{% macro import_file_sample(label, filename) %}
    <a id=\"download-sample-{{ filename }}-file-link\" class=\"list-group-item list-group-item-action\" href=\"{{ path('admin_import_sample_download', {'sampleName': filename}) }}\">
        {{ label|trans({}, 'Admin.Advparameters.Feature') }}
    </a>
{% endmacro %}

{#
  Show form widget with errors rendered below it. It displays all nested errors for any form type.
  If form type has error_by_locale parameter set then the error is being displayed with the specific locale assigned to it.
  If form type has errors_by_locale parameter set then the errors are being assigned to the locales and are displayed
  in the popover template.
  If there are more then one error it also assigns all errors in the pop-up to appear.
  On page load, user sees only the errors count but then user hovers over the element the popover
  appears with the errors combined by language.
#}
{% macro form_widget_with_error(form, vars, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}

  {% set vars = vars|default({}) %}
  {% set extraVars = extraVars|default({}) %}
  {% set attr = vars.attr|default({}) %}
  {% set attr = attr|merge({'class': (attr.class is defined ? attr.class : '')} ) %}
  {% set vars = vars|merge({'attr': attr}) %}

  {{ form_widget(form, vars) }}

  {% if extraVars.help is defined and extraVars.help%}
      <small class=\"form-text\">{{ extraVars.help }}</small>
    {% elseif form.vars.help is defined and form.vars.help %}
      <small class=\"form-text\">{{ form.vars.help }}</small>
  {% endif %}

  {{ self.form_error_with_popover(form) }}

{% endmacro %}

{#
  It displays all nested errors for any form type.
  If form type has error_by_locale parameter set then the error is being displayed with the specific locale assigned to it.
  If form type has errors_by_locale parameter set then the errors are being assigned to the locales and are displayed
  in the popover template.
  If there are more then one error it also assigns all errors in the pop-up to appear.
  On page load, user sees only the errors count but then user hovers over the element the popover
  appears with the errors combined by language.
#}
{% macro form_error_with_popover(form) %}
  {% set errors = [] %}

  {% if form.vars.valid is defined and not form.vars.valid  %}
    {% for parentError in form.vars.errors %}
      {% set errors = errors|merge([parentError.message]) %}
    {% endfor %}

    {#iterating over child errors because errors can be nested#}
  {% endif %}

  {% if errors|length > 0 %}
    {# for form types which has locales and there are more then 1 error , additional errors are displaying inside popover #}
    {% set errorPopover = null %}

    {% if errors|length > 1 %}
      {% set popoverContainer = 'popover-error-container-'~form.vars.id %}
      <div class=\"{{ popoverContainer }}\"></div>


      {% if form.vars.errors_by_locale is defined %}
          {% set popoverErrors = form.vars.errors_by_locale %}

          {# collecting translatable errors - the ones which has locale name attached #}
          {% set translatableErrors = [] %}
          {% for translatableError in popoverErrors %}
            {% set translatableErrors = translatableErrors|merge([translatableError.error_message]) %}
          {% endfor %}

          {# if an error found which does not exist in translatable errors array - it adds it to the popover error container #}
          {% for error in errors %}
            {% if error not in translatableErrors %}
              {% set popoverErrors = popoverErrors|merge([error]) %}
            {% endif %}
          {% endfor %}

        {% else %}
          {% set popoverErrors = errors %}
      {% endif %}

      {% set errorMessages = [] %}
      {% for popoverError in popoverErrors %}
        {% set errorMessage = popoverError %}

        {% if popoverError.error_message is defined and popoverError.locale_name is defined %}
          {% set errorMessage = '%error_message% - Language: %language_name%'|trans({'%error_message%': popoverError.error_message, '%language_name%': popoverError.locale_name}, 'Admin.Notifications.Error') %}
        {% endif %}

        {% set errorMessages = errorMessages|merge([errorMessage]) %}
      {% endfor %}

      {% set popoverErrorContent %}
        <div class=\"popover-error-list\">
          <ul>
            {% for popoverError in errorMessages %}
              <li class=\"text-danger\">
                {{ popoverError }}
              </li>
            {% endfor %}
          </ul>
        </div>
      {% endset %}

      <template class=\"js-popover-error-content\" data-id=\"{{ form.vars.id }}\">
        {{ popoverErrorContent }}
      </template>

      {% set errorPopover %}
        <span
          data-toggle=\"form-popover-error\"
          data-id=\"{{ form.vars.id }}\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".{{ popoverContainer }}\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>{{ '%count% errors'|transchoice(popoverErrors|length, {}, 'Admin.Global') }}</u>
        </span>
      {% endset %}

    {% elseif form.vars.error_by_locale is defined %}
      {% set errorByLocale = '%error_message% - Language: %language_name%'|trans({'%error_message%': form.vars.error_by_locale.error_message, '%language_name%': form.vars.error_by_locale.locale_name}, 'Admin.Notifications.Error') %}
      {% set errors = [errorByLocale] %}
    {% endif %}

    <div class=\"invalid-feedback-container\">
      {% if errorPopover is not null %}
        <div class=\"text-danger\">
          {{ errorPopover }}
        </div>
      {% else %}
        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          {% for error in errors %}
            <div class=\"text-danger\">
              {{ error }}
            </div>
          {% endfor %}
        </div>
      {% endif %}
    </div>
  {% endif %}
{% endmacro %}

 {#
  Helper function to render most common structure for single input
  @param form - form view to render
  @param vars - custom vars that are passed to form_widget
  @param extraVars - parameters that are not related to form_widget, but are needed for input (label, help text & etc.)
 #}
{% macro form_group_row(form, vars, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}

  {% set class = extraVars.class|default('') %}
  {% set inputType = form.vars.block_prefixes.1|default('text') %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  <div class=\"form-group row type-{{ inputType }} {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
    {% set extraVars = extraVars|default({}) %}

    {# renders label above the form field if set to true #}
    {% set labelOnTop = false %}

    {% if extraVars.label_on_top is defined %}
      {% set labelOnTop = extraVars.label_on_top %}
    {% endif %}

    {% if extraVars.label is defined %}
      {% set isRequired = form.vars.required|default(false) %}

      {% if extraVars.required is defined %}
        {% set isRequired = extraVars.required %}
      {% endif %}

      <label for=\"{{ form.vars.id }}\" class=\"form-control-label {{ labelOnTop ? 'label-on-top col-12' : '' }}\">
        {% if isRequired %}
          <span class=\"text-danger\">*</span>
        {% endif %}
        {{ extraVars.label }}

        {% if form.vars.label_attr is defined and form.vars.label_attr['popover'] is defined %}
          {{ include('@Common/HelpBox/helpbox.html.twig', {'content': form.vars.label_attr['popover']}) }}
        {% endif %}
      </label>
    {% endif %}

    <div class=\"{{ labelOnTop ? 'col-12' : 'col-sm' }}\">
      {{ self.form_widget_with_error(form, vars, extraVars) }}
    </div>
  </div>
{% endmacro %}

{% macro multistore_switch(form, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}
  {% if form.shop_restriction_switch is defined %}
    {% set defaultLabel %}
      <strong>{{ 'Check / Uncheck all'|trans({}, 'Admin.Actions') }}</strong> <br>
      {{ 'You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.'|trans({'%yes_label%': 'Yes'|trans({}, 'Admin.Global'), '%no_label%': 'No'|trans({}, 'Admin.Global')}, 'Admin.Design.Help') }} <br>
      {{ 'If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.'|trans({}, 'Admin.Design.Help') }}
    {% endset %}

    {% if extraVars.help is not defined %}
      {% set extraVars = extraVars|merge({'help': defaultLabel}) %}
    {% endif %}

    {% set vars = { 'attr': { 'class': 'js-multi-store-restriction-switch'}} %}

    {{ self.form_group_row(form.shop_restriction_switch, vars, extraVars) }}
  {% endif %}
{% endmacro %}

{% macro language_dependant_select(form, vars, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}

  {% set class = extraVars.class|default('') %}
  {% set inputType = form.vars.block_prefixes.1|default('text') %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  {% set attr = form.vars.attr %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' language_dependant_select')|trim}) %}
  <div class=\"form-group row type-{{ inputType }} {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
  {% set extraVars = extraVars|default({}) %}

  {# renders label above the form field if set to true #}
  {% set labelOnTop = false %}

  {% if extraVars.label_on_top is defined %}
    {% set labelOnTop = extraVars.label_on_top %}
  {% endif %}

  {% if extraVars.label is defined %}
    {% set isRequired = form.vars.required|default(false) %}

    {% if extraVars.required is defined %}
      {% set isRequired = extraVars.required %}
    {% endif %}

    <label for=\"{{ form.vars.id }}\" class=\"form-control-label {{ labelOnTop ? 'label-on-top col-12' : '' }}\">
      {% if isRequired %}
        <span class=\"text-danger\">*</span>
      {% endif %}
      {{ extraVars.label }}
    </label>
  {% endif %}

  <div class=\"{{ 'col-sm-5' }}\">
    {{ self.form_widget_with_error(form, { 'attr': attr }, extraVars) }}
  </div>
  {% if extraVars.languages is defined and extraVars.languages is not empty %}
  <div class=\"{{ 'col-sm-3' }}\">
    <select name=\"{{ form.vars.id ~'_language' }}\" class=\"custom-select language_dependant_select_language\">
    {% if extraVars.languages is iterable %}
      {% for language in extraVars.languages %}
        <option value=\"{{ language.id }}\">{{ language.value|raw }}</option>
      {% endfor %}
    {% endif %}
    </select>
  </div>
  {% endif %}
  </div>
{% endmacro %}
", "@PrestaShop/Admin/macros.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
