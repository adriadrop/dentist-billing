<?php

/* @webprofiler/Collector/devel.html.twig */
class __TwigTemplate_78a3385f157e914609977012d241ce27488eee368e421b90a3f62baf3bb6b8c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_571b7374baf72ffe1a3b7f5e1ce1c135cb5e9b1145fe58ba5bb5e3475ca3ea14 = $this->env->getExtension("native_profiler");
        $__internal_571b7374baf72ffe1a3b7f5e1ce1c135cb5e9b1145fe58ba5bb5e3475ca3ea14->enter($__internal_571b7374baf72ffe1a3b7f5e1ce1c135cb5e9b1145fe58ba5bb5e3475ca3ea14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/devel.html.twig"));

        $tags = array("block" => 1, "set" => 2, "spaceless" => 10, "for" => 11);
        $filters = array("t" => 3, "default" => 13);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set', 'spaceless', 'for'),
                array('t', 'default'),
                array('url')
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
        $this->displayBlock('toolbar', $context, $blocks);
        
        $__internal_571b7374baf72ffe1a3b7f5e1ce1c135cb5e9b1145fe58ba5bb5e3475ca3ea14->leave($__internal_571b7374baf72ffe1a3b7f5e1ce1c135cb5e9b1145fe58ba5bb5e3475ca3ea14_prof);

    }

    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21dea70fd7529665647ae608a2d93123f2f0f9dd1c64e2bfd61626583b0df868 = $this->env->getExtension("native_profiler");
        $__internal_21dea70fd7529665647ae608a2d93123f2f0f9dd1c64e2bfd61626583b0df868->enter($__internal_21dea70fd7529665647ae608a2d93123f2f0f9dd1c64e2bfd61626583b0df868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("devel.admin_settings")));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Devel menu")));
        echo "\">
            <img width=\"26\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "title", array()), "html", null, true));
        echo "\"
                 src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        ob_start();
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "links", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span><a href=\"";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($context["item"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "description", array()), $this->getAttribute($context["item"], "title", array()))) : ($this->getAttribute($context["item"], "title", array()))), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
            echo "</a></span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 17
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>

";
        
        $__internal_21dea70fd7529665647ae608a2d93123f2f0f9dd1c64e2bfd61626583b0df868->leave($__internal_21dea70fd7529665647ae608a2d93123f2f0f9dd1c64e2bfd61626583b0df868_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/devel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 21,  118 => 20,  114 => 18,  111 => 17,  108 => 16,  95 => 13,  92 => 12,  87 => 11,  84 => 10,  82 => 9,  79 => 8,  73 => 5,  69 => 4,  62 => 3,  59 => 2,  47 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <a href="{{ url("devel.admin_settings") }}" title="{{ 'Devel menu'|t }}">*/
/*             <img width="26" height="28" alt="{{ collector.title }}"*/
/*                  src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         </a>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*     {% spaceless %}*/
/*         {% for item in collector.links %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <span><a href="{{ item.url }}" title="{{ item.description|default(item.title) }}">{{ item.title }}</a></span>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
