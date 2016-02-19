<?php

/* ::front.html.twig */
class __TwigTemplate_c4ec0fab0caa8bcc53c442cfe1a56230dbe9e07c14bf39c529e2d981a42abfa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headertop' => array($this, 'block_headertop'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'footerbottom' => array($this, 'block_footerbottom'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- /// Google Fonts ////////  -->
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\">
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic\">

    <!-- /// FontAwesome Icons 4.2.0 ////////  -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/_layout/css/fontawesome/font-awesome.min.css"), "html", null, true);
        echo "\">

    <!-- /// Custom Icon Font ////////  -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/_layout/css/iconfontcustom/icon-font-custom.css"), "html", null, true);
        echo "\">

    ";
        // line 25
        echo "    ";
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>

<body class=\"sticky-header\">


<noscript>
    <div class=\"javascript-required\">
        <i class=\"fa fa-times-circle\"></i> You seem to have Javascript disabled. This website needs javascript in order to function properly!
    </div>
</noscript>

<!--[if lte IE 8]>
<div class=\"modern-browser-required\">
    You are using an <strong>outdated</strong> browser. Please
    <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">upgrade your browser</a>
    to improve your experience.
</div>
<![endif]-->

<div id=\"wrap\">

    ";
        // line 72
        $this->displayBlock('headertop', $context, $blocks);
        // line 75
        echo "
    <div id=\"header\">

        <!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        ";
        // line 79
        $this->displayBlock('header', $context, $blocks);
        // line 82
        echo "
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    </div><!-- end #header -->
    <div id=\"content\">

        <!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    </div><!-- end #content -->
    <div id=\"footer\">

        <!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        ";
        // line 100
        $this->displayBlock('footer', $context, $blocks);
        // line 103
        echo "

        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    </div><!-- end #footer -->
    <div id=\"footer-bottom\">

        <!-- /// FOOTER-BOTTOM     ////////////////////////////////////////////////////////////////////////////////////////////// -->
        ";
        // line 111
        $this->displayBlock('footerbottom', $context, $blocks);
        // line 114
        echo "
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    </div><!-- end #footer-bottom -->

</div><!-- end #wrap -->

<a id=\"back-to-top\" href=\"#\">
    <i class=\"ifc-up4\"></i>
</a>

";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 159
        echo "

