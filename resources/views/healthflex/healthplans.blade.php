@extends('healthflex.master')
@section('title', 'Health Plans')
@section('content')
    <body class="page-template-default page page-id-220 theme-healthflex woocommerce-no-js wpb-js-composer js-comp-ver-6.1 vc_responsive sticky_header ">
    <div class="overflow_wrapper">
        <div class="header "><div class="topbar vcenter transparent">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 col-sm-6 hidden-xs hidden-sm text-left">
                            <div class="top_menu_container">
                                <ul id="menu-top-bar" class="top_menu hover_menu"><li id="menu-item-1774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1774"><a title="FAQ" href="/faq/">FAQ</a></li>
                                    <li id="menu-item-1775" class="hidden menu-item menu-item-type-post_type menu-item-object-page menu-item-1775"><a title="Fees &amp; Insurance" href="/fees-insurance/">Fees &#038; Insurance</a></li>
                                    <li id="menu-item-1773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1773"><a title="Request an Appointment" href="/appointment-booking/">Request an Appointment</a></li>
                                    <li id="menu-item-2027" class="more_demos_top_bar menu-item menu-item-type-custom menu-item-object-custom menu-item-2027"><a title="More Demos" target="_blank" href="/all-demos/">More Demos</a></li>
                                </ul>          </div>
                        </div>

                        <div class="col-md-6 col-sm-6 hidden-xs hidden-sm text-right">
                            <i class="fa fa-ambulance"></i> Emergency Line <strong>(+555) 959-595-959</strong>            </div>


                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- .topbar -->
            <div class="mainbar  color">
                <div class="container">
                    <div class="logo">
                        <a href="/" class="brand">
                            <img src="https://plethorathemes.com/healthflex/wp-content/uploads/2013/06/healthflex_logo_color.png" alt="HealthFlex">
                        </a>
                    </div>      	<a title="" href="#" class="social_links"><i class="fa fa-share-alt"></i></a>
                    <div class="team_social"><a href="#" title="Twitter" target="_self"><i class="fa fa fa-twitter"></i></a><a href="#" title="Facebook" target="_self"><i class="fa fa fa-facebook"></i></a><a href="#" title="Google+" target="_self"><i class="fa fa fa-google-plus"></i></a><a href="#" title="LinkedIn" target="_self"><i class="fa fa fa-linkedin"></i></a><a href="#" title="Skype" target="_self"><i class="fa fa fa-skype"></i></a><a href="#" title="Send Us An Email" target="_self"><i class="fa fa fa-envelope"></i></a></div>
                    <div class="menu_container"><span class="close_menu">&times;</span>
                        <ul id="menu-primary-menu" class="main_menu hover_menu"><li id="menu-item-1789" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1789"><a title="Home" href="/">Home</a></li>
                            <li id="menu-item-1673" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1673 lihasdropdown"><a title="Our Clinic" href="#">Our Clinic  </a>
                                <ul role="menu" class=" menu-dropdown">
                                    <li id="menu-item-1758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1758"><a title="About Us" href="/about-us/">About Us</a></li>
                                    <li id="menu-item-1769" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1769"><a title="Our Staff" href="/our-staff/">Our Staff</a></li>
                                    <li id="menu-item-1759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1759"><a title="Careers" href="/careers/">Careers</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-1760" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1760"><a title="Departments" href="/departments/">Departments</a></li>
                            <li id="menu-item-1771" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1771"><a title="Services" href="/services/">Services</a></li>
                            <li id="menu-item-1674" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1674 lihasdropdown"><a title="Info" href="#">Info  </a>
                                <ul role="menu" class=" menu-dropdown">
                                    <li id="menu-item-1792" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1792"><a title="The Patient&#039;s &amp; Visitor&#039;s Guide" href="/visit-guide/">The Patient&#8217;s &#038; Visitor&#8217;s Guide</a></li>
                                    <li id="menu-item-1767" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767"><a title="Appointment Booking" href="/appointment-booking/">Appointment Booking</a></li>
                                    <li id="menu-item-1762" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-220 current_page_item menu-item-1762 active"><a title="Health Plans" href="/health-plans/">Health Plans</a></li>
                                    <li id="menu-item-1761" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1761"><a title="Health Library A-Z" href="/health-library/">Health Library A-Z</a></li>
                                    <li id="menu-item-1756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1756"><a title="Fees &amp; Insurance" href="/fees-insurance/">Fees &#038; Insurance</a></li>
                                    <li id="menu-item-1768" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768"><a title="FAQ" href="/faq/">FAQ</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-1763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1763"><a title="Blog" href="/blog/">Blog</a></li>
                            <li id="menu-item-1764" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1764"><a title="Contact" href="/contact/">Contact</a></li>
                            <li id="menu-item-1765" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1765"><a title="Shop" href="/shop/">Shop</a></li>
                            <li id="menu-item-1672" class="two-column dropleft menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1672 lihasdropdown"><a title="More" href="#">More  </a>
                                <ul role="menu" class=" menu-dropdown">
                                    <li id="menu-item-1772" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1772"><a title="Free Offer Landing Page" href="/free-checkup-offer/">Free Offer Landing Page</a></li>
                                    <li id="menu-item-1770" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1770"><a title="A Department&#039;s Page" href="/departments/cosmetic-surgery/">A Department&#8217;s Page</a></li>
                                    <li id="menu-item-1790" class="menu-item menu-item-type-post_type menu-item-object-terminology menu-item-1790"><a title="Knowledgebase Article" href="/alzheimers-disease">Knowledgebase Article</a></li>
                                    <li id="menu-item-1793" class="menu-item menu-item-type-post_type menu-item-object-profile menu-item-1793"><a title="A Doctor&#039;s Profile" href="/blog/profile/elias-carson/">A Doctor&#8217;s Profile</a></li>
                                    <li id="menu-item-1766" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766"><a title="Shortcodes" href="/shortcodes/">Shortcodes</a></li>
                                    <li id="menu-item-1675" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1675"><a title="Error 404 page" href="/healthflex/404">Error 404 page</a></li>
                                    <li id="menu-item-1816" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1816"><a title="All Other Demos &lt;span class=&quot;label label-danger&quot;&gt; NEW! &lt;/span&gt;" target="_blank" href="/all-demos/">All Other Demos <span class="label label-danger"> NEW! </span></a></li>
                                    <li id="menu-item-1918" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1918"><a title="Buy this Theme!" target="_blank" href="https://1.envato.market/1VoM9">Buy this Theme!</a></li>
                                    <li id="menu-item-1754" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1754"><a title="Documentation" href="http://doc.plethorathemes.com/healthflex/">Documentation</a></li>
                                    <li id="menu-item-1676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1676"><a title="Support" href="http://plethorathemes.com/support/">Support</a></li>
                                    <li id="menu-item-2044" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2044"><a title="Admin Demo &lt;span class=&quot;label label-danger&quot;&gt; NEW! &lt;/span&gt;" href="/healthflex-admin">Admin Demo <span class="label label-danger"> NEW! </span></a></li>
                                </ul>
                            </li>
                        </ul>        </div>

                    <label class="mobile_collapser"><span>MENU</span></label> <!-- Mobile menu title -->
                </div>
            </div>

        </div>

        <div class="head_panel">
            <div style="background-image: url(https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/family1.jpg)" class="full_width_photo   ">


                <div class="hgroup">

                    <div class="title diagonal-bgcolor-trans   ">
                        <div class="container">
                            <h1>HEALTH PLANS</h1>
                        </div>
                    </div>

                    <div class="subtitle body-bg_section   ">
                        <div class="container">
                            <p>Request a Plan to fit your needs!</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>        <div class="brand-colors"> </div>
        <div class="main foo" data-colorset="foo"><section class="vc_row wpb_row vc_row-fluid no_bottom_padding">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column vc_column_container col-sm-8 margin_bottom_grid text-left">
                            <div class="wpb_wrapper">

                                <div class="wpb_text_column wpb_content_element " >
                                    <div class="wpb_wrapper">
                                        <p>Personalized patient care is what sets Medicus Medical Center apart. When you visit one of our four San Francisco campus locations you can expect to receive world class care. Expert physician specialists and caring clinical staff provide you with an exceptional health care experience. Personalized patient care is what sets Medicus Medical Center apart.</p>

                                    </div>
                                </div>
                                <div class="vc_separator wpb_content_element vc_separator_align_left vc_sep_width_100 vc_sep_pos_align_right vc_sep_color_black vc_separator-has-text" ><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><h4>A plan for every need</h4><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
                                </div>
                                <div class="wpb_text_column wpb_content_element " >
                                    <div class="wpb_wrapper">
                                        <p>Personalized patient care is what sets Medicus Medical Center apart. When you visit one of our four San Francisco campus locations you can expect to receive world class care. Expert physician specialists and caring clinical staff provide you with an exceptional health care experience.</p>

                                    </div>
                                </div>
                                <div class="plethora_button wpb_content_element   text-left ">
                                    <a href="#" debug class=" btn btn-primary with-icon icon-left" title=""  target="_self">

                                        <i class="wmi icon-i-medical-library"></i>
                                        Create your own


                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container col-sm-4 text-left">
                            <div class="wpb_wrapper">
                                <!-- ========================== TEASER BOX ==========================-->
                                <div class="teaser_box wpb_content_element text-center  skincolored_section    with_button    ">

                                    <div class="figure ">


                                        <a href="#" debug title="" target="">


                                            <div class="figure  stretchy_wrapper ratio_16-9" style="background-image:url('https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/help_desk.jpg')"></div>





                                        </a>

                                    </div>



                                    <div class="content text-center boxed  with_button ">

                                        <div class="hgroup">
                                            <h4 class="neutralize_links">
                                                Make it your own!
                                            </h4>
                                            <p>Your personal plan is affordable</p>
                                        </div>



                                        <div class="link centered">
                                            <a href="#"  target="" class="btn btn-xs btn-secondary"><strong>More</strong></a>
                                        </div>

                                    </div>

                                </div>

                                <!-- END======================= TEASER BOX ==========================-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="vc_row wpb_row vc_row-fluid text-center separator_bottom sep_angled_positive_bottom">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column vc_column_container col-sm-4">
                            <div class="wpb_wrapper">
                                <div class="pricing_plan white_section  ">


                                    <div class="stretchy_wrapper ratio_16-9">
                                        <div style="background-image:url('https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/pricing-0021.jpg');" class="pricing_plan_photo"></div>

                                    </div>


                                    <div  class="plan_title secondary_section">
                                        <h3>Single</h3>
                                        <p>ONE MONTHLY CHECKUP</p>
                                    </div>
                                    <div class="the_price skincolored_section">$150<small>/year</small></div>
                                    <div class="the_offerings ">
                                        Affordable<br />
                                        Preventive Care<br />
                                        Diagnostic Tests<br />
                                        Skilled Nursing Care   <br />


                                        <a href="#" class="btn btn-primary with-icon icon-right" title=""  target="_self">

                                            Request Plan

                                            <i class="fa fa-caret-right"></i>

                                        </a>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container col-sm-4">
                            <div class="wpb_wrapper">
                                <div class="pricing_plan white_section  ">


                                    <div class="stretchy_wrapper ratio_16-9">
                                        <div style="background-image:url('https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/pricing-004.jpg');" class="pricing_plan_photo"></div>
                                        <div class="heart beating"><div class="heart-inner"><div class="heart-label"></div></div></div>
                                    </div>


                                    <div  class="plan_title skincolored_section">
                                        <h3>Family</h3>
                                        <p>FOUR MONTHLY CHECKUPS</p>
                                    </div>
                                    <div class="the_price light_section">$250<small>/year</small></div>
                                    <div class="the_offerings ">
                                        Emergency Care<br />
                                        Diagnostic Tests<br />
                                        Prescription Drugs<br />
                                        Habilitation services   <br />


                                        <a href="#" class="btn btn-primary with-icon icon-right" title=""  target="_self">

                                            Request Plan

                                            <i class="fa fa-caret-right"></i>

                                        </a>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container col-sm-4">
                            <div class="wpb_wrapper">
                                <div class="pricing_plan white_section  ">


                                    <div class="stretchy_wrapper ratio_16-9">
                                        <div style="background-image:url('https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/pricing-003.jpg');" class="pricing_plan_photo"></div>

                                    </div>


                                    <div  class="plan_title dark_section">
                                        <h3>Premium</h3>
                                        <p>UNLIMITED CHECKUPS</p>
                                    </div>
                                    <div class="the_price skincolored_section">$350<small>/year</small></div>
                                    <div class="the_offerings ">
                                        Practitioner Visits<br />
                                        Imaging (PET/MRI)<br />
                                        Specialist Visits<br />
                                        Specialty Drugs   <br />


                                        <a href="#" class="btn btn-primary with-icon icon-right" title=""  target="_self">

                                            Request Plan

                                            <i class="fa fa-caret-right"></i>

                                        </a>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section style="background-image: url('https://plethorathemes.com/healthflex/wp-content/uploads/2015/10/blue_left.jpg')" class="vc_row wpb_row vc_row-fluid secondary_section text-center transparent_film vcenter bgimage bg_vcenter">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column vc_column_container col-sm-12">
                            <div class="wpb_wrapper">
                                <div class="section_header subtitle_bottom   fancy text-center">

                                    <h2 style="text-align: center;">Need a Personalized Health Plan?</h2>


                                    <p >Call Now <b>(600) 123-4567</b> and receive Top Quality Healthcare for you and your Family</p>
                                </div><div class="plethora_button wpb_content_element   text-center ">
                                    <a href="http://plethorathemes.com/healthflex/appointment-booking/" debug class=" btn btn-success  " title=""  target="_self">


                                        Free Eval. Appointment


                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="new_comment">
                <div class="container">        <div class="new_comment">
                    </div>
                </div>      </div>

        </div>		<footer class="sep_angled_positive_top separator_top ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6"><!-- ========================== WIDGET ABOUT US ==========================-->

                        <aside id="plethora-aboutus-widget-1" class="widget aboutus-widget">

                            <div class="pl_about_us_widget  ">

                                <p><img src="https://plethorathemes.com/healthflex/wp-content/uploads/2013/06/healthflex_logo_white.png" alt=""  style="max-width:"></p>


                                <p>Premium Wordpress Theme mainly Medical Oriented but so flexible that lets you build various layouts for any "Health & Beauty" related business!</p>


                                <p class='contact_detail'><a href='tel:(+30) 210 1234567'><i class='fa fa-phone'></i></a><span><a href='tel:(+30) 210 1234567'>(+30) 210 1234567</a></span></p>



                                <p class='contact_detail'><a href='mailto:info@plethorathemes.com'><i class='fa fa-envelope'></i></a><span><a href='mailto:info@plethorathemes.com'>info@plethorathemes.com</a></span></p>




                                <p class="contact_detail">
                                    <a href='https://www.google.com/maps/place/79+Folsom+St,+San+Francisco,+CA+94105,+USA/@37.7902642,-122.3929651,17z/data=!3m1!4b1!4m2!3m1!1s0x8085807aad0a9e0b:0x378e593dff7a2ac3?hl=en' target='_blank'>
                                        <i class='fa fa-location-arrow'></i>
                                    </a>
                                    <span><a href='https://www.google.com/maps/place/79+Folsom+St,+San+Francisco,+CA+94105,+USA/@37.7902642,-122.3929651,17z/data=!3m1!4b1!4m2!3m1!1s0x8085807aad0a9e0b:0x378e593dff7a2ac3?hl=en' target='_blank'>79 Folsom Ave, San Francisco, CA 94107</a></span>
                                </p>






                            </div>

                        </aside>

                        <!-- END======================= WIDGET ABOUT US ==========================--></div>
                    <div class="col-sm-6 col-md-3"><aside id="nav_menu-2" class="widget widget_nav_menu"><h4>Quick Links</h4><div class="menu-quick-links-container"><ul id="menu-quick-links" class="menu"><li id="menu-item-1784" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1784"><a href="/services/">All Medical Services</a></li>
                                    <li id="menu-item-1785" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1785"><a href="/appointment-booking/">Appointment Booking</a></li>
                                    <li id="menu-item-1786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1786"><a href="/faq/">FAQ</a></li>
                                    <li id="menu-item-1787" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1787"><a href="/fees-insurance/">Fees &amp; Insurance</a></li>
                                    <li id="menu-item-1788" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1788"><a href="/health-library/">Health Library A-Z</a></li>
                                    <li id="menu-item-1755" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1755"><a href="/shop/">Shop</a></li>
                                    <li id="menu-item-1791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1791"><a href="/free-checkup-offer/">Free Checkup Offer</a></li>
                                </ul></div></aside><!-- ========================== WIDGET ABOUT US ==========================-->

                        <aside id="plethora-aboutus-widget-2" class="widget aboutus-widget">

                            <div class="pl_about_us_widget  ">








                                <p class="social">

                                    <a href='#' target='_blank' title="Twitter"><i class='fa fa-twitter'></i></a>
                                    <a href='#' target='_blank' title="Facebook"><i class='fa fa-facebook'></i></a>
                                    <a href='#' target='_blank' title="Google+"><i class='fa fa-google-plus'></i></a>
                                    <a href='#' target='_blank' title="LinkedIn"><i class='fa fa-linkedin'></i></a>
                                    <a href='#' target='_blank' title="Skype"><i class='fa fa-skype'></i></a>
                                    <a href='#' target='_blank' title="Send Us An Email"><i class='fa fa-envelope'></i></a>
                                </p>



                            </div>

                        </aside>

                        <!-- END======================= WIDGET ABOUT US ==========================--></div>
                    <div class="col-sm-6 col-md-3"><!-- ===================== LATEST NEWS: MUSTACHE ========================-->

                        <aside id="plethora-latestnews-widget-1" class="widget latestnews-widget">

                            <div class="pl_latest_news_widget">
                                <h4>Latest News </h4>
                                <ul class="media-list">

                                    <li class="media">

                                        <a href="/blog/2015/11/23/daily-exercise-is-essential-for-your-health/" class="media-photo" style="background-image:url(' https://plethorathemes.com/healthflex/wp-content/uploads/2015/11/woman_running-150x150.jpg ')"></a>

                                        <h5 class="media-heading">
                                            <a href="/blog/2015/11/23/daily-exercise-is-essential-for-your-health/">Daily Exercise is essential</a>
                                            <small>Nov 23</small>
                                        </h5>
                                        <p>When was the last time you went out for a...</p>
                                    </li>


                                    <li class="media">

                                        <a href="/blog/2015/09/30/medical-advice/" class="media-photo" style="background-image:url(' https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-pills-150x150.jpg ')"></a>

                                        <h5 class="media-heading">
                                            <a href="/blog/2015/09/30/medical-advice/">Medical Advice for all ages and sexes</a>
                                            <small>Sep 30</small>
                                        </h5>
                                        <p>How often does a post start with all these words? Allergy...</p>
                                    </li>


                                    <li class="media">

                                        <a href="/blog/2015/09/30/diabetes-diet-and-food-tips/" class="media-photo" style="background-image:url(' https://plethorathemes.com/healthflex/wp-content/uploads/2015/09/blog-salad-150x150.jpg ')"></a>

                                        <h5 class="media-heading">
                                            <a href="/blog/2015/09/30/diabetes-diet-and-food-tips/">Diabetes Diet and Healthy Food Tips</a>
                                            <small>Sep 30</small>
                                        </h5>
                                        <p>Let&#8217;s talk about what is health and how can this...</p>
                                    </li>

                                </ul>
                            </div>

                        </aside>

                        <!-- END================== LATEST NEWS: MUSTACHE ========================--></div>					</div>
            </div>		</footer>
        <div class="copyright dark_section">
            <div class="dark_section transparent_film">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            Copyright &copy;2016 all rights reserved                           </div>
                        <div class="col-sm-6 col-md-6 text-right">
                            Designed by <a href="http://plethorathemes.com" target="_blank">Plethora Themes</a>                           </div>
                    </div>
                </div>
            </div>
        </div></div><a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a><script type="text/html" id="wpb-modifications"></script>	<script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {"apiSettings":{"root":"https:\/\/plethorathemes.com\/healthflex\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.6'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {"ajax_url":"\/healthflex\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/healthflex\/?wc-ajax=%%endpoint%%"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.9.2'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {"ajax_url":"\/healthflex\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/healthflex\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_7ddcbb30211a49c6daec1afbe3946776","fragment_name":"wc_fragments_7ddcbb30211a49c6daec1afbe3946776","request_timeout":"5000"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.9.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/totop/jquery.ui.totop.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/parallax/parallax.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/assets/js/libs/bootstrap.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/easing/easing.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/wow/wow.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/includes/core/assets/js/libs/conformity/dist/conformity.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/assets/js/libs/particlesjs/particles.min.js?ver=5.3.2'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var themeConfig = {"GENERAL":{"debug":false,"onePagerScrollSpeed":100},"NEWSLETTERS":{"messages":{"successMessage":"SUCCESS","errorMessage":"ERROR","required":"This field is required.","remote":"Please fix this field.","url":"Please enter a valid URL.","date":"Please enter a valid date.","dateISO":"Please enter a valid date ( ISO ).","number":"Please enter a valid number.","digits":"Please enter only digits.","creditcard":"Please enter a valid credit card number.","equalTo":"Please enter the same value again.","name":"Please specify your name","email":{"required":"We need your email address to contact you","email":"Your email address must be in the format of name@domain.com"}}},"PARTICLES":{"enable":true,"color":"#bcbcbc","opacity":0.8,"bgColor":"transparent","bgColorDark":"transparent","colorParallax":"#4D83C9","bgColorParallax":"transparent"}};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/themes/healthflex/assets/js/theme.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-includes/js/wp-embed.min.js?ver=5.3.2'></script>
    <script type='text/javascript' src='https://plethorathemes.com/healthflex/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.1'></script>
    <!-- TEMPLATE PART: /themes/healthflex/page.php --></body>
@endsection