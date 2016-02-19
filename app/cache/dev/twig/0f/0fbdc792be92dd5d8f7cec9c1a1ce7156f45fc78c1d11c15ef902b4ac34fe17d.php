<?php

/* SASFrontBundle:Front:index.html.twig */
class __TwigTemplate_05ddd9bbf1f42eea3f05bc3e24e30a4563dfb9e2d861e451d90c3ca25f545c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SASFrontBundle::layout.html.twig", "SASFrontBundle:Front:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SASFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9ec076988d99976bb5f0313d0eac424a06229b5b5ce459457ae8e3358df8073 = $this->env->getExtension("native_profiler");
        $__internal_e9ec076988d99976bb5f0313d0eac424a06229b5b5ce459457ae8e3358df8073->enter($__internal_e9ec076988d99976bb5f0313d0eac424a06229b5b5ce459457ae8e3358df8073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SASFrontBundle:Front:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9ec076988d99976bb5f0313d0eac424a06229b5b5ce459457ae8e3358df8073->leave($__internal_e9ec076988d99976bb5f0313d0eac424a06229b5b5ce459457ae8e3358df8073_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5099ee49082d2018853e420357ead7c2c861500dde24c3c01cd743da4781332d = $this->env->getExtension("native_profiler");
        $__internal_5099ee49082d2018853e420357ead7c2c861500dde24c3c01cd743da4781332d->enter($__internal_5099ee49082d2018853e420357ead7c2c861500dde24c3c01cd743da4781332d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Bienvenue ! ";
        
        $__internal_5099ee49082d2018853e420357ead7c2c861500dde24c3c01cd743da4781332d->leave($__internal_5099ee49082d2018853e420357ead7c2c861500dde24c3c01cd743da4781332d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e18e54f915400006dea158a4f0e6749494e60ed75fd9cc48de53a5212397953 = $this->env->getExtension("native_profiler");
        $__internal_4e18e54f915400006dea158a4f0e6749494e60ed75fd9cc48de53a5212397953->enter($__internal_4e18e54f915400006dea158a4f0e6749494e60ed75fd9cc48de53a5212397953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"fullwidthbanner-container\">
        <div class=\"fullwidthbanner\">

            <ul>
                <li data-transition=\"fade\">
                    ";
        // line 11
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 1920, 1 => 650)));
        // line 12
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("images/banner2.jpg", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                    <div class=\"caption title sfl\"
                         data-x=\"130\"
                         data-y=\"220\"
                         data-speed=\"1000\"
                         data-start=\"1000\"
                         data-easing=\"easeOutExpo\">
                        Produits Petroliers
                    </div>

                    <div class=\"caption subtitle sfr\"
                         data-x=\"700\"
                         data-y=\"290\"
                         data-speed=\"1000\"
                         data-start=\"1400\"
                         data-easing=\"easeOutExpo\">
                        <strong>distribution et commercialisation,<br>
                            carburant, lubrifiant, butane<br>
                            et produits chimiques  <br>
                        </strong>
                    </div>

                    <div class=\"caption sfb\"
                         data-x=\"500\"
                         data-y=\"350\"
                         data-speed=\"1000\"
                         data-start=\"2000\"
                         data-easing=\"easeOutExpo\">
                        <a class=\"btn btn-large\" href=\"#\">En savoir plus</a>
                    </div>

                </li>
                <li data-transition=\"fade\">

                    ";
        // line 47
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 1920, 1 => 650)));
        // line 48
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("images/banner1.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                    <div class=\"caption title-3 sfl\" style=\"color: green\"
                         data-x=\"30\"
                         data-y=\"235\"
                         data-speed=\"1000\"
                         data-start=\"1000\"
                         data-easing=\"easeOutExpo\">
                        IMAGINEZ...<br> NOUS RÉALISONS!
                    </div>

                    <div class=\"caption bg fade\"
                         data-x=\"600\"
                         data-y=\"50\"
                         data-speed=\"1000\"
                         data-start=\"1600\"
                         data-easing=\"easeOutExpo\">
                    </div>

                    <div class=\"caption title-3 fade\"
                         data-x=\"650\"
                         data-y=\"190\"
                         data-speed=\"1000\"
                         data-start=\"1600\"
                         data-easing=\"easeOutExpo\">
                        SAS <span class=\"text-highlight\">BTP</span>!
                    </div>

                    <div class=\"caption subtitle-2 fade\"
                         data-x=\"650\"
                         data-y=\"290\"
                         data-speed=\"1000\"
                         data-start=\"1600\"
                         data-easing=\"easeOutExpo\">
                        Batiments, Travaux publics, <br>Terrassement <br>

                    </div>

                    <div class=\"caption fade\"
                         data-x=\"780\"
                         data-y=\"390\"
                         data-speed=\"1000\"
                         data-start=\"1600\"
                         data-easing=\"easeOutExpo\">
                        <a class=\"btn btn-large\" href=\"#\">En Savoir plus</a>
                    </div>

                </li>
                <li data-transition=\"fade\">
                    ";
        // line 97
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 1920, 1 => 650)));
        // line 98
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("images/Banniere_troupeau-2.jpg", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                    <div class=\"caption letters lfl\"
                         data-x=\"30\"
                         data-y=\"235\"
                         data-speed=\"1000\"
                         data-start=\"1000\"
                         data-easing=\"easeOutExpo\">
                        E
                    </div>

                    <div class=\"caption letters lfl\"
                         data-x=\"140\"
                         data-y=\"235\"
                         data-speed=\"1000\"
                         data-start=\"1300\"
                         data-easing=\"easeOutExpo\">
                        L
                    </div>

                    <div class=\"caption letters lfl\"
                         data-x=\"275\"
                         data-y=\"235\"
                         data-speed=\"1000\"
                         data-start=\"1600\"
                         data-easing=\"easeOutExpo\">
                        E
                    </div>

                    <div class=\"caption letters lfl\"
                         data-x=\"420\"
                         data-y=\"235\"
                         data-speed=\"1000\"
                         data-start=\"1900\"
                         data-easing=\"easeOutExpo\">
                        V
                    </div>

                    <div class=\"caption letters lfl\"
                         data-x=\"500\"
                         data-y=\"235\"
                         data-speed=\"1000\"
                         data-start=\"2100\"
                         data-easing=\"easeOutExpo\">
                        A
                    </div>

                    <div class=\"caption letters lfl\"
                         data-x=\"600\"
                         data-y=\"235\"
                         data-speed=\"1000\"
                         data-start=\"2400\"
                         data-easing=\"easeOutExpo\">
                        G
                    </div>

                    <div class=\"caption letters lfl\"
                         data-x=\"720\"
                         data-y=\"235\"
                         data-speed=\"1000\"
                         data-start=\"2700\"
                         data-easing=\"easeOutExpo\">
                        E
                    </div>



                </li>
            </ul>

        </div><!-- end .fullwidthbanner -->
    </div><!-- end .fullwidthbanner-container -->

    <div class=\"fullwidth-section\" id=\"bg-1\">

        <div class=\"fullwidth-section-content\">

            <div class=\"row\">
                <div class=\"span12\">

                    <div class=\"headline\">

                        <h2>Nos Secteurs d'activites</h2>
                        <h6>SAS - l'unite dans la diversite</h6>

                    </div><!-- end .headline -->

                </div><!-- end .span12 -->
            </div><!-- end .row -->

            <div class=\"row\">
                <div class=\"span3\">

                    <div class=\"portfolio-item\">

                        <div class=\"portfolio-item-preview\">
                            ";
        // line 194
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 270, 1 => 240)));
        // line 195
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("images/photoG.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                            <div class=\"portfolio-item-overlay\"></div>

                            <div class=\"portfolio-item-overlay-actions\">

                                <a class=\"portfolio-item-zoom magnificPopup-gallery\" href=\"_content/portfolio/270x240-1.png\">
                                    <span>+</span>
                                </a>

                                <a class=\"portfolio-item-link\" href=\"portfolio-item.html\">
                                    <span>&gt;</span>
                                </a>

                            </div><!-- end .portfolio-item-overlay-actions -->

                        </div><!-- end .portfolio-item-preview -->

                        <div class=\"portfolio-item-description\">

                            <h5>Commerce & Boulangerie</h5>

                        </div><!-- end .portfolio-item-description -->

                    </div><!-- end .portfolio-item -->

                </div><!-- end .span3 -->
                <div class=\"span3\">

                    <div class=\"portfolio-item\">

                        <div class=\"portfolio-item-preview\">

                            ";
        // line 228
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 270, 1 => 240)));
        // line 229
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("images/station.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                            <div class=\"portfolio-item-overlay\"></div>

                            <div class=\"portfolio-item-overlay-actions\">

                                <a class=\"portfolio-item-zoom magnificPopup-gallery\" href=\"_content/portfolio/270x240-2.png\">
                                    <span>+</span>
                                </a>

                                <a class=\"portfolio-item-link\" href=\"portfolio-item.html\">
                                    <span>&gt;</span>
                                </a>

                            </div><!-- end .portfolio-item-overlay-actions -->

                        </div><!-- end .portfolio-item-preview -->

                        <div class=\"portfolio-item-description\">

                            <h5>Hydrocarbures</h5>

                        </div><!-- end .portfolio-item-description -->

                    </div><!-- end .portfolio-item -->

                </div><!-- end .span3 -->
                <div class=\"span3\">

                    <div class=\"portfolio-item\">

                        <div class=\"portfolio-item-preview\">

                            ";
        // line 262
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 270, 1 => 240)));
        // line 263
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("images/btp.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                            <div class=\"portfolio-item-overlay\"></div>

                            <div class=\"portfolio-item-overlay-actions\">

                                <a class=\"portfolio-item-zoom magnificPopup-gallery\" href=\"_content/portfolio/270x240-3.png\">
                                    <span>+</span>
                                </a>

                                <a class=\"portfolio-item-link\" href=\"portfolio-item.html\">
                                    <span>&gt;</span>
                                </a>

                            </div><!-- end .portfolio-item-overlay-actions -->

                        </div><!-- end .portfolio-item-preview -->

                        <div class=\"portfolio-item-description\">

                            <h5>BTP & Immobilier</h5>

                        </div><!-- end .portfolio-item-description -->

                    </div><!-- end .portfolio-item -->

                </div><!-- end .span3 -->
                <div class=\"span3\">

                    <div class=\"portfolio-item\">

                        <div class=\"portfolio-item-preview\">

                            ";
        // line 296
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 270, 1 => 240)));
        // line 297
        echo "                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("images/elevage.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                            <div class=\"portfolio-item-overlay\"></div>

                            <div class=\"portfolio-item-overlay-actions\">

                                <a class=\"portfolio-item-zoom magnificPopup-gallery\" href=\"_content/portfolio/270x240-4.png\">
                                    <span>+</span>
                                </a>

                                <a class=\"portfolio-item-link\" href=\"portfolio-item.html\">
                                    <span>&gt;</span>
                                </a>

                            </div><!-- end .portfolio-item-overlay-actions -->

                        </div><!-- end .portfolio-item-preview -->

                        <div class=\"portfolio-item-description\">

                            <h5>Elevage</h5>

                        </div><!-- end .portfolio-item-description -->

                    </div><!-- end .portfolio-item -->

                </div><!-- end .span3 -->
            </div><!-- end .row -->

        </div><!-- end .fullwidth-section-content -->

    </div><!-- end .fullwidth-section -->

    <div class=\"row\">
        <div class=\"span12\">

            <div class=\"headline\">

                <h2>A Propos de nous </h2>
                <h6>Qui sommes Nous ?</h6>

            </div><!-- end .headline -->

        </div><!-- end .span12 -->
    </div><!-- end .row -->
    <div class=\"row\">
        <div class=\"span3\">

            <p class=\"last\">
                ";
        // line 346
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 270, 1 => 175)));
        // line 347
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("front/_content/about/270x175.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />
            </p>

        </div><!-- end .span3 -->
        <div class=\"span3\">

            <div class=\"headline-2\">

                <h3>Presentation</h3>

            </div><!-- end .headline-2 -->

            <p>Nous sommes une société de vente de produits et services pétroliers dont les compétences sont reconnues à travers tout le Mali et la sous région précisément au nord du Mali.
                Nous évoluons aussi dans l’agriculture, l’Elevages, les bâtiments et travaux publics, commerce général  import-export qualifiante. Nous recherchons des partenaires pouvant nous permettre le développement de projets en Afrique.</p>

        </div><!-- end .span3 -->
        <div class=\"span6\">

            <div class=\"headline-2\">

                <h3>Nos Services</h3>

            </div><!-- end .headline-2 -->

            <div class=\"row\">
                <div class=\"span3\">

                    <ul class=\"square-check\">
                        <li>Commerce General</li>
                        <li>Import Export</li>
                        <li>BTP & Travaux publics</li>
                        <li>Location de voiture</li>
                    </ul>

                </div><!-- end .span3 -->
                <div class=\"span3\">

                    <ul class=\"square-check\">
                        <li>Alimentation</li>
                        <li>Boulangerie</li>
                        <li>Immobilier </li>
                        <li>Elevage </li>
                    </ul>

                </div><!-- end .span3 -->
            </div><!-- end .row -->

        </div><!-- end .span6 -->
    </div><!-- end .row -->
    <div class=\"row\">
        <div class=\"span12\">

            <div class=\"headline\">

                <h3>Rencontrer Notre Equipe</h3>

            </div><!-- end .headline -->

        </div><!-- end .span12 -->
    </div><!-- end .row -->

    <div class=\"row\">
        <div class=\"span3\">

            <div class=\"team-member\">

                <div class=\"team-member-preview\">
                    ";
        // line 414
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 270, 1 => 175)));
        // line 415
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("front/_content/team/270x250-1.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                    <div class=\"team-member-overlay\"></div>

                </div><!-- end .team-member-preview -->

                <h4>Jessica Simpson</h4>
                <h6>general manager</h6>

                <div class=\"social-media\">

                    <a class=\"social-icon facebook-icon\" href=\"#\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>

                    <a class=\"social-icon twitter-icon\" href=\"#\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>

                    <a class=\"social-icon googleplus-icon\" href=\"#\">
                        <i class=\"fa fa-google-plus\"></i>
                    </a>

                </div><!-- end .social-media -->

            </div><!-- end .team-member -->

        </div><!-- end .span3 -->
        <div class=\"span3\">

            <div class=\"team-member\">

                <div class=\"team-member-preview\">

                    ";
        // line 449
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 270, 1 => 175)));
        // line 450
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("front/_content/team/270x250-2.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                    <div class=\"team-member-overlay\"></div>

                </div><!-- end .team-member-preview -->

                <h4>Maria Roberts</h4>
                <h6>support operator</h6>

                <div class=\"social-media\">

                    <a class=\"social-icon facebook-icon\" href=\"#\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>

                    <a class=\"social-icon twitter-icon\" href=\"#\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>

                    <a class=\"social-icon googleplus-icon\" href=\"#\">
                        <i class=\"fa fa-google-plus\"></i>
                    </a>

                </div><!-- end .social-media -->

            </div><!-- end .team-member -->

        </div><!-- end .span3 -->
        <div class=\"span3\">

            <div class=\"team-member\">

                <div class=\"team-member-preview\">

                    ";
        // line 484
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 270, 1 => 175)));
        // line 485
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("front/_content/team/270x250-3.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

                    <div class=\"team-member-overlay\"></div>

                </div><!-- end .team-member-preview -->

                <h4>Kenneth Lovell</h4>
                <h6>marketing specialist</h6>

                <div class=\"social-media\">

                    <a class=\"social-icon facebook-icon\" href=\"#\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>

                    <a class=\"social-icon twitter-icon\" href=\"#\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>

                    <a class=\"social-icon googleplus-icon\" href=\"#\">
                        <i class=\"fa fa-google-plus\"></i>
                    </a>

                </div><!-- end .social-media -->

            </div><!-- end .team-member -->

        </div><!-- end .span3 -->
        <div class=\"span3\">

            <div class=\"team-member\">

                <div class=\"team-member-preview\">
                    ";
        // line 518
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 270, 1 => 175)));
        // line 519
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("front/_content/team/270x250-4.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />


                    <div class=\"team-member-overlay\"></div>

                </div><!-- end .team-member-preview -->

                <h4>Jane Smith</h4>
                <h6>web designer</h6>

                <div class=\"social-media\">

                    <a class=\"social-icon facebook-icon\" href=\"#\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>

                    <a class=\"social-icon twitter-icon\" href=\"#\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>

                    <a class=\"social-icon googleplus-icon\" href=\"#\">
                        <i class=\"fa fa-google-plus\"></i>
                    </a>

                </div><!-- end .social-media -->

            </div><!-- end .team-member -->

        </div><!-- end .span3 -->
    </div><!-- end .row -->
";
        
        $__internal_4e18e54f915400006dea158a4f0e6749494e60ed75fd9cc48de53a5212397953->leave($__internal_4e18e54f915400006dea158a4f0e6749494e60ed75fd9cc48de53a5212397953_prof);

    }

    public function getTemplateName()
    {
        return "SASFrontBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 519,  622 => 518,  585 => 485,  583 => 484,  545 => 450,  543 => 449,  505 => 415,  503 => 414,  432 => 347,  430 => 346,  377 => 297,  375 => 296,  338 => 263,  336 => 262,  299 => 229,  297 => 228,  260 => 195,  258 => 194,  158 => 98,  156 => 97,  103 => 48,  101 => 47,  62 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'SASFrontBundle::layout.html.twig' %}*/
/* */
/* {% block title %} Bienvenue ! {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="fullwidthbanner-container">*/
/*         <div class="fullwidthbanner">*/
/* */
/*             <ul>*/
/*                 <li data-transition="fade">*/
/*                     {% set runtimeConfig = {"thumbnail": {"size": [1920, 650] }} %}*/
/*                     <img src="{{ 'images/banner2.jpg' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                     <div class="caption title sfl"*/
/*                          data-x="130"*/
/*                          data-y="220"*/
/*                          data-speed="1000"*/
/*                          data-start="1000"*/
/*                          data-easing="easeOutExpo">*/
/*                         Produits Petroliers*/
/*                     </div>*/
/* */
/*                     <div class="caption subtitle sfr"*/
/*                          data-x="700"*/
/*                          data-y="290"*/
/*                          data-speed="1000"*/
/*                          data-start="1400"*/
/*                          data-easing="easeOutExpo">*/
/*                         <strong>distribution et commercialisation,<br>*/
/*                             carburant, lubrifiant, butane<br>*/
/*                             et produits chimiques  <br>*/
/*                         </strong>*/
/*                     </div>*/
/* */
/*                     <div class="caption sfb"*/
/*                          data-x="500"*/
/*                          data-y="350"*/
/*                          data-speed="1000"*/
/*                          data-start="2000"*/
/*                          data-easing="easeOutExpo">*/
/*                         <a class="btn btn-large" href="#">En savoir plus</a>*/
/*                     </div>*/
/* */
/*                 </li>*/
/*                 <li data-transition="fade">*/
/* */
/*                     {% set runtimeConfig = {"thumbnail": {"size": [1920, 650] }} %}*/
/*                     <img src="{{ 'images/banner1.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                     <div class="caption title-3 sfl" style="color: green"*/
/*                          data-x="30"*/
/*                          data-y="235"*/
/*                          data-speed="1000"*/
/*                          data-start="1000"*/
/*                          data-easing="easeOutExpo">*/
/*                         IMAGINEZ...<br> NOUS RÉALISONS!*/
/*                     </div>*/
/* */
/*                     <div class="caption bg fade"*/
/*                          data-x="600"*/
/*                          data-y="50"*/
/*                          data-speed="1000"*/
/*                          data-start="1600"*/
/*                          data-easing="easeOutExpo">*/
/*                     </div>*/
/* */
/*                     <div class="caption title-3 fade"*/
/*                          data-x="650"*/
/*                          data-y="190"*/
/*                          data-speed="1000"*/
/*                          data-start="1600"*/
/*                          data-easing="easeOutExpo">*/
/*                         SAS <span class="text-highlight">BTP</span>!*/
/*                     </div>*/
/* */
/*                     <div class="caption subtitle-2 fade"*/
/*                          data-x="650"*/
/*                          data-y="290"*/
/*                          data-speed="1000"*/
/*                          data-start="1600"*/
/*                          data-easing="easeOutExpo">*/
/*                         Batiments, Travaux publics, <br>Terrassement <br>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="caption fade"*/
/*                          data-x="780"*/
/*                          data-y="390"*/
/*                          data-speed="1000"*/
/*                          data-start="1600"*/
/*                          data-easing="easeOutExpo">*/
/*                         <a class="btn btn-large" href="#">En Savoir plus</a>*/
/*                     </div>*/
/* */
/*                 </li>*/
/*                 <li data-transition="fade">*/
/*                     {% set runtimeConfig = {"thumbnail": {"size": [1920, 650] }} %}*/
/*                     <img src="{{ 'images/Banniere_troupeau-2.jpg' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                     <div class="caption letters lfl"*/
/*                          data-x="30"*/
/*                          data-y="235"*/
/*                          data-speed="1000"*/
/*                          data-start="1000"*/
/*                          data-easing="easeOutExpo">*/
/*                         E*/
/*                     </div>*/
/* */
/*                     <div class="caption letters lfl"*/
/*                          data-x="140"*/
/*                          data-y="235"*/
/*                          data-speed="1000"*/
/*                          data-start="1300"*/
/*                          data-easing="easeOutExpo">*/
/*                         L*/
/*                     </div>*/
/* */
/*                     <div class="caption letters lfl"*/
/*                          data-x="275"*/
/*                          data-y="235"*/
/*                          data-speed="1000"*/
/*                          data-start="1600"*/
/*                          data-easing="easeOutExpo">*/
/*                         E*/
/*                     </div>*/
/* */
/*                     <div class="caption letters lfl"*/
/*                          data-x="420"*/
/*                          data-y="235"*/
/*                          data-speed="1000"*/
/*                          data-start="1900"*/
/*                          data-easing="easeOutExpo">*/
/*                         V*/
/*                     </div>*/
/* */
/*                     <div class="caption letters lfl"*/
/*                          data-x="500"*/
/*                          data-y="235"*/
/*                          data-speed="1000"*/
/*                          data-start="2100"*/
/*                          data-easing="easeOutExpo">*/
/*                         A*/
/*                     </div>*/
/* */
/*                     <div class="caption letters lfl"*/
/*                          data-x="600"*/
/*                          data-y="235"*/
/*                          data-speed="1000"*/
/*                          data-start="2400"*/
/*                          data-easing="easeOutExpo">*/
/*                         G*/
/*                     </div>*/
/* */
/*                     <div class="caption letters lfl"*/
/*                          data-x="720"*/
/*                          data-y="235"*/
/*                          data-speed="1000"*/
/*                          data-start="2700"*/
/*                          data-easing="easeOutExpo">*/
/*                         E*/
/*                     </div>*/
/* */
/* */
/* */
/*                 </li>*/
/*             </ul>*/
/* */
/*         </div><!-- end .fullwidthbanner -->*/
/*     </div><!-- end .fullwidthbanner-container -->*/
/* */
/*     <div class="fullwidth-section" id="bg-1">*/
/* */
/*         <div class="fullwidth-section-content">*/
/* */
/*             <div class="row">*/
/*                 <div class="span12">*/
/* */
/*                     <div class="headline">*/
/* */
/*                         <h2>Nos Secteurs d'activites</h2>*/
/*                         <h6>SAS - l'unite dans la diversite</h6>*/
/* */
/*                     </div><!-- end .headline -->*/
/* */
/*                 </div><!-- end .span12 -->*/
/*             </div><!-- end .row -->*/
/* */
/*             <div class="row">*/
/*                 <div class="span3">*/
/* */
/*                     <div class="portfolio-item">*/
/* */
/*                         <div class="portfolio-item-preview">*/
/*                             {% set runtimeConfig = {"thumbnail": {"size": [270, 240] }} %}*/
/*                             <img src="{{ 'images/photoG.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                             <div class="portfolio-item-overlay"></div>*/
/* */
/*                             <div class="portfolio-item-overlay-actions">*/
/* */
/*                                 <a class="portfolio-item-zoom magnificPopup-gallery" href="_content/portfolio/270x240-1.png">*/
/*                                     <span>+</span>*/
/*                                 </a>*/
/* */
/*                                 <a class="portfolio-item-link" href="portfolio-item.html">*/
/*                                     <span>&gt;</span>*/
/*                                 </a>*/
/* */
/*                             </div><!-- end .portfolio-item-overlay-actions -->*/
/* */
/*                         </div><!-- end .portfolio-item-preview -->*/
/* */
/*                         <div class="portfolio-item-description">*/
/* */
/*                             <h5>Commerce & Boulangerie</h5>*/
/* */
/*                         </div><!-- end .portfolio-item-description -->*/
/* */
/*                     </div><!-- end .portfolio-item -->*/
/* */
/*                 </div><!-- end .span3 -->*/
/*                 <div class="span3">*/
/* */
/*                     <div class="portfolio-item">*/
/* */
/*                         <div class="portfolio-item-preview">*/
/* */
/*                             {% set runtimeConfig = {"thumbnail": {"size": [270, 240] }} %}*/
/*                             <img src="{{ 'images/station.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                             <div class="portfolio-item-overlay"></div>*/
/* */
/*                             <div class="portfolio-item-overlay-actions">*/
/* */
/*                                 <a class="portfolio-item-zoom magnificPopup-gallery" href="_content/portfolio/270x240-2.png">*/
/*                                     <span>+</span>*/
/*                                 </a>*/
/* */
/*                                 <a class="portfolio-item-link" href="portfolio-item.html">*/
/*                                     <span>&gt;</span>*/
/*                                 </a>*/
/* */
/*                             </div><!-- end .portfolio-item-overlay-actions -->*/
/* */
/*                         </div><!-- end .portfolio-item-preview -->*/
/* */
/*                         <div class="portfolio-item-description">*/
/* */
/*                             <h5>Hydrocarbures</h5>*/
/* */
/*                         </div><!-- end .portfolio-item-description -->*/
/* */
/*                     </div><!-- end .portfolio-item -->*/
/* */
/*                 </div><!-- end .span3 -->*/
/*                 <div class="span3">*/
/* */
/*                     <div class="portfolio-item">*/
/* */
/*                         <div class="portfolio-item-preview">*/
/* */
/*                             {% set runtimeConfig = {"thumbnail": {"size": [270, 240] }} %}*/
/*                             <img src="{{ 'images/btp.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                             <div class="portfolio-item-overlay"></div>*/
/* */
/*                             <div class="portfolio-item-overlay-actions">*/
/* */
/*                                 <a class="portfolio-item-zoom magnificPopup-gallery" href="_content/portfolio/270x240-3.png">*/
/*                                     <span>+</span>*/
/*                                 </a>*/
/* */
/*                                 <a class="portfolio-item-link" href="portfolio-item.html">*/
/*                                     <span>&gt;</span>*/
/*                                 </a>*/
/* */
/*                             </div><!-- end .portfolio-item-overlay-actions -->*/
/* */
/*                         </div><!-- end .portfolio-item-preview -->*/
/* */
/*                         <div class="portfolio-item-description">*/
/* */
/*                             <h5>BTP & Immobilier</h5>*/
/* */
/*                         </div><!-- end .portfolio-item-description -->*/
/* */
/*                     </div><!-- end .portfolio-item -->*/
/* */
/*                 </div><!-- end .span3 -->*/
/*                 <div class="span3">*/
/* */
/*                     <div class="portfolio-item">*/
/* */
/*                         <div class="portfolio-item-preview">*/
/* */
/*                             {% set runtimeConfig = {"thumbnail": {"size": [270, 240] }} %}*/
/*                             <img src="{{ 'images/elevage.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                             <div class="portfolio-item-overlay"></div>*/
/* */
/*                             <div class="portfolio-item-overlay-actions">*/
/* */
/*                                 <a class="portfolio-item-zoom magnificPopup-gallery" href="_content/portfolio/270x240-4.png">*/
/*                                     <span>+</span>*/
/*                                 </a>*/
/* */
/*                                 <a class="portfolio-item-link" href="portfolio-item.html">*/
/*                                     <span>&gt;</span>*/
/*                                 </a>*/
/* */
/*                             </div><!-- end .portfolio-item-overlay-actions -->*/
/* */
/*                         </div><!-- end .portfolio-item-preview -->*/
/* */
/*                         <div class="portfolio-item-description">*/
/* */
/*                             <h5>Elevage</h5>*/
/* */
/*                         </div><!-- end .portfolio-item-description -->*/
/* */
/*                     </div><!-- end .portfolio-item -->*/
/* */
/*                 </div><!-- end .span3 -->*/
/*             </div><!-- end .row -->*/
/* */
/*         </div><!-- end .fullwidth-section-content -->*/
/* */
/*     </div><!-- end .fullwidth-section -->*/
/* */
/*     <div class="row">*/
/*         <div class="span12">*/
/* */
/*             <div class="headline">*/
/* */
/*                 <h2>A Propos de nous </h2>*/
/*                 <h6>Qui sommes Nous ?</h6>*/
/* */
/*             </div><!-- end .headline -->*/
/* */
/*         </div><!-- end .span12 -->*/
/*     </div><!-- end .row -->*/
/*     <div class="row">*/
/*         <div class="span3">*/
/* */
/*             <p class="last">*/
/*                 {% set runtimeConfig = {"thumbnail": {"size": [270, 175] }} %}*/
/*                 <img src="{{ 'front/_content/about/270x175.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/*             </p>*/
/* */
/*         </div><!-- end .span3 -->*/
/*         <div class="span3">*/
/* */
/*             <div class="headline-2">*/
/* */
/*                 <h3>Presentation</h3>*/
/* */
/*             </div><!-- end .headline-2 -->*/
/* */
/*             <p>Nous sommes une société de vente de produits et services pétroliers dont les compétences sont reconnues à travers tout le Mali et la sous région précisément au nord du Mali.*/
/*                 Nous évoluons aussi dans l’agriculture, l’Elevages, les bâtiments et travaux publics, commerce général  import-export qualifiante. Nous recherchons des partenaires pouvant nous permettre le développement de projets en Afrique.</p>*/
/* */
/*         </div><!-- end .span3 -->*/
/*         <div class="span6">*/
/* */
/*             <div class="headline-2">*/
/* */
/*                 <h3>Nos Services</h3>*/
/* */
/*             </div><!-- end .headline-2 -->*/
/* */
/*             <div class="row">*/
/*                 <div class="span3">*/
/* */
/*                     <ul class="square-check">*/
/*                         <li>Commerce General</li>*/
/*                         <li>Import Export</li>*/
/*                         <li>BTP & Travaux publics</li>*/
/*                         <li>Location de voiture</li>*/
/*                     </ul>*/
/* */
/*                 </div><!-- end .span3 -->*/
/*                 <div class="span3">*/
/* */
/*                     <ul class="square-check">*/
/*                         <li>Alimentation</li>*/
/*                         <li>Boulangerie</li>*/
/*                         <li>Immobilier </li>*/
/*                         <li>Elevage </li>*/
/*                     </ul>*/
/* */
/*                 </div><!-- end .span3 -->*/
/*             </div><!-- end .row -->*/
/* */
/*         </div><!-- end .span6 -->*/
/*     </div><!-- end .row -->*/
/*     <div class="row">*/
/*         <div class="span12">*/
/* */
/*             <div class="headline">*/
/* */
/*                 <h3>Rencontrer Notre Equipe</h3>*/
/* */
/*             </div><!-- end .headline -->*/
/* */
/*         </div><!-- end .span12 -->*/
/*     </div><!-- end .row -->*/
/* */
/*     <div class="row">*/
/*         <div class="span3">*/
/* */
/*             <div class="team-member">*/
/* */
/*                 <div class="team-member-preview">*/
/*                     {% set runtimeConfig = {"thumbnail": {"size": [270, 175] }} %}*/
/*                     <img src="{{ 'front/_content/team/270x250-1.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                     <div class="team-member-overlay"></div>*/
/* */
/*                 </div><!-- end .team-member-preview -->*/
/* */
/*                 <h4>Jessica Simpson</h4>*/
/*                 <h6>general manager</h6>*/
/* */
/*                 <div class="social-media">*/
/* */
/*                     <a class="social-icon facebook-icon" href="#">*/
/*                         <i class="fa fa-facebook"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon twitter-icon" href="#">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon googleplus-icon" href="#">*/
/*                         <i class="fa fa-google-plus"></i>*/
/*                     </a>*/
/* */
/*                 </div><!-- end .social-media -->*/
/* */
/*             </div><!-- end .team-member -->*/
/* */
/*         </div><!-- end .span3 -->*/
/*         <div class="span3">*/
/* */
/*             <div class="team-member">*/
/* */
/*                 <div class="team-member-preview">*/
/* */
/*                     {% set runtimeConfig = {"thumbnail": {"size": [270, 175] }} %}*/
/*                     <img src="{{ 'front/_content/team/270x250-2.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                     <div class="team-member-overlay"></div>*/
/* */
/*                 </div><!-- end .team-member-preview -->*/
/* */
/*                 <h4>Maria Roberts</h4>*/
/*                 <h6>support operator</h6>*/
/* */
/*                 <div class="social-media">*/
/* */
/*                     <a class="social-icon facebook-icon" href="#">*/
/*                         <i class="fa fa-facebook"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon twitter-icon" href="#">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon googleplus-icon" href="#">*/
/*                         <i class="fa fa-google-plus"></i>*/
/*                     </a>*/
/* */
/*                 </div><!-- end .social-media -->*/
/* */
/*             </div><!-- end .team-member -->*/
/* */
/*         </div><!-- end .span3 -->*/
/*         <div class="span3">*/
/* */
/*             <div class="team-member">*/
/* */
/*                 <div class="team-member-preview">*/
/* */
/*                     {% set runtimeConfig = {"thumbnail": {"size": [270, 175] }} %}*/
/*                     <img src="{{ 'front/_content/team/270x250-3.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/*                     <div class="team-member-overlay"></div>*/
/* */
/*                 </div><!-- end .team-member-preview -->*/
/* */
/*                 <h4>Kenneth Lovell</h4>*/
/*                 <h6>marketing specialist</h6>*/
/* */
/*                 <div class="social-media">*/
/* */
/*                     <a class="social-icon facebook-icon" href="#">*/
/*                         <i class="fa fa-facebook"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon twitter-icon" href="#">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon googleplus-icon" href="#">*/
/*                         <i class="fa fa-google-plus"></i>*/
/*                     </a>*/
/* */
/*                 </div><!-- end .social-media -->*/
/* */
/*             </div><!-- end .team-member -->*/
/* */
/*         </div><!-- end .span3 -->*/
/*         <div class="span3">*/
/* */
/*             <div class="team-member">*/
/* */
/*                 <div class="team-member-preview">*/
/*                     {% set runtimeConfig = {"thumbnail": {"size": [270, 175] }} %}*/
/*                     <img src="{{ 'front/_content/team/270x250-4.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/* */
/* */
/*                     <div class="team-member-overlay"></div>*/
/* */
/*                 </div><!-- end .team-member-preview -->*/
/* */
/*                 <h4>Jane Smith</h4>*/
/*                 <h6>web designer</h6>*/
/* */
/*                 <div class="social-media">*/
/* */
/*                     <a class="social-icon facebook-icon" href="#">*/
/*                         <i class="fa fa-facebook"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon twitter-icon" href="#">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon googleplus-icon" href="#">*/
/*                         <i class="fa fa-google-plus"></i>*/
/*                     </a>*/
/* */
/*                 </div><!-- end .social-media -->*/
/* */
/*             </div><!-- end .team-member -->*/
/* */
/*         </div><!-- end .span3 -->*/
/*     </div><!-- end .row -->*/
/* {% endblock %}*/
/* */
/* */
