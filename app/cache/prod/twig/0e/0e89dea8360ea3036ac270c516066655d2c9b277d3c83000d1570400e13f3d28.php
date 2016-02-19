<?php

/* includes/header.html.twig */
class __TwigTemplate_c0c37baf1da92a63b98c56493e3a9f0b6821bcbfe0708cc2466c1521d6f62507 extends Twig_Template
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
        // line 1
        echo "<div class=\"row\">
    <div class=\"span3\">

        <!-- // Logo // -->

        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("sas_front_homepage");
        echo "\" id=\"logo\">
            ";
        // line 7
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 220, 1 => 40)));
        // line 8
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("images/logo.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : null)), "html", null, true);
        echo "\" />
        </a>

    </div><!-- end .span3 -->
    <div class=\"span9\">

        <!-- // Mobile menu trigger // -->

        <a href=\"#\" id=\"mobile-menu-trigger\">
            <i class=\"fa fa-bars\"></i>
        </a>

        <!-- // Custom search // -->

        <form action=\"#\" id=\"custom-search-form\" method=\"get\" role=\"search\">
            <input type=\"text\" value=\"\" name=\"s\" id=\"s\" placeholder=\"type and press enter to search...\">
            <input type=\"submit\" id=\"custom-search-submit\" value=\"\">
        </form>

        <a id=\"custom-search-button\" href=\"#\"></a>

        <!-- // Menu // -->

        <ul class=\"sf-menu fixed\" id=\"menu\">
            <li class=\"current\">
                <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("sas_front_homepage");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sas.menu.homepage"), "html", null, true);
        echo "</a>
            </li>
            <li>
                <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("sas_front_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sas.menu.about"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"dropdown\">
                <a href=\"services.html\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sas.menu.services"), "html", null, true);
        echo "</a>
                <ul>
                    <li>
                        <a href=\"services.html\">Services</a>
                    </li>
                    <li>
                        <a href=\"single-service.html\">Single service</a>
                    </li>
                </ul>
            </li>

            <li >
                <a href=\"blog.html\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sas.menu.gallerie"), "html", null, true);
        echo "</a>

            </li>
            <li>
                <a href=\"contact.html\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sas.menu.contact"), "html", null, true);
        echo "</a>
            </li>
        </ul>

    </div><!-- end .span9 -->
</div><!-- end .row -->
";
    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 55,  92 => 51,  77 => 39,  69 => 36,  61 => 33,  32 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="span3">*/
/* */
/*         <!-- // Logo // -->*/
/* */
/*         <a href="{{ path('sas_front_homepage') }}" id="logo">*/
/*             {% set runtimeConfig = {"thumbnail": {"size": [220, 40] }} %}*/
/*             <img src="{{ 'images/logo.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/*         </a>*/
/* */
/*     </div><!-- end .span3 -->*/
/*     <div class="span9">*/
/* */
/*         <!-- // Mobile menu trigger // -->*/
/* */
/*         <a href="#" id="mobile-menu-trigger">*/
/*             <i class="fa fa-bars"></i>*/
/*         </a>*/
/* */
/*         <!-- // Custom search // -->*/
/* */
/*         <form action="#" id="custom-search-form" method="get" role="search">*/
/*             <input type="text" value="" name="s" id="s" placeholder="type and press enter to search...">*/
/*             <input type="submit" id="custom-search-submit" value="">*/
/*         </form>*/
/* */
/*         <a id="custom-search-button" href="#"></a>*/
/* */
/*         <!-- // Menu // -->*/
/* */
/*         <ul class="sf-menu fixed" id="menu">*/
/*             <li class="current">*/
/*                 <a href="{{ path('sas_front_homepage') }}"> {{ 'sas.menu.homepage'|trans }}</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('sas_front_about') }}">{{ 'sas.menu.about' |trans }}</a>*/
/*             </li>*/
/*             <li class="dropdown">*/
/*                 <a href="services.html">{{ 'sas.menu.services'|trans }}</a>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="services.html">Services</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="single-service.html">Single service</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*             <li >*/
/*                 <a href="blog.html">{{ 'sas.menu.gallerie'|trans }}</a>*/
/* */
/*             </li>*/
/*             <li>*/
/*                 <a href="contact.html">{{ 'sas.menu.contact'|trans }}</a>*/
/*             </li>*/
/*         </ul>*/
/* */
/*     </div><!-- end .span9 -->*/
/* </div><!-- end .row -->*/
/* */
