<?php

/* SASFrontBundle:Front:about.html.twig */
class __TwigTemplate_37d085982493449252186f0f9f75dfd32d379370da29f7bcbb1060e60fa52a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SASFrontBundle::layout.html.twig", "SASFrontBundle:Front:about.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " A Propos de Station Abdoulaye Service  ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"page-header\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/_content/backgrounds/1920x250-1.jpg"), "html", null, true);
        echo ");\">

        <div class=\"row\">
            <div class=\"span12\">

                <h3>Qui Sommes Nous ?</h3>

            </div><!-- end .span12 -->
        </div><!-- end .row -->

    </div><!-- end #page-header -->

    <div class=\"row\">
        <div class=\"span6\">

            <p class=\"last\">
                ";
        // line 22
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 1920, 1 => 650)));
        // line 23
        echo "                <img class=\"responsive-img animate\" data-animation=\"fadeInLeft\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("front/_content/about/570x370.png", "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : null)), "html", null, true);
        echo "\" />
            </p>

        </div><!-- end .span6 -->
        <div class=\"span6\">

            <div class=\"headline-2\">

                <h3>Les Mots du Fondateur</h3>

            </div><!-- end .headline-2 -->

            <p>Depuis 5 ans, notre Groupe s'est développé en apportant sa pierre aux forces économiques de notre territoire d'origine : le Grand Nord Malien.
                Nous avons su conjuguer dynamisme, forte croissance, perfectionnement continu des compétences et de l'expérience des consultants, réactivité et adaptation étroite aux demandes et aux besoins des clients.
                Nous avons essayé d'y mettre notre passion et nos valeurs, au service tant de nos clients que de notre profession.
            </p>

            <div class=\"headline-2\">

                <h3>Why chose our company?</h3>

            </div><!-- end .headline-2 -->

            <div class=\"row\">
                <div class=\"span3\">

                    <ul class=\"square-check\">
                        <li>Lorem ipsum dolor sit</li>
                        <li>Nunc omis unde amet</li>
                        <li>Donec ac risus nunc </li>
                        <li>Aliquam lacus dolor</li>
                    </ul>

                </div><!-- end .span3 -->
                <div class=\"span3\">

                    <ul class=\"square-check\">
                        <li>Quisque erat ut leo</li>
                        <li>Aliquam lacus tortor</li>
                        <li>Nullam cursus unde </li>
                        <li>Lorem ipsum dolor sit </li>
                    </ul>

                </div><!-- end .span3 -->
            </div><!-- end .row -->

        </div><!-- end .span6 -->
    </div><!-- end .row -->

    <br>

    <div class=\"row\">
        <div class=\"span12\">

            <div class=\"headline\">

                <h3>Meet our beautiful team</h3>

            </div><!-- end .headline -->

        </div><!-- end .span12 -->
    </div><!-- end .row -->

    <div class=\"row\">
        <div class=\"span3\">

            <div class=\"team-member\">

                <div class=\"team-member-preview\">

                    <img src=\"_content/team/270x250-1.png\" alt=\"\">

                    <div class=\"team-member-overlay\"></div>

                </div><!-- end .team-member-preview -->

                <h4>Jessica Simpson</h4>
                <h6>general manager</h6>

                <div class=\"social-media\">

                    <a class=\"social-icon facebook-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>

                    <a class=\"social-icon twitter-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>

                    <a class=\"social-icon googleplus-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-google-plus\"></i>
                    </a>

                </div><!-- end .social-media -->

            </div><!-- end .team-member -->

        </div><!-- end .span3 -->
        <div class=\"span3\">

            <div class=\"team-member\">

                <div class=\"team-member-preview\">

                    <img src=\"_content/team/270x250-2.png\" alt=\"\">

                    <div class=\"team-member-overlay\"></div>

                </div><!-- end .team-member-preview -->

                <h4>Maria Roberts</h4>
                <h6>support operator</h6>

                <div class=\"social-media\">

                    <a class=\"social-icon facebook-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>

                    <a class=\"social-icon twitter-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>

                    <a class=\"social-icon googleplus-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-google-plus\"></i>
                    </a>

                </div><!-- end .social-media -->

            </div><!-- end .team-member -->

        </div><!-- end .span3 -->
        <div class=\"span3\">

            <div class=\"team-member\">

                <div class=\"team-member-preview\">

                    <img src=\"_content/team/270x250-3.png\" alt=\"\">

                    <div class=\"team-member-overlay\"></div>

                </div><!-- end .team-member-preview -->

                <h4>Kenneth Lovell</h4>
                <h6>marketing specialist</h6>

                <div class=\"social-media\">

                    <a class=\"social-icon facebook-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>

                    <a class=\"social-icon twitter-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>

                    <a class=\"social-icon googleplus-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-google-plus\"></i>
                    </a>

                </div><!-- end .social-media -->

            </div><!-- end .team-member -->

        </div><!-- end .span3 -->
        <div class=\"span3\">

            <div class=\"team-member\">

                <div class=\"team-member-preview\">

                    <img src=\"_content/team/270x250-4.png\" alt=\"\">

                    <div class=\"team-member-overlay\"></div>

                </div><!-- end .team-member-preview -->

                <h4>Jane Smith</h4>
                <h6>web designer</h6>

                <div class=\"social-media\">

                    <a class=\"social-icon facebook-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>

                    <a class=\"social-icon twitter-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>

                    <a class=\"social-icon googleplus-icon\" href=\"about-us.html#\">
                        <i class=\"fa fa-google-plus\"></i>
                    </a>

                </div><!-- end .social-media -->

            </div><!-- end .team-member -->

        </div><!-- end .span3 -->
    </div><!-- end .row -->

    <div class=\"fullwidth-section parallax\" id=\"bg-5\">

        <div class=\"fullwidth-section-content\">

            <div class=\"row\">
                <div class=\"span12\">

                    <div class=\"testimonial-slider\">

                        <ul class=\"slides\">
                            <li>

                                <div class=\"testimonial fixed\">

                                            <span>
                                                <img src=\"_content/testimonials/140x140-1.png\" alt=\"\">
                                            </span>

                                    <blockquote>

                                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut risus augue. Nunc euismod gravida
                                            ornare. Vestibulum metus mauris, feugiat consequat tincidunt sit amet, mollis non metus. Aliquam diam justo,
                                            volutpat tincidunt sapien id, convallis aliquet metus. Maecenas orci elit, consectetur id turpis nec, rhoncus
                                            sagittis elit. </h4>

                                    </blockquote>

                                    <h4>Roy S. Baggett</h4>
                                    <h6>Diamond Inc.</h6>

                                </div><!-- end .teatimonial -->

                            </li>
                            <li>

                                <div class=\"testimonial fixed\">

                                            <span>
                                                <img src=\"_content/testimonials/140x140-2.png\" alt=\"\">
                                            </span>

                                    <blockquote>

                                        <h4>Proin facilisis nunc quis diam pellentesque porta. Suspendisse molestie, erat at aliquet laoreet, orci tellus
                                            sollicitudin mi, vitae ultrices velit risus at nulla. Nunc lacinia, risus quis maximus hendrerit, elit ex faucibus
                                            urna, at eleifend enim felis sit amet leo. Aenean tortor turpis, rutrum et ornare sagittis, pretium venenatis massa
                                            rutrum efficitur.</h4>

                                    </blockquote>

                                    <h4>Linda M. Carter</h4>
                                    <h6>Crystal Inc.</h6>

                                </div><!-- end .teatimonial -->

                            </li>
                            <li>

                                <div class=\"testimonial fixed\">

                                            <span>
                                                <img src=\"_content/testimonials/140x140-3.png\" alt=\"\">
                                            </span>

                                    <blockquote>

                                        <h4>Duis blandit mauris id augue malesuada tempor. Curabitur arcu sem, pellentesque eget augue at, auctor lacinia justo.
                                            Fusce porta, metus ac convallis accumsan, orci mi condimentum metus, eget ultricies ipsum quam ac nisl. Curabitur in magna
                                            leo. Aenean pretium eget mi in bibendum. Curabitur sagittis dolor nibh, id lacinia nunc pulvinar ac.</h4>

                                    </blockquote>

                                    <h4>Jane K. Smith</h4>
                                    <h6>Mirror Inc.</h6>

                                </div><!-- end .teatimonial -->

                            </li>
                        </ul>

                    </div><!-- end .testimonial-slider -->

                </div><!-- end .spann12 -->
            </div><!-- end .row -->

        </div><!-- end .fullwidth-section-content -->

    </div><!-- end .fullwidth-section -->

    <div class=\"row\">
        <div class=\"span12\">

            <div class=\"headline\">

                <h3>Our capabilities</h3>

            </div><!-- end .headline -->

        </div><!-- end .span12 -->
    </div><!-- end .row -->

    <div class=\"row\">
        <div class=\"span6\">

            <div class=\"headline-2\">

                <h3>Some skills.</h3>

            </div><!-- end .headline-2 -->

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id lorem ut lectus luctus adipiscing. Mauris
                vel nunc nibh. Aliquam quis rutrum ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                cubilia Curae; Nullam a lorem tempor erat ultrices luctus. In metus odio, scelerisque eu posuere a, rutrum eu leo.</p>

            <br>

            <div class=\"fixed\">

                <div class=\"progress-bar-description\">
                    Skills in Photoshop CS6
                    <span style=\"left:83%\">83%</span>
                </div><!-- end .progress-bar-description -->

                <div class=\"progress-bar\">
                        \t<span class=\"progress-bar-outer\" data-width=\"83\">
                            \t<span class=\"progress-bar-inner\"></span>
                            </span>
                </div><!-- end .progress-bar -->

            </div>

            <div class=\"fixed\">

                <div class=\"progress-bar-description\">
                    Skills in Corel Draw v 11 - 15
                    <span style=\"left:92%\">92%</span>
                </div><!-- end .progress-bar-description -->

                <div class=\"progress-bar\">
                        \t<span class=\"progress-bar-outer\" data-width=\"92\">
                            \t<span class=\"progress-bar-inner\"></span>
                            </span>
                </div><!-- end .progress-bar -->

            </div>

            <div class=\"fixed\">

                <div class=\"progress-bar-description\">
                    Skills in 3D Studio Max
                    <span style=\"left:40%\">40%</span>
                </div><!-- end .progress-bar-description -->

                <div class=\"progress-bar\">
                        \t<span class=\"progress-bar-outer\" data-width=\"40\">
                            \t<span class=\"progress-bar-inner\"></span>
                            </span>
                </div><!-- end .progress-bar -->

            </div>

            <br><br>

        </div><!-- end .span6 -->
        <div class=\"span6\">

            <div class=\"accordion\">

                <a class=\"accordion-item\" href=\"about-us.html#\">Lorem ipsum dolor sit</a>

                <div class=\"accordion-item-content\">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mauris quam, scelerisque pellentesque
                        adipiscing at, eleifend et mi. Quisque imperdiet tempus sem. Nam egestas sapien eget elit consequat dapibus
                        proin at. </p>

                </div><!-- end .accordion-item-content -->

                <a class=\"accordion-item\" href=\"about-us.html#\">Donec aptent hendrerit</a>

                <div class=\"accordion-item-content\">

                    <p>Praesent et lectus at dolor blandit iaculis sit amet ac felis. Sed quis justo enim. Ut ullamcorper at
                        sapien hendrerit pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos solor sit.</p>

                </div><!-- end .accordion-item-content -->

                <a class=\"accordion-item\" href=\"about-us.html#\">Quisque arcu interdum</a>

                <div class=\"accordion-item-content\">

                    <p>Nunc ligula velit, semper sed ullamcorper vitae, interdum vel metus. Quisque ultricies ex quis nibh
                        gravida, rhoncus egestas nisl ullamcorper. Vivamus ac egestas arcu. Pellentesque tristique imperdiet ipsum,
                        quis dignissim.</p>

                </div><!-- end .accordion-item-content -->

                <a class=\"accordion-item\" href=\"about-us.html#\">Donec pulvinar ipsum</a>

                <div class=\"accordion-item-content\">

                    <p>Proin vitae tortor eu dui tincidunt volutpat. Morbi lorem est, tristique sit amet mauris quis, interdum
                        lacinia mauris. Aliquam erat volutpat. Pellentesque pretium luctus nisl vitae semper. Donec pellentesque orci
                        et augue sagittis.</p>

                </div><!-- end .accordion-item-content -->

            </div><!-- end .accordion -->

        </div><!-- end .span6 -->
    </div><!-- end .row -->

