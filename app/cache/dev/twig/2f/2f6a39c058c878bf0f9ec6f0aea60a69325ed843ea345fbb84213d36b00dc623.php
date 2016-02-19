<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ca2d660b7090d12ad74cc74421a4dfe08853d9cfe9c9012c9390fb5dd4428474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55c815ceb745ccc9d84591c4b9b22108bde0e3e20c0fc7d6d365392b1525bb24 = $this->env->getExtension("native_profiler");
        $__internal_55c815ceb745ccc9d84591c4b9b22108bde0e3e20c0fc7d6d365392b1525bb24->enter($__internal_55c815ceb745ccc9d84591c4b9b22108bde0e3e20c0fc7d6d365392b1525bb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55c815ceb745ccc9d84591c4b9b22108bde0e3e20c0fc7d6d365392b1525bb24->leave($__internal_55c815ceb745ccc9d84591c4b9b22108bde0e3e20c0fc7d6d365392b1525bb24_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9278ae2c8cc7180289bc413184fe5add3d03f71c462e62e5e77c0e1ec814d44f = $this->env->getExtension("native_profiler");
        $__internal_9278ae2c8cc7180289bc413184fe5add3d03f71c462e62e5e77c0e1ec814d44f->enter($__internal_9278ae2c8cc7180289bc413184fe5add3d03f71c462e62e5e77c0e1ec814d44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9278ae2c8cc7180289bc413184fe5add3d03f71c462e62e5e77c0e1ec814d44f->leave($__internal_9278ae2c8cc7180289bc413184fe5add3d03f71c462e62e5e77c0e1ec814d44f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc61c6b737e61e25261c58235b9fba848a81db43ccff14d48759924309c034e3 = $this->env->getExtension("native_profiler");
        $__internal_cc61c6b737e61e25261c58235b9fba848a81db43ccff14d48759924309c034e3->enter($__internal_cc61c6b737e61e25261c58235b9fba848a81db43ccff14d48759924309c034e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc61c6b737e61e25261c58235b9fba848a81db43ccff14d48759924309c034e3->leave($__internal_cc61c6b737e61e25261c58235b9fba848a81db43ccff14d48759924309c034e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_39c9ba47e6375debcb2c0449446b0778db08b081a13bc4de8e9ffcead5f2466e = $this->env->getExtension("native_profiler");
        $__internal_39c9ba47e6375debcb2c0449446b0778db08b081a13bc4de8e9ffcead5f2466e->enter($__internal_39c9ba47e6375debcb2c0449446b0778db08b081a13bc4de8e9ffcead5f2466e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_39c9ba47e6375debcb2c0449446b0778db08b081a13bc4de8e9ffcead5f2466e->leave($__internal_39c9ba47e6375debcb2c0449446b0778db08b081a13bc4de8e9ffcead5f2466e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
