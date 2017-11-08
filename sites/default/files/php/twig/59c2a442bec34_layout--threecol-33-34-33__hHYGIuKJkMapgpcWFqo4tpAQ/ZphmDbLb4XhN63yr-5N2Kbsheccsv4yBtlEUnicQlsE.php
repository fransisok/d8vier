<?php

/* core/modules/layout_discovery/layouts/threecol_33_34_33/layout--threecol-33-34-33.html.twig */
class __TwigTemplate_905cf12e32f4dc5f260a6c226754a8d7511a3a397dcbfce596939b2c0bdf582e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 17, "if" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        $context["classes"] = array(0 => "layout", 1 => "layout--threecol-33-34-33");
        // line 22
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 23
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 24
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array())) {
                // line 25
                echo "      <div class=\"layout__region layout__region--top\">
        ";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first", array())) {
                // line 31
                echo "      <div class=\"layout__region layout__region--first\">
        ";
                // line 32
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 35
            echo "
    ";
            // line 36
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "second", array())) {
                // line 37
                echo "      <div class=\"layout__region layout__region--second\">
        ";
                // line 38
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "second", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 41
            echo "
    ";
            // line 42
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "third", array())) {
                // line 43
                echo "      <div class=\"layout__region layout__region--third\">
        ";
                // line 44
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "third", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array())) {
                // line 49
                echo "      <div class=\"layout__region layout__region--bottom\">
        ";
                // line 50
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 53
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/threecol_33_34_33/layout--threecol-33-34-33.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 53,  113 => 50,  110 => 49,  108 => 48,  105 => 47,  99 => 44,  96 => 43,  94 => 42,  91 => 41,  85 => 38,  82 => 37,  80 => 36,  77 => 35,  71 => 32,  68 => 31,  66 => 30,  63 => 29,  57 => 26,  54 => 25,  52 => 24,  47 => 23,  45 => 22,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a three column layout.
 *
 * This template provides a three column 33%-34%-33% display layout, with
 * additional areas for the top and the bottom.
 *
 * Available variables:
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'layout',
    'layout--threecol-33-34-33',
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {% if content.top %}
      <div class=\"layout__region layout__region--top\">
        {{ content.top }}
      </div>
    {% endif %}

    {% if content.first %}
      <div class=\"layout__region layout__region--first\">
        {{ content.first }}
      </div>
    {% endif %}

    {% if content.second %}
      <div class=\"layout__region layout__region--second\">
        {{ content.second }}
      </div>
    {% endif %}

    {% if content.third %}
      <div class=\"layout__region layout__region--third\">
        {{ content.third }}
      </div>
    {% endif %}

    {% if content.bottom %}
      <div class=\"layout__region layout__region--bottom\">
        {{ content.bottom }}
      </div>
    {% endif %}
  </div>
{% endif %}
";
    }
}