";
    }

    public function getTemplateName()
    {
        return "SASFrontBundle:Front:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  58 => 22,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'SASFrontBundle::layout.html.twig' %}*/
/* */
/* {% block title %} A Propos de Station Abdoulaye Service  {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div id="page-header" style="background-image:url({{ asset('front/_content/backgrounds/1920x250-1.jpg') }});">*/
/* */
/*         <div class="row">*/
/*             <div class="span12">*/
/* */
/*                 <h3>Qui Sommes Nous ?</h3>*/
/* */
/*             </div><!-- end .span12 -->*/
/*         </div><!-- end .row -->*/
/* */
/*     </div><!-- end #page-header -->*/
/* */
/*     <div class="row">*/
/*         <div class="span6">*/
/* */
/*             <p class="last">*/
/*                 {% set runtimeConfig = {"thumbnail": {"size": [1920, 650] }} %}*/
/*                 <img class="responsive-img animate" data-animation="fadeInLeft" src="{{ 'front/_content/about/570x370.png' | imagine_filter('my_thumb', runtimeConfig) }}" />*/
/*             </p>*/
/* */
/*         </div><!-- end .span6 -->*/
/*         <div class="span6">*/
/* */
/*             <div class="headline-2">*/
/* */
/*                 <h3>Les Mots du Fondateur</h3>*/
/* */
/*             </div><!-- end .headline-2 -->*/
/* */
/*             <p>Depuis 5 ans, notre Groupe s'est développé en apportant sa pierre aux forces économiques de notre territoire d'origine : le Grand Nord Malien.*/
/*                 Nous avons su conjuguer dynamisme, forte croissance, perfectionnement continu des compétences et de l'expérience des consultants, réactivité et adaptation étroite aux demandes et aux besoins des clients.*/
/*                 Nous avons essayé d'y mettre notre passion et nos valeurs, au service tant de nos clients que de notre profession.*/
/*             </p>*/
/* */
/*             <div class="headline-2">*/
/* */
/*                 <h3>Why chose our company?</h3>*/
/* */
/*             </div><!-- end .headline-2 -->*/
/* */
/*             <div class="row">*/
/*                 <div class="span3">*/
/* */
/*                     <ul class="square-check">*/
/*                         <li>Lorem ipsum dolor sit</li>*/
/*                         <li>Nunc omis unde amet</li>*/
/*                         <li>Donec ac risus nunc </li>*/
/*                         <li>Aliquam lacus dolor</li>*/
/*                     </ul>*/
/* */
/*                 </div><!-- end .span3 -->*/
/*                 <div class="span3">*/
/* */
/*                     <ul class="square-check">*/
/*                         <li>Quisque erat ut leo</li>*/
/*                         <li>Aliquam lacus tortor</li>*/
/*                         <li>Nullam cursus unde </li>*/
/*                         <li>Lorem ipsum dolor sit </li>*/
/*                     </ul>*/
/* */
/*                 </div><!-- end .span3 -->*/
/*             </div><!-- end .row -->*/
/* */
/*         </div><!-- end .span6 -->*/
/*     </div><!-- end .row -->*/
/* */
/*     <br>*/
/* */
/*     <div class="row">*/
/*         <div class="span12">*/
/* */
/*             <div class="headline">*/
/* */
/*                 <h3>Meet our beautiful team</h3>*/
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
/* */
/*                     <img src="_content/team/270x250-1.png" alt="">*/
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
/*                     <a class="social-icon facebook-icon" href="about-us.html#">*/
/*                         <i class="fa fa-facebook"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon twitter-icon" href="about-us.html#">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon googleplus-icon" href="about-us.html#">*/
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
/*                     <img src="_content/team/270x250-2.png" alt="">*/
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
/*                     <a class="social-icon facebook-icon" href="about-us.html#">*/
/*                         <i class="fa fa-facebook"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon twitter-icon" href="about-us.html#">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon googleplus-icon" href="about-us.html#">*/
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
/*                     <img src="_content/team/270x250-3.png" alt="">*/
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
/*                     <a class="social-icon facebook-icon" href="about-us.html#">*/
/*                         <i class="fa fa-facebook"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon twitter-icon" href="about-us.html#">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon googleplus-icon" href="about-us.html#">*/
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
/*                     <img src="_content/team/270x250-4.png" alt="">*/
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
/*                     <a class="social-icon facebook-icon" href="about-us.html#">*/
/*                         <i class="fa fa-facebook"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon twitter-icon" href="about-us.html#">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                     </a>*/
/* */
/*                     <a class="social-icon googleplus-icon" href="about-us.html#">*/
/*                         <i class="fa fa-google-plus"></i>*/
/*                     </a>*/
/* */
/*                 </div><!-- end .social-media -->*/
/* */
/*             </div><!-- end .team-member -->*/
/* */
/*         </div><!-- end .span3 -->*/
/*     </div><!-- end .row -->*/
/* */
/*     <div class="fullwidth-section parallax" id="bg-5">*/
/* */
/*         <div class="fullwidth-section-content">*/
/* */
/*             <div class="row">*/
/*                 <div class="span12">*/
/* */
/*                     <div class="testimonial-slider">*/
/* */
/*                         <ul class="slides">*/
/*                             <li>*/
/* */
/*                                 <div class="testimonial fixed">*/
/* */
/*                                             <span>*/
/*                                                 <img src="_content/testimonials/140x140-1.png" alt="">*/
/*                                             </span>*/
/* */
/*                                     <blockquote>*/
/* */
/*                                         <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut risus augue. Nunc euismod gravida*/
/*                                             ornare. Vestibulum metus mauris, feugiat consequat tincidunt sit amet, mollis non metus. Aliquam diam justo,*/
/*                                             volutpat tincidunt sapien id, convallis aliquet metus. Maecenas orci elit, consectetur id turpis nec, rhoncus*/
/*                                             sagittis elit. </h4>*/
/* */
/*                                     </blockquote>*/
/* */
/*                                     <h4>Roy S. Baggett</h4>*/
/*                                     <h6>Diamond Inc.</h6>*/
/* */
/*                                 </div><!-- end .teatimonial -->*/
/* */
/*                             </li>*/
/*                             <li>*/
/* */
/*                                 <div class="testimonial fixed">*/
/* */
/*                                             <span>*/
/*                                                 <img src="_content/testimonials/140x140-2.png" alt="">*/
/*                                             </span>*/
/* */
/*                                     <blockquote>*/
/* */
/*                                         <h4>Proin facilisis nunc quis diam pellentesque porta. Suspendisse molestie, erat at aliquet laoreet, orci tellus*/
/*                                             sollicitudin mi, vitae ultrices velit risus at nulla. Nunc lacinia, risus quis maximus hendrerit, elit ex faucibus*/
/*                                             urna, at eleifend enim felis sit amet leo. Aenean tortor turpis, rutrum et ornare sagittis, pretium venenatis massa*/
/*                                             rutrum efficitur.</h4>*/
/* */
/*                                     </blockquote>*/
/* */
/*                                     <h4>Linda M. Carter</h4>*/
/*                                     <h6>Crystal Inc.</h6>*/
/* */
/*                                 </div><!-- end .teatimonial -->*/
/* */
/*                             </li>*/
/*                             <li>*/
/* */
/*                                 <div class="testimonial fixed">*/
/* */
/*                                             <span>*/
/*                                                 <img src="_content/testimonials/140x140-3.png" alt="">*/
/*                                             </span>*/
/* */
/*                                     <blockquote>*/
/* */
/*                                         <h4>Duis blandit mauris id augue malesuada tempor. Curabitur arcu sem, pellentesque eget augue at, auctor lacinia justo.*/
/*                                             Fusce porta, metus ac convallis accumsan, orci mi condimentum metus, eget ultricies ipsum quam ac nisl. Curabitur in magna*/
/*                                             leo. Aenean pretium eget mi in bibendum. Curabitur sagittis dolor nibh, id lacinia nunc pulvinar ac.</h4>*/
/* */
/*                                     </blockquote>*/
/* */
/*                                     <h4>Jane K. Smith</h4>*/
/*                                     <h6>Mirror Inc.</h6>*/
/* */
/*                                 </div><!-- end .teatimonial -->*/
/* */
/*                             </li>*/
/*                         </ul>*/
/* */
/*                     </div><!-- end .testimonial-slider -->*/
/* */
/*                 </div><!-- end .spann12 -->*/
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
/*                 <h3>Our capabilities</h3>*/
/* */
/*             </div><!-- end .headline -->*/
/* */
/*         </div><!-- end .span12 -->*/
/*     </div><!-- end .row -->*/
/* */
/*     <div class="row">*/
/*         <div class="span6">*/
/* */
/*             <div class="headline-2">*/
/* */
/*                 <h3>Some skills.</h3>*/
/* */
/*             </div><!-- end .headline-2 -->*/
/* */
/*             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id lorem ut lectus luctus adipiscing. Mauris*/
/*                 vel nunc nibh. Aliquam quis rutrum ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere*/
/*                 cubilia Curae; Nullam a lorem tempor erat ultrices luctus. In metus odio, scelerisque eu posuere a, rutrum eu leo.</p>*/
/* */
/*             <br>*/
/* */
/*             <div class="fixed">*/
/* */
/*                 <div class="progress-bar-description">*/
/*                     Skills in Photoshop CS6*/
/*                     <span style="left:83%">83%</span>*/
/*                 </div><!-- end .progress-bar-description -->*/
/* */
/*                 <div class="progress-bar">*/
/*                         	<span class="progress-bar-outer" data-width="83">*/
/*                             	<span class="progress-bar-inner"></span>*/
/*                             </span>*/
/*                 </div><!-- end .progress-bar -->*/
/* */
/*             </div>*/
/* */
/*             <div class="fixed">*/
/* */
/*                 <div class="progress-bar-description">*/
/*                     Skills in Corel Draw v 11 - 15*/
/*                     <span style="left:92%">92%</span>*/
/*                 </div><!-- end .progress-bar-description -->*/
/* */
/*                 <div class="progress-bar">*/
/*                         	<span class="progress-bar-outer" data-width="92">*/
/*                             	<span class="progress-bar-inner"></span>*/
/*                             </span>*/
/*                 </div><!-- end .progress-bar -->*/
/* */
/*             </div>*/
/* */
/*             <div class="fixed">*/
/* */
/*                 <div class="progress-bar-description">*/
/*                     Skills in 3D Studio Max*/
/*                     <span style="left:40%">40%</span>*/
/*                 </div><!-- end .progress-bar-description -->*/
/* */
/*                 <div class="progress-bar">*/
/*                         	<span class="progress-bar-outer" data-width="40">*/
/*                             	<span class="progress-bar-inner"></span>*/
/*                             </span>*/
/*                 </div><!-- end .progress-bar -->*/
/* */
/*             </div>*/
/* */
/*             <br><br>*/
/* */
/*         </div><!-- end .span6 -->*/
/*         <div class="span6">*/
/* */
/*             <div class="accordion">*/
/* */
/*                 <a class="accordion-item" href="about-us.html#">Lorem ipsum dolor sit</a>*/
/* */
/*                 <div class="accordion-item-content">*/
/* */
/*                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mauris quam, scelerisque pellentesque*/
/*                         adipiscing at, eleifend et mi. Quisque imperdiet tempus sem. Nam egestas sapien eget elit consequat dapibus*/
/*                         proin at. </p>*/
/* */
/*                 </div><!-- end .accordion-item-content -->*/
/* */
/*                 <a class="accordion-item" href="about-us.html#">Donec aptent hendrerit</a>*/
/* */
/*                 <div class="accordion-item-content">*/
/* */
/*                     <p>Praesent et lectus at dolor blandit iaculis sit amet ac felis. Sed quis justo enim. Ut ullamcorper at*/
/*                         sapien hendrerit pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per*/
/*                         inceptos himenaeos solor sit.</p>*/
/* */
/*                 </div><!-- end .accordion-item-content -->*/
/* */
/*                 <a class="accordion-item" href="about-us.html#">Quisque arcu interdum</a>*/
/* */
/*                 <div class="accordion-item-content">*/
/* */
/*                     <p>Nunc ligula velit, semper sed ullamcorper vitae, interdum vel metus. Quisque ultricies ex quis nibh*/
/*                         gravida, rhoncus egestas nisl ullamcorper. Vivamus ac egestas arcu. Pellentesque tristique imperdiet ipsum,*/
/*                         quis dignissim.</p>*/
/* */
/*                 </div><!-- end .accordion-item-content -->*/
/* */
/*                 <a class="accordion-item" href="about-us.html#">Donec pulvinar ipsum</a>*/
/* */
/*                 <div class="accordion-item-content">*/
/* */
/*                     <p>Proin vitae tortor eu dui tincidunt volutpat. Morbi lorem est, tristique sit amet mauris quis, interdum*/
/*                         lacinia mauris. Aliquam erat volutpat. Pellentesque pretium luctus nisl vitae semper. Donec pellentesque orci*/
/*                         et augue sagittis.</p>*/
/* */
/*                 </div><!-- end .accordion-item-content -->*/
/* */
/*             </div><!-- end .accordion -->*/
/* */
/*         </div><!-- end .span6 -->*/
/*     </div><!-- end .row -->*/
/* */
/* {% endblock %}*/