</body>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "            Stattion Abdoulaye Service
        ";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6bc0cc2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_0") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_base_1.css");
            // line 43
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_1") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_layout_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_2") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_grid_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_3") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_elements_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_4") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_yellow_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_5") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_settings_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_6") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_custom_7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_7") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_jquery.bxslider_8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_8") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_magnific-popup_9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_9") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_animate.min_10.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_10") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_YTPlayer_11.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_11") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_wide_12.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "6bc0cc2_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2_12") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2_switcher_13.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "6bc0cc2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bc0cc2") : $this->env->getExtension('asset')->getAssetUrl("css/6bc0cc2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "    ";
    }

    // line 72
    public function block_headertop($context, array $blocks = array())
    {
        // line 73
        echo "        ";
        $this->loadTemplate("includes/header-top.html.twig", "::front.html.twig", 73)->display($context);
        // line 74
        echo "    ";
    }

    // line 79
    public function block_header($context, array $blocks = array())
    {
        // line 80
        echo "            ";
        $this->loadTemplate("includes/header.html.twig", "::front.html.twig", 80)->display($context);
        // line 81
        echo "        ";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        // line 91
        echo "
        ";
    }

    // line 100
    public function block_footer($context, array $blocks = array())
    {
        // line 101
        echo "            ";
        $this->loadTemplate("includes/footer.html.twig", "::front.html.twig", 101)->display($context);
        // line 102
        echo "        ";
    }

    // line 111
    public function block_footerbottom($context, array $blocks = array())
    {
        // line 112
        echo "            ";
        $this->loadTemplate("includes/footer-bottom.html.twig", "::front.html.twig", 112)->display($context);
        // line 113
        echo "        ";
    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        // line 127
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6382cb6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_0") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery-2.1.1.min_1.js");
            // line 156
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_1") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.viewport_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_2") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.easing.1.3_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_3") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.simpleplaceholder_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_4") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.fitvids_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_5") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_animate_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_6") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_hoverIntent_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_7") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_superfish_8.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_8") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.themepunch.tools.min_9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_9") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.themepunch.revolution.min_10.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_10") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.bxslider.min_11.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_11") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.magnific-popup.min_12.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_12") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_imagesloaded.pkgd.min_13.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_13") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_isotope.pkgd.min_14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_14") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.parallax.min_15.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_15") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.easypiechart.min_16.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_16") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.easytabs.min_17.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_17") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.validate.min_18.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_18") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.form.min_19.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_19") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_js?sensor=false_20.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_20") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery.gmap.min_21.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_21") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_twitterfetcher_22.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_22") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_plugins_23.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_23") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_scripts_24.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_24") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_jquery_cookie_25.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6382cb6_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6_25") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6_switcher_26.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "6382cb6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6382cb6") : $this->env->getExtension('asset')->getAssetUrl("js/6382cb6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "::front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 156,  319 => 127,  316 => 126,  312 => 113,  309 => 112,  306 => 111,  302 => 102,  299 => 101,  296 => 100,  291 => 91,  288 => 90,  284 => 81,  281 => 80,  278 => 79,  274 => 74,  271 => 73,  268 => 72,  264 => 45,  178 => 43,  173 => 28,  170 => 27,  165 => 6,  162 => 5,  154 => 159,  152 => 126,  139 => 114,  137 => 111,  127 => 103,  125 => 100,  116 => 93,  114 => 90,  104 => 82,  102 => 79,  96 => 75,  94 => 72,  66 => 46,  64 => 27,  61 => 26,  59 => 25,  54 => 22,  48 => 19,  35 => 8,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>*/
/*         {% block title %}*/
/*             Stattion Abdoulaye Service*/
/*         {% endblock %}*/
/*     </title>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="description" content="">*/
/*     <meta name="keywords" content="">*/
/* */
/*     <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/*     <!-- /// Google Fonts ////////  -->*/
/*     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">*/
/*     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic">*/
/* */
/*     <!-- /// FontAwesome Icons 4.2.0 ////////  -->*/
/*     <link rel="stylesheet" href="{{ asset('front/_layout/css/fontawesome/font-awesome.min.css') }}">*/
/* */
/*     <!-- /// Custom Icon Font ////////  -->*/
/*     <link rel="stylesheet" href="{{ asset('front/_layout/css/iconfontcustom/icon-font-custom.css') }}">*/
/* */
/*     {# stylesheets... #}*/
/*     {# app/Resources/views/layout.html.twig #}*/
/* */
/*     {% block stylesheets %}*/
/*         {% stylesheets  filter='?yui_css'*/
/*         'front/_layout/css/base.css'*/
/*         'front/_layout/css/layout.css'*/
/*         'front/_layout/css/grid.css'*/
/*         'front/_layout/css/elements.css'*/
/*         'front/_layout/css/skins/yellow.css'*/
/*         'front/_layout/js/revolutionslider/css/settings.css'*/
/*         'front/_layout/js/revolutionslider/css/custom.css'*/
/*         'front/_layout/js/bxslider/jquery.bxslider.css'*/
/*         'front/_layout/js/magnificpopup/magnific-popup.css'*/
/*         'front/_layout/js/animations/animate.min.css'*/
/*         'front/_layout/js/itplayer/css/YTPlayer.css'*/
/*         'front/_layout/css/wide.css'*/
/* */
/*         'front/_layout/js/switcher/switcher.css'%}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*     {% endblock %}*/
/* */
/*     <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body class="sticky-header">*/
/* */
/* */
/* <noscript>*/
/*     <div class="javascript-required">*/
/*         <i class="fa fa-times-circle"></i> You seem to have Javascript disabled. This website needs javascript in order to function properly!*/
/*     </div>*/
/* </noscript>*/
/* */
/* <!--[if lte IE 8]>*/
/* <div class="modern-browser-required">*/
/*     You are using an <strong>outdated</strong> browser. Please*/
/*     <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">upgrade your browser</a>*/
/*     to improve your experience.*/
/* </div>*/
/* <![endif]-->*/
/* */
/* <div id="wrap">*/
/* */
/*     {% block headertop %}*/
/*         {% include('includes/header-top.html.twig') %}*/
/*     {% endblock %}*/
/* */
/*     <div id="header">*/
/* */
/*         <!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->*/
/*         {% block header %}*/
/*             {% include('includes/header.html.twig') %}*/
/*         {% endblock %}*/
/* */
/*         <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->*/
/* */
/*     </div><!-- end #header -->*/
/*     <div id="content">*/
/* */
/*         <!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->*/
/* */
/*         {% block content %}*/
/* */
/*         {% endblock %}*/
/* */
/*         <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->*/
/* */
/*     </div><!-- end #content -->*/
/*     <div id="footer">*/
/* */
/*         <!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->*/
/*         {% block footer %}*/
/*             {% include('includes/footer.html.twig') %}*/
/*         {% endblock %}*/
/* */
/* */
/*         <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->*/
/* */
/*     </div><!-- end #footer -->*/
/*     <div id="footer-bottom">*/
/* */
/*         <!-- /// FOOTER-BOTTOM     ////////////////////////////////////////////////////////////////////////////////////////////// -->*/
/*         {% block footerbottom %}*/
/*             {% include('includes/footer-bottom.html.twig') %}*/
/*         {% endblock %}*/
/* */
/*         <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->*/
/* */
/*     </div><!-- end #footer-bottom -->*/
/* */
/* </div><!-- end #wrap -->*/
/* */
/* <a id="back-to-top" href="#">*/
/*     <i class="ifc-up4"></i>*/
/* </a>*/
/* */
/* {# javascripts... #}*/
/* {% block javascripts %}*/
/*     {% javascripts filter='yui_js'*/
/*         'front/_layout/js/jquery-2.1.1.min.js'*/
/*     'front/_layout/js/viewport/jquery.viewport.js'*/
/*     'front/_layout/js/easing/jquery.easing.1.3.js'*/
/*     'front/_layout/js/simpleplaceholder/jquery.simpleplaceholder.js'*/
/*     'front/_layout/js/fitvids/jquery.fitvids.js'*/
/*     'front/_layout/js/animations/animate.js'*/
/*     'front/_layout/js/superfish/hoverIntent.js'*/
/*     'front/_layout/js/superfish/superfish.js'*/
/*     'front/_layout/js/revolutionslider/js/jquery.themepunch.tools.min.js'*/
/*     'front/_layout/js/revolutionslider/js/jquery.themepunch.revolution.min.js'*/
/*     'front/_layout/js/bxslider/jquery.bxslider.min.js'*/
/*     'front/_layout/js/magnificpopup/jquery.magnific-popup.min.js'*/
/*     'front/_layout/js/isotope/imagesloaded.pkgd.min.js'*/
/*     'front/_layout/js/isotope/isotope.pkgd.min.js'*/
/*     'front/_layout/js/parallax/jquery.parallax.min.js'*/
/*     'front/_layout/js/easypiechart/jquery.easypiechart.min.js'*/
/* */
/*     'front/_layout/js/easytabs/jquery.easytabs.min.js'*/
/*     'front/_layout/js/jqueryvalidate/jquery.validate.min.js'*/
/*     'front/_layout/js/jqueryform/jquery.form.min.js'*/
/*     'http://maps.google.com/maps/api/js?sensor=false'*/
/*     'front/_layout/js/gmap/jquery.gmap.min.js'*/
/*     'front/_layout/js/twitter/twitterfetcher.js'*/
/*     'front/_layout/js/plugins.js'*/
/*     'front/_layout/js/scripts.js'*/
/*     'front/_layout/js/switcher/jquery_cookie.js'*/
/*     'front/_layout/js/switcher/switcher.js'*/
/*     %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* */
/* </body>*/
/* */
/* </html>*/
