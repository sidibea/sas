<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_ae007f7557672dc2948b79ce870f5387e5aafe0897040a6e0ab1ca206b1049b9 extends Twig_Template
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
        $__internal_f7d8423bac0428aeb853df4f5cf5c2c59e494da2abfb3d4c57f372b4fcd22b97 = $this->env->getExtension("native_profiler");
        $__internal_f7d8423bac0428aeb853df4f5cf5c2c59e494da2abfb3d4c57f372b4fcd22b97->enter($__internal_f7d8423bac0428aeb853df4f5cf5c2c59e494da2abfb3d4c57f372b4fcd22b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f7d8423bac0428aeb853df4f5cf5c2c59e494da2abfb3d4c57f372b4fcd22b97->leave($__internal_f7d8423bac0428aeb853df4f5cf5c2c59e494da2abfb3d4c57f372b4fcd22b97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
