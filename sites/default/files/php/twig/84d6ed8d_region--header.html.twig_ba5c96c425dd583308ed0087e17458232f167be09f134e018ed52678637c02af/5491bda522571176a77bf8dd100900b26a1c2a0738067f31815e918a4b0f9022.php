<?php

/* core/themes/bartik/templates/region--header.html.twig */
class __TwigTemplate_588a384175fb5f08f86af9148dc8bdd5b793a690af5a505356bdb9f8e37045b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("region.html.twig", "core/themes/bartik/templates/region--header.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "region.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc28acbbe225c0b25d1a6e584efd2482cf02d9980fdab48651ddbb41f1d93010 = $this->env->getExtension("native_profiler");
        $__internal_cc28acbbe225c0b25d1a6e584efd2482cf02d9980fdab48651ddbb41f1d93010->enter($__internal_cc28acbbe225c0b25d1a6e584efd2482cf02d9980fdab48651ddbb41f1d93010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/region--header.html.twig"));

        $tags = array("set" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 16
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "clearfix"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc28acbbe225c0b25d1a6e584efd2482cf02d9980fdab48651ddbb41f1d93010->leave($__internal_cc28acbbe225c0b25d1a6e584efd2482cf02d9980fdab48651ddbb41f1d93010_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  51 => 16,  11 => 1,);
    }
}
/* {% extends "region.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a header region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region div.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass('clearfix') %}*/
/* */
