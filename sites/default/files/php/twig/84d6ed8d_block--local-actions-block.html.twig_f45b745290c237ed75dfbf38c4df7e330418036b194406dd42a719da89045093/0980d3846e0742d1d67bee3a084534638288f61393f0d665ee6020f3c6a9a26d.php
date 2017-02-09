<?php

/* core/themes/classy/templates/block/block--local-actions-block.html.twig */
class __TwigTemplate_9419373623970ee164c14e68817970e81f7a7471a6d58ae8c8bfd66c9dcc1171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a63d997e654d2f496521fa217400b94ce467710249cc1dbb329b6dbc3e92c9ad = $this->env->getExtension("native_profiler");
        $__internal_a63d997e654d2f496521fa217400b94ce467710249cc1dbb329b6dbc3e92c9ad->enter($__internal_a63d997e654d2f496521fa217400b94ce467710249cc1dbb329b6dbc3e92c9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a63d997e654d2f496521fa217400b94ce467710249cc1dbb329b6dbc3e92c9ad->leave($__internal_a63d997e654d2f496521fa217400b94ce467710249cc1dbb329b6dbc3e92c9ad_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_f851ad00c47cfb4ae5b5687765351c67dfeee6d26bcecd9d6afdf6b1552993cb = $this->env->getExtension("native_profiler");
        $__internal_f851ad00c47cfb4ae5b5687765351c67dfeee6d26bcecd9d6afdf6b1552993cb->enter($__internal_f851ad00c47cfb4ae5b5687765351c67dfeee6d26bcecd9d6afdf6b1552993cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "</nav>
  ";
        }
        
        $__internal_f851ad00c47cfb4ae5b5687765351c67dfeee6d26bcecd9d6afdf6b1552993cb->leave($__internal_f851ad00c47cfb4ae5b5687765351c67dfeee6d26bcecd9d6afdf6b1552993cb_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for local actions (primary admin actions.)*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="action-links">{{ content }}</nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
