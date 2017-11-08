<?php

/* core/modules/content_moderation/templates/entity-moderation-form.html.twig */
class __TwigTemplate_086808bbe1938a7260ecd82379fa072f511e4d5c453c809a314901c4cbb5789e extends Twig_Template
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
        $tags = array();
        $filters = array("without" => 8);
        $functions = array("attach_library" => 1);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('without'),
                array('attach_library')
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

        // line 1
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("content_moderation/content_moderation"), "html", null, true));
        echo "
<ul class=\"entity-moderation-form\">
  <li>";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current", array()), "html", null, true));
        echo "</li>
  <li>";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "new_state", array()), "html", null, true));
        echo "</li>
  <li>";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "revision_log", array()), "html", null, true));
        echo "</li>
  <li>";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), "html", null, true));
        echo "</li>
</ul>
";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "current", "new_state", "revision_log", "submit"), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/content_moderation/templates/entity-moderation-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "{{ attach_library('content_moderation/content_moderation') }}
<ul class=\"entity-moderation-form\">
  <li>{{ form.current }}</li>
  <li>{{ form.new_state }}</li>
  <li>{{ form.revision_log }}</li>
  <li>{{ form.submit }}</li>
</ul>
{{ form|without('current', 'new_state', 'revision_log', 'submit') }}
";
    }
}
