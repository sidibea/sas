<?php

/* SASFrontBundle::layout.html.twig */
class __TwigTemplate_bad88198e69ca3e652bfb369322ac8908ea8ac627981026bfbfef878601c28cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::front.html.twig", "SASFrontBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d750cc83c8fb1a32dd04a963c9c9accf0b2d795593a8f3ad7dd1c96feba5015 = $this->env->getExtension("native_profiler");
        $__internal_9d750cc83c8fb1a32dd04a963c9c9accf0b2d795593a8f3ad7dd1c96feba5015->enter($__internal_9d750cc83c8fb1a32dd04a963c9c9accf0b2d795593a8f3ad7dd1c96feba5015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SASFrontBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d750cc83c8fb1a32dd04a963c9c9accf0b2d795593a8f3ad7dd1c96feba5015->leave($__internal_9d750cc83c8fb1a32dd04a963c9c9accf0b2d795593a8f3ad7dd1c96feba5015_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4227efe08ff2b3d677a6efa09fde1f359bdcf4f600b2e6a12abb40e74e9a2c49 = $this->env->getExtension("native_profiler");
        $__internal_4227efe08ff2b3d677a6efa09fde1f359bdcf4f600b2e6a12abb40e74e9a2c49->enter($__internal_4227efe08ff2b3d677a6efa09fde1f359bdcf4f600b2e6a12abb40e74e9a2c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4227efe08ff2b3d677a6efa09fde1f359bdcf4f600b2e6a12abb40e74e9a2c49->leave($__internal_4227efe08ff2b3d677a6efa09fde1f359bdcf4f600b2e6a12abb40e74e9a2c49_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_d92976e176b523ff0d0f29fae5c1bf0fba0b93c72ad530facb4627d73c8cd994 = $this->env->getExtension("native_profiler");
        $__internal_d92976e176b523ff0d0f29fae5c1bf0fba0b93c72ad530facb4627d73c8cd994->enter($__internal_d92976e176b523ff0d0f29fae5c1bf0fba0b93c72ad530facb4627d73c8cd994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
";
        
        $__internal_d92976e176b523ff0d0f29fae5c1bf0fba0b93c72ad530facb4627d73c8cd994->leave($__internal_d92976e176b523ff0d0f29fae5c1bf0fba0b93c72ad530facb4627d73c8cd994_prof);

    }

    // line 13
    public function block_script($context, array $blocks = array())
    {
        $__internal_2b1d147c744ab0f3e43df3fff7cde8ff9755fc193441d14cbd902e6bfe6f3173 = $this->env->getExtension("native_profiler");
        $__internal_2b1d147c744ab0f3e43df3fff7cde8ff9755fc193441d14cbd902e6bfe6f3173->enter($__internal_2b1d147c744ab0f3e43df3fff7cde8ff9755fc193441d14cbd902e6bfe6f3173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo " ";
        
        $__internal_2b1d147c744ab0f3e43df3fff7cde8ff9755fc193441d14cbd902e6bfe6f3173->leave($__internal_2b1d147c744ab0f3e43df3fff7cde8ff9755fc193441d14cbd902e6bfe6f3173_prof);

    }

    public function getTemplateName()
    {
        return "SASFrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::front.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block script %} {% endblock %}*/
