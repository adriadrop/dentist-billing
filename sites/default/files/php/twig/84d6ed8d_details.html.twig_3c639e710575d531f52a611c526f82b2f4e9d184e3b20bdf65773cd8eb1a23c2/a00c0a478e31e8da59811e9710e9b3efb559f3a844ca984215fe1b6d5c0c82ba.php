<?php

/* core/themes/classy/templates/form/details.html.twig */
class __TwigTemplate_e6b6c5c4a906adbdd73e21e8fef8425309895b5a5852e4fa59a953f9fd9a8b4a extends Twig_Template
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
        $__internal_26a511b3d1e0f6034f8166a00d7f380b63ed7f68822e9bcb37977a81a151c349 = $this->env->getExtension("native_profiler");
        $__internal_26a511b3d1e0f6034f8166a00d7f380b63ed7f68822e9bcb37977a81a151c349->enter($__internal_26a511b3d1e0f6034f8166a00d7f380b63ed7f68822e9bcb37977a81a151c349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/details.html.twig"));

        $tags = array("if" => 18);
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

        // line 17
        echo "<details";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        // line 18
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 19
            echo "<summary";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["summary_attributes"]) ? $context["summary_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</summary>";
        }
        // line 21
        echo "<div class=\"details-wrapper\">
    ";
        // line 22
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 23
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 27
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 28
            echo "<div class=\"details-description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "</div>";
        }
        // line 30
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        }
        // line 33
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        }
        // line 36
        echo "</div>
</details>
";
        
        $__internal_26a511b3d1e0f6034f8166a00d7f380b63ed7f68822e9bcb37977a81a151c349->leave($__internal_26a511b3d1e0f6034f8166a00d7f380b63ed7f68822e9bcb37977a81a151c349_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  87 => 34,  85 => 33,  82 => 31,  80 => 30,  75 => 28,  73 => 27,  67 => 24,  64 => 23,  62 => 22,  59 => 21,  52 => 19,  50 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a details element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the details element.*/
/*  * - errors: (optional) Any errors for this details element, may not be set.*/
/*  * - title: (optional) The title of the element, may not be set.*/
/*  * - description: (optional) The description of the element, may not be set.*/
/*  * - children: (optional) The children of the element, may not be set.*/
/*  * - value: (optional) The value of the element, may not be set.*/
/*  **/
/*  * @see template_preprocess_details()*/
/*  *//* */
/* #}*/
/* <details{{ attributes }}>*/
/*   {%- if title -%}*/
/*     <summary{{ summary_attributes }}>{{ title }}</summary>*/
/*   {%- endif -%}*/
/*   <div class="details-wrapper">*/
/*     {% if errors %}*/
/*       <div class="form-item--error-message">*/
/*         <strong>{{ errors }}</strong>*/
/*       </div>*/
/*     {% endif %}*/
/*     {%- if description -%}*/
/*       <div class="details-description">{{ description }}</div>*/
/*     {%- endif -%}*/
/*     {%- if children -%}*/
/*       {{ children }}*/
/*     {%- endif -%}*/
/*     {%- if value -%}*/
/*       {{ value }}*/
/*     {%- endif -%}*/
/*   </div>*/
/* </details>*/
/* */
